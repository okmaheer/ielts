<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class EmailNotifier
{
    /**
     * Send an email via the configured email API.
     *
     * Usage:
     *   EmailNotifier::send(
     *       to:          'someone@example.com',
     *       subject:     'Hello',
     *       body:        '<p>HTML body</p>',
     *       previewText: 'Short preview shown in inbox',
     *       footerNote:  'Optional footer text',
     *       replyTo:     'reply@example.com',
     *   );
     *
     * @param  string  $to           Recipient email address
     * @param  string  $subject      Email subject line
     * @param  string  $body         HTML body content
     * @param  string  $previewText  Short preview text shown in inbox (optional)
     * @param  string  $footerNote   Footer note appended to the email (optional)
     * @param  string  $replyTo      Reply-to email address (optional)
     */
    public static function send(
        string $to,
        string $subject,
        string $body,
        string $previewText = '',
        string $footerNote  = '',
        string $replyTo     = '',
    ): void {
        $endpoint = env('EMAIL_API_URL') . '/api/email/send';

        Log::info('[EmailNotifier] Attempting to send email', [
            'to'          => $to,
            'subject'     => $subject,
            'replyTo'     => $replyTo ?: null,
            'previewText' => $previewText ?: null,
            'footerNote'  => $footerNote ?: null,
            'endpoint'    => $endpoint,
        ]);

        try {
            $payload = array_filter([
                'to'          => $to,
                'subject'     => $subject,
                'body'        => $body,
                'previewText' => $previewText,
                'footerNote'  => $footerNote,
                'replyTo'     => $replyTo,
            ]);

            $response = Http::timeout(8)
                ->withHeaders([
                    'x-api-key'    => env('EMAIL_API_KEY'),
                    'Content-Type' => 'application/json',
                ])
                ->post($endpoint, $payload);

            if ($response->successful()) {
                Log::info('[EmailNotifier] Email delivered successfully', [
                    'to'          => $to,
                    'subject'     => $subject,
                    'http_status' => $response->status(),
                    'api_response'=> $response->json() ?? $response->body(),
                ]);
            } else {
                Log::warning('[EmailNotifier] Email API returned non-2xx response', [
                    'to'          => $to,
                    'subject'     => $subject,
                    'http_status' => $response->status(),
                    'api_response'=> $response->json() ?? $response->body(),
                ]);
            }

        } catch (\Throwable $e) {
            Log::error('[EmailNotifier] Exception while sending email', [
                'to'        => $to,
                'subject'   => $subject,
                'error'     => $e->getMessage(),
                'exception' => get_class($e),
                'file'      => $e->getFile(),
                'line'      => $e->getLine(),
            ]);
        }
    }
}
