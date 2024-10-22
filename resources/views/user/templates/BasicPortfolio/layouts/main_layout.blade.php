<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <title>
        @if(isset($data['website_settings']['title']))
                {{ $data['website_settings']['title'] }}
            @else
                {{ "Muhammad Mamun - Annotation Expert" }}
            @endif
    </title>
    <link rel="icon" type="image/x-icon" href="@if(isset($data['website_settings']['favicon'])){{ $data['website_settings']['favicon'] }}@else{{asset('favicon.ico')}}@endif">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset('portfolio/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('portfolio/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('portfolio/css/fullpage.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('portfolio/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/css/templatemo-style.css') }}">
    <link rel="stylesheet" href="{{ asset('portfolio/css/responsive.css') }}">
</head>

<body>
    <div id="video">
        <div class="preloader">
            <div class="preloader-bounce">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <header id="header">
            <div class="container-fluid">
                <div class="navbar" style="justify-content: space-evenly !important;">
                    <a href="#" id="logo" title="Elegance by TemplateMo">
                        <img src="{{ asset('logo.png') }}" alt="" width="120" height="100">
                        <span style="margin-left: -6%;">Annotation<span style="color: #06131E;">bd</span></span>
                    </a>
                    <div class="navigation-row">
                        <nav id="navigation">
                            <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                            <div class="nav-box navbar-collapse">
                                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                    <li data-menuanchor="home" class="active"><a href="#home">Home</a></li>
                                    <li data-menuanchor="about"><a href="#about">About Me</a></li>
                                    <li data-menuanchor="services"><a href="#services">Services</a></li>
                                    <li data-menuanchor="pricing"><a href="#pricing">Pricing</a></li>
                                    <li data-menuanchor="portfolios"><a href="#portfolios">My Work</a></li>
                                    <li data-menuanchor="testimonials"><a href="#testimonials">Testimonials</a></li>
                                    <li data-menuanchor="contact"><a href="#contact">Contact Me</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <video autoplay muted loop id="myVideo">
            <source src="{{ asset('portfolio/images/video-bg.mp4') }}" type="video/mp4">
        </video>
        <div id="fullpage" class="fullpage-default">

            @yield('body')

        </div>
        <div id="social-icons">
            <div class="text-right">
                <ul class="social-icons">
                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="{{ asset('portfolio/js/jquery.js') }}"></script>
    <script src="{{ asset('portfolio/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('portfolio/js/fullpage.min.js') }}"></script>
    <script src="{{ asset('portfolio/js/scrolloverflow.js') }}"></script>
    <script src="{{ asset('portfolio/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('portfolio/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('portfolio/js/form.js') }}"></script>
    <script src="{{ asset('portfolio/js/custom.js') }}"></script>
</body>

</html>
