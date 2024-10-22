@extends('user.templates.GraphicsPortfolio.layouts.main_layout')

@section('body')

    <!-- Single Page -->
    <main class="single-page">
        <!-- Page Header -->
        <div class="page-header">
            <h2><a href="portfolio-archives.html" class="pointer-large">.<span>portfolio</span></a>
                <span>.</span>details</h2>
            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna neque, pulvinar in
                orci in, pellentesque consequat tellus. Fusce mauris massa, pellentesque nec augue
                at, hendrerit rutrum ex. Cras venenatis vulputate nisi ut elementum.</p> --}}
        </div> <!-- Page Header End -->
        <div class="separator"></div>
        <div class="portfolio-details-wrapper">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="details-content-left">
                        <!-- Project Short Info -->
                        <div class="project-info clearfix mb-20">
                            <div class="project-head-thumb">
                                <img src="{{ asset('GraphicsPortfolio/img/portfolio/portfolio-details/thumb-big.png') }}" alt="project thumb">
                            </div>
                            <div class="project-overview">
                                <ul>
                                    @if(isset($data['portfolio']))
                                    <li>Date created :<a href="#" class="pointer-small">{{ date('d M Y', strtotime($data['portfolio']['created_at'])) }}</a></li>
                                    <li>Web :<a href="{{ $data['portfolio']['link'] }}" class="pointer-small"> Click Here</a></li>
                                    <li>Category :<a href="#" class="pointer-small"> {{ ($data['portfolio_category']) }}</a></li>
                                    @else
                                    <li>Date created :<a href="#" class="pointer-small"> 9 July 2019</a></li>
                                    <li>Client :<a href="#" class="pointer-small"> XenMark Inc.</a></li>
                                    <li>Web :<a href="#" class="pointer-small"> www.xenmark.com</a></li>
                                    <li>Category :<a href="#" class="pointer-small"> Branding</a></li>
                                    @endif
                                </ul>
                            </div>
                        </div> <!-- Project Short Info End -->
                        <!-- Project Body -->
                        <div class="project-body">
                            <h3 class="theme-color">@if(isset($data['portfolio'])) {{ $data['portfolio']['title'] }} @else Lorem ipsum dolor sit amet, consectetur adipiscing elit @endif</h3>
                            <!-- Portfolio Feature Image -->
                            <div class="portfolio-feature-image">
                                <div class="row">
                                    @if(isset($data['portfolio_images']))
                                    @foreach ($data['portfolio_images'] as $key => $image)
                                    @if($key == 2) @break
                                    @endif
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="feature-single-image text-center">
                                            <img src="{{ asset($image) }}" alt="portfolio image">
                                            <div class="portfolio-popup-block">
                                                <a href="{{ asset($image) }}" class="portfolio_feature_popup pointer-open"><i class="fas fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="feature-single-image text-center">
                                            <img src="{{ asset('GraphicsPortfolio/img/portfolio/portfolio-details/1.jpg') }}" alt="portfolio image">
                                            <div class="portfolio-popup-block">
                                                <a href="{{ asset('GraphicsPortfolio/img/portfolio/portfolio-details/1.jpg') }}" class="portfolio_feature_popup pointer-open"><i class="fas fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <div class="feature-single-image text-center">
                                            <img src="{{ asset('GraphicsPortfolio/img/portfolio/portfolio-details/3.jpg') }}" alt="portfolio image">
                                            <div class="portfolio-popup-block">
                                                <a href="{{ asset('GraphicsPortfolio/img/portfolio/portfolio-details/3.jpg') }}" class="portfolio_feature_popup pointer-open"><i class="fas fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div> <!-- Portfolio Feature Image End -->

                            <p>

                                @if(isset($data['portfolio']))
                                <?php echo $data['portfolio']['description']; ?>
                                @else
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna neque, pulvinar in orci
                                in, pellentesque consequat tellus. Fusce mauris massa, pellentesque nec augue at,
                                hendrerit rutrum ex. Cras venenatis vulputate nisi ut elementum. Ut ac mi a ex convallis
                                luctus.
                                @endif
                            </p>
                            <!-- Project Video -->
                            {{-- <div class="body-feature-video text-center">
                                <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup_video pointer-large"><i class="fas fa-play"></i></a>
                            </div> <!-- Project Video End --> --}}

                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna neque, pulvinar in orci
                                in, pellentesque consequat tellus. Fusce mauris massa, pellentesque nec augue at,
                                hendrerit rutrum ex. Cras venenatis vulputate nisi ut elementum.</p> --}}

                            <!-- Tags -->
                            <div class="find-archives subtitle">
                                <h3 class="">. <span>Technology</span>details</h3>
                                @if($data['portfolio'])
                                <?php $tech = json_decode($data['portfolio']['technology'], true); ?>
                                @if($tech)
                                @foreach ($tech as $key => $item)
                                <?php
                                $name = explode(', ', $item);?>
                                <div class="find-archives subtitle">
                                    <h6 class="mb-10">{{ ucfirst($key) }} Technology</h6>
                                    <ul>
                                        @if(!empty($name))
                                        @foreach ($name as $a)
                                        <li><a href="#" class="pointer-href">{{ $a }}</a></li>
                                        @endforeach
                                        @else
                                        No data found
                                        @endif
                                    </ul>
                                </div>
                                @endforeach
                                @else
                                No data found
                                @endif
                                @else
                                <div class="tag-keywords">
                                    <a href="#" class="pointer-small">Portfolio</a>
                                    <a href="#" class="pointer-small">graphic-design</a>
                                    <a href="#" class="pointer-small">mockup</a>
                                </div>
                                @endif
                            </div> <!-- Tags End -->
                        </div> <!-- Project Body End -->
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="details-content-right">
                        <!-- Search Bar -->
                        <div class="post-search mb-70">
                            <form action="#">
                                <input class="pointer-input" value="" placeholder="Search here..." type="text">
                                <button class="post-search-box pointer-href" type="submit"> <i class="fas fa-search" aria-hidden="true"></i> </button>
                            </form>
                        </div> <!-- Search Bar End -->
                        <!-- Instagram -->
                        {{-- <div class="instagram subtitle mb-70">
                            <h3 class="mb-40">.<span>instagram</span></h3>
                            <div class="instagram-gallery clearfix">
                                <a href="#" class="pointer-large">
                                    <div class="gallery-thumb">
                                        <img src="img/portfolio/portfolio-archives/instagram/1.jpg" alt="post thumb">
                                    </div>
                                </a>
                                <a href="#" class="pointer-large">
                                    <div class="gallery-thumb">
                                        <img src="img/portfolio/portfolio-archives/instagram/2.jpg" alt="post thumb">
                                    </div>
                                </a>
                                <a href="#" class="pointer-large">
                                    <div class="gallery-thumb">
                                        <img src="img/portfolio/portfolio-archives/instagram/3.jpg" alt="post thumb">
                                    </div>
                                </a>
                                <a href="#" class="pointer-large">
                                    <div class="gallery-thumb">
                                        <img src="img/portfolio/portfolio-archives/instagram/4.jpg" alt="post thumb">
                                    </div>
                                </a>
                                <a href="#" class="pointer-large">
                                    <div class="gallery-thumb">
                                        <img src="img/portfolio/portfolio-archives/instagram/5.jpg" alt="post thumb">
                                    </div>
                                </a>
                                <a href="#" class="pointer-large">
                                    <div class="gallery-thumb">
                                        <img src="img/portfolio/portfolio-archives/instagram/6.jpg" alt="post thumb">
                                    </div>
                                </a>
                                <a href="#" class="pointer-large">
                                    <div class="gallery-thumb">
                                        <img src="img/portfolio/portfolio-archives/instagram/7.jpg" alt="post thumb">
                                    </div>
                                </a>
                                <a href="#" class="pointer-large">
                                    <div class="gallery-thumb">
                                        <img src="img/portfolio/portfolio-archives/instagram/8.jpg" alt="post thumb">
                                    </div>
                                </a>
                                <a href="#" class="pointer-large">
                                    <div class="gallery-thumb">
                                        <img src="img/portfolio/portfolio-archives/instagram/9.jpg" alt="post thumb">
                                    </div>
                                </a>
                            </div>
                        </div> <!-- Instagram End --> --}}
                        <!-- Recent Posts -->
                        <!-- Search by Category -->
                        <div class="search-category subtitle">
                            <h3 class="mb-40">.<span>portfolio</span> categories</h3>
                            <ul>
                                @if(isset($data['portfolio']))
                                @if(isset($data['portfolio_category']))
                                <li><a href="#" class="pointer-href">{{ $data['portfolio_category'] }}</a></li>
                                @else
                                No categories <br> <br>
                                @endif
                                @else
                                <li><a href="#" class="pointer-href">Graphics</a></li>
                                <li><a href="#" class="pointer-href">Branding</a></li>
                                <li><a href="#" class="active pointer-href">Web Design</a></li>
                                <li><a href="#" class="pointer-href">Web Development</a></li>
                                <li><a href="#" class="pointer-href">Travel</a></li>
                                <li><a href="#" class="pointer-href">Trending</a></li>
                                @endif
                            </ul>
                        </div> <!-- Search by Category End -->
                        <div class="recent-posts subtitle mb-70">
                            <h3 class="mb-40">.<span>related</span> portfolio</h3>
                            <ul>
                                @if(isset($data['portfolio']) and isset($data['related_portfolios']))
                                @foreach ($data['related_portfolios'] as $portfolio)
                                <?php $image = get_media_first($portfolio->id, 'portfolios'); ?>
                                <li>
                                    <a href="/portfolio-details/{{ urlencode($portfolio->title) }}" class="pointer-href">
                                        <div class="single-post clearfix">
                                            <div class="post-thumb">
                                                <img src="{{ asset($image) }}" alt="post thumb">
                                            </div>
                                            <div class="post-content">
                                                <h5 class="body-font">{{ $portfolio->title }}</h5>
                                                <span><i class="fas fa-calendar-alt"></i> {{ date('d M, Y', strtotime($portfolio->created_at)) }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endforeach
                                @else
                                <li>
                                    <a href="#" class="pointer-href">
                                        <div class="single-post clearfix">
                                            <div class="post-thumb">
                                                <img src="{{ asset('GraphicsPortfolio/img/blog/blog-details/sidebar-thumb/1.jpg') }}" alt="post thumb">
                                            </div>
                                            <div class="post-content">
                                                <h5 class="body-font">Together we can make a difference</h5>
                                                <span><i class="fas fa-calendar-alt"></i> {{ date('d M, Y') }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pointer-href">
                                        <div class="single-post clearfix">
                                            <div class="post-thumb">
                                                <img src="{{ asset('GraphicsPortfolio/img/blog/blog-details/sidebar-thumb/2.jpg') }}" alt="post thumb">
                                            </div>
                                            <div class="post-content">
                                                <h5 class="body-font">We can work together for future</h5>
                                                <span><i class="fas fa-calendar-alt"></i> {{ date('d M, Y') }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pointer-href">
                                        <div class="single-post clearfix">
                                            <div class="post-thumb">
                                                <img src="{{ asset('GraphicsPortfolio/img/blog/blog-details/sidebar-thumb/3.jpg') }}" alt="post thumb">
                                            </div>
                                            <div class="post-content">
                                                <h5 class="body-font">It’s time to show as a best in world!</h5>
                                                <span><i class="fas fa-calendar-alt"></i> {{ date('d M, Y') }}</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                @endif
                            </ul>
                        </div> <!-- Recent Posts End -->
                        <!-- Archives -->
                        {{-- <div class="find-archives subtitle mb-60">
                            <h3 class="mb-40">.<span>find</span> archives</h3>
                            <ul>
                                <li><a href="#" class="pointer-href">2018</a></li>
                                <li><a href="#" class="pointer-href">2017</a></li>
                                <li><a href="#" class="pointer-href">2016</a></li>
                                <li><a href="#" class="pointer-href">2015</a></li>
                                <li><a href="#" class="pointer-href">2014</a></li>
                                <li><a href="#" class="pointer-href">2013</a></li>
                            </ul>
                        </div> <!-- Archives End --> --}}

                    </div>
                </div>
            </div>
        </div>
    </main> <!-- Single page end -->

@endsection
