@extends('layouts.frontend-app')

@section('css')
<style>
    /* ── Override global card interference ───────────────────── */
    #prepration-courses .card,
    #prepration-material .card,
    #ielts-mock-test .card,
    #prepration-testimonial .card {
        padding: 0 !important;
        transform: none !important;
        box-shadow: 0 4px 20px rgba(0,0,0,0.08) !important;
        border-radius: 16px !important;
        border: 1px solid #e9ecef !important;
        transition: transform 0.25s ease, box-shadow 0.25s ease !important;
    }
    #prepration-courses .card:hover,
    #prepration-material .card:hover,
    #ielts-mock-test .card:hover {
        transform: translateY(-6px) !important;
        box-shadow: 0 16px 40px rgba(0,0,0,0.13) !important;
    }
    #prepration-courses .card::after,
    #prepration-material .card::after,
    #ielts-mock-test .card::after,
    #prepration-testimonial .card::after { display: none !important; }

    /* ── Hero enhancements ───────────────────────────────────── */
    .hero-overlay { background: linear-gradient(120deg, rgba(10,30,60,.82) 0%, rgba(23,162,184,.5) 100%) !important; }
    .hero-title { font-size: clamp(2rem, 5vw, 3.2rem); font-weight: 800; line-height: 1.2; }
    .hero-cta-primary {
        background: #17a2b8; color: #fff; border: none;
        padding: 13px 34px; border-radius: 50px; font-weight: 700; font-size: 0.95rem;
        text-decoration: none; transition: background 0.2s, transform 0.15s; display: inline-block;
    }
    .hero-cta-primary:hover { background: #0a7a8f; color: #fff; transform: translateY(-2px); }
    .hero-cta-secondary {
        background: transparent; color: #fff; border: 2px solid rgba(255,255,255,0.65);
        padding: 13px 34px; border-radius: 50px; font-weight: 700; font-size: 0.95rem;
        text-decoration: none; transition: all 0.2s; display: inline-block;
    }
    .hero-cta-secondary:hover { background: rgba(255,255,255,0.15); color: #fff; transform: translateY(-2px); }
    .hero-stats-bar {
        display: flex; flex-wrap: wrap; gap: 28px;
        margin-top: 36px; padding-top: 28px;
        border-top: 1px solid rgba(255,255,255,0.2);
    }
    .hero-stat-num { font-size: 1.7rem; font-weight: 800; color: #fff; line-height: 1; }
    .hero-stat-lbl { font-size: 0.75rem; color: rgba(255,255,255,0.65); text-transform: uppercase; letter-spacing: 0.8px; margin-top: 3px; }

    /* ── Section headings ────────────────────────────────────── */
    .section-heading {
        font-size: 1.85rem; font-weight: 800; color: #1a2340;
        position: relative; padding-bottom: 14px; margin-bottom: 10px;
    }
    .section-heading::after {
        content: ''; position: absolute; bottom: 0; left: 0;
        width: 48px; height: 4px; border-radius: 2px; background: #17a2b8;
    }
    .section-sub { color: #6b7280; font-size: 1rem; line-height: 1.7; max-width: 680px; }
    .section-wrap { padding: 68px 0 52px; }

    /* ── Card structure ──────────────────────────────────────── */
    .course-card { display: flex; flex-direction: column; height: 100%; }
    .course-card-top { padding: 28px 28px 18px; border-bottom: 1px solid #f3f4f6; text-align: center; }
    .course-icon {
        width: 52px; height: 52px; border-radius: 14px;
        background: #e8f7fa; display: inline-flex;
        align-items: center; justify-content: center;
        margin-bottom: 14px; font-size: 20px; color: #17a2b8;
    }
    .course-card-top h2 { font-size: 1.1rem; font-weight: 700; color: #1a2340; margin-bottom: 10px; }
    .price-badge { display: inline-block; font-size: 1.7rem; font-weight: 900; color: #17a2b8; line-height: 1; }
    .price-badge small { font-size: 0.85rem; font-weight: 600; color: #9ca3af; }
    .course-card-body { padding: 16px 24px; flex: 1; }
    .course-card-body p { font-size: 0.87rem; color: #6b7280; line-height: 1.65; }
    .course-card-body .list-group-item {
        padding: 9px 0; font-size: 0.88rem; color: #374151;
        border: none; border-bottom: 1px solid #f3f4f6;
        background: transparent; display: flex; align-items: center; gap: 10px;
    }
    .course-card-body .list-group-item:last-child { border-bottom: none; }
    .chk-icon { color: #17a2b8; font-size: 12px; flex-shrink: 0; }
    .x-icon   { color: #d1d5db; font-size: 12px; flex-shrink: 0; }
    .course-card-footer { padding: 18px 24px 24px; text-align: center; }

    /* Buttons */
    .btn-card-primary {
        display: block; width: 100%; padding: 13px;
        background: #17a2b8; color: #fff; border: none;
        border-radius: 50px; font-weight: 700; font-size: 0.92rem;
        text-decoration: none; text-align: center;
        transition: background 0.2s, transform 0.15s;
    }
    .btn-card-primary:hover { background: #0a7a8f; color: #fff; transform: translateY(-1px); }
    .btn-card-outline {
        display: block; width: 100%; padding: 13px;
        background: transparent; color: #17a2b8; border: 2px solid #17a2b8;
        border-radius: 50px; font-weight: 700; font-size: 0.92rem;
        text-decoration: none; text-align: center; transition: all 0.2s;
    }
    .btn-card-outline:hover { background: #17a2b8; color: #fff; transform: translateY(-1px); }
    .btn-card-outline-green {
        display: block; width: 100%; padding: 13px;
        background: transparent; color: #28a745; border: 2px solid #28a745;
        border-radius: 50px; font-weight: 700; font-size: 0.92rem;
        text-decoration: none; text-align: center; transition: all 0.2s;
    }
    .btn-card-outline-green:hover { background: #28a745; color: #fff; transform: translateY(-1px); }

    /* Featured card */
    .card-featured { border: 2px solid #17a2b8 !important; position: relative; }
    .featured-badge {
        position: absolute; top: -13px; left: 50%; transform: translateX(-50%);
        background: #17a2b8; color: #fff; font-size: 11px; font-weight: 700;
        padding: 4px 16px; border-radius: 50px; letter-spacing: 0.8px;
        text-transform: uppercase; white-space: nowrap; z-index: 2;
    }
    .card-featured .course-icon { background: #17a2b8; color: #fff; }

    /* Free card accent */
    .price-badge-free { color: #28a745 !important; }
    .course-icon-free { background: #f0fdf4 !important; color: #28a745 !important; }

    /* Alternating sections */
    .section-light { background: #f8fafc; }
    .section-white { background: #ffffff; }

    /* ── Testimonial ─────────────────────────────────────────── */
    .testi-card { padding: 28px !important; }
    .testi-stars { color: #f59e0b; font-size: 0.82rem; margin-bottom: 14px; letter-spacing: 2px; }
    .testi-text { font-size: 0.92rem; color: #4b5563; line-height: 1.75; font-style: italic; }
    .testi-divider { width: 38px; height: 3px; background: #17a2b8; border-radius: 2px; margin: 16px 0; }
    .testi-name { font-size: 0.93rem; font-weight: 700; color: #1a2340; }
    .testi-country { font-size: 0.78rem; color: #9ca3af; }

    /* ── Contact panel ───────────────────────────────────────── */
    .contact-panel {
        background: linear-gradient(135deg, #0a7a8f, #17a2b8);
        border-radius: 18px; padding: 32px 28px; color: #fff;
    }
    .contact-item {
        display: flex; align-items: center; gap: 14px;
        background: rgba(255,255,255,0.13); border-radius: 12px;
        padding: 13px 16px; margin-bottom: 12px;
        text-decoration: none; color: #fff; transition: background 0.2s;
    }
    .contact-item:hover { background: rgba(255,255,255,0.22); color: #fff; }
    .contact-icon { width: 38px; height: 38px; background: rgba(255,255,255,0.2); border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 15px; flex-shrink: 0; }
    .contact-lbl { font-size: 10px; text-transform: uppercase; letter-spacing: 1px; opacity: 0.65; }
    .contact-val { font-size: 0.92rem; font-weight: 600; }

    @media (max-width: 768px) {
        .hero-stats-bar { gap: 18px; }
        .section-wrap { padding: 48px 0 36px; }
        .contact-panel { padding: 24px 20px; }
    }
</style>
@endsection

@section('content')

{{-- ══ HERO ══ --}}
<div class="container-fluid p-0">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="{{ asset('frontend/img/image.jpg') }}" alt="IELTS Preparation">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center hero-overlay">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <p class="text-white mb-2 animated slideInDown"
                                style="font-size:0.8rem;letter-spacing:2px;text-transform:uppercase;opacity:0.75;">
                                <i class="fas fa-graduation-cap me-2"></i>Cambridge IELTS Preparation
                            </p>
                            <h1 class="hero-title text-white animated slideInDown mb-3">
                                Achieve Your Target<br>IELTS Band Score
                            </h1>
                            <p class="text-white mb-4 animated slideInDown"
                                style="font-size:1.05rem;opacity:0.9;max-width:540px;line-height:1.7;">
                                Practice authentic IELTS Listening and Reading Tests provided by Cambridge for FREE.
                                Get expert-designed, reliable and comprehensive IELTS resources.
                            </p>
                            <div class="d-flex flex-wrap gap-3 animated slideInUp">
                                <a href="#prepration-courses" class="hero-cta-primary">
                                    <i class="fas fa-book-open me-2"></i>Browse Courses
                                </a>
                                <a href="#ielts-mock-test" class="hero-cta-secondary"
                                    data-bs-toggle="modal" data-bs-target="#test-type">
                                    <i class="fas fa-play-circle me-2"></i>Free Mock Test
                                </a>
                            </div>
                            <div class="hero-stats-bar">
                                <div><div class="hero-stat-num">1,000+</div><div class="hero-stat-lbl">Students Trained</div></div>
                                <div><div class="hero-stat-num">7.5</div><div class="hero-stat-lbl">Avg. Band Score</div></div>
                                <div><div class="hero-stat-num">28</div><div class="hero-stat-lbl">Mock Tests</div></div>
                                <div><div class="hero-stat-num">5★</div><div class="hero-stat-lbl">Student Rating</div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- ══ PREPARATION COURSES ══ --}}
<div class="section-light" id="prepration-courses">
    <div class="container section-wrap">
        <h2 class="section-heading">IELTS Preparation Courses</h2>
        <p class="section-sub mb-5">Join our 1:1 Online IELTS Courses covering techniques for all four modules. Build confidence and achieve your desired band score on the first attempt.</p>
        <div class="row g-4">

            {{-- Complete Preparation (Featured) --}}
            <div class="col-lg-4 col-md-6">
                <div class="card card-featured h-100" style="position:relative;">
                    <span class="featured-badge"><i class="fas fa-fire me-1"></i>Most Popular</span>
                    <div class="course-card">
                        <div class="course-card-top">
                            <div class="course-icon"><i class="fas fa-chalkboard-teacher"></i></div>
                            <h2>IELTS Complete Preparation Course</h2>
                            <div class="price-badge">$40 <small>USD</small></div>
                        </div>
                        <div class="course-card-body">
                            <p>Covers all question types of each module so you get your desired scores on the first attempt.</p>
                            <ul class="list-group list-group-flush mt-2">
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>1 on 1 Sessions</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>Each session of 1 Hour</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>Tips for Listening &amp; Reading</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>15 Mock Speaking Tests</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>IELTS Writing Tasks Evaluation</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>22 Sessions in Total</li>
                            </ul>
                        </div>
                        <div class="course-card-footer">
                            <a class="btn-card-primary" href="{{ route('payment.checkout', 'complete-preparation') }}">
                                <i class="fas fa-arrow-right me-2"></i>JOIN NOW
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Writing Course --}}
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="course-card">
                        <div class="course-card-top">
                            <div class="course-icon"><i class="fas fa-pen-fancy"></i></div>
                            <h2>IELTS Writing Course</h2>
                            <div class="price-badge">$30 <small>USD</small></div>
                        </div>
                        <div class="course-card-body">
                            <p>1 Month IELTS Writing Course tailored for students aiming for a 6.5 or higher score.</p>
                            <ul class="list-group list-group-flush mt-2">
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>1 on 1 Sessions</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>Evaluation of Writing Task 1 &amp; 2</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>Advanced Grammar &amp; Vocabulary</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>Improvement in Task Response</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>Write each task in correct format</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>Duration: 1 Month</li>
                            </ul>
                        </div>
                        <div class="course-card-footer">
                            <a class="btn-card-primary" href="{{ route('payment.checkout', 'writing-course') }}">
                                <i class="fas fa-arrow-right me-2"></i>JOIN NOW
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Speaking Course --}}
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                    <div class="course-card">
                        <div class="course-card-top">
                            <div class="course-icon"><i class="fas fa-microphone"></i></div>
                            <h2>IELTS Speaking Course</h2>
                            <div class="price-badge">$30 <small>USD</small></div>
                        </div>
                        <div class="course-card-body">
                            <p>Improve your fluency, grammar and vocabulary with our expert-led Speaking Course.</p>
                            <ul class="list-group list-group-flush mt-2">
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>1 on 1 Sessions</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>2 Mock Speaking Tests Everyday</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>Improvement in Fluency</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>Learn usage of cohesive devices</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>Idioms for high band scores</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>Duration: 1 Month</li>
                            </ul>
                        </div>
                        <div class="course-card-footer">
                            <a class="btn-card-primary" href="{{ route('payment.checkout', 'speaking-course') }}">
                                <i class="fas fa-arrow-right me-2"></i>JOIN NOW
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- ══ COMPUTER BASED TESTS ══ --}}
<div class="section-white" id="ielts-mock-test">
    <div class="container section-wrap">
        <h2 class="section-heading">IELTS Computer Based Practice Test</h2>
        <p class="section-sub mb-5">Practice FREE Cambridge IELTS Listening &amp; Reading Tests online with instant results and band score predictions. Full Academic &amp; General Training available.</p>
        <div class="row g-4 justify-content-center">

            <div class="col-lg-5 col-md-6">
                <div class="card h-100">
                    <div class="course-card">
                        <div class="course-card-top">
                            <div class="course-icon course-icon-free"><i class="fas fa-desktop"></i></div>
                            <h2>Free Access</h2>
                            <div class="price-badge price-badge-free">$0 <small>USD</small></div>
                        </div>
                        <div class="course-card-body">
                            <ul class="list-group list-group-flush mt-2">
                                <li class="list-group-item"><i class="fas fa-check chk-icon" style="color:#28a745;"></i>Access for Unlimited Time</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon" style="color:#28a745;"></i>8 Listening &amp; Reading Mock Tests</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon" style="color:#28a745;"></i>Expert Feedback for both Modules</li>
                            </ul>
                        </div>
                        <div class="course-card-footer">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#test-type"
                                class="btn-card-outline-green" style="cursor:pointer;border:2px solid #28a745;background:transparent;width:100%;">
                                <i class="fas fa-play-circle me-2"></i>START PRACTICING
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-6">
                <div class="card h-100">
                    <div class="course-card">
                        <div class="course-card-top">
                            <div class="course-icon"><i class="fas fa-layer-group"></i></div>
                            <h2>Paid Access</h2>
                            <div class="price-badge">$5 <small>USD</small></div>
                        </div>
                        <div class="course-card-body">
                            <ul class="list-group list-group-flush mt-2">
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>Access for 2 Months</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>28 Listening &amp; Reading Mock Tests</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>Expert Feedback for both Modules</li>
                            </ul>
                        </div>
                        <div class="course-card-footer">
                            <a class="btn-card-primary" href="{{ route('payment.checkout', 'computer-based-test') }}">
                                <i class="fas fa-arrow-right me-2"></i>BUY NOW
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- ══ PREPARATION MATERIAL ══ --}}
<div class="section-light" id="prepration-material">
    <div class="container section-wrap">
        <h2 class="section-heading">IELTS Preparation Material</h2>
        <p class="section-sub mb-5">Access FREE IELTS resources including Cambridge IELTS Books PDF, vocabulary and grammar notes. Choose flexible online or offline preparation.</p>
        <div class="row g-4 justify-content-center">

            <div class="col-lg-5 col-md-6">
                <div class="card h-100">
                    <div class="course-card">
                        <div class="course-card-top">
                            <div class="course-icon course-icon-free"><i class="fas fa-book-open"></i></div>
                            <h2>Free Access</h2>
                            <div class="price-badge price-badge-free">$0 <small>USD</small></div>
                        </div>
                        <div class="course-card-body">
                            <ul class="list-group list-group-flush mt-2">
                                <li class="list-group-item"><i class="fas fa-check chk-icon" style="color:#28a745;"></i>Cambridge IELTS Books</li>
                                <li class="list-group-item"><i class="fas fa-times x-icon"></i>Grammar &amp; Vocabulary books</li>
                                <li class="list-group-item"><i class="fas fa-times x-icon"></i>Band 7 Essays</li>
                            </ul>
                        </div>
                        <div class="course-card-footer">
                            <a class="btn-card-outline-green" target="_blank"
                                href="https://drive.google.com/drive/folders/1a9-l7xNPM4oX14sN78UsSqgEpJrjXulS?usp=sharing">
                                <i class="fas fa-external-link-alt me-2"></i>GET FREE ACCESS
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-6">
                <div class="card h-100">
                    <div class="course-card">
                        <div class="course-card-top">
                            <div class="course-icon"><i class="fas fa-star"></i></div>
                            <h2>Paid Access</h2>
                            <div class="price-badge">$5 <small>USD</small></div>
                        </div>
                        <div class="course-card-body">
                            <ul class="list-group list-group-flush mt-2">
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>Cambridge IELTS Books</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>Book for Speaking &amp; Writing</li>
                                <li class="list-group-item"><i class="fas fa-check chk-icon"></i>Band 7 Essays</li>
                            </ul>
                        </div>
                        <div class="course-card-footer">
                            <a class="btn-card-primary" href="{{ route('payment.checkout', 'preparation-material') }}">
                                <i class="fas fa-arrow-right me-2"></i>BUY NOW
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- ══ TESTIMONIALS ══ --}}
<div class="section-white" id="prepration-testimonial">
    <div class="container section-wrap">

        @php
            $testimonials = [
                (object)['id'=>1,'name'=>'Ziana','country'=>'Malaysia','avatar'=>'ziana.jpg','certificate'=>'ziana-report-card.jpeg','quote'=>'With IPP\'s IELTS preparation course I managed to get 6.5 bands overall and enabled me to start my graduate studies in Malaysia.','alt'=>'IELTS TRF showing 6.5 overall score'],
                (object)['id'=>2,'name'=>'Raheem','country'=>'Pakistan','avatar'=>'raheem.jpg','certificate'=>'raheem-report.jpeg','quote'=>'IPP helped me to get 7.5 Bands in IELTS. I would recommend other students to take IELTS Preparation classes from this platform as well.','alt'=>'IELTS TRF showing 7.5 bands score'],
                (object)['id'=>3,'name'=>'Shamma','country'=>'Bangladesh','avatar'=>'shamma.jpg','certificate'=>'shamma-report.jpeg','quote'=>'I took IELTS Preparation classes from IPP and managed to get 7.5 bands in IELTS on my first attempt. IPP\'s IELTS Preparation is highly recommended.','alt'=>'IELTS TRF showing 7.5 bands score'],
                (object)['id'=>4,'name'=>'Irene','country'=>'Italy','avatar'=>'irine.jpg','certificate'=>'irine-report.jpeg','quote'=>'It would have been impossible to increase my speaking score from 5.5 to 6.5 bands without taking IELTS Speaking Classes from IPP.','alt'=>'IELTS TRF showing improved speaking score'],
                (object)['id'=>5,'name'=>'Hudaib','country'=>'Jordan','avatar'=>'hudaib.jpg','certificate'=>'hudaib-report.jpeg','quote'=>'I am satisfied with the course offered by this platform, as it helped me to get the desired score in just 1 month and now I\'m pursuing my dreams in Spain.','alt'=>'IELTS TRF showing desired score achievement'],
            ];
        @endphp

        <div class="row align-items-center g-5">

            <div class="col-lg-7">
                <div class="owl-carousel testimonial-carousel">
                    @foreach($testimonials as $testimonial)
                        <div class="testimonial-slide">
                            <div class="card">
                                <div class="testi-card">
                                    <div class="testi-stars">
                                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                    </div>
                                    <p class="testi-text">"{{ $testimonial->quote }}"</p>
                                    <div class="testi-divider"></div>
                                    <div class="d-flex align-items-center gap-3">
                                        <img src="{{ asset('frontend/testimonial/' . $testimonial->avatar) }}"
                                            alt="{{ $testimonial->name }}" class="rounded-circle flex-shrink-0"
                                            style="width:46px;height:46px;object-fit:cover;border:2px solid #17a2b8;">
                                        <div>
                                            <div class="testi-name">{{ $testimonial->name }}</div>
                                            <div class="testi-country"><i class="fas fa-map-marker-alt me-1" style="color:#17a2b8;font-size:9px;"></i>{{ $testimonial->country }}</div>
                                        </div>
                                        <div class="ms-auto">
                                            <button class="btn p-0 border-0 bg-transparent" type="button"
                                                data-bs-toggle="modal" data-bs-target="#testimonial-image-{{ $testimonial->id }}">
                                                <img src="{{ asset('frontend/testimonial/' . $testimonial->certificate) }}"
                                                    alt="{{ $testimonial->alt }}" class="img-fluid rounded"
                                                    style="max-height:72px;cursor:pointer;border:1px solid #e5e7eb;border-radius:8px;">
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-5">
                <h2 class="section-heading">What Our Students Say</h2>
                <p class="text-muted mb-4" style="line-height:1.8;font-size:0.97rem;">
                    Our expert-led courses have helped 1,000+ students achieve their target IELTS band scores — from Malaysia to Spain.
                </p>
                <div class="contact-panel">
                    <p class="mb-3" style="font-size:0.78rem;opacity:0.75;text-transform:uppercase;letter-spacing:1.2px;font-weight:700;">Get in Touch</p>
                    <a href="tel:+923154315382" class="contact-item">
                        <div class="contact-icon"><i class="fas fa-phone"></i></div>
                        <div>
                            <div class="contact-lbl">Customer Services</div>
                            <div class="contact-val">+92 315 431 5382</div>
                        </div>
                    </a>
                    <a href="mailto:info@ieltsprepandpractice.com" class="contact-item mb-0">
                        <div class="contact-icon"><i class="fas fa-envelope"></i></div>
                        <div>
                            <div class="contact-lbl">Email Address</div>
                            <div class="contact-val">info@ieltsprepandpractice.com</div>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

{{-- Certificate Modals --}}
@foreach($testimonials as $testimonial)
    <div class="modal fade" id="testimonial-image-{{ $testimonial->id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" style="max-width:800px;">
            <div class="modal-content" style="border-radius:16px;overflow:hidden;">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center p-0">
                    <img src="{{ asset('frontend/testimonial/' . $testimonial->certificate) }}"
                        alt="{{ $testimonial->alt }}" class="img-fluid w-100">
                </div>
            </div>
        </div>
    </div>
@endforeach

@endsection

@section('script')
@endsection
