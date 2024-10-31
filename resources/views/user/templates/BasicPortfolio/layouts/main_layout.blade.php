<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <title>
        @if (isset($data['website_settings']['title']))
            {{ $data['website_settings']['title'] }}
        @else
            {{ 'Muhammad Mamun - Annotation Expert' }}
        @endif
    </title>
    <link rel="icon" type="image/x-icon"
        href="@if (isset($data['website_settings']['favicon'])) {{ $data['website_settings']['favicon'] }}@else{{ asset('favicon.ico') }} @endif">

    <!-- ====== Google Fonts ====== -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">

    <!-- ====== ALL CSS ====== -->
    <link rel="stylesheet" href="{{ asset('portfolio/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/style.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/css/responsive.css') }}">

</head>

<body data-spy="scroll" data-target=".navbar-nav">

    <!-- Preloader -->
    <div class="preloader">
        <div class="spinner">
            <div class="cube1"></div>
            <div class="cube2"></div>
        </div>
    </div>
    <!-- // Preloader -->


    <!-- ====== Header ====== -->
    <header id="header" class="header">
        <!-- ====== Navbar ====== -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand logo" href="/">
                    <img src="{{ asset('logo.png') }}" alt="logo">
                    <span style="margin-left: -6%; color: white; text-transform: uppercase; font-size: 22px; font-weight: 700;">Annotation<span class="logo-text" style="color: #000;">bd</span></span>
                </a>
                <!-- // Logo -->

                <!-- Mobile Menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-expanded="false"><span><i
                            class="fa fa-bars"></i></span></button>
                <!-- Mobile Menu -->

                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active"><a class="nav-link" href="#home">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">ABOUT</a></li>
                        <li class="nav-item"><a class="nav-link" href="#service">SERVICE</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pricing">PRICING</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">PORTFOLIO</a></li>
                        <li class="nav-item"><a class="nav-link" href="#blog">BLOG</a></li>
                        <li class="nav-item"><a class="nav-link pr0" href="#contact">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ====== // Navbar ====== -->
    </header>
    <!-- ====== // Header ====== -->

    @yield('body')

    <!-- ====== Footer Area ====== -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p class="text-white">&copy; 2024 <a href="https://www.annotationbd.com/">Copyright © annotationbd</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ====== // Footer Area ====== -->

    <!-- ====== ALL JS ====== -->
    <script src="{{ asset('portfolio/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('portfolio/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('portfolio/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('portfolio/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('portfolio/js/jquery.mixitup.js') }}"></script>
    <script src="{{ asset('portfolio/js/wow.min.js') }}"></script>
    <script src="{{ asset('portfolio/js/typed.js') }}"></script>
    <script src="{{ asset('portfolio/js/skill.bar.js') }}"></script>
    <script src="{{ asset('portfolio/js/fact.counter.js') }}"></script>
    <script src="{{ asset('portfolio/js/main.js') }}"></script>

</body>

</html>
