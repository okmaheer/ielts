<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IELTS Writing Practice Test – Computer Based | IPP</title>
    <meta name="description" content="Practice Free IELTS General Training & Academic Writing practice tests with AI + human expert feedback. Practice using the real CBT interface.">
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="{{ url('/writing-practice-test') }}" />
    <meta property="og:title" content="IELTS Writing Practice Test – Computer Based | IPP" />
    <meta property="og:description" content="Practice Free IELTS General Training & Academic Writing practice tests with AI + human expert feedback. Practice using the real CBT interface." />
    <meta property="og:url" content="{{ url('/writing-practice-test') }}" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{ asset('frontend/logo/logo.png') }}" />
    <meta property="og:site_name" content="IELTS Prep And Practice" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="IELTS Writing Practice Test – Computer Based | IPP" />
    <meta name="twitter:description" content="Practice Free IELTS Writing tests with AI + human expert feedback." />
    <meta name="twitter:image" content="{{ asset('frontend/logo/logo.png') }}" />
    <link rel="icon" href="{{ asset('frontend/logo/fv.png') }}" type="image/png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('page-assets/writing-practice-test/css/styles.css') }}">
</head>
<body>

<!-- NAVIGATION -->
<nav class="navbar navbar-expand-lg site-header py-3">
    <div class="container-fluid" style="max-width: 1140px;">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('frontend/logo/logo.png') }}" alt="IELTS Prep and Practice" style="height:36px;filter:brightness(0) invert(1);vertical-align:middle;" />
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Homepage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#general-section">IELTS General Training Test</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#academic-section">IELTS Academic Test</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="hero py-5 text-center">
    <div class="container" style="max-width: 900px;">
        <h1 class="font-playfair mb-4">
            Practice IELTS Writing Tests with AI + Human Expert Feedback
        </h1>
        <p class="hero-desc mx-auto mb-5">
            Sharpen your writing skills with authentic exam-style questions for both General Training and Academic modules.
            Submit your answers and receive instant AI feedback — backed by certified IELTS examiners.
        </p>
        <div class="d-flex justify-content-center flex-wrap gap-3 mb-5">
            <span class="badge-custom badge-teal">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
                Real exam-format questions
            </span>
            <span class="badge-custom badge-gold">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M13 10V3L4 14h7v7l9-11h-7z"/>
                </svg>
                Instant AI scoring
            </span>
            <span class="badge-custom badge-white">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M12 8v4l3 3"/>
                </svg>
                60 min timed practice
            </span>
        </div>
        <div class="d-flex justify-content-center flex-wrap gap-5">
            <div class="hero-stat"><div class="num">50+</div><div class="label">Practice Tests</div></div>
            <div class="hero-stat"><div class="num">90%</div><div class="label">Accurate Feedback</div></div>
            <div class="hero-stat"><div class="num">Free</div><div class="label">To Get Started</div></div>
        </div>
    </div>
</section>

<!-- MAIN CONTENT -->
<main class="container py-5" style="max-width: 1140px;">

    <!-- General Training Section -->
    <div id="general-section" class="d-flex flex-wrap justify-content-between align-items-end mb-4 border-bottom pb-3">
        <div>
            <div class="section-label mb-2"><span class="dot me-2"></span> General Training Module</div>
            <h2 class="font-playfair text-navy fw-bold mb-1">General Writing Practice Tests</h2>
            <p class="text-muted mb-0" style="font-size: 15px;">Task 1 — Letter Writing &nbsp;·&nbsp; Task 2 — Essay (250 words)</p>
        </div>
        <span class="text-muted" style="font-size: 13px;">
            Showing <strong class="text-navy">8 tests</strong> &nbsp;·&nbsp; Updated May 2026
        </span>
    </div>
    <div class="row g-4 mb-5 test-container" id="general-container">
        <!-- Populated by main.js -->
    </div>

    <!-- Feedback Strip -->
    <div class="feedback-strip p-4 p-md-5 my-5 d-flex flex-wrap justify-content-between align-items-center gap-4">
        <div class="text-white">
            <h3 class="font-playfair mb-2">IELTS Writing Task 1 and Task 2 Samples</h3>
            <p class="mb-3 opacity-75" style="max-width: 500px; font-weight:300;">
                Read sample IELTS writing essays, letters and academic writing tasks to learn the correct structure of each writing task, so that you can get good bands in writing. These samples will also help you to gain ideas on different topics, vocabulary and different grammatical structures.
            </p>
            <div class="d-flex flex-wrap gap-2">
                <span class="strip-badge ai"> Band 7 Samples with Helpful Feedback </span>
                <span class="strip-badge human">&#128104;&#8205;&#127979; Evaluated and checked by Real IELTS Examiner</span>
            </div>
        </div>
        <a href="https://ieltsprepandpractice.com/category/agree-and-disagree-essay/" class="strip-cta text-center">Read Sample IELTS Writing Answers &rarr;</a>
    </div>

    <!-- Academic Section -->
    <div id="academic-section" class="d-flex flex-wrap justify-content-between align-items-end mb-4 border-bottom pb-3 mt-5">
        <div>
            <div class="section-label academic mb-2"><span class="dot me-2"></span> Academic Module</div>
            <h2 class="font-playfair text-navy fw-bold mb-1">Academic Writing Practice Tests</h2>
            <p class="text-muted mb-0" style="font-size: 15px;">Task 1 — Data / Graph Description &nbsp;·&nbsp; Task 2 — Argumentative Essay</p>
        </div>
        <span class="text-muted" style="font-size: 13px;">
            Showing <strong class="text-navy">6 tests</strong> &nbsp;·&nbsp; Updated May 2026
        </span>
    </div>
    <div class="row g-4 test-container" id="academic-container">
        <!-- Populated by main.js -->
    </div>

    <!-- Tips Section -->
    <div class="row g-4 mt-5" id="tips-container">
        <!-- Populated by main.js -->
    </div>

</main>

<!-- FOOTER -->
<footer class="page-footer py-4 mt-5 text-center">
    <div class="container">
        <p class="mb-0">
            &copy; {{ date('Y') }} <a href="{{ url('/') }}">ieltsprepandpractice.com</a>
            &nbsp;·&nbsp; All practice tests are original and exam-format only
            &nbsp;·&nbsp; Not affiliated with British Council, IDP or Cambridge Assessment English
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('page-assets/writing-practice-test/data/tests.js') }}"></script>
<script src="{{ asset('page-assets/writing-practice-test/js/main.js') }}"></script>
</body>
</html>
