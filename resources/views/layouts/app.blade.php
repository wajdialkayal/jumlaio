<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="icon" type="image/ico" href="/favicon.ico">
    <meta name="keywords" content="@yield('meta-keywords','') ">
    <meta name="description" content="@yield('meta-description', '')">
    <meta property="og:title" content="@yield('meta-og-title', config('app.name') )" />
    <meta property="og:description" content="@yield('meta-og-description', ' ')" />
    <meta property="og:image" content="/share.png" />
    <meta name="language" content="{{ str_replace('_', '-', app()->getLocale()) }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#111111">
    <meta name="theme-color" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', __('Jumla'))</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>
    <div id="app">
        @include('layouts.navbar')

        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.back-to-top-btn')
        @include('layouts.footer')
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
    @stack('scripts')
</body>
</html>
