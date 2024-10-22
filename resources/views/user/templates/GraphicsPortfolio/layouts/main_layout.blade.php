<!doctype html>
<html class="no-js" lang="zxx">


<head>
    <meta charset="utf-8">
    <title>@if(isset($data['website_settings']['title']))
        {{ ucfirst($data['page']) }} - {{ $data['website_settings']['title'] }}
    @else
        {{ "Star Labs Personal website" }}
    @endif</title>
    <link rel="icon" type="image/x-icon" href="@if(isset($data['website_settings']['favicon'])) {{ $data['website_settings']['favicon'] }}@endif">
    <meta name="description" content="Zunaid Miah - personal website template">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Zunaid Miah">

    {{-- <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('GraphicsPortfolio/img/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('GraphicsPortfolio/img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('GraphicsPortfolio/img/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('GraphicsPortfolio/img/apple-touch-icon-114x114.png') }}"> --}}

    <!-- All CSS Called Here -->
    <link rel="stylesheet" href="{{ asset('GraphicsPortfolio/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('GraphicsPortfolio/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('GraphicsPortfolio/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('GraphicsPortfolio/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('GraphicsPortfolio/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('GraphicsPortfolio/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('GraphicsPortfolio/css/responsive.css') }}">
    <meta name="theme-color" content="#f12365">
</head>

<body>
    <!--[if IE]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader"></div>
    </div> <!-- Preloader end -->

    <!-- Custom Cursor -->
    <div class="pointer" id="pointer"></div>
    <!-- Custom Cursor end -->

    <!-- Sidebar -->
    <header class="sidebar">
        <div class="backgroundShape-left"></div>
        <div class="sidebar-content clearfix">
            <!-- Main Menu Button -->
            <div class="menu-icon">
                <button id="nav_btn" class="pointer-open"><i class="fas fa-bars"></i></button>
            </div> <!-- Main Menu Button End -->
            <!-- My Image -->
            <div class="author-image theme-bg-color">
                <img src="@if($data['page_image']) {{ $data['page_image'] }} @else {{ asset($data['website_settings']['about_image']) }} @endif" alt="author-image">
            </div> <!-- My Image End -->
            <!-- My Social Links -->
            <div class="author-social-icons text-center">
                <ul>
                    {{-- <li><a href="#" class="pointer-href"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="pointer-href"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#" class="pointer-href"><i class="fas fa-basketball-ball"></i></a></li>
                    <li><a href="#" class="pointer-href"><i class="fab fa-behance"></i></a></li>
                    <li><a href="#" class="pointer-href"><i class="fab fa-linkedin-in"></i></a></li> --}}
                    @if(isset($data['social_info']))
                    @if(array_key_exists('facebook_url', $data['social_info']))
                    <li><a class="pointer-href" href="https://www.facebook.com/{{ $data['social_info']['facebook_url'] }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                    @endif
                    @if(array_key_exists('twitter_url', $data['social_info']))
                    <li><a class="pointer-href" href="https://www.twitter.com/{{ $data['social_info']['twitter_url'] }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    @endif
                    @if(array_key_exists('linkedin_url', $data['social_info']))
                    <li><a class="pointer-href" href="https://www.linkedin.com/in/{{ $data['social_info']['linkedin_url'] }}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                    @endif
                    @if(array_key_exists('instagram_url', $data['social_info']))
                    <li><a class="pointer-href" href="https://www.instagram.com/{{ $data['social_info']['instagram_url'] }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    @endif
                    @if(array_key_exists('github_url', $data['social_info']))
                    <li><a class="pointer-href" href="https://www.github.com/{{ $data['social_info']['github_url'] }}" target="_blank"><i class="fab fa-github" aria-hidden="true"></i></a></li>
                    @endif
                    @if(array_key_exists('youtube_url', $data['social_info']))
                    <li><a class="pointer-href" href="https://www.youtube.com/channel/{{ $data['social_info']['youtube_url'] }}" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                    @endif
                    @else
                    <li><a class="pointer-href" href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a class="pointer-href" href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="pointer-href" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a class="pointer-href" href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a class="pointer-href" href="#"><i class="fab fa-github" aria-hidden="true"></i></a></li>
                    <li><a class="pointer-href" href="#"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                    @endif
                </ul>
            </div> <!-- My Social Links End -->
            <!-- Copyright -->
            <div class="copyright-area text-center">
                <p><a href="#">{{ get_username() ?? "Star Labs" }} </a><span><script>document.write(new Date().getFullYear());</script></span></p>
            </div> <!-- Copyright End -->
        </div>
    </header> <!-- Sidebar end -->


    @yield('body')


    <!-- ======================================= -->
                    <!-- MAIN MENU -->
    <!-- ======================================= -->
    <!-- Menu Container -->
    <nav class="menu-container overlay-bg">
        <!-- Menu Close -->
        <div class="menu-close pointer-large"></div>

        <!-- Sub Menu Close -->
        <div class="submenu-close-box">
            <div class="submenu-close pointer-large">
                <button type="button"><i class="fas fa-arrow-left"></i>BACK</button>
            </div>
        </div><!-- Sub Menu Close End -->

        <!-- Main Menu -->
        <ul class="main-menu overlay-bg">
            <!-- Menu Box -->
            <li class="nav-box mouseover-image-change active">
                <a href="{{ route('homepage') }}" class="pointer-large nav-link">
                    <span class="nav-btn @if(isset($data['page']) and $data['page'] == 'home') {{ "active" }} @endif" data-text="home">.home</span>
                </a>
                <div class="mouseover-image" style="background-image: url(GraphicsPortfolio/img/nav-hover/home.png);"></div>
            </li><!-- Menu Box End -->
            <!-- Menu Box -->
            <li class="nav-box mouseover-image-change">
                <a href="{{ route('about') }}" class="pointer-large nav-link">
                    <span class="nav-btn @if(isset($data['page']) and $data['page'] == 'about') {{ "active" }} @endif" data-text="about">.about</span>
                </a>
                <div class="mouseover-image" style="background-image: url(GraphicsPortfolio/img/nav-hover/about.png);"></div>
            </li><!-- Menu Box End -->
            <!-- Menu Box -->
            <li class="nav-box mouseover-image-change">
                <a href="{{ route('resume') }}" class="pointer-large nav-link">
                    <span class="nav-btn @if(isset($data['page']) and $data['page'] == 'resume') {{ "active" }} @endif" data-text="resume">.resume</span>
                </a>
                <div class="mouseover-image" style="background-image: url(GraphicsPortfolio/img/nav-hover/resume.png);"></div>
            </li><!-- Menu Box End -->
            <!-- Menu Box -->
            <li class="nav-box mouseover-image-change submenu-open">
                <a href="{{ route('portfolio') }}" class="pointer-large nav-link">
                    <span class="nav-btn @if(isset($data['page']) and $data['page'] == 'portfolio') {{ "active" }} @endif" data-text="portfolio">.portfolio</span>
                </a>
                <!-- Sub Menu -->
                {{-- <ul class="submenu">
                    <li class="nav-box">
                        <a href="{{ route('portfolio') }}" class="pointer-large">
                            <span class="nav-btn" data-text="portfolio">.portfolio</span>
                        </a>
                    </li>
                    <li class="nav-box">
                        <a href="portfolio-archives.html" class="pointer-large">
                            <span class="nav-btn" data-text="portfolio archives">.portfolio archives</span>
                        </a>
                    </li>
                    <li class="nav-box">
                        <a href="portfolio-details.html" class="pointer-large">
                            <span class="nav-btn" data-text="portfolio details">.portfolio details</span>
                        </a>
                    </li>
                </ul><!-- Sub Menu End --> --}}
                <div class="mouseover-image" style="background-image: url(GraphicsPortfolio/img/nav-hover/portfolio.png);"></div>
            </li><!-- Menu Box End -->
            <!-- Menu Box -->
            <li class="nav-box mouseover-image-change submenu-open">
                <a href="{{ route('blog') }}" class="pointer-large nav-link">
                    <span class="nav-btn @if(isset($data['page']) and $data['page'] == 'blog') {{ "active" }} @endif" data-text="blog">.blog</span>
                </a>
                <!-- Sub Menu -->
                {{-- <ul class="submenu">
                    <li class="nav-box">
                        <a href="{{ route('blog') }}" class="pointer-large">
                            <span class="nav-btn" data-text="blog">.blog</span>
                        </a>
                    </li>
                    <li class="nav-box">
                        <a href="blog-details.html" class="pointer-large">
                            <span class="nav-btn" data-text="blog details">.blog details</span>
                        </a>
                    </li>
                </ul><!-- Submenu End --> --}}
                <div class="mouseover-image" style="background-image: url(GraphicsPortfolio/img/nav-hover/blog.png);"></div>
            </li><!-- Menu Box End -->
            <!-- Menu Box -->
            <li class="nav-box mouseover-image-change">
                <a href="{{ route('contact') }}" class="pointer-large nav-link">
                    <span class="nav-btn @if(isset($data['page']) and $data['page'] == 'contact') {{ "active" }} @endif" data-text="contact">.contact</span>
                </a>
                <div class="mouseover-image" style="background-image: url(GraphicsPortfolio/img/nav-hover/contact.png);"></div>
            </li><!-- Menu Box End -->
        </ul><!-- Main Menu End -->
    </nav><!-- Menu Container End -->
    <button id="back_to_top" class="btnEntrance pointer-href"><i class="fas fa-arrow-up"></i></button>

    <!-- All JS Called Here -->
    <script src="{{ asset('GraphicsPortfolio/js/vendor/modernizr-3.7.1.min.js') }}"></script>
    <script src="{{ asset('GraphicsPortfolio/js/vendor/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('GraphicsPortfolio/js/popper.min.js') }}"></script>
    <script src="{{ asset('GraphicsPortfolio/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('GraphicsPortfolio/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('GraphicsPortfolio/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('GraphicsPortfolio/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('GraphicsPortfolio/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('GraphicsPortfolio/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('GraphicsPortfolio/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('GraphicsPortfolio/js/particles.min.js') }}"></script>
    <script src="{{ asset('GraphicsPortfolio/js/app.js') }}"></script>
    <script src="{{ asset('GraphicsPortfolio/js/plugins.js') }}"></script>
    <script src="{{ asset('GraphicsPortfolio/js/contact-form.js') }}"></script>
    <script src="{{ asset('GraphicsPortfolio/js/main.js') }}"></script>
</body>


</html>
