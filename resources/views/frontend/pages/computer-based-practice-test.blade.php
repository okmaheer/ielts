<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>IELTS Computer Based Practice Test with Band Scores</title>
  <meta name="description" content="Practice computer based IELTS GT and academic practice test online and get instant band scores with correct answers. Solve listening, reading and writing practice tests for FREE." />
  <meta name="robots" content="index, follow" />
  <link rel="canonical" href="https://cbt.ieltsprepandpractice.com/computer-based-ielts-practice-test-online" />
  <meta property="og:title" content="IELTS Computer Based Practice Test with Band Scores" />
  <meta property="og:description" content="Practice computer based IELTS GT and academic practice test online and get instant band scores with correct answers." />
  <meta property="og:url" content="https://cbt.ieltsprepandpractice.com/computer-based-ielts-practice-test-online" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="{{ asset('frontend/logo/logo.png') }}" />
  <meta property="og:site_name" content="IELTS Prep And Practice" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="IELTS Computer Based Practice Test with Band Scores" />
  <meta name="twitter:description" content="Practice computer based IELTS GT and academic practice test online and get instant band scores with correct answers." />
  <meta name="twitter:image" content="{{ asset('frontend/logo/logo.png') }}" />
  <link rel="icon" href="{{ asset('frontend/logo/fv.png') }}" type="image/png" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('page-assets/computer-based-practice-test/style.css') }}" />
</head>
<body>

<!-- ============ HEADER ============ -->
<header>
  <div class="header-inner">
    <a href="{{ url('/') }}" class="site-logo">
      <img src="{{ asset('frontend/logo/logo.png') }}" alt="IELTS Prep and Practice" style="height:38px;filter:brightness(0) invert(1);vertical-align:middle;" />
    </a>
    <nav aria-label="Main navigation">
      <a href="{{ url('/') }}">Homepage</a>
      <a href="#section1">Practice GT Reading</a>
      <a href="#section2">Practice Academic Reading</a>
      <a href="#section3">Practice Writing</a>
      <a href="#section4">Practice Listening</a>
    </nav>
    <button class="hamburger" id="hamburger" aria-expanded="false" aria-label="Open menu">
      <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
        <line x1="3" y1="7" x2="21" y2="7"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="17" x2="21" y2="17"/>
      </svg>
    </button>
  </div>
  <div class="mobile-menu" id="mobile-menu" role="navigation" aria-label="Mobile navigation">
    <a href="{{ url('/') }}">Homepage</a>
    <a href="#section1">Practice GT Reading</a>
    <a href="#section2">Practice Academic Reading</a>
    <a href="#section3">Practice Writing</a>
    <a href="#section4">Practice Listening</a>
  </div>
</header>

<!-- ============ HERO ============ -->
<section class="hero" aria-labelledby="hero-heading">
  <div class="hero-bg-img"></div>
  <div class="hero-overlay"></div>
  <div class="hero-inner">
    <div class="hero-text">
      <div class="hero-badge"><span>FREE PRACTICE TESTS</span></div>
      <h1 id="hero-heading">IELTS Computer Based Practice Test</h1>
      <p class="hero-description">Practice computer based IELTS GT and academic tests online and get instant band scores with correct answers. Solve listening, reading and writing practice tests for FREE.</p>
      <div class="hero-buttons">
        <a href="#section1" class="btn-primary">Start Practicing</a>
        <a href="https://ieltsprepandpractice.com" class="btn-outline">Learn More</a>
      </div>
    </div>
    <div class="hero-box" aria-label="Key features">
      <h3>Why Practice With Us?</h3>
      <div class="feature-item">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24" stroke="#06BBCC" fill="none" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"/><line x1="3" y1="9" x2="21" y2="9"/><line x1="9" y1="4" x2="9" y2="9"/></svg>
        </div><span>Real Computer Based Interface</span>
      </div>
      <div class="feature-item">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24" stroke="#06BBCC" fill="none" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg>
        </div><span>Instant Band Scores</span>
      </div>
      <div class="feature-item">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24" stroke="#06BBCC" fill="none" stroke-width="2"><path d="M12 2a7 7 0 0 1 7 7c0 5-7 13-7 13S5 14 5 9a7 7 0 0 1 7-7z"/><circle cx="12" cy="9" r="2.5"/></svg>
        </div><span>AI + Expert Feedback</span>
      </div>
      <div class="feature-item">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24" stroke="#06BBCC" fill="none" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
        </div><span>Accurate Band Score Predictions</span>
      </div>
      <div class="feature-item">
        <div class="feature-icon">
          <svg viewBox="0 0 24 24" stroke="#06BBCC" fill="none" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
        </div><span>Trusted by 50k Users</span>
      </div>
    </div>
  </div>
