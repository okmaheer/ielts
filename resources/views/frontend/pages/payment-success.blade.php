@extends('layouts.frontend-app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 text-center">
            <div class="card shadow">
                <div class="card-body p-5">
                    <div class="mb-4">
                        <div class="rounded-circle d-inline-flex align-items-center justify-content-center"
                            style="width:80px;height:80px;background-color:#d4edda;">
                            <i class="fas fa-check-circle fa-3x" style="color:#28a745;"></i>
                        </div>
                    </div>

                    <h2 class="fw-bold mb-2" style="color:#28a745;">Payment Successful!</h2>
                    <p class="text-muted mb-4">Thank you for your purchase. Your payment has been confirmed.</p>

                    @if($transaction)
                        <div class="card bg-light mb-4 text-start">
                            <div class="card-body">
                                <p class="mb-1"><strong>Course:</strong> {{ $transaction->item }}</p>
                                <p class="mb-1"><strong>Amount:</strong> ${{ number_format($transaction->amount, 2) }} USD</p>
                                <p class="mb-1"><strong>Name:</strong> {{ $transaction->payer_name }}</p>
                                <p class="mb-0"><strong>Transaction ID:</strong> <code>{{ $transaction->transaction_id }}</code></p>
                            </div>
                        </div>
                    @elseif($transactionId)
                        <p class="mb-4"><strong>Transaction ID:</strong> <code>{{ $transactionId }}</code></p>
                    @endif

                    <p class="text-muted mb-4" style="font-size:0.9rem;">
                        A confirmation will be sent to your email. Our team will contact you shortly to get you started.
                    </p>

                    <a href="{{ route('frontend.index') }}" class="btn btn-lg text-white fw-bold"
                        style="background-color:#17a2b8;border-radius:8px;">
                        
                        Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
