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

    <!-- ====== Header ====== -->
    <header id="header" class="header">
        <!-- ====== Navbar ====== -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand logo" href="/">
                    <img src="{{ asset('logo.png') }}" alt="logo">
                    <span
                        style="margin-left: -6%; color: white; text-transform: uppercase; font-size: 22px; font-weight: 700;">Annotation<span
                            class="logo-text" style="color: #000;">bd</span></span>
                </a>
                <!-- // Logo -->

                <!-- Mobile Menu -->
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-expanded="false"><span><i
                            class="fa fa-bars"></i></span></button>
                <!-- Mobile Menu -->

                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="/">HOME</a></li>
                        <li class="nav-item"><a class="nav-link active" href="/blog">BLOG</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ====== // Navbar ====== -->

        <div class="page-title bg-img section-padding bg-overlay"
            style="background-image: url({{ asset('portfolio/images/breadcrumb.jpg') }})">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2>Blog</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ====== // Header ====== -->

    @if (isset($data['blogs']))
        <section class="blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-area">
                            <div class="row">
                                @foreach ($data['blogs'] as $blog)
                                @php
                                    $media = DB::table('media')->where('type', 'blogs')->where('rel_id', $blog->id)->value('link');
                                @endphp
                                <!-- Single Blog -->
                                <div class="col-sm-4">
                                    <div class="single-blog">
                                        <div class="blog-thumb"
                                            style="background-image: url({{ asset($media) }})"></div>
                                        <h4 class="blog-title"><a href="{{ route('blog-details', $blog->id) }}">{{ $blog->title }}</a></h4>
                                        <p class="blog-meta"><a href="#">{{ get_username() }}</a>, {{ date('d M Y', strtotime($blog->created_at)) }}</p>
                                        <p style="min-height: 100px; max-height: 100px;">{{ strip_tags(substr($blog->description, 0, 150))."..." }}</p>
                                        <a href="{{ route('blog-details', $blog->id) }}" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                @endforeach
                            </div>
                            <div class="row justify-content-center">
                                @if($data['blogs']->hasPages()	)
                                <div class="col-lg-6 text-center">
                                    {{-- <a href="#" class="button blog-btn">Load More</a> --}}
                                    {{ $data['blogs']->links() }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @else
        <section class="blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="blog-area">
                            <div class="row">
                                <!-- Single Blog -->
                                <div class="col-sm-4">
                                    <div class="single-blog">
                                        <div class="blog-thumb"
                                            style="background-image: url(assets/images/blog/img-1.jpg)"></div>
                                        <h4 class="blog-title"><a href="#">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque
                                            similique velit, officiis non.</p>
                                        <a href="#" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-4">
                                    <div class="single-blog">
                                        <div class="blog-thumb"
                                            style="background-image: url(assets/images/blog/img-2.jpg)"></div>
                                        <h4 class="blog-title"><a href="#">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque
                                            similique velit, officiis non.</p>
                                        <a href="#" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-4">
                                    <div class="single-blog">
                                        <div class="blog-thumb"
                                            style="background-image: url(assets/images/blog/img-3.jpg)"></div>
                                        <h4 class="blog-title"><a href="#">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque
                                            similique velit, officiis non.</p>
                                        <a href="#" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-4">
                                    <div class="single-blog">
                                        <div class="blog-thumb"
                                            style="background-image: url(assets/images/blog/img-4.jpg)"></div>
                                        <h4 class="blog-title"><a href="#">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque
                                            similique velit, officiis non.</p>
                                        <a href="#" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-4">
                                    <div class="single-blog">
                                        <div class="blog-thumb"
                                            style="background-image: url(assets/images/blog/img-5.jpg)"></div>
                                        <h4 class="blog-title"><a href="#">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque
                                            similique velit, officiis non.</p>
                                        <a href="#" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-4">
                                    <div class="single-blog">
                                        <div class="blog-thumb"
                                            style="background-image: url(assets/images/blog/img-6.jpg)"></div>
                                        <h4 class="blog-title"><a href="#">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque
                                            similique velit, officiis non.</p>
                                        <a href="#" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-4">
                                    <div class="single-blog">
                                        <div class="blog-thumb"
                                            style="background-image: url(assets/images/blog/img-7.jpg)"></div>
                                        <h4 class="blog-title"><a href="#">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque
                                            similique velit, officiis non.</p>
                                        <a href="#" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-4">
                                    <div class="single-blog">
                                        <div class="blog-thumb"
                                            style="background-image: url(assets/images/blog/img-8.jpg)"></div>
                                        <h4 class="blog-title"><a href="#">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque
                                            similique velit, officiis non.</p>
                                        <a href="#" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-lg-6 text-center">
                                    <a href="#" class="button blog-btn">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="col-lg-3">
                        <div class="blog-sidebar">
                            <!-- Sidebar Widget -->
                            <div class="sidebar-widget">
                                <h2 class="sidebar-title">Search here</h2>
                                <form action="" method="get">
                                    <input type="search" placeholder="Search">
                                    <button><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            <!-- Sidebar Widget -->

                            <!-- Sidebar Widget -->
                            <div class="sidebar-widget">
                                <h2 class="sidebar-title">Categories</h2>
                                <ol>
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Idea</a></li>
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">HTML Template</a></li>
                                    <li><a href="#">Wordpress</a></li>
                                    <li><a href="#">Other</a></li>
                                </ol>
                            </div>
                            <!-- Sidebar Widget -->

                            <!-- Sidebar Widget -->
                            <div class="sidebar-widget">
                                <h2 class="sidebar-title">RECENT POSTS</h2>
                                <ol class="recent-post">
                                    <!-- Single Recent Post -->
                                    <li>
                                        <span style="background-image: url(assets/images/blog/img-1.jpg)"></span>
                                        <div class="blog-content">
                                            <a href="#">Lorem ipsum dolor sit amet onsectetur</a>
                                            <div class="blog-date">22 FEB 2018</div>
                                        </div>
                                    </li>
                                    <!-- Single Recent Post -->
                                    <!-- Single Recent Post -->
                                    <li>
                                        <span style="background-image: url(assets/images/blog/img-2.jpg)"></span>
                                        <div class="blog-content">
                                            <a href="#">Lorem ipsum dolor sit amet onsectetur</a>
                                            <div class="blog-date">22 FEB 2018</div>
                                        </div>
                                    </li>
                                    <!-- Single Recent Post -->
                                    <!-- Single Recent Post -->
                                    <li>
                                        <span style="background-image: url(assets/images/blog/img-3.jpg)"></span>
                                        <div class="blog-content">
                                            <a href="#">Lorem ipsum dolor sit amet onsectetur</a>
                                            <div class="blog-date">22 FEB 2018</div>
                                        </div>
                                    </li>
                                    <!-- Single Recent Post -->
                                    <!-- Single Recent Post -->
                                    <li>
                                        <span style="background-image: url(assets/images/blog/img-4.jpg)"></span>
                                        <div class="blog-content">
                                            <a href="#">Lorem ipsum dolor sit amet onsectetur</a>
                                            <div class="blog-date">22 FEB 2018</div>
                                        </div>
                                    </li>
                                    <!-- Single Recent Post -->
                                </ol>
                            </div>
                            <!-- Sidebar Widget -->

                            <!-- Sidebar Widget -->
                            <div class="sidebar-widget">
                                <h2 class="sidebar-title">POPULAR TAGS</h2>
                                <ol class="tags">
                                    <li><a href="#">Design</a></li>
                                    <li><a href="#">Creative</a></li>
                                    <li><a href="#">Idea</a></li>
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">HTML Template</a></li>
                                    <li><a href="#">Wordpress</a></li>
                                    <li><a href="#">Other</a></li>
                                </ol>
                            </div>
                            <!-- Sidebar Widget -->
                        </div>
                    </div>
                    <!-- // Sidebar -->
                </div>
            </div>
        </section>
    @endif


    <!-- ====== Footer Area ====== -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="copyright-text">
                        <p class="text-white">&copy; 2024 <a href="https://www.annotationbd.com/">Copyright ©
                                annotationbd</a></p>
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
    <script src="{{ asset('portfolio/js/main.js') }}"></script>

</body>

</html>
