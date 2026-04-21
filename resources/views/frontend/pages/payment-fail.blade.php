@extends('layouts.frontend-app')

@section('css')
<style>
    .fail-card.card,
    .fail-card.card:hover,
    .fail-card.card::after { all: unset; }
    .fail-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 8px 32px rgba(0,0,0,0.1);
        overflow: hidden;
    }
    @media (max-width: 480px) {
        .fail-card .card-body { padding: 28px 20px !important; }
        .fail-card h2 { font-size: 1.4rem; }
        .fail-btn-row { display: flex; flex-direction: column; gap: 10px; align-items: center; }
        .fail-btn-row .btn { width: 100%; margin: 0 !important; }
    }
</style>
@endsection

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8 col-11 text-center">
            <div class="card shadow fail-card">
                <div class="card-body p-5">
                    <div class="mb-4">
                        <div class="rounded-circle d-inline-flex align-items-center justify-content-center"
                            style="width:80px;height:80px;background-color:#f8d7da;">
                            <i class="fas fa-times-circle fa-3x" style="color:#dc3545;"></i>
                        </div>
                    </div>

                    <h2 class="fw-bold mb-2" style="color:#dc3545;">Payment Failed</h2>
                    <p class="text-muted mb-4">Your payment could not be processed. Please try again.</p>

                    @if($transactionId)
                        <p class="mb-4 text-muted" style="font-size:0.9rem;">
                            <strong>Transaction ID:</strong> <code>{{ $transactionId }}</code>
                        </p>
                    @endif

                    <p class="text-muted mb-4" style="font-size:0.9rem;">
                        If you were charged, please contact us at
                        <a href="mailto:info@ieltsprepandpractice.com">info@ieltsprepandpractice.com</a>
                        with your transaction ID.
                    </p>

                    <div class="fail-btn-row">
                    <a href="{{ route('frontend.index') }}" class="btn btn-lg text-white fw-bold"
                        style="background-color:#17a2b8;border-radius:8px;">
                        Back to Home
                    </a>
                    <a href="javascript:history.back()" class="btn btn-lg btn-outline-secondary fw-bold"
                        style="border-radius:8px;">
                        Try Again
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
