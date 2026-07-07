<?php

namespace App\Http\Controllers;

use App\Models\PaymentTransaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request)
    {
        $query = PaymentTransaction::latest();

        if ($request->filled('status')) {
            $query->where('payment_status', $request->status);
        }

        if ($request->boolean('unfulfilled')) {
            $query->whereIn('payment_status', ['success', 'completed'])->whereNull('fulfilled_at');
        }

        if ($request->filled('search')) {
            $s = $request->search;
            $query->where(function ($q) use ($s) {
                $q->where('payer_name',      'like', "%{$s}%")
                  ->orWhere('payer_email',   'like', "%{$s}%")
                  ->orWhere('transaction_id','like', "%{$s}%")
                  ->orWhere('item',          'like', "%{$s}%");
            });
        }

        $transactions = $query->paginate(20)->withQueryString();

        $counts = [
            'all'         => PaymentTransaction::count(),
            'pending'     => PaymentTransaction::where('payment_status', 'pending')->count(),
            'success'     => PaymentTransaction::where('payment_status', 'success')->count(),
            'failed'      => PaymentTransaction::where('payment_status', 'failed')->count(),
            'unfulfilled' => PaymentTransaction::whereIn('payment_status', ['success', 'completed'])
                ->whereNull('fulfilled_at')
                ->count(),
        ];

        return view('admin.transactions.index', compact('transactions', 'counts'));
    }

    public function markFulfilled(PaymentTransaction $transaction)
    {
        $transaction->update(['fulfilled_at' => now()]);

        return redirect()->route('admin.transactions.index')
            ->with('success', "Marked {$transaction->payer_name}'s payment as fulfilled.");
    }
}
