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
                        <h2>Blog/{{''}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ====== // Header ====== -->
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <!-- Blog Main Content -->
                <div class="col-lg-8">
                    <div class="blog-post">
                        <img src="@if(isset($data['blog_images']) and isset($data['blog_images'][0])) {{ asset($data['blog_images'][0]) }} @endif" alt="" class="blog-img">
                        <h4 class="blog-title"><a href="#">{{ $data['blog']['title'] }}</a></h4>
                        <p class="blog-meta"><a class="user-name" href="#">{{ get_username() }}</a><span class="blog-date">{{ date('d M Y', strtotime($data['blog']['created_at'])) }}</span><a href="#" class="blog-comment">Comments ({{ count($data['blog_comments']) }})</a></p>
                        <div class="blog-main-content">
                            {!! $data['blog']['description'] !!}
                        </div>
                        <!--  Blog Author -->
                        <div class="blog-author">
                            @php
                                $pos = DB::table('user_metas')->where('user_key', 'profession_name')->value('user_value');
                                $bio = DB::table('user_metas')->where('user_key', 'about_me')->value('user_value');
                                $image = DB::table('options')->where('option_key', 'about_image')->value('option_value')
                            @endphp
                            <div class="user-img" style="background-image: url({{ asset($image) }})"></div>
                            <div class="user-content">
                                <h2>{{ get_username() }} <span>{{ $pos }}</span></h2>
                                {!! $bio !!}
                                <!-- Social Area -->
                                <div class="social-aria text-left">
                                    @if(isset($data['social_info']))
                                    <a href="https://www.facebook.com/{{ $data['social_info']['facebook_url'] }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    @if(array_key_exists('facebook_url', $data['social_info']))
                                    @endif
                                    @if(array_key_exists('twitter_url', $data['social_info']))
                                    <a href="https://www.twitter.com/{{ $data['social_info']['twitter_url'] }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                    @endif
                                    @if(array_key_exists('linkedin_url', $data['social_info']))
                                    <a href="https://www.linkedin.com/in/{{ $data['social_info']['linkedin_url'] }}" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    @endif
                                    @if(array_key_exists('instagram_url', $data['social_info']))
                                    <a href="https://www.instagram.com/{{ $data['social_info']['instagram_url'] }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                    @endif
                                    {{-- @if(array_key_exists('github_url', $data['social_info']))
                                    <a href="https://www.github.com/{{ $data['social_info']['github_url'] }}" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
                                    @endif --}}
                                    @if(array_key_exists('youtube_url', $data['social_info']))
                                    <a href="https://www.youtube.com/channel/{{ $data['social_info']['youtube_url'] }}" target="_blank"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                                    @endif
                                    @endif
                                </div>
                                <!-- // Social Area -->
                            </div>
                        </div>
                        <!-- // Blog Author -->

                        <!-- Blog Comments -->
                        <div class="blog-comment">
                            <h3>Comments ({{ count($data['blog_comments']) }})</h3>
                            <ol class="main-comment">
                                @if(isset($data['blog_comments']))
                                @foreach ($data['blog_comments'] as $comment)
                                <li class="single-comment">
                                    <div class="comment">
                                        <div class="comment-user-img"
                                            style="background-image: url({{ asset('portfolio/images/team/img-2.jpg') }})"></div>
                                        <div class="comment-content">
                                            <h4>{{ $comment->name }}</h4>
                                            <p class="comment-date">{{ date('d M Y', strtotime($comment->created_at)) }}</p>
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                    </div>
                                    <!-- // Comment Content -->

                                    {{-- <ol class="sub-comment">
                                        <li class="single-comment">
                                            <!-- Comment Content -->
                                            <div class="comment">
                                                <div class="comment-user-img"
                                                    style="background-image: url(assets/images/team/img-1.jpg)"></div>
                                                <div class="comment-content">
                                                    <h4>AL Mamun</h4>
                                                    <p class="comment-date">20 Feb 2018</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel
                                                        nihil perspiciatis placeat minima dolores magnam odio
                                                        voluptatibus non. Ratione, ut, fugit.</p>
                                                    <a href="#"><i class="fa fa-reply"></i>Replay</a>
                                                </div>
                                            </div>
                                            <!-- // Comment Content -->
                                        </li>
                                    </ol> --}}
                                </li>
                                @endforeach
                                @endif
                            </ol>

                            <!-- Blog Comment Form -->
                            <div class="blog-comment-form">
                                {{-- <form action="#"> --}}
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p><input type="text" name="name" id="name" placeholder="Name" required></p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><input type="email" name="email" id="email" placeholder="Email" required></p>
                                        </div>
                                    </div>
                                    {{-- <p>
                                        <input type="text" placeholder="Website"></p>
                                    <p> --}}
                                        <textarea name="comment" id="comment" placeholder="Your Comments" required></textarea>
                                        <input type="hidden" name="id" id="id" value="{{ $data['blog']['id'] }}">
                                    </p>
                                    <div class="comment-btn text-center">
                                        <button class="button" type="button" onclick="comment()">Comment Now</button>
                                    </div>
                                {{-- </form> --}}
                            </div>
                            <!-- // Blog Comment Form -->
                        </div>
                        <!-- // Blog Comments -->

                    </div>
                </div>
                <!-- // Blog Main Content -->

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="blog-sidebar">
                        <!-- Sidebar Widget -->
                        {{-- <div class="sidebar-widget">
                            <h2 class="sidebar-title">Search here</h2>
                            <form action="blog.html" method="get">
                                <input type="search" placeholder="Search">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div> --}}
                        <!-- Sidebar Widget -->

                        <!-- Sidebar Widget -->
                        <div class="sidebar-widget">
                            <h2 class="sidebar-title">Categories</h2>
                            <ol>
                                @if(isset($data['blog_category']))
                                @foreach ($data['blog_category'] as $cat)
                                <li><a href="#">{{$cat}}</a></li>
                                @endforeach
                                @endif
                            </ol>
                        </div>
                        <!-- Sidebar Widget -->

                        <!-- Sidebar Widget -->
                        <div class="sidebar-widget">
                            <h2 class="sidebar-title">RECENT POSTS</h2>
                            <ol class="recent-post">
                                @if(isset($data['related_blogs']))
                                @foreach ($data['related_blogs'] as $blog)
                                @php
                                    $media = DB::table('media')->where('type', 'blogs')->where('rel_id', $blog->id)->value('link');
                                @endphp
                                <!-- Single Recent Post -->
                                <li>
                                    <span style="background-image: url({{ asset($media) }})"></span>
                                    <div class="blog-content">
                                        <a href="{{ route('blog-details', $blog->id) }}">{{ $blog->title }}</a>
                                        <div class="blog-date">{{ date('d M Y', strtotime($blog->created_at)) }}</div>
                                    </div>
                                </li>
                                @endforeach
                                @endif
                            </ol>
                        </div>
                        <!-- Sidebar Widget -->

                        <!-- Sidebar Widget -->
                        {{-- <div class="sidebar-widget">
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
                        </div> --}}
                        <!-- Sidebar Widget -->
                    </div>
                </div>
                <!-- // Sidebar -->
            </div>
        </div>
    </section>

    <script>
        function comment() {
            var name = jQuery('#name').val();
            var email = jQuery('#email').val();
            var comment = jQuery('#comment').val();
            var id = jQuery('#id').val();
            var time = "{{ date('d M, Y', strtotime('now')) }}";
            var image = "{{ asset('portfolio/images/team/img-2.jpg') }}";
            $.ajax({
                url: '/comment-db',
                type: 'POST',
                data: {
                    name: name,
                    email: email,
                    comment: comment,
                    _token: "{{ csrf_token() }}",
                    rel_id: id
                },
                success: function(res) {
                    $('.main-comment').prepend(`<li class="single-comment">
                                                <div class="comment">
                                                    <div class="comment-user-img"
                                                        style="background-image: url(`+image+`)"></div>
                                                    <div class="comment-content">
                                                        <h4>` + name + `</h4>
                                                        <p class="comment-date">` + time + `</p>
                                                        <p>`+comment+`</p>
                                                    </div>
                                                </div>
                                            </li>`);
                    $('.blog-comment-form').prepend(`<p style="color: green;"> Comment added </p>`);
                    jQuery('#name').val('');
                    jQuery('#email').val('');
                    jQuery('#comment').val('');
                    // $('html, body').animate({
                    //     scrollTop: $("#new-comment").offset().top
                    // }, 1000);
                },
                error: function() {
                    alert("Opps! something went wrong");
                }
            });
        }
    </script>

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
