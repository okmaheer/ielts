@php
    // Detect test type from current URL
    $currentUrl = Request::url();
    $isListening = str_contains($currentUrl, '/listening/');
    $isReading = str_contains($currentUrl, '/reading/');
    
    // Get appropriate meta data based on URL
    $metaTitle = 'IPP - IELTS Computer Based Test';
    $metaDescription = 'Prepare for the IELTS exam with Cambridge IELTS practice test. Get authentic, and expert-designed resources.';
    $focusKeywords = null;
    
    if (isset($test)) {
        if ($isListening) {
            $metaTitle = $test->getMetaTitle('listening');
            $metaDescription = $test->getMetaDescription('listening');
            $focusKeywords = $test->getFocusKeywords('listening');
        } elseif ($isReading) {
            $metaTitle = $test->getMetaTitle('reading');
            $metaDescription = $test->getMetaDescription('reading');
            $focusKeywords = $test->getFocusKeywords('reading');
        }
    }
@endphp

<meta charset="utf-8">

{{-- Dynamic Meta Title --}}
<title>{{ $metaTitle }}</title>

<meta content="width=device-width, initial-scale=1.0" name="viewport">

{{-- Dynamic Meta Description --}}
<meta name="description" content="{{ $metaDescription }}">

{{-- Dynamic Keywords (SEO) --}}
@if($focusKeywords)
<meta name="keywords" content="{{ $focusKeywords }}">
@endif

{{-- Canonical URL --}}
@php
    $canonicalUrl = Request::url();

    // Override canonical URL for specific routes
    if (Request::is('academic/test*')) {
        $canonicalUrl = 'https://cbt.ieltsprepandpractice.com/academic/test?type=1';
    } elseif (Request::is('general-training/test*')) {
        $canonicalUrl = 'https://cbt.ieltsprepandpractice.com/general-training/test?type=1';
    }
@endphp
<link rel="canonical" href="{{ $canonicalUrl }}">

{{-- Open Graph Tags for Social Media --}}
<meta property="og:title" content="{{ $metaTitle }}">
<meta property="og:description" content="{{ $metaDescription }}">
<meta property="og:url" content="{{ Request::url() }}">
<meta property="og:type" content="website">
<meta property="og:image" content="{{ asset('frontend/logo/logo.png') }}">
<meta property="og:site_name" content="IELTS Prep And Practice">

{{-- Twitter Card Tags --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $metaTitle }}">
<meta name="twitter:description" content="{{ $metaDescription }}">
<meta name="twitter:image" content="{{ asset('frontend/logo/logo.png') }}">

<!-- Favicon -->
<link href="{{ asset('frontend/logo/fv.png')}}" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="{{ asset('frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
<link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="{{ asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{ asset('frontend/css/style.css')}}" rel="stylesheet">