</section>

<!-- ============ SECTION 1: GT Reading ============ -->
<section class="section" id="section1" aria-labelledby="gt-reading-heading">
  <div class="section-bg" style="background-image:url('{{ asset('page-assets/computer-based-practice-test/images/gt-reading-bg.webp') }}')"></div>
  <div class="section-inner">
    <div class="section-layout">
      <div class="section-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"/><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"/></svg>
      </div>
      <div class="section-content">
        <h2 id="gt-reading-heading">Computer Based IELTS General Training Reading Tests</h2>
        <p>Practice computer based IELTS GT reading tests similar to the actual exam pattern and prepare for your exam. The tests are taken from an authentic resource such as Cambridge IELTS Books that mimics the actual exam level difficulty, so you do not face any issues on the exam day.</p>
        <div class="section-buttons">
          <a href="{{ route('general.training.test') }}?type=1" class="btn-brand">Solve a GT Reading Test</a>
          <a href="https://ieltsprepandpractice.com/category/ielts-reading/" class="btn-brand-outline">Tips for IELTS Reading</a>
        </div>
        <div class="feature-grid">
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>40 questions across 3 sections</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Real exam-style passages</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Advertisements, notices &amp; letters</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>All IELTS question types covered</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Automatic band score calculation</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Detailed answer explanations</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Progress tracking over time</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Free to use, no sign-up required</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ SECTION 2: Academic Reading ============ -->
<section class="section alt" id="section2" aria-labelledby="academic-reading-heading">
  <div class="section-bg" style="background-image:url('{{ asset('page-assets/computer-based-practice-test/images/academic-reading-bg.webp') }}')"></div>
  <div class="section-inner">
    <div class="section-layout">
      <div class="section-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg>
      </div>
      <div class="section-content">
        <h2 id="academic-reading-heading">Practice IELTS Academic Reading Test</h2>
        <p>Complete the IELTS academic reading mock test online. Get accurate band score depictions and prepare for the real exam. We offer authentic academic reading tests that have the same difficulty level as the actual exam, so you are well prepared and achieve desired band scores on the first attempt.</p>
        <div class="section-buttons">
          <a href="{{ route('academic.training.test') }}?type=1" class="btn-brand">Solve Academic Reading Test</a>
          <a href="https://ieltsprepandpractice.com/category/ielts-reading/" class="btn-brand-outline">Tips for IELTS Reading</a>
        </div>
        <div class="feature-grid">
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>3 complex academic passages</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Texts from journals &amp; magazines</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>All 13 IELTS question types</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>True / False / Not Given questions</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Matching headings &amp; information</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Band score breakdown by skill</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Passage highlighting feature</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Timed exam conditions</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ SECTION 3: Writing ============ -->
<section class="section" id="section3" aria-labelledby="writing-heading">
  <div class="section-bg" style="background-image:url('{{ asset('page-assets/computer-based-practice-test/images/writing-bg.webp') }}')"></div>
  <div class="section-inner">
    <div class="section-layout">
      <div class="section-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M12 20h9"/><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"/></svg>
      </div>
      <div class="section-content">
        <h2 id="writing-heading">Practice IELTS Writing Test</h2>
        <p>Practice IELTS Academic and GT writing test using an actual computer based interface with features like word count, 60 minutes timer, and accurate band scores calculations with expert feedback option.</p>
        <div class="section-buttons">
          <a href="{{ config('services.writing_test.url') }}/auth/login" class="btn-brand">Solve a Writing Test</a>
          <a href="https://ieltsprepandpractice.com/category/ielts-writing/" class="btn-brand-outline">Tips for IELTS Writing</a>
        </div>
        <div class="feature-grid">
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Task 1 &amp; Task 2 practice</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Academic &amp; GT writing modules</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>60-minute countdown timer</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Live word count tracker</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>AI-powered instant scoring</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>4 criteria band score breakdown</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Optional expert human feedback</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Sample band 9 model answers</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ SECTION 4: Listening ============ -->
<section class="section alt" id="section4" aria-labelledby="listening-heading">
  <div class="section-bg" style="background-image:url('{{ asset('page-assets/computer-based-practice-test/images/listening-bg.webp') }}')"></div>
  <div class="section-inner">
    <div class="section-layout">
      <div class="section-icon" aria-hidden="true">
        <svg viewBox="0 0 24 24"><path d="M3 18v-6a9 9 0 0 1 18 0v6"/><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3z"/><path d="M3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"/></svg>
      </div>
      <div class="section-content">
        <h2 id="listening-heading">Practice IELTS Listening Test</h2>
        <p>Practice all four parts of IELTS listening similar to the actual exam. Get accurate band scores with correct answers for improvements.</p>
        <div class="section-buttons">
          <a href="{{ route('general.training.test') }}?type=2" class="btn-brand">Solve a Listening Test</a>
          <a href="https://ieltsprepandpractice.com/category/ielts-listening/" class="btn-brand-outline">Tips for IELTS Listening</a>
        </div>
        <div class="feature-grid">
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>All 4 parts of IELTS Listening</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>40 questions per full test</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Native speaker audio recordings</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>British, Australian &amp; US accents</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Conversations &amp; monologues</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Instant correct answers shown</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Detailed band score calculation</span></div>
          <div class="feature-card"><div class="feature-card-icon"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/></svg></div><span>Audio playback controls</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ FAQ SECTION ============ -->
