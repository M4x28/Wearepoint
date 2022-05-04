<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Wearepoint') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Favicon Tags Start -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57"
        href="{{ URL::asset('front-end/img/favicon/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114"
        href="{{ URL::asset('front-end/img/favicon/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72"
        href="{{ URL::asset('front-end/img/favicon/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144"
        href="{{ URL::asset('front-end/img/favicon/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60"
        href="{{ URL::asset('front-end/img/favicon/apple-touch-icon-60x60.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120"
        href="{{ URL::asset('front-end/img/favicon/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76"
        href="{{ URL::asset('front-end/img/favicon/apple-touch-icon-76x76.png') }}" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152"
        href="{{ URL::asset('front-end/img/favicon/apple-touch-icon-152x152.png') }}" />
    <link rel="icon" type="image/png" href="{{ URL::asset('front-end/img/favicon/favicon-196x196.png') }}"
        sizes="196x196" />
    <link rel="icon" type="image/png" href="{{ URL::asset('front-end/img/favicon/favicon-96x96.png') }}"
        sizes="96x96" />
    <link rel="icon" type="image/png" href="{{ URL::asset('front-end/img/favicon/favicon-32x32.png') }}"
        sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ URL::asset('front-end/img/favicon/favicon-16x16.png') }}"
        sizes="16x16" />
    <link rel="icon" type="image/png" href="{{ URL::asset('front-end/img/favicon/favicon-128.png') }}"
        sizes="128x128" />
    <meta name="application-name" content="Wearepoint" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="{{ URL::asset('front-end/img/favicon/mstile-144x144.png') }}" />
    <meta name="msapplication-square70x70logo"
        content="{{ URL::asset('front-end/img/favicon/mstile-70x70.png') }}" />
    <meta name="msapplication-square150x150logo"
        content="{{ URL::asset('front-end/img/favicon/mstile-150x150.png') }}" />
    <meta name="msapplication-wide310x150logo"
        content="{{ URL::asset('front-end/img/favicon/mstile-310x150.png') }}" />
    <meta name="msapplication-square310x310logo"
        content="{{ URL::asset('front-end/img/favicon/mstile-310x310.png') }}" />

    <!-- Font Tags Start -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="{{ URL::asset('front-end/font/CS-Interface/style.css') }}" />
    <!-- Font Tags End -->

    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="{{ URL::asset('front-end/css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('front-end/css/vendor/OverlayScrollbars.min.css') }}" />
    <!-- Vendor Styles End -->

    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="{{ URL::asset('front-end/css/styles.css') }}" />
    <!-- Template Base Styles End -->

    <script src="{{ URL::asset('front-end/js/base/loader.js') }}"></script>
</head>

<body class="h-100 fixed-background">
    <div id="root" class="h-100">

        <div class="container-fluid p-0 h-100 position-relative">
            <div class="row g-0 h-100">
                @yield("main")
            </div>
        </div>
    </div>

    <!-- Vendor Scripts Start -->
    <script src="{{ URL::asset('front-end/js/vendor/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/vendor/OverlayScrollbars.min.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/vendor/autoComplete.min.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/vendor/clamp.min.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/vendor/jquery.validate/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/vendor/jquery.validate/additional-methods.min.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/vendor/imask.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/vendor/select2.full.min.js') }}"></script>
    <!-- Vendor Scripts End -->

    <!-- Template Base Scripts Start -->
    <script src="{{ URL::asset('front-end/font/CS-Line/csicons.min.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/base/helpers.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/base/globals.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/base/nav.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/base/search.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/base/settings.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/base/init.js') }}"></script>
    <!-- Template Base Scripts End -->
    <!-- Page Specific Scripts Start -->
    <script src="{{ URL::asset('front-end/js/forms/controls.select2.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/forms/inputmask.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/pages/auth.login.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/common.js') }}"></script>
    <script src="{{ URL::asset('front-end/js/scripts.js') }}"></script>
    <!-- Page Specific Scripts End -->
</body>

</html>
