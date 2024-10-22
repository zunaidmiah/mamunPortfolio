<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <title>Elegance - Creative HTML5 Template</title>
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
                        Elegance
                    </a>
                    <div class="navigation-row">
                        <nav id="navigation">
                            <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
                            <div class="nav-box navbar-collapse">
                                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                                    <li data-menuanchor="slide01" class="active"><a href="#slide01">Home</a></li>
                                    <li data-menuanchor="slide02"><a href="#slide02">About Me</a></li>
                                    <li data-menuanchor="slide03"><a href="#slide03">Services</a></li>
                                    <li data-menuanchor="slide04"><a href="#slide04">My Skills</a></li>
                                    <li data-menuanchor="slide05"><a href="#slide05">My Work</a></li>
                                    <li data-menuanchor="slide06"><a href="#slide06">Testimonials</a></li>
                                    <li data-menuanchor="slide07"><a href="#slide07">Contact Me</a></li>
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
