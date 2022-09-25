<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>{{ config('app.name', 'BloodBank') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    {{-- <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/logo.png"> --}}
    {{-- <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/logo.png"> --}}
    {{-- ///////favicon////// --}}
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets') }}/img/favicons/logo.png">
    {{-- //////end////// --}}
    {{-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon/logo.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff"> --}}


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="{{ asset('assets') }}/css/theme.css" rel="stylesheet" />
    @yield('allcss')

</head>


<body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <div id="app">
        @include('inc.navbar')

        <main class="py-2">
            @yield('content')
        </main>
        @include('inc.footer')
    </div>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script async src="{{ asset('dist/purecounter') }}dist/purecounter.js"></script>
    <script src="{{ asset('vendors') }}/@popperjs/popper.min.js"></script>
    <script src="{{ asset('vendors') }}/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('vendors') }}/is/is.min.js"></script>
    <script src="{{ asset('assets') }}/https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('vendors') }}/fontawesome/all.min.js"></script>
    <script src="{{ asset('assets') }}/js/theme.js"></script>

    <link
        href="{{ asset('assets') }}/https://fonts.googleapis.com/css2?family=DM+Serif+Display&amp;family=Rubik:wght@300;400;500;600;700;800&amp;display=swap"
        rel="stylesheet">
</body>

</html>
