<!doctype html>
<html lang="en-US" dir="rtl">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        {{ config('app.name') }}
    </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    @yield('before_css')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <!-- Typography CSS -->
    <link rel="stylesheet" href="{{ asset('css/typography.css') }}">
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- Responsive -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <!-- movies -->
    <link rel="stylesheet" href="{{ asset('css/movies.css') }}" />
    <!-- swiper -->
    <link rel="stylesheet" href="{{ asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    @livewireStyles
    <style>
        [dir="rtl"] .iq-rtl-direction {
            direction: rtl;
        }

        .sources-table td,
        .sources-table th {
            padding: 6px;
        }

        .source-list-content {
            max-height: none !important;
        }
    </style>
    @yield('after_css')
</head>

<body>
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    @include('include.header')
    @yield('banner')
    <div class="main-content">
        @yield('content')
    </div>
    <!-- MainContent End-->

    <!-- back-to-top -->
    <div id="back-to-top">
        <a class="top" href="#top" id="top"> <i class="fa fa-angle-up"></i> </a>
    </div>
    <!-- back-to-top End -->
    @yield('before_js')
    <!-- jQuery, Popper JS -->
    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- owl carousel Js -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- select2 Js -->
    <script src="{{ asset('js/select2.min.js') }}"></script>
    <!-- Magnific Popup-->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Custom JS-->
    <script src="{{ asset('js/custom.js') }}"></script>
    <!-- rtl -->
    <script src="{{ asset('js/rtl.js') }}"></script>
    <!-- Swiper JS -->
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    @livewireScripts
    @yield('after_js')
</body>

</html>
