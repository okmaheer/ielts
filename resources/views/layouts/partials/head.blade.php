        <title>@yield('meta_title', 'IPP')</title>
        <meta charset="utf-8" />
        <meta name="description" content="@yield('meta_description', '')">
        @hasSection('meta_keywords')
        <meta name="keywords" content="@yield('meta_keywords')">
        @endif
        <link rel="canonical" href="{{ Request::url() }}">
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<link href="{{ asset('frontend/logo/fv.png')}}" rel="icon">

		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/plugins/plugins.bundle.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('/css/plugins/datatables.bundle.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/plugins/fullcalendar.bundle.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/plugins/fonticons/fonticons.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/plugins/fontawesome/css/all.css') }}">

		<link rel="stylesheet" type="text/css" href="{{ asset('/css/style.bundle.css')}} " />
		<!--end::Global Stylesheets Bundle-->