<section style="background:#f8fafc;padding:64px 0;">
  <div style="max-width:900px;margin:0 auto;padding:0 20px;">
    <h2 style="font-size:26px;font-weight:800;color:#1a2b4b;margin-bottom:32px;">Frequently asked Questions (FAQs)</h2>
    <div id="cbtFaq">

      <style>
        .cbt-faq-item { background:#fff; border-radius:12px; margin-bottom:10px; box-shadow:0 2px 8px rgba(0,0,0,0.07); overflow:hidden; }
        .cbt-faq-btn { width:100%; background:none; border:none; padding:18px 20px; text-align:left; font-size:15px; font-weight:600; color:#1a2b4b; cursor:pointer; display:flex; justify-content:space-between; align-items:center; gap:12px; }
        .cbt-faq-btn:hover { background:#f0fafb; }
        .cbt-faq-icon { flex-shrink:0; width:22px; height:22px; background:#17a2b8; border-radius:50%; display:flex; align-items:center; justify-content:center; transition:transform .25s; }
        .cbt-faq-icon svg { width:12px; height:12px; stroke:#fff; stroke-width:2.5; fill:none; }
        .cbt-faq-btn.open .cbt-faq-icon { transform:rotate(45deg); }
        .cbt-faq-body { max-height:0; overflow:hidden; transition:max-height .3s ease; }
        .cbt-faq-body-inner { padding:0 20px 18px; color:#6b7280; font-size:14px; line-height:1.75; }
      </style>

      @php
        $cbtFaqs = [
          ['q'=>'Is a keyboard provided in the computer-based IELTS test?','a'=>'Yes, a keyboard is provided at the IELTS computer-based test centre for the Writing and Listening sections where typed responses are required. You will not need to bring your own keyboard or any other equipment. It is recommended to practise typing beforehand if you are not comfortable using a keyboard under timed conditions.'],
          ['q'=>'Can I move between parts during the computer-based IELTS test?','a'=>'Within each section, you can navigate between questions and review or change your answers before the section ends. However, once you have submitted a section or time runs out, you cannot go back to previous sections. It is important to manage your time carefully within each section to review your answers before submitting.'],
          ['q'=>'When will I get my results for the computer-based IELTS test?','a'=>'Results for the computer-based IELTS test are typically available within 3 to 5 days of your test date. This is significantly faster than the paper-based IELTS, which usually takes around 13 days. You can view your results online through your British Council or IDP test taker portal.'],
          ['q'=>'What are the main advantages of computer-based IELTS?','a'=>'The key advantages include faster results (3–5 days), more available test dates, the ability to type Writing responses (generally neater), on-screen highlighting and navigation tools for Reading, and a familiar digital environment for those accustomed to working on computers.'],
          ['q'=>'Can I highlight text during the computer-based IELTS Reading test?','a'=>'Yes, the computer-based IELTS Reading interface includes a highlighting tool that allows you to mark text on screen while you read. You can also flag questions for review and navigate between questions easily. These tools can help with your reading strategy, especially for locating key information and revisiting difficult questions before time expires.'],
          ['q'=>'Is computer-based IELTS more difficult than paper-based IELTS?','a'=>'The test content — questions, texts, and scoring — is identical for both formats. The difference is your comfort level with the format. Candidates who are comfortable typing and reading on screens may find CBT easier, while those who prefer writing by hand may prefer the paper-based version. Practising with CBT-style tests beforehand is strongly recommended.'],
          ['q'=>'How do I choose between computer-based and paper-based IELTS?','a'=>'Choose the format based on your personal comfort. If you type quickly and read comfortably on screen, CBT may give you an advantage — especially for Writing. If you prefer writing by hand and annotating printed text, the paper-based test may suit you better. Practising on both formats before deciding is a good strategy.'],
          ['q'=>'Is paper-based IELTS being phased out?','a'=>'Paper-based IELTS is still available, but computer-based IELTS is growing rapidly in availability and popularity. Many test centres now primarily offer the computer-based format due to its efficiency and faster results. Computer-based IELTS is increasingly becoming the standard option at most centres worldwide.'],
          ['q'=>'Can I take a mixed format test — one module paper and another on computer?','a'=>'No, you must take all modules (Listening, Reading, and Writing) in the same format — either all on computer or all on paper. You cannot mix formats within a single booking. The Speaking module is always conducted face-to-face with an examiner regardless of format.'],
          ['q'=>'Is IELTS Reading harder on a computer screen?','a'=>'Some candidates find reading long passages on screen more tiring than on paper. However, the on-screen tools such as highlighting and easy question navigation can offset this. The key is to practise with computer-based practice tests so that reading on screen becomes familiar and comfortable before your actual test day.'],
          ['q'=>'Does spelling matter in computer-based IELTS?','a'=>'Yes, spelling is important, particularly in Listening and Reading where you must write words or short answers. Incorrect spelling will result in a wrong answer. In Writing, spelling errors can reduce your Lexical Resource score. Both British and American spelling are accepted.'],
          ['q'=>'How fast do I need to type for the computer-based IELTS Writing section?','a'=>'There is no minimum typing speed required. However, you should be comfortable enough to write 250+ words in 40 minutes for Task 2 and 150+ words in 20 minutes for Task 1 without significant difficulty. Practising typing regularly in the weeks before your test is strongly recommended.'],
          ['q'=>'Is there a free Academic computer-based IELTS practice test available?','a'=>'Yes, you can practise free IELTS Academic computer-based practice tests on this platform. Our free tests include Academic Reading and Listening with instant band scores and correct answers. For the full range including Writing, our premium package provides 30 Listening, 30 Reading, and 28 Academic Writing tests.'],
          ['q'=>'Is there a free General Training computer-based IELTS practice test available?','a'=>'Yes, free IELTS General Training computer-based practice tests for Reading and Listening are available on this platform with instant band scores and correct answers at no cost. Our premium package includes 30 General Training Writing tests alongside all other test types.'],
        ];
      @endphp

      @foreach($cbtFaqs as $fi => $faq)
      <div class="cbt-faq-item">
        <button class="cbt-faq-btn" type="button" data-faq="{{ $fi }}">
          <span>{{ $faq['q'] }}</span>
          <span class="cbt-faq-icon"><svg viewBox="0 0 12 12"><line x1="6" y1="1" x2="6" y2="11"/><line x1="1" y1="6" x2="11" y2="6"/></svg></span>
        </button>
        <div class="cbt-faq-body" id="cbt-faq-body-{{ $fi }}">
          <div class="cbt-faq-body-inner">{{ $faq['a'] }}</div>
        </div>
      </div>
      @endforeach

    </div>
  </div>
  <script>
    (function(){
      var btns = document.querySelectorAll('.cbt-faq-btn');
      btns.forEach(function(btn){
        btn.addEventListener('click', function(){
          var idx = this.getAttribute('data-faq');
          var body = document.getElementById('cbt-faq-body-' + idx);
          var isOpen = this.classList.contains('open');
          // close all
          btns.forEach(function(b){ b.classList.remove('open'); });
          document.querySelectorAll('.cbt-faq-body').forEach(function(b){ b.style.maxHeight = '0'; });
          if(!isOpen){
            this.classList.add('open');
            body.style.maxHeight = body.scrollHeight + 'px';
          }
        });
      });
    })();
  </script>
</section>

<!-- ============ FOOTER ============ -->
<footer>
  <div class="footer-inner">
    <p><a href="{{ url('/') }}">cbt.ieltsprepandpractice.com</a></p>
    <p class="copyright">&copy; {{ date('Y') }} IELTS Prep and Practice. All rights reserved.</p>
    <p class="disclaimer">IELTS is a registered trademark. This site is not affiliated with or endorsed by IELTS partners.</p>
  </div>
</footer>

<script src="{{ asset('page-assets/computer-based-practice-test/script.js') }}"></script>
</body>
</html>
