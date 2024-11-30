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
                    @if(isset($data['website_settings']['logo']))
                    <img src="{{ asset($data['website_settings']['logo']) }}" alt="" style="margin-right: 6%;"/>
                    @else
                    <img src="{{ asset('logo.png') }}" alt="logo">
                    @endif
                    <span class="main-text-logo" style="margin-left: -6%; color: #ffc900; text-transform: uppercase; font-size: 22px; font-weight: 700;">Annotation<span class="logo-text" style="color: #000;">bd</span></span>
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
                        <!--<li class="nav-item"><a class="nav-link" href="#about">ABOUT</a></li>-->
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
    <footer class="footer-section">
        <div class="container">
            
          <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="navbar-brand logo">
                                <a href="#home">
                                    @if(isset($data['website_settings']['logo']))
                                    <img src="{{ asset($data['website_settings']['logo']) }}" alt="" style="margin-right: 6%;"/>
                                    @else
                                    <img src="{{ asset('logo.png') }}" alt="logo">
                                    @endif
                                    <span class="main-text-logo" style="margin-left: -6%; color: #ffc900; text-transform: uppercase; font-size: 22px; font-weight: 700;">Annotation<span class="logo-text" style="color: #000;">bd</span></span>
                                </a>
                            </div>
                            <div class="footer-text">
                                @if(isset($data['personal_info']['about_me']))
                                {!! $data['personal_info']['about_me'] !!}
                                @else
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis numquam ipsam ut deleniti perferendis aliquid ullam, voluptatibus nam sunt eum laudantium cupiditate iste, obcaecati deserunt dolores aliquam quia cum minus animi ipsa est facere culpa fugiat, maxime quam! Itaque aperiam sequi accusantium impedit recusandae nobis quod sunt deserunt provident omnis.
                                </p>
                                @endif
                            </div>
                            <div class="footer-social-icon">
                                @if(isset($data['social_info']) and array_key_exists('linkedin_url', $data['social_info']))
                                <a href="https://www.linkedin.com/in/{{ $data['social_info']['linkedin_url'] }}" target="_blank"><i class="fab fa-linkedin linkedin-bg"></i></a>
                                @else
                                <a href="#"><i class="fab fa-linkedin linkedin-bg"></i></a>
                                @endif
                                @if(isset($data['social_info']) and array_key_exists('fiverr_url', $data['social_info']))
                                <a href="https://www.fiverr.com/{{ $data['social_info']['fiverr_url'] }}" target="_blank"><img src="{{asset('fiverr.ico')}}" alt="" width="40" height="40"></a>
                                @else
                                <a href="#"><img src="{{asset('fiverr.ico')}}" alt="" width="40" height="40"></a>
                                @endif
                                @if(isset($data['social_info']) and array_key_exists('upwork_url', $data['social_info']))
                                <a href="https://www.upwork.com/{{ $data['social_info']['upwork_url'] }}" target="_blank"><img src="{{asset('upwork.ico')}}" alt="" width="40" height="40"></i></a>
                                @else
                                <a href="#"><img src="{{asset('upwork.ico')}}" alt="" width="40" height="40"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#service">Services</a></li>
                                <li><a href="#pricing">Pricing</a></li>
                                <li><a href="#portfolio">Portfolio</a></li>
                                <li><a href="#blog">Blog</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Get in Touch</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p><i class="icon fas fa-envelope"></i> &nbsp; @if(isset($data['personal_info']['email'])) {{ $data['personal_info']['email'] }} @else annotationbd@gmail.com  @endif</p>
                                <p><i class="icon fas fa-phone"></i>&nbsp; @if(isset($data['personal_info']['phone'])) {{ $data['personal_info']['phone'] }} @else +0000000000  @endif</p>
                                <p><i class="icon fas fa-map-marker-alt"></i>&nbsp; @if(isset($data['personal_info']['address'])) {{ $data['personal_info']['address'] }} @else Dhaka, Bangladesh  @endif</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="copyright-text">
                            <p class="text-white">&copy; 2024 <a href="https://www.annotationbd.com/">Copyright © annotationbd</a></p>
                        </div>
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
