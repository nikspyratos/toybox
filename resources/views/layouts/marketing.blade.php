<!DOCTYPE html>
 <html lang="en">
<head>
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle') | {{ config('app.name', 'Toybox') }}</title>

    <!-- Meta SEO -->
    <meta name="title" content="@yield('pageTitle') | {{ config('app.name', 'Toybox') }}">
    <meta name="description" content="@yield('pageDescription', config('app.default_description', ''))">
    <meta name="robots" content="{{ config('app.default_robots') }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="@yield('pageAuthor', config('app.name', 'Toybox'))">

    <!-- Social media share -->
    <meta property="og:title" content="@yield('pageTitle') | {{ config('app.name', 'Toybox') }}">
    <meta property="og:site_name" content="{{ config('app.name', 'Toybox') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:description" content="@yield('pageDescription', config('app.default_description', ''))">
    <meta property="og:type" content="@yield('pageOgType', '')">
    @yield('ogArticleData')
    <meta property="og:image" content="@yield('pageImage', asset('images/toybox-cover.png'))">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="@yield('pageDescription', config('app.default_description', ''))">
    <meta name="twitter:description" content="@yield('pageDescription', config('app.default_description', ''))">
    <meta name="twitter:site" content="@" />
    <meta name="twitter:creator" content="@" />
    @yield('ld-json', '')

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    @vite(['resources/css/app.css', 'resources/css/toybox.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    @include('layouts.marketing.navigation')
    <main>
        @yield('content')
    </main>
    @include('layouts.marketing.footer')
    @livewireScripts
</body>
</html>
