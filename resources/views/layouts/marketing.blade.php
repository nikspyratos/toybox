<!DOCTYPE html>
 <html lang="en">
<head>
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Toybox') }}</title>

    <!-- Meta SEO -->
    <meta name="title" content="{{ config('app.name', 'Toybox') }}">
    <meta name="description" content="">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Nik.Software">

    <!-- Social media share -->
    <meta property="og:title" content="{{ config('app.name', 'Toybox') }}">
    <meta property="og:site_name" content="{{ config('app.name', 'Toybox') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:description" content="A TALL stack starter kit for solopreneurs">
    <meta property="og:type" content="">
    <meta property="og:image" content="{{ asset('images/toybox-cover.png') }}">
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@nikspyratos" />
    <meta name="twitter:creator" content="@nikspyratos" />

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('safari-pinned-tab.svg') }}" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @include('layouts.marketing.navigation')
    @yield('content')
    @include('layouts.marketing.footer')
</body>
</html>
