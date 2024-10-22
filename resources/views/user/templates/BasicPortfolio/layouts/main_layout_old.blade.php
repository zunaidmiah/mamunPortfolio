<!DOCTYPE HTML>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            @if(isset($data['website_settings']['title']))
                {{ $data['website_settings']['title'] }}
            @else
                {{ "Star Labs Personal website" }}
            @endif
        </title>
        <link rel="icon" type="image/x-icon" href="@if(isset($data['website_settings']['favicon'])) {{ $data['website_settings']['favicon'] }}@endif">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.min.css" integrity="sha512-FEQLazq9ecqLN5T6wWq26hCZf7kPqUbFC9vsHNbXMJtSZZWAcbJspT+/NEAQkBfFReZ8r9QlA9JHaAuo28MTJA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href="https://fonts.googleapis.com/css?family=Saira:300,400,500,600,700&amp;display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:300i,400,400i,600,600i,700&amp;display=swap" rel="stylesheet">
        <!-- /Fonts -->

        <!-- Styles -->
        <link rel="stylesheet" href="{{  asset('one_page/css/plugins.css')  }}">
        <link rel="stylesheet" href="{{  asset('one_page/css/style.css')  }}">
        <link rel="stylesheet" href="{{  asset('one_page/css/responsive.css')  }}">
        <!-- /Styles -->

    </head>
    <body>

        <!-- Preloader -->
        @if(isset($data['page']) && $data['page'] == 'home')
        <div class="perker_loader-wrapper">
            <div class="loader"></div>
        </div>
        @endif
        <!-- /Preloader -->

        <!-- Wrapper All -->
        <div class="perker_wrap_all">

            <!-- Topbar -->
            <div class="perker_topbar">
                <div class="mainpart">
                    <div class="container">
                        <div class="inner">
                            <div class="logo">
                                @if(isset($data['website_settings']['logo_type']) and $data['website_settings']['logo_type'] == 'logo_text')
                                @if(isset($data['website_settings']['logo_text']))
                                <h1 style="color: #EA3509;">{{ $data['website_settings']['logo_text'] }}</h1>
                                @else
                                <h1 style="color: #EA3509;">Zunaid Miah</h1>
                                @endif
                                @elseif(isset($data['website_settings']['logo_type']) and $data['website_settings']['logo_type'] == 'logo_image')
                                @if(isset($data['website_settings']['logo_image']))
                                <a href="#"><img src="{{ asset($data['website_settings']['logo_image']) }}" alt="" /></a>
                                @endif
                                @else
                                <h1 style="color: #EA3509;">Star Labs</h1>
                                @endif
                            </div>
                            <div class="menu">
                                <ul>
                                    <li><a href="#home">Home</a></li>
                                    <li><a href="#about">About</a></li>
                                    <li><a href="#services">Services</a></li>
                                    <li><a href="#portfolio">Portfolio</a></li>
                                    <li><a href="#team">Team</a></li>
                                    <li><a href="#pricing">Pricing</a></li>
                                    <li><a href="#news">News</a></li>
                                    <li><a href="#contact">Contact</a></li>
                                </ul>
                            </div>
                            <div class="trigger">
                                <span class="menu"><a href="#">Menu</a></span>
                                <span class="close"><a href="#">Close</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dropdown -->
                <div class="dropdown">
                    <div class="container">
                        <div class="main">
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#about">About</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#portfolio">Portfolio</a></li>
                                <li><a href="#team">Team</a></li>
                                <li><a href="#pricing">Pricing</a></li>
                                <li><a href="#news">News</a></li>
                                <li><a href="#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /Dropdown -->

            </div>
            <!-- /Topbar -->

            @yield('body')


            <!-- Footer -->
            <div class="perker_section">
                <div class="perker_footer">
                    <div class="container">
                        <div class="footer_inner">
                            <div class="left">
                                <p><a href="#" target="_blank">{{ $data['personal_info']['name'] ?? "Star Labs" }}</a></p>
                            </div>
                            <div class="right">
                                <ul>
                                    @if(isset($data['social_info']))
                                    @if(array_key_exists('facebook_url', $data['social_info']))
                                    <li><a href="https://www.facebook.com/{{ $data['social_info']['facebook_url'] }}" target="_blank"><i class="xcon-facebook"></i></a></li>
                                    @endif
                                    @if(array_key_exists('twitter_url', $data['social_info']))
                                    <li><a href="https://www.twitter.com/{{ $data['social_info']['twitter_url'] }}" target="_blank"><i class="xcon-twitter"></i></a></li>
                                    @endif
                                    @if(array_key_exists('linkedin_url', $data['social_info']))
                                    <li><a href="https://www.linkedin.com/in/{{ $data['social_info']['linkedin_url'] }}" target="_blank"><i class="xcon-linkedin"></i></a></li>
                                    @endif
                                    @if(array_key_exists('instagram_url', $data['social_info']))
                                    <li><a href="https://www.instagram.com/{{ $data['social_info']['instagram_url'] }}" target="_blank"><i class="xcon-instagram"></i></a></li>
                                    @endif
                                    @if(array_key_exists('github_url', $data['social_info']))
                                    <li><a href="https://www.github.com/{{ $data['social_info']['github_url'] }}" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                                    @endif
                                    @if(array_key_exists('youtube_url', $data['social_info']))
                                    <li><a href="https://www.youtube.com/channel/{{ $data['social_info']['youtube_url'] }}" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    @endif
                                    @else
                                    <li><a href="#"><i class="xcon-facebook"></i></a></li>
                                    <li><a href="#"><i class="xcon-twitter"></i></a></li>
                                    <li><a href="#"><i class="xcon-linkedin"></i></a></li>
                                    <li><a href="#"><i class="xcon-instagram"></i></a></li>
                                    <li><a href="#"><i class="xcon-behance"></i></a></li>
                                    @endif

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Footer -->

        </div>
        <!-- /Wrapper All -->

        <!-- Scripts -->
        <script src="{{  asset('one_page/js/jquery.js')  }}"></script>
        <script src="{{  asset('one_page/js/plugins.js')  }}"></script>
        <script src="{{  asset('one_page/js/init.js')  }}"></script>
        <!-- /Scripts -->

    </body>


</html>