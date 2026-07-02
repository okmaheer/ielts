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

    /* Country code selector */
    .co-country-code-wrap {
        display: flex;
        gap: 8px;
        align-items: flex-start;
    }
    .co-country-select {
        min-width: 110px;
        padding: 14px 12px;
        border: 1.5px solid #e5e7eb;
        border-radius: 12px;
        font-size: 14px;
        color: #111827;
        background: #f9fafb;
        outline: none;
        transition: border-color 0.2s, background 0.2s, box-shadow 0.2s;
        box-sizing: border-box;
        cursor: pointer;
        font-weight: 500;
    }
    .co-country-select:focus {
        border-color: #17a2b8;
        background: #fff;
        box-shadow: 0 0 0 4px rgba(23,162,184,0.1);
    }
    .co-country-select:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }
    .co-phone-input-wrap {
        flex: 1;
        position: relative;
    }
    .co-phone-input-wrap .ico {
        position: absolute;
        left: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #c4cdd7;
        font-size: 14px;
        pointer-events: none;
        transition: color 0.2s;
    }
    .co-phone-input-wrap input {
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
    .co-phone-input-wrap input::placeholder { color: #c4cdd7; }
    .co-phone-input-wrap input:focus {
        border-color: #17a2b8;
        background: #fff;
        box-shadow: 0 0 0 4px rgba(23,162,184,0.1);
    }
    .co-phone-input-wrap input:focus + .ico,
    .co-phone-input-wrap input:focus ~ .ico { color: #17a2b8; }
    .co-phone-input-wrap input.is-invalid { border-color: #ef4444; }

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
        .co-page { padding: 24px 0 48px; }
        .co-wrapper {
            grid-template-columns: 1fr;
            border-radius: 16px;
        }
        .co-left  { padding: 32px 24px 28px; }
        .co-right { padding: 32px 24px 36px; }
        .co-price-num { font-size: 48px; }
    }

    /* ── Page H1 intro section ──────────────────────────────── */
    .co-intro {
        max-width: 980px;
        margin: 0 auto 36px;
        padding: 0 16px;
    }
    .co-intro-box {
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 8px 40px rgba(0,0,0,0.09);
        overflow: hidden;
        position: relative;
    }
    .co-intro-strip {
        height: 5px;
        background: linear-gradient(90deg, #0a7a8f 0%, #17a2b8 50%, #1bc4dc 100%);
    }
    .co-intro-inner {
        padding: 36px 44px 32px;
        position: relative;
    }
    /* Decorative bg circle */
    .co-intro-inner::after {
        content: '';
        position: absolute;
        width: 260px; height: 260px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(23,162,184,0.06) 0%, transparent 70%);
        top: -80px; right: -60px;
        pointer-events: none;
    }
    .co-intro-badge {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        background: #f0fafb;
        border: 1px solid rgba(23,162,184,0.22);
        color: #0a7a8f;
        border-radius: 100px;
        padding: 6px 16px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 18px;
    }
    .co-intro-badge i { font-size: 12px; color: #17a2b8; }
    .co-intro-inner h1 {
        font-size: 26px;
        font-weight: 800;
        color: #111827;
        margin-bottom: 14px;
        line-height: 1.35;
        position: relative; z-index: 1;
    }
    .co-intro-inner p {
        font-size: 15px;
        color: #4b5563;
        line-height: 1.8;
        max-width: 840px;
        margin: 0 0 28px;
        position: relative; z-index: 1;
    }
    .co-intro-footer {
        display: flex;
        align-items: center;
        gap: 28px;
        flex-wrap: wrap;
        border-top: 1px solid #f0f4f8;
        padding-top: 20px;
        position: relative; z-index: 1;
    }
    .co-intro-stat {
        display: flex;
        align-items: center;
        gap: 7px;
        font-size: 13px;
        color: #6b7280;
        font-weight: 500;
    }
    .co-intro-stat i { color: #17a2b8; font-size: 14px; }
    @media (max-width: 768px) {
        .co-intro-inner { padding: 28px 24px 24px; }
        .co-intro-inner h1 { font-size: 21px; }
        .co-intro-inner p  { font-size: 14px; }
        .co-intro-footer { gap: 16px; }
        .co-intro-stat { font-size: 12px; }
    }
    @media (max-width: 480px) {
        .co-intro-inner { padding: 22px 16px 20px; }
        .co-intro-inner h1 { font-size: 18px; }
    }

    /* ── Recently Purchased ─────────────────────────────────── */
    .co-recent {
        max-width: 980px;
        margin: 48px auto 0;
        padding: 0 16px 40px;
    }
    .co-recent-heading {
        font-size: 26px;
        font-weight: 800;
        color: #111827;
        margin-bottom: 12px;
        text-align: center;
    }
    .co-recent-desc {
        font-size: 14px;
        color: #6b7280;
        line-height: 1.7;
        text-align: center;
        max-width: 720px;
        margin: 0 auto 28px;
    }
    .co-recent-list {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
    }
    @media (max-width: 700px) {
        .co-recent-list { grid-template-columns: 1fr; }
    }
    .co-recent-card {
        background: #fff;
        border-radius: 16px;
        padding: 20px 18px;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 10px;
        box-shadow: 0 4px 18px rgba(0,0,0,0.07);
        border: 1px solid #f0f4f8;
        transition: transform .18s ease, box-shadow .18s ease;
    }
    .co-recent-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 28px rgba(23,162,184,0.13);
    }
    .co-recent-avatar {
        width: 64px;
        height: 64px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        overflow: hidden;
    }
    .co-recent-name {
        font-size: 15px;
        font-weight: 700;
        color: #111827;
    }
    .co-recent-date {
        font-size: 12px;
        color: #9ca3af;
    }
    .co-recent-course {
        font-size: 12px;
        color: #17a2b8;
        font-weight: 600;
    }

    @media (max-width: 480px) {
        .co-page { padding: 12px 0 32px; }
        .co-breadcrumb { font-size: 12px; padding: 0 4px; }
        .co-wrapper { padding: 0 8px; border-radius: 14px; }
        .co-left  { padding: 24px 16px 20px; }
        .co-right { padding: 24px 16px 28px; }
        .co-price-num { font-size: 38px; letter-spacing: -2px; }
        .co-price-sym { font-size: 20px; }
        .co-course-name { font-size: 18px; }
        .co-form-title { font-size: 20px; }
        .co-amount-bar {
            flex-direction: column;
            align-items: flex-start;
            gap: 6px;
            padding: 14px 16px;
        }
        .co-amount-bar .co-ab-val { font-size: 20px; }
        .co-country-code-wrap { flex-wrap: nowrap; gap: 6px; }
        .co-country-select {
            min-width: 0;
            width: 90px;
            flex-shrink: 0;
            font-size: 13px;
            padding: 12px 6px;
        }
        .co-phone-input-wrap { min-width: 0; }
        .co-phone-input-wrap input { font-size: 13px; padding: 12px 12px 12px 38px; }
        .co-input-wrap input { font-size: 13px; padding: 12px 12px 12px 38px; }
        .co-pay-btn { font-size: 14px; padding: 15px 16px; }
        .co-trust { gap: 8px; }
        .co-trust-item { font-size: 10.5px; }
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

    {{-- Per-course H1 intro --}}
    <div class="co-intro">
        <div class="co-intro-box">
            <div class="co-intro-strip"></div>
            <div class="co-intro-inner">
                <div class="co-intro-badge">
                    <i class="fas fa-award"></i>
                    Expert-Led &nbsp;·&nbsp; Trusted by 1,000+ Students
                </div>
                <h1>{{ $pageH1 }}</h1>
                <p>{{ $pageDesc }}</p>
                <div class="co-intro-footer">
                    <div class="co-intro-stat"><i class="fas fa-user-check"></i> Experienced IELTS Tutors</div>
                    <div class="co-intro-stat"><i class="fas fa-shield-alt"></i> Secure Payment via Swichnow</div>
                    <div class="co-intro-stat"><i class="fas fa-bolt"></i> Instant Access After Purchase</div>
                    <div class="co-intro-stat"><i class="fas fa-headset"></i> Ongoing Support Included</div>
                </div>
            </div>
        </div>
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
                        ['icon'=>'fa-desktop','text'=>'Computer based simulation'],
                        ['icon'=>'fa-book','text'=>'30 Listening and reading tests'],
                        ['icon'=>'fa-pen-fancy','text'=>'28 Academic Writing Tests & 30 General Training Writing Tests'],
                        ['icon'=>'fa-chart-line','text'=>'Detailed band score breakdown'],
                        ['icon'=>'fa-user-tie','text'=>'Expert review access'],
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
                    <div class="co-country-code-wrap">
                        <select name="country_code" id="country_code" class="co-country-select" required>
                            <option value="">Code</option>
                            <option value="+93">🇦🇫 +93 Afghanistan</option>
                            <option value="+355">🇦🇱 +355 Albania</option>
                            <option value="+213">🇩🇿 +213 Algeria</option>
                            <option value="+376">🇦🇩 +376 Andorra</option>
                            <option value="+244">🇦🇴 +244 Angola</option>
                            <option value="+1-268">🇦🇬 +1-268 Antigua & Barbuda</option>
                            <option value="+54">🇦🇷 +54 Argentina</option>
                            <option value="+374">🇦🇲 +374 Armenia</option>
                            <option value="+61">🇦🇺 +61 Australia</option>
                            <option value="+43">🇦🇹 +43 Austria</option>
                            <option value="+994">🇦🇿 +994 Azerbaijan</option>
                            <option value="+1-242">🇧🇸 +1-242 Bahamas</option>
                            <option value="+973">🇧🇭 +973 Bahrain</option>
                            <option value="+880">🇧🇩 +880 Bangladesh</option>
                            <option value="+1-246">🇧🇧 +1-246 Barbados</option>
                            <option value="+375">🇧🇾 +375 Belarus</option>
                            <option value="+32">🇧🇪 +32 Belgium</option>
                            <option value="+501">🇧🇿 +501 Belize</option>
                            <option value="+229">🇧🇯 +229 Benin</option>
                            <option value="+975">🇧🇹 +975 Bhutan</option>
                            <option value="+591">🇧🇴 +591 Bolivia</option>
                            <option value="+387">🇧🇦 +387 Bosnia & Herzegovina</option>
                            <option value="+267">🇧🇼 +267 Botswana</option>
                            <option value="+55">🇧🇷 +55 Brazil</option>
                            <option value="+673">🇧🇳 +673 Brunei</option>
                            <option value="+359">🇧🇬 +359 Bulgaria</option>
                            <option value="+226">🇧🇫 +226 Burkina Faso</option>
                            <option value="+257">🇧🇮 +257 Burundi</option>
                            <option value="+238">🇨🇻 +238 Cape Verde</option>
                            <option value="+855">🇰🇭 +855 Cambodia</option>
                            <option value="+237">🇨🇲 +237 Cameroon</option>
                            <option value="+1">🇨🇦 +1 Canada</option>
                            <option value="+236">🇨🇫 +236 Central African Republic</option>
                            <option value="+235">🇹🇩 +235 Chad</option>
                            <option value="+56">🇨🇱 +56 Chile</option>
                            <option value="+86">🇨🇳 +86 China</option>
                            <option value="+57">🇨🇴 +57 Colombia</option>
                            <option value="+269">🇰🇲 +269 Comoros</option>
                            <option value="+242">🇨🇬 +242 Congo</option>
                            <option value="+243">🇨🇩 +243 Congo (DRC)</option>
                            <option value="+506">🇨🇷 +506 Costa Rica</option>
                            <option value="+225">🇨🇮 +225 Ivory Coast</option>
                            <option value="+385">🇭🇷 +385 Croatia</option>
                            <option value="+53">🇨🇺 +53 Cuba</option>
                            <option value="+357">🇨🇾 +357 Cyprus</option>
                            <option value="+420">🇨🇿 +420 Czech Republic</option>
                            <option value="+45">🇩🇰 +45 Denmark</option>
                            <option value="+253">🇩🇯 +253 Djibouti</option>
                            <option value="+1-767">🇩🇲 +1-767 Dominica</option>
                            <option value="+1-809">🇩🇴 +1-809 Dominican Republic</option>
                            <option value="+593">🇪🇨 +593 Ecuador</option>
                            <option value="+20">🇪🇬 +20 Egypt</option>
                            <option value="+503">🇸🇻 +503 El Salvador</option>
                            <option value="+240">🇬🇶 +240 Equatorial Guinea</option>
                            <option value="+291">🇪🇷 +291 Eritrea</option>
                            <option value="+372">🇪🇪 +372 Estonia</option>
                            <option value="+268">🇸🇿 +268 Eswatini</option>
                            <option value="+251">🇪🇹 +251 Ethiopia</option>
                            <option value="+679">🇫🇯 +679 Fiji</option>
                            <option value="+358">🇫🇮 +358 Finland</option>
                            <option value="+33">🇫🇷 +33 France</option>
                            <option value="+241">🇬🇦 +241 Gabon</option>
                            <option value="+220">🇬🇲 +220 Gambia</option>
                            <option value="+995">🇬🇪 +995 Georgia</option>
                            <option value="+49">🇩🇪 +49 Germany</option>
                            <option value="+233">🇬🇭 +233 Ghana</option>
                            <option value="+30">🇬🇷 +30 Greece</option>
                            <option value="+1-473">🇬🇩 +1-473 Grenada</option>
                            <option value="+502">🇬🇹 +502 Guatemala</option>
                            <option value="+224">🇬🇳 +224 Guinea</option>
                            <option value="+245">🇬🇼 +245 Guinea-Bissau</option>
                            <option value="+592">🇬🇾 +592 Guyana</option>
                            <option value="+509">🇭🇹 +509 Haiti</option>
                            <option value="+504">🇭🇳 +504 Honduras</option>
                            <option value="+852">🇭🇰 +852 Hong Kong</option>
                            <option value="+36">🇭🇺 +36 Hungary</option>
                            <option value="+354">🇮🇸 +354 Iceland</option>
                            <option value="+91">🇮🇳 +91 India</option>
                            <option value="+62">🇮🇩 +62 Indonesia</option>
                            <option value="+98">🇮🇷 +98 Iran</option>
                            <option value="+964">🇮🇶 +964 Iraq</option>
                            <option value="+353">🇮🇪 +353 Ireland</option>
                            <option value="+972">🇮🇱 +972 Israel</option>
                            <option value="+39">🇮🇹 +39 Italy</option>
                            <option value="+1-876">🇯🇲 +1-876 Jamaica</option>
                            <option value="+81">🇯🇵 +81 Japan</option>
                            <option value="+962">🇯🇴 +962 Jordan</option>
                            <option value="+7">🇰🇿 +7 Kazakhstan</option>
                            <option value="+254">🇰🇪 +254 Kenya</option>
                            <option value="+686">🇰🇮 +686 Kiribati</option>
                            <option value="+383">🇽🇰 +383 Kosovo</option>
                            <option value="+965">🇰🇼 +965 Kuwait</option>
                            <option value="+996">🇰🇬 +996 Kyrgyzstan</option>
                            <option value="+856">🇱🇦 +856 Laos</option>
                            <option value="+371">🇱🇻 +371 Latvia</option>
                            <option value="+961">🇱🇧 +961 Lebanon</option>
                            <option value="+266">🇱🇸 +266 Lesotho</option>
                            <option value="+231">🇱🇷 +231 Liberia</option>
                            <option value="+218">🇱🇾 +218 Libya</option>
                            <option value="+423">🇱🇮 +423 Liechtenstein</option>
                            <option value="+370">🇱🇹 +370 Lithuania</option>
                            <option value="+352">🇱🇺 +352 Luxembourg</option>
                            <option value="+853">🇲🇴 +853 Macao</option>
                            <option value="+261">🇲🇬 +261 Madagascar</option>
                            <option value="+265">🇲🇼 +265 Malawi</option>
                            <option value="+60">🇲🇾 +60 Malaysia</option>
                            <option value="+960">🇲🇻 +960 Maldives</option>
                            <option value="+223">🇲🇱 +223 Mali</option>
                            <option value="+356">🇲🇹 +356 Malta</option>
                            <option value="+692">🇲🇭 +692 Marshall Islands</option>
                            <option value="+222">🇲🇷 +222 Mauritania</option>
                            <option value="+230">🇲🇺 +230 Mauritius</option>
                            <option value="+52">🇲🇽 +52 Mexico</option>
                            <option value="+691">🇫🇲 +691 Micronesia</option>
                            <option value="+373">🇲🇩 +373 Moldova</option>
                            <option value="+377">🇲🇨 +377 Monaco</option>
                            <option value="+976">🇲🇳 +976 Mongolia</option>
                            <option value="+382">🇲🇪 +382 Montenegro</option>
                            <option value="+212">🇲🇦 +212 Morocco</option>
                            <option value="+258">🇲🇿 +258 Mozambique</option>
                            <option value="+95">🇲🇲 +95 Myanmar</option>
                            <option value="+264">🇳🇦 +264 Namibia</option>
                            <option value="+674">🇳🇷 +674 Nauru</option>
                            <option value="+977">🇳🇵 +977 Nepal</option>
                            <option value="+31">🇳🇱 +31 Netherlands</option>
                            <option value="+64">🇳🇿 +64 New Zealand</option>
                            <option value="+505">🇳🇮 +505 Nicaragua</option>
                            <option value="+227">🇳🇪 +227 Niger</option>
                            <option value="+234">🇳🇬 +234 Nigeria</option>
                            <option value="+850">🇰🇵 +850 North Korea</option>
                            <option value="+389">🇲🇰 +389 North Macedonia</option>
                            <option value="+47">🇳🇴 +47 Norway</option>
                            <option value="+968">🇴🇲 +968 Oman</option>
                            <option value="+92" selected>🇵🇰 +92 Pakistan</option>
                            <option value="+680">🇵🇼 +680 Palau</option>
                            <option value="+970">🇵🇸 +970 Palestine</option>
                            <option value="+507">🇵🇦 +507 Panama</option>
                            <option value="+675">🇵🇬 +675 Papua New Guinea</option>
                            <option value="+595">🇵🇾 +595 Paraguay</option>
                            <option value="+51">🇵🇪 +51 Peru</option>
                            <option value="+63">🇵🇭 +63 Philippines</option>
                            <option value="+48">🇵🇱 +48 Poland</option>
                            <option value="+351">🇵🇹 +351 Portugal</option>
                            <option value="+974">🇶🇦 +974 Qatar</option>
                            <option value="+40">🇷🇴 +40 Romania</option>
                            <option value="+7">🇷🇺 +7 Russia</option>
                            <option value="+250">🇷🇼 +250 Rwanda</option>
                            <option value="+1-869">🇰🇳 +1-869 Saint Kitts & Nevis</option>
                            <option value="+1-758">🇱🇨 +1-758 Saint Lucia</option>
                            <option value="+1-784">🇻🇨 +1-784 Saint Vincent & Grenadines</option>
                            <option value="+685">🇼🇸 +685 Samoa</option>
                            <option value="+378">🇸🇲 +378 San Marino</option>
                            <option value="+239">🇸🇹 +239 Sao Tome & Principe</option>
                            <option value="+966">🇸🇦 +966 Saudi Arabia</option>
                            <option value="+221">🇸🇳 +221 Senegal</option>
                            <option value="+381">🇷🇸 +381 Serbia</option>
                            <option value="+248">🇸🇨 +248 Seychelles</option>
                            <option value="+232">🇸🇱 +232 Sierra Leone</option>
                            <option value="+65">🇸🇬 +65 Singapore</option>
                            <option value="+421">🇸🇰 +421 Slovakia</option>
                            <option value="+386">🇸🇮 +386 Slovenia</option>
                            <option value="+677">🇸🇧 +677 Solomon Islands</option>
                            <option value="+252">🇸🇴 +252 Somalia</option>
                            <option value="+27">🇿🇦 +27 South Africa</option>
                            <option value="+82">🇰🇷 +82 South Korea</option>
                            <option value="+211">🇸🇸 +211 South Sudan</option>
                            <option value="+34">🇪🇸 +34 Spain</option>
                            <option value="+94">🇱🇰 +94 Sri Lanka</option>
                            <option value="+249">🇸🇩 +249 Sudan</option>
                            <option value="+597">🇸🇷 +597 Suriname</option>
                            <option value="+46">🇸🇪 +46 Sweden</option>
                            <option value="+41">🇨🇭 +41 Switzerland</option>
                            <option value="+963">🇸🇾 +963 Syria</option>
                            <option value="+886">🇹🇼 +886 Taiwan</option>
                            <option value="+992">🇹🇯 +992 Tajikistan</option>
                            <option value="+255">🇹🇿 +255 Tanzania</option>
                            <option value="+66">🇹🇭 +66 Thailand</option>
                            <option value="+670">🇹🇱 +670 Timor-Leste</option>
                            <option value="+228">🇹🇬 +228 Togo</option>
                            <option value="+676">🇹🇴 +676 Tonga</option>
                            <option value="+1-868">🇹🇹 +1-868 Trinidad & Tobago</option>
                            <option value="+216">🇹🇳 +216 Tunisia</option>
                            <option value="+90">🇹🇷 +90 Turkey</option>
                            <option value="+993">🇹🇲 +993 Turkmenistan</option>
                            <option value="+688">🇹🇻 +688 Tuvalu</option>
                            <option value="+256">🇺🇬 +256 Uganda</option>
                            <option value="+380">🇺🇦 +380 Ukraine</option>
                            <option value="+971">🇦🇪 +971 UAE</option>
                            <option value="+44">🇬🇧 +44 United Kingdom</option>
                            <option value="+1">🇺🇸 +1 United States</option>
                            <option value="+598">🇺🇾 +598 Uruguay</option>
                            <option value="+998">🇺🇿 +998 Uzbekistan</option>
                            <option value="+678">🇻🇺 +678 Vanuatu</option>
                            <option value="+58">🇻🇪 +58 Venezuela</option>
                            <option value="+84">🇻🇳 +84 Vietnam</option>
                            <option value="+967">🇾🇪 +967 Yemen</option>
                            <option value="+260">🇿🇲 +260 Zambia</option>
                            <option value="+263">🇿🇼 +263 Zimbabwe</option>
                        </select>
                        <div class="co-phone-input-wrap">
                            <input type="tel" name="payer_phone"
                                id="payer_phone"
                                class="@error('payer_phone') is-invalid @enderror"
                                placeholder="1234567890"
                                value="{{ old('payer_phone') }}" required>
                            <i class="fas fa-mobile-alt ico"></i>
                        </div>
                    </div>
                    <div class="co-hint"><i class="fas fa-info-circle me-1"></i>Select country code, then enter phone number without the code</div>
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

    {{-- Recently Purchased --}}
    @if($isCbt || $recentBuyers->isNotEmpty())
    @php
        $avatarColors = ['#17a2b8','#0e9f6e','#f59e0b','#8b5cf6','#ef4444','#3b82f6'];
        $courseNames  = [
            'complete-preparation' => 'IELTS Complete Preparation',
            'writing-course'       => 'IELTS Writing Course',
            'speaking-course'      => 'IELTS Speaking Course',
            'computer-based-test'  => 'IELTS Computer Based Test',
            'preparation-material' => 'IELTS Preparation Material',
        ];
    @endphp
    <div class="co-recent">
        <h2 class="co-recent-heading">Recent Purchases</h2>
        @if($isCbt)
        <p class="co-recent-desc">We are trusted by thousands of IELTS candidates by providing authentic IELTS GT and Academic practice tests for Listening, Reading and Writing module. This helps the students to get their desired band scores on their first attempt.</p>
        @endif

        @if($recentBuyers->isNotEmpty())
        <div class="co-recent-list">
            @foreach($recentBuyers as $i => $buyer)
            @php
                $parts     = explode(' ', trim($buyer->payer_name));
                $firstName = $parts[0];
                $lastInit  = count($parts) > 1 ? strtoupper(substr(end($parts), 0, 1)) . '.' : '';
                $display   = $firstName . ($lastInit ? ' ' . $lastInit : '');
                $dateStr   = \Carbon\Carbon::parse($buyer->created_at)->format('d M Y');
            @endphp
            <div class="co-recent-card">
                @if($isCbt)
                @php $color = $avatarColors[$i % count($avatarColors)]; $slugLabel = $courseNames[$buyer->course_slug] ?? $buyer->course_slug; @endphp
                <div class="co-recent-avatar">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="32" cy="32" r="32" fill="{{ $color }}22"/>
                        <circle cx="32" cy="24" r="10" fill="{{ $color }}"/>
                        <ellipse cx="32" cy="50" rx="16" ry="10" fill="{{ $color }}"/>
                        <circle cx="32" cy="24" r="8" fill="#fff" opacity=".15"/>
                    </svg>
                </div>
                <div class="co-recent-name">{{ $display }}</div>
                <div class="co-recent-date">{{ $dateStr }}</div>
                <div class="co-recent-course">{{ $slugLabel }}</div>
                @else
                <div class="co-recent-name">{{ $display }}</div>
                <div class="co-recent-date">{{ $dateStr }}</div>
                @endif
            </div>
            @endforeach
        </div>
        @endif
    </div>
    @endif

</div>
@endsection

@section('script')
<script>
document.getElementById('checkout-form').addEventListener('submit', function(e) {
    const countryCode = document.getElementById('country_code').value.trim();
    const phone = document.getElementById('payer_phone').value.trim();
    
    if (!countryCode) {
        e.preventDefault();
        document.getElementById('country_code').focus();
        alert('Please select a country code');
        return;
    }
    
    if (phone.length < 7) {
        e.preventDefault();
        document.getElementById('payer_phone').classList.add('is-invalid');
        document.getElementById('payer_phone').focus();
        alert('Please enter a valid phone number');
        return;
    }
    
    // Update the phone field with full number (country code + phone)
    document.getElementById('payer_phone').value = countryCode + phone;
    
    const btn = document.getElementById('pay-btn');
    btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i>&nbsp; Redirecting to payment...';
    btn.disabled = true;
});

// Clear error state when user starts typing
document.getElementById('payer_phone').addEventListener('input', function() {
    this.classList.remove('is-invalid');
});

document.getElementById('country_code').addEventListener('change', function() {
    document.getElementById('payer_phone').focus();
});
</script>
@endsection
