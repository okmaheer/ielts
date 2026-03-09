<?php

namespace App\Http\Controllers;

use App\Models\PaymentTransaction;
use App\Services\EmailNotifier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PaymentController extends Controller
{
    private array $courses = [
        'complete-preparation' => [
            'name'   => 'IELTS Complete Preparation Course',
            'amount' => 40.00,
        ],
        'writing-course' => [
            'name'   => 'IELTS Writing Course',
            'amount' => 30.00,
        ],
        'speaking-course' => [
            'name'   => 'IELTS Speaking Course',
            'amount' => 30.00,
        ],
        'computer-based-test' => [
            'name'   => 'IELTS Computer Based Practice Test',
            'amount' => 5.00,
        ],
        'preparation-material' => [
            'name'   => 'IELTS Preparation Material',
            'amount' => 5.00,
        ],
    ];

    public function checkout(string $course)
    {
        if (!array_key_exists($course, $this->courses)) {
            abort(404);
        }

        return view('frontend.pages.checkout', [
            'course'     => $course,
            'courseData' => $this->courses[$course],
            'currency'   => env('SWICHNOW_CURRENCY', 'USD'),
        ]);
    }

    public function process(Request $request)
    {
        $request->validate([
            'course'      => 'required|string',
            'payer_name'  => 'required|string|max:255',
            'payer_email' => 'required|email|max:255',
            'payer_phone' => ['required', 'string', 'min:7', 'max:20'],
        ]);

        $courseSlug = $request->input('course');

        if (!array_key_exists($courseSlug, $this->courses)) {
            abort(404);
        }

        $courseData    = $this->courses[$courseSlug];
        $currency      = env('SWICHNOW_CURRENCY', 'USD');
        $amount        = number_format($courseData['amount'], 2, '.', '');
        $transactionId = 'IPP_' . time() . '_' . rand(1000, 9999);

        $checksumString = 'Swich:' . $transactionId . ':' . $courseData['name'] . ':' . $amount;
        $checksum       = hash_hmac('sha256', $checksumString, env('SWICHNOW_SECRET_KEY'), false);

        PaymentTransaction::create([
            'user_id'        => auth()->id(),
            'transaction_id' => $transactionId,
            'amount'         => $courseData['amount'],
            'currency'       => $currency,
            'item'           => $courseData['name'],
            'payer_name'     => $request->input('payer_name'),
            'payer_email'    => $request->input('payer_email'),
            'payer_phone'    => $request->input('payer_phone'),
            'course_slug'    => $courseSlug,
            'payment_status' => 'pending',
        ]);

        $params = [
            'clientId'              => env('SWICHNOW_CLIENT_ID'),
            'customerTransactionId' => $transactionId,
            'item'                  => substr($courseData['name'], 0, 500),
            'amount'                => $amount,
            'channel'               => '0',
            'billReferenceNo'       => $transactionId,
            'description'           => $courseData['name'],
            'PayeeName'             => $request->input('payer_name'),
            'Email'                 => $request->input('payer_email'),
            'MSISDN'                => $request->input('payer_phone'),
            'currency'              => $currency,
            'checksum'              => $checksum,
            'successRedirectUrl'    => route('payment.success'),
            'failRedirectUrl'       => route('payment.fail'),
        ];

        $gatewayUrl = env('SWICHNOW_GATEWAY_URL') . '/?' . http_build_query($params);

        // Notify admin that a new purchase was initiated
        EmailNotifier::send(
            to:          env('ADMIN_EMAIL'),
            subject:     "New Purchase: {$courseData['name']} — {$request->input('payer_name')}",
            body:        $this->buildAdminPendingBody(
                             name:          $request->input('payer_name'),
                             email:         $request->input('payer_email'),
                             phone:         $request->input('payer_phone'),
                             course:        $courseData['name'],
                             amount:        $amount,
                             currency:      $currency,
                             transactionId: $transactionId,
                         ),
            previewText: "{$request->input('payer_name')} is purchasing {$courseData['name']} for {$amount} {$currency}.",
            footerNote:  "Transaction ID: {$transactionId}",
            replyTo:     $request->input('payer_email'),
        );

        // Store transaction ID in session — gateway returns no params on redirect
        session(['pending_transaction_id' => $transactionId]);

        return redirect()->away($gatewayUrl);
    }

    public function success(Request $request)
    {
        Log::info('[PaymentController] Success callback received', [
            'all_params'    => $request->all(),
            'query_string'  => $request->getQueryString(),
        ]);

        $transactionId = $request->input('customerTransactionId')
            ?? $request->input('CustomerTransactionId')
            ?? $request->input('tid')
            ?? session('pending_transaction_id');

        $paymentMethod = $request->input('paymentMethod') ?? $request->input('PaymentMethod');

        Log::info('[PaymentController] Resolved success data', [
            'transaction_id' => $transactionId,
            'payment_method' => $paymentMethod,
        ]);

        // Clear the session now that we've read it
        session()->forget('pending_transaction_id');

        if ($transactionId) {
            $updateData = ['payment_status' => 'success'];
            if ($paymentMethod) {
                $updateData['payment_method'] = $paymentMethod;
            }
            PaymentTransaction::where('transaction_id', $transactionId)->update($updateData);
        }

        $transaction = $transactionId
            ? PaymentTransaction::where('transaction_id', $transactionId)->first()
            : null;

        Log::info('[PaymentController] Transaction lookup result', [
            'transaction_id' => $transactionId,
            'found'          => $transaction ? true : false,
        ]);

        if ($transaction) {
            $methodRow = $paymentMethod
                ? "<tr><td style='padding:10px 14px;color:#6b7280;width:40%;'>Payment Method</td>
                       <td style='padding:10px 14px;color:#111827;font-weight:600;'>{$paymentMethod}</td></tr>"
                : '';

            // Notify admin
            EmailNotifier::send(
                to:          env('ADMIN_EMAIL'),
                subject:     "Payment Received: {$transaction->item} — {$transaction->payer_name}",
                body:        $this->buildStatusBody($transaction, 'success', $methodRow),
                previewText: "{$transaction->payer_name} — {$transaction->item} — Success",
                footerNote:  "Transaction ID: {$transaction->transaction_id}",
                replyTo:     $transaction->payer_email,
            );

            // Notify customer
            EmailNotifier::send(
                to:          $transaction->payer_email,
                subject:     "Your payment was successful — {$transaction->item}",
                body:        $this->buildCustomerSuccessBody($transaction, $methodRow),
                previewText: "Thank you {$transaction->payer_name}! Your purchase of {$transaction->item} is confirmed.",
                footerNote:  "Transaction ID: {$transaction->transaction_id}",
                replyTo:     env('ADMIN_EMAIL'),
            );
        }

        return view('frontend.pages.payment-success', compact('transaction', 'transactionId'));
    }

    public function fail(Request $request)
    {
        Log::info('[PaymentController] Fail callback received', [
            'all_params'   => $request->all(),
            'query_string' => $request->getQueryString(),
        ]);

        $transactionId = $request->input('customerTransactionId')
            ?? $request->input('CustomerTransactionId')
            ?? $request->input('tid')
            ?? session('pending_transaction_id');

        $status = $request->input('status') ?? $request->input('Status') ?? 'failed';

        Log::info('[PaymentController] Resolved fail data', [
            'transaction_id' => $transactionId,
            'status'         => $status,
        ]);

        // Clear the session now that we've read it
        session()->forget('pending_transaction_id');

        if ($transactionId) {
            PaymentTransaction::where('transaction_id', $transactionId)
                ->update(['payment_status' => 'failed']);
        }

        $transaction = $transactionId
            ? PaymentTransaction::where('transaction_id', $transactionId)->first()
            : null;

        Log::info('[PaymentController] Transaction lookup result', [
            'transaction_id' => $transactionId,
            'found'          => $transaction ? true : false,
        ]);

        if ($transaction) {
            // Notify admin
            EmailNotifier::send(
                to:          env('ADMIN_EMAIL'),
                subject:     "Payment Failed: {$transaction->item} — {$transaction->payer_name}",
                body:        $this->buildStatusBody($transaction, 'failed'),
                previewText: "{$transaction->payer_name} — {$transaction->item} — Failed",
                footerNote:  "Transaction ID: {$transaction->transaction_id}",
                replyTo:     $transaction->payer_email,
            );

            // Notify customer
            EmailNotifier::send(
                to:          $transaction->payer_email,
                subject:     "Your payment was not completed — {$transaction->item}",
                body:        $this->buildCustomerFailBody($transaction),
                previewText: "Hi {$transaction->payer_name}, unfortunately your payment could not be processed.",
                footerNote:  "Transaction ID: {$transaction->transaction_id}",
                replyTo:     env('ADMIN_EMAIL'),
            );
        }

        return view('frontend.pages.payment-fail', compact('transactionId', 'status'));
    }

    // ────────────────────────────────────────────────────────────────
    // Email body builders
    // ────────────────────────────────────────────────────────────────

    private function buildAdminPendingBody(
        string $name, string $email, string $phone,
        string $course, string $amount, string $currency, string $transactionId
    ): string {
        return "
            <table style='width:100%;border-collapse:collapse;font-family:sans-serif;font-size:14px;'>
                <tr><td colspan='2' style='background:#17a2b8;color:#fff;padding:16px 20px;font-size:16px;font-weight:700;border-radius:6px 6px 0 0;'>
                    New Course Purchase Initiated
                </td></tr>
                <tr style='background:#f8fafc;'>
                    <td style='padding:12px 20px;color:#6b7280;width:38%;'>Name</td>
                    <td style='padding:12px 20px;color:#111827;font-weight:600;'>{$name}</td>
                </tr>
                <tr>
                    <td style='padding:12px 20px;color:#6b7280;'>Email</td>
                    <td style='padding:12px 20px;color:#111827;font-weight:600;'>{$email}</td>
                </tr>
                <tr style='background:#f8fafc;'>
                    <td style='padding:12px 20px;color:#6b7280;'>Phone</td>
                    <td style='padding:12px 20px;color:#111827;font-weight:600;'>{$phone}</td>
                </tr>
                <tr>
                    <td style='padding:12px 20px;color:#6b7280;'>Course</td>
                    <td style='padding:12px 20px;color:#111827;font-weight:600;'>{$course}</td>
                </tr>
                <tr style='background:#f8fafc;'>
                    <td style='padding:12px 20px;color:#6b7280;'>Amount</td>
                    <td style='padding:12px 20px;color:#17a2b8;font-weight:700;font-size:15px;'>{$amount} {$currency}</td>
                </tr>
                <tr>
                    <td style='padding:12px 20px;color:#6b7280;'>Transaction ID</td>
                    <td style='padding:12px 20px;color:#374151;font-family:monospace;'>{$transactionId}</td>
                </tr>
                <tr>
                    <td colspan='2' style='padding:12px 20px;color:#9ca3af;font-size:12px;border-top:1px solid #e5e7eb;'>
                        Status: <strong>Pending</strong> — awaiting payment gateway confirmation.
                    </td>
                </tr>
            </table>
        ";
    }

    private function buildStatusBody(PaymentTransaction $transaction, string $status, string $methodRow = ''): string
    {
        $isSuccess   = $status === 'success';
        $statusLabel = $isSuccess ? 'Payment Successful' : 'Payment Failed';
        $statusColor = $isSuccess ? '#16a34a' : '#dc2626';
        $statusBg    = $isSuccess ? '#f0fdf4' : '#fef2f2';

        return "
            <table style='width:100%;border-collapse:collapse;font-family:sans-serif;font-size:14px;'>
                <tr><td colspan='2' style='background:{$statusColor};color:#fff;padding:16px 20px;font-size:16px;font-weight:700;border-radius:6px 6px 0 0;'>
                    {$statusLabel}
                </td></tr>
                <tr style='background:{$statusBg};'>
                    <td colspan='2' style='padding:10px 20px;font-weight:700;color:{$statusColor};font-size:13px;'>
                        Transaction: {$transaction->transaction_id}
                    </td>
                </tr>
                <tr style='background:#f8fafc;'>
                    <td style='padding:12px 20px;color:#6b7280;width:38%;'>Name</td>
                    <td style='padding:12px 20px;color:#111827;font-weight:600;'>{$transaction->payer_name}</td>
                </tr>
                <tr>
                    <td style='padding:12px 20px;color:#6b7280;'>Email</td>
                    <td style='padding:12px 20px;color:#111827;font-weight:600;'>{$transaction->payer_email}</td>
                </tr>
                <tr style='background:#f8fafc;'>
                    <td style='padding:12px 20px;color:#6b7280;'>Phone</td>
                    <td style='padding:12px 20px;color:#111827;font-weight:600;'>{$transaction->payer_phone}</td>
                </tr>
                <tr>
                    <td style='padding:12px 20px;color:#6b7280;'>Course</td>
                    <td style='padding:12px 20px;color:#111827;font-weight:600;'>{$transaction->item}</td>
                </tr>
                <tr style='background:#f8fafc;'>
                    <td style='padding:12px 20px;color:#6b7280;'>Amount</td>
                    <td style='padding:12px 20px;color:{$statusColor};font-weight:700;font-size:15px;'>{$transaction->amount} {$transaction->currency}</td>
                </tr>
                {$methodRow}
                <tr>
                    <td colspan='2' style='padding:12px 20px;color:#9ca3af;font-size:12px;border-top:1px solid #e5e7eb;'>
                        Status: <strong style='color:{$statusColor};'>" . ucfirst($status) . "</strong>
                    </td>
                </tr>
            </table>
        ";
    }

    private function buildCustomerSuccessBody(PaymentTransaction $transaction, string $methodRow = ''): string
    {
        $adminEmail = env('ADMIN_EMAIL');
        $waNumber   = env('WHATSAPP_NUMBER');
        $waUrl      = "https://wa.me/{$waNumber}";

        return "
            <table style='width:100%;border-collapse:collapse;font-family:sans-serif;font-size:14px;'>
                <tr><td style='background:#16a34a;color:#fff;padding:16px 20px;font-size:16px;font-weight:700;border-radius:6px 6px 0 0;'>
                    Payment Confirmed
                </td></tr>
                <tr><td style='padding:20px;color:#374151;'>
                    Hi <strong>{$transaction->payer_name}</strong>,<br><br>
                    Your payment for <strong>{$transaction->item}</strong> was successful.
                    Our team will get in touch with you shortly to get you started.<br><br>
                    <table style='width:100%;border-collapse:collapse;'>
                        <tr style='background:#f8fafc;'>
                            <td style='padding:10px 14px;color:#6b7280;width:40%;'>Course</td>
                            <td style='padding:10px 14px;color:#111827;font-weight:600;'>{$transaction->item}</td>
                        </tr>
                        <tr>
                            <td style='padding:10px 14px;color:#6b7280;'>Amount Paid</td>
                            <td style='padding:10px 14px;color:#16a34a;font-weight:700;'>{$transaction->amount} {$transaction->currency}</td>
                        </tr>
                        {$methodRow}
                        <tr style='background:#f8fafc;'>
                            <td style='padding:10px 14px;color:#6b7280;'>Transaction ID</td>
                            <td style='padding:10px 14px;color:#374151;font-family:monospace;font-size:12px;'>{$transaction->transaction_id}</td>
                        </tr>
                    </table>
                    <br>
                    <a href='{$waUrl}' style='display:inline-flex;align-items:center;gap:8px;background:#25d366;color:#fff;text-decoration:none;padding:12px 22px;border-radius:8px;font-weight:700;font-size:14px;'>
                        <img src='https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg' width='18' height='18' style='vertical-align:middle;'>
                        Chat with us on WhatsApp
                    </a>
                </td></tr>
                <tr><td style='padding:12px 20px;color:#9ca3af;font-size:12px;border-top:1px solid #e5e7eb;'>
                    If you have any questions, reply to this email, contact us at {$adminEmail},
                    or reach us directly on WhatsApp: <a href='{$waUrl}' style='color:#25d366;font-weight:600;'>+{$waNumber}</a>
                </td></tr>
            </table>
        ";
    }

    private function buildCustomerFailBody(PaymentTransaction $transaction): string
    {
        $adminEmail = env('ADMIN_EMAIL');
        $waNumber   = env('WHATSAPP_NUMBER');
        $waUrl      = "https://wa.me/{$waNumber}";

        return "
            <table style='width:100%;border-collapse:collapse;font-family:sans-serif;font-size:14px;'>
                <tr><td style='background:#dc2626;color:#fff;padding:16px 20px;font-size:16px;font-weight:700;border-radius:6px 6px 0 0;'>
                    Payment Not Completed
                </td></tr>
                <tr><td style='padding:20px;color:#374151;'>
                    Hi <strong>{$transaction->payer_name}</strong>,<br><br>
                    Unfortunately your payment for <strong>{$transaction->item}</strong> could not be processed.
                    Please try again or contact us if the issue persists.<br><br>
                    <table style='width:100%;border-collapse:collapse;'>
                        <tr style='background:#f8fafc;'>
                            <td style='padding:10px 14px;color:#6b7280;width:40%;'>Course</td>
                            <td style='padding:10px 14px;color:#111827;font-weight:600;'>{$transaction->item}</td>
                        </tr>
                        <tr>
                            <td style='padding:10px 14px;color:#6b7280;'>Amount</td>
                            <td style='padding:10px 14px;color:#dc2626;font-weight:700;'>{$transaction->amount} {$transaction->currency}</td>
                        </tr>
                        <tr style='background:#f8fafc;'>
                            <td style='padding:10px 14px;color:#6b7280;'>Transaction ID</td>
                            <td style='padding:10px 14px;color:#374151;font-family:monospace;font-size:12px;'>{$transaction->transaction_id}</td>
                        </tr>
                    </table>
                    <br>
                    <a href='{$waUrl}' style='display:inline-flex;align-items:center;gap:8px;background:#25d366;color:#fff;text-decoration:none;padding:12px 22px;border-radius:8px;font-weight:700;font-size:14px;'>
                        <img src='https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg' width='18' height='18' style='vertical-align:middle;'>
                        Contact us on WhatsApp
                    </a>
                </td></tr>
                <tr><td style='padding:12px 20px;color:#9ca3af;font-size:12px;border-top:1px solid #e5e7eb;'>
                    Need help? Reply to this email, contact us at {$adminEmail},
                    or reach us directly on WhatsApp: <a href='{$waUrl}' style='color:#25d366;font-weight:600;'>+{$waNumber}</a>
                </td></tr>
            </table>
        ";
    }
}
