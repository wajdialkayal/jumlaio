<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="icon" type="image/ico" href="@yield('favicon', url('favicon.ico'))">
    <meta name="keywords" content="@yield('meta-keywords', config('app.name'))">
    <meta name="description" content="@yield('meta-description', config('app.name'))">
    <link rel="apple-touch-icon" href="@yield('apple-touch-icon', url('apple-touch-icon.png'))">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', __('Jumla'))</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @stack('styles')
</head>

<body>
    <div id="app">
        @include('page.layouts.navbar')
        @include('page.layouts.middle-bar')
        @include('page.layouts.banners')

        <main class="py-4">
            @yield('content')
        </main>
        @include('page.layouts.back-to-top-btn')

    </div>
    @include('page.layouts.footer')
    <script src="{{ mix('js/app.js') }}"></script>
    <script>
        var t = $(window).height() / 2;
        $(window).on("scroll", function() {
            $(this).scrollTop() > t ? $("#back_to_top_page").css("display", "flex") : $("#back_to_top_page")
                .css(
                    "display", "none")
        }), $("#back_to_top_page").on("click", function() {
            $("html, body").animate({
                scrollTop: 0
            }, 0);
        });

    </script>
    @stack('scripts')
</body>

</html>
