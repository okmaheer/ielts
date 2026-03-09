@extends('layouts.frontend-app')

@section('css')
<style>
    /* ── Reset global card interference ─────────────────────── */
    .checkout-page .card,
    .checkout-page .card:hover,
    .checkout-page .card::after { all: unset; }

    /* ── Page shell ──────────────────────────────────────────── */
    .co-page {
        background: #eef2f7;
        min-height: calc(100vh - 100px);
        padding: 48px 0 80px;
    }

    /* ── Breadcrumb bar ──────────────────────────────────────── */
    .co-breadcrumb {
        max-width: 980px;
        margin: 0 auto 28px;
        padding: 0 16px;
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        color: #6b7280;
    }
    .co-breadcrumb a { color: #17a2b8; text-decoration: none; font-weight: 600; }
    .co-breadcrumb a:hover { color: #0a7a8f; }
    .co-breadcrumb span { color: #d1d5db; }

    /* ── Wrapper ─────────────────────────────────────────────── */
    .co-wrapper {
        max-width: 980px;
        margin: 0 auto;
        padding: 0 16px;
        display: grid;
        grid-template-columns: 420px 1fr;
        gap: 0;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(0,0,0,0.13);
    }

    /* ── Left panel ──────────────────────────────────────────── */
    .co-left {
        background: linear-gradient(160deg, #0a7a8f 0%, #17a2b8 55%, #1bc4dc 100%);
        padding: 52px 40px 48px;
        color: #fff;
        position: relative;
        overflow: hidden;
    }
    /* Decorative circles */
    .co-left::before {
        content: '';
        position: absolute;
        width: 320px; height: 320px;
        border-radius: 50%;
        background: rgba(255,255,255,0.05);
        top: -100px; right: -80px;
    }
    .co-left::after {
        content: '';
        position: absolute;
        width: 200px; height: 200px;
        border-radius: 50%;
        background: rgba(255,255,255,0.04);
        bottom: -60px; left: -50px;
    }
    .co-tag {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(255,255,255,0.14);
        border: 1px solid rgba(255,255,255,0.25);
        border-radius: 100px;
        padding: 5px 14px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        margin-bottom: 24px;
        position: relative;
        z-index: 1;
    }
    .co-tag .dot {
        width: 7px; height: 7px;
        background: #4ade80;
        border-radius: 50%;
        animation: pulse 1.8s infinite;
    }
    @keyframes pulse {
        0%,100% { opacity: 1; transform: scale(1); }
        50%      { opacity: 0.6; transform: scale(1.3); }
    }
    .co-course-name {
        font-size: 22px;
        font-weight: 800;
        line-height: 1.35;
        margin-bottom: 20px;
        position: relative;
        z-index: 1;
    }
    .co-price-block {
        display: flex;
        align-items: flex-end;
        gap: 6px;
        margin-bottom: 6px;
        position: relative;
        z-index: 1;
    }
    .co-price-sym { font-size: 26px; font-weight: 700; opacity: 0.85; line-height: 1.6; }
    .co-price-num { font-size: 64px; font-weight: 900; line-height: 1; letter-spacing: -3px; }
    .co-price-cur { font-size: 14px; font-weight: 600; opacity: 0.65; margin-bottom: 8px; }
    .co-price-note { font-size: 12px; opacity: 0.55; margin-bottom: 32px; position: relative; z-index: 1; }

    .co-divider {
        border: none;
        border-top: 1px solid rgba(255,255,255,0.15);
        margin: 0 0 24px;
    }
    .co-includes-title {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        opacity: 0.55;
        margin-bottom: 16px;
        position: relative; z-index: 1;
    }
    .co-feat {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 13px;
        font-size: 14px;
        font-weight: 500;
        position: relative; z-index: 1;
    }
    .co-feat-icon {
        width: 26px; height: 26px;
        background: rgba(255,255,255,0.15);
        border-radius: 8px;
        display: flex; align-items: center; justify-content: center;
        flex-shrink: 0;
        font-size: 12px;
    }
    .co-guarantee {
        margin-top: 32px;
        display: flex;
        align-items: center;
        gap: 12px;
        background: rgba(255,255,255,0.09);
        border: 1px solid rgba(255,255,255,0.16);
        border-radius: 14px;
        padding: 14px 18px;
        font-size: 13px;
        position: relative; z-index: 1;
    }
    .co-guarantee i { font-size: 22px; color: #fbbf24; flex-shrink: 0; }

    /* ── Right panel ─────────────────────────────────────────── */
    .co-right {
        background: #ffffff;
        padding: 52px 44px 48px;
    }
    .co-form-title {
        font-size: 24px;
        font-weight: 800;
        color: #111827;
        margin-bottom: 4px;
    }
    .co-form-sub {
        font-size: 13px;
        color: #9ca3af;
        margin-bottom: 32px;
    }

    /* Amount bar */
    .co-amount-bar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: linear-gradient(135deg, #f0fdf4, #ecfdf5);
        border: 1.5px solid #bbf7d0;
        border-radius: 12px;
        padding: 16px 20px;
        margin-bottom: 30px;
    }
    .co-amount-bar .co-ab-label { font-size: 13px; color: #374151; font-weight: 500; }
    .co-amount-bar .co-ab-label small { display: block; font-size: 11px; color: #9ca3af; margin-top: 2px; }
    .co-amount-bar .co-ab-val { font-size: 24px; font-weight: 900; color: #15803d; letter-spacing: -0.5px; }

    /* Field groups */
    .co-field { margin-bottom: 20px; }
    .co-field label {
        display: block;
        font-size: 12px;
        font-weight: 700;
        color: #374151;
        letter-spacing: 0.5px;
        text-transform: uppercase;
        margin-bottom: 8px;
    }
    .co-input-wrap { position: relative; }
    .co-input-wrap .ico {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #c4cdd7;
        font-size: 14px;
        pointer-events: none;
        transition: color 0.2s;
    }
    .co-input-wrap input {
        width: 100%;
        padding: 14px 16px 14px 44px;
        border: 1.5px solid #e5e7eb;
        border-radius: 12px;
        font-size: 14px;
        color: #111827;
        background: #f9fafb;
        outline: none;
        transition: border-color 0.2s, background 0.2s, box-shadow 0.2s;
        box-sizing: border-box;
    }
    .co-input-wrap input::placeholder { color: #c4cdd7; }
    .co-input-wrap input:focus {
        border-color: #17a2b8;
        background: #fff;
        box-shadow: 0 0 0 4px rgba(23,162,184,0.1);
    }
    .co-input-wrap input:focus + .ico,
    .co-input-wrap input:focus ~ .ico { color: #17a2b8; }
    .co-input-wrap input.is-invalid { border-color: #ef4444; }
    .co-hint { font-size: 11.5px; color: #9ca3af; margin-top: 6px; }

    /* Pay button */
    .co-pay-btn {
        width: 100%;
        padding: 18px 24px;
        background: linear-gradient(135deg, #17a2b8 0%, #0a7a8f 100%);
        color: #fff;
        border: none;
        border-radius: 14px;
        font-size: 16px;
        font-weight: 800;
        letter-spacing: 0.2px;
        cursor: pointer;
        transition: transform 0.15s, box-shadow 0.15s, opacity 0.2s;
        box-shadow: 0 8px 24px rgba(23,162,184,0.35);
        margin-top: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
    }
    .co-pay-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 12px 32px rgba(23,162,184,0.45);
    }
    .co-pay-btn:active { transform: translateY(0); }
    .co-pay-btn:disabled { opacity: 0.65; cursor: not-allowed; transform: none; box-shadow: none; }

    /* Trust row */
    .co-trust {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 18px;
        margin-top: 20px;
        flex-wrap: wrap;
    }
    .co-trust-item {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 11.5px;
        color: #9ca3af;
        font-weight: 500;
    }
    .co-trust-item i { font-size: 13px; color: #6b7280; }

    /* ── Responsive ──────────────────────────────────────────── */
    @media (max-width: 768px) {
        .co-wrapper {
            grid-template-columns: 1fr;
            border-radius: 16px;
        }
        .co-left  { padding: 36px 28px 32px; }
        .co-right { padding: 36px 28px 40px; }
        .co-price-num { font-size: 48px; }
    }
</style>
@endsection

@section('content')
<div class="co-page checkout-page">

    {{-- Breadcrumb --}}
    <div class="co-breadcrumb">
        <a href="{{ route('frontend.index') }}"><i class="fas fa-home me-1"></i>Home</a>
        <span>/</span>
        <span>Checkout</span>
        <span>/</span>
        <span style="color:#374151;font-weight:600;">{{ $courseData['name'] }}</span>
    </div>

    <div class="co-wrapper">

        {{-- ══ LEFT ══ --}}
        <div class="co-left">
            <div class="co-tag">
                <span class="dot"></span>
                Secure Checkout
            </div>

            <div class="co-course-name">{{ $courseData['name'] }}</div>

            <div class="co-price-block">
                <span class="co-price-num">{{ number_format($courseData['amount'], 0) }}</span>
                <span class="co-price-cur">{{ $currency }}</span>
            </div>
            <div class="co-price-note">One-time payment &nbsp;&bull;&nbsp; No hidden fees</div>

            <hr class="co-divider">

            <div class="co-includes-title">What's included</div>

            @php
                $features = [
                    'complete-preparation' => [
                        ['icon'=>'fa-chalkboard-teacher','text'=>'22 total 1-on-1 sessions'],
                        ['icon'=>'fa-headphones','text'=>'Listening & Reading tips'],
                        ['icon'=>'fa-microphone','text'=>'15 mock speaking tests'],
                        ['icon'=>'fa-pen-fancy','text'=>'Writing task evaluation'],
                        ['icon'=>'fa-infinity','text'=>'Lifetime access to materials'],
                    ],
                    'writing-course' => [
                        ['icon'=>'fa-chalkboard-teacher','text'=>'1-on-1 live sessions'],
                        ['icon'=>'fa-pen-fancy','text'=>'Task 1 & Task 2 evaluation'],
                        ['icon'=>'fa-book','text'=>'Advanced grammar & vocabulary'],
                        ['icon'=>'fa-check-circle','text'=>'Correct format techniques'],
                        ['icon'=>'fa-calendar-alt','text'=>'1 month duration'],
                    ],
                    'speaking-course' => [
                        ['icon'=>'fa-chalkboard-teacher','text'=>'1-on-1 live sessions'],
                        ['icon'=>'fa-microphone','text'=>'2 mock speaking tests daily'],
                        ['icon'=>'fa-comment-dots','text'=>'Fluency improvement'],
                        ['icon'=>'fa-link','text'=>'Cohesive devices & idioms'],
                        ['icon'=>'fa-calendar-alt','text'=>'1 month duration'],
                    ],
                    'computer-based-test' => [
                        ['icon'=>'fa-desktop','text'=>'Computer-based simulation'],
                        ['icon'=>'fa-layer-group','text'=>'28 listening & reading tests'],
                        ['icon'=>'fa-comments','text'=>'Expert feedback'],
                        ['icon'=>'fa-bolt','text'=>'Instant results & band score'],
                        ['icon'=>'fa-clock','text'=>'2 months access'],
                    ],
                    'preparation-material' => [
                        ['icon'=>'fa-book-open','text'=>'Cambridge IELTS books'],
                        ['icon'=>'fa-pen-fancy','text'=>'Speaking & Writing books'],
                        ['icon'=>'fa-star','text'=>'Band 7 model essays'],
                        ['icon'=>'fa-spell-check','text'=>'Grammar & vocabulary notes'],
                        ['icon'=>'fa-bolt','text'=>'Immediate access'],
                    ],
                ];
                $list = $features[(string)$course] ?? [];
            @endphp

            @foreach($list as $feat)
                <div class="co-feat">
                    <div class="co-feat-icon"><i class="fas {{ $feat['icon'] }}"></i></div>
                    {{ $feat['text'] }}
                </div>
            @endforeach

            <div class="co-guarantee">
                <i class="fas fa-award"></i>
                <div>
                    <strong style="font-size:13px;">Expert-Led Courses</strong>
                    <div style="font-size:12px;opacity:0.75;margin-top:2px;">Trusted by 1,000+ IELTS students worldwide</div>
                </div>
            </div>
        </div>

        {{-- ══ RIGHT ══ --}}
        <div class="co-right">
            <div class="co-form-title">Complete Your Order</div>
            <div class="co-form-sub">Fill in your details to proceed to secure payment</div>

            {{-- Amount summary --}}
            <div class="co-amount-bar">
                <div class="co-ab-label">
                    Order Total
                    <small>{{ $courseData['name'] }}</small>
                </div>
                <div class="co-ab-val">{{ number_format($courseData['amount'], 2) }} {{ $currency }}</div>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger mb-4" style="border-radius:12px;font-size:13px;border:none;background:#fef2f2;color:#b91c1c;">
                    <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('payment.process') }}" id="checkout-form" novalidate>
                @csrf
                <input type="hidden" name="course" value="{{ $course }}">

                <div class="co-field">
                    <label>Full Name <span style="color:#ef4444;">*</span></label>
                    <div class="co-input-wrap">
                        <input type="text" name="payer_name"
                            class="@error('payer_name') is-invalid @enderror"
                            placeholder="e.g. Ahmed Khan"
                            value="{{ old('payer_name') }}" required>
                        <i class="fas fa-user ico"></i>
                    </div>
                </div>

                <div class="co-field">
                    <label>Email Address <span style="color:#ef4444;">*</span></label>
                    <div class="co-input-wrap">
                        <input type="email" name="payer_email"
                            class="@error('payer_email') is-invalid @enderror"
                            placeholder="you@example.com"
                            value="{{ old('payer_email') }}" required>
                        <i class="fas fa-envelope ico"></i>
                    </div>
                </div>

                <div class="co-field">
                    <label>Phone Number <span style="color:#ef4444;">*</span></label>
                    <div class="co-input-wrap">
                        <input type="tel" name="payer_phone"
                            id="payer_phone"
                            class="@error('payer_phone') is-invalid @enderror"
                            placeholder="+1234567890"
                            value="{{ old('payer_phone') }}" required>
                        <i class="fas fa-mobile-alt ico"></i>
                    </div>
                    <div class="co-hint"><i class="fas fa-info-circle me-1"></i>Include country code, e.g. +14155552671</div>
                </div>

                <button type="submit" class="co-pay-btn" id="pay-btn">
                    <i class="fas fa-lock"></i>
                    Pay {{ number_format($courseData['amount'], 2) }} {{ $currency }} Securely
                </button>

                <div class="co-trust">
                    <div class="co-trust-item"><i class="fas fa-lock"></i> SSL Encrypted</div>
                    <div class="co-trust-item"><i class="fas fa-shield-alt"></i> Swichnow Secured</div>
                    <div class="co-trust-item"><i class="fas fa-undo"></i> Safe Checkout</div>
                </div>
            </form>
        </div>

    </div>
</div>
@endsection

@section('script')
<script>
document.getElementById('checkout-form').addEventListener('submit', function(e) {
    const phone = document.getElementById('payer_phone').value.trim();
    if (phone.length < 7) {
        e.preventDefault();
        document.getElementById('payer_phone').classList.add('is-invalid');
        document.getElementById('payer_phone').focus();
        return;
    }
    const btn = document.getElementById('pay-btn');
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp; Redirecting to payment...';
    btn.disabled = true;
});
</script>
@endsection
