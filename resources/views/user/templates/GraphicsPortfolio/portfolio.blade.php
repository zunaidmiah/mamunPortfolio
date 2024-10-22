@extends('user.templates.GraphicsPortfolio.layouts.main_layout')

@section('body')

    <!-- Single Page -->
    <main class="single-page">
        <!-- Page Header -->
        <div class="page-header">
            <h2>.<span>portfolio</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna neque, pulvinar in
                orci in, pellentesque consequat tellus. Fusce mauris massa, pellentesque nec augue
                at, hendrerit rutrum ex. Cras venenatis vulputate nisi ut elementum.</p>
        </div> <!-- Page Header End -->
        <div class="separator"></div>
        <div class="portfolio-wrapper">
            <div class="row">
                <div class="col-xl-12">
                    <!-- Filter Buttons -->
                    <div class="button-group portfolio-btn text-right mb-40">
                        <button data-toggle="tooltip" data-placement="top" title="@if(isset($data['portfolios'])){{ count($data['portfolios']) }} @else 16 @endif Items" class="active pointer-href" data-filter="*">All</button>
                        @if(isset($data['portfolios']))
                        @if(isset($data['portfolio_categories']))
                        @foreach ($data['portfolio_categories'] as $key => $cat)
                        <?php if(isset($data['portfolios'])){
                            $item = collect($data['portfolios'])->where('category', $key)->count();
                        }?>
                        @if(isset($item) and $item > 0)
                        <button data-toggle="tooltip" data-placement="top" title="{{ $item }} Items" class="active pointer-href" data-filter=".{{ $cat }}">{{ $cat }}</button>
                        @endif
                        @endforeach
                        @endif
                        @else
                        <button data-toggle="tooltip" data-placement="top" title="7 Items" class="pointer-href" data-filter=".cat1">Graphic</button>
                        <button data-toggle="tooltip" data-placement="top" title="5 Items" class="pointer-href" data-filter=".cat2">Branding</button>
                        <button data-toggle="tooltip" data-placement="top" title="3 Items" class="pointer-href" data-filter=".cat3">Web Design</button>
                        <button data-toggle="tooltip" data-placement="top" title="4 Items" class="pointer-href" data-filter=".cat4">Web Developing</button>
                        @endif
                    </div> <!-- Filter Buttons End -->
                </div>
            </div>
            <!-- Portfolio Grid -->
            <div class="row grid no-gutters">
                @if(isset($data['portfolios']))
                @foreach ($data['portfolios'] as $portfolio)
                <?php
                $media = get_media_first($portfolio->id, 'portfolios');
                $cat = '';
                if(isset($data['portfolios']) and isset($data['portfolio_categories'][$portfolio->category])){
                    $cat = $data['portfolio_categories'][$portfolio->category];
                }
                ?>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item {{ $cat }}">
                    <div class="portfolio-image-block">
                        <img src="{{ $media }}" alt="portfolio image" height="250" width="300">
                        <div class="portfolio-image-info">
                            <a href="{{ $media }}" class="gallery_popup pointer-open"><i class="fas fa-search"></i></a>
                            <h4 class="body-font">{{ $portfolio->title }}</h4>
                        </div>
                        <div class="image-hover-btn">
                            <div class="full-view-btn">
                                <a href="/portfolio-details/{{ urlencode($portfolio->title) }}" class="pointer-href">Full view</a>
                            </div>
                            <div class="load-more-btn">
                                <a href="{{ $portfolio->link }}" class="pointer-href">Live Preview</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item cat1 cat3">
                    <div class="portfolio-image-block">
                        <img src="img/portfolio/1.png" alt="portfolio image">
                        <div class="portfolio-image-info">
                            <a href="img/portfolio/1.png" class="gallery_popup pointer-open"><i class="fas fa-search"></i></a>
                            <h4 class="body-font">Branding</h4>
                        </div>
                        <div class="image-hover-btn">
                            <div class="full-view-btn">
                                <a href="portfolio-details.html" class="pointer-href">Full view</a>
                            </div>
                            <div class="load-more-btn">
                                <a href="portfolio-archives.html" class="pointer-href">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item cat2 cat4">
                    <div class="portfolio-image-block">
                        <img src="img/portfolio/2.png" alt="portfolio image">
                        <div class="portfolio-image-info">
                            <a href="img/portfolio/2.png" class="gallery_popup pointer-open"><i class="fas fa-search"></i></a>
                            <h4 class="body-font">Branding</h4>
                        </div>
                        <div class="image-hover-btn">
                            <div class="full-view-btn">
                                <a href="portfolio-details.html" class="pointer-href">Full view</a>
                            </div>
                            <div class="load-more-btn">
                                <a href="portfolio-archives.html" class="pointer-href">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item cat1 cat3">
                    <div class="portfolio-image-block">
                        <img src="img/portfolio/3.png" alt="portfolio image">
                        <div class="portfolio-image-info">
                            <a href="img/portfolio/3.png" class="gallery_popup pointer-open"><i class="fas fa-search"></i></a>
                            <h4 class="body-font">Branding</h4>
                        </div>
                        <div class="image-hover-btn">
                            <div class="full-view-btn">
                                <a href="portfolio-details.html" class="pointer-href">Full view</a>
                            </div>
                            <div class="load-more-btn">
                                <a href="portfolio-archives.html" class="pointer-href">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item cat2 cat4">
                    <div class="portfolio-image-block">
                        <img src="img/portfolio/4.png" alt="portfolio image">
                        <div class="portfolio-image-info">
                            <a href="img/portfolio/4.png" class="gallery_popup pointer-open"><i class="fas fa-search"></i></a>
                            <h4 class="body-font">Branding</h4>
                        </div>
                        <div class="image-hover-btn">
                            <div class="full-view-btn">
                                <a href="portfolio-details.html" class="pointer-href">Full view</a>
                            </div>
                            <div class="load-more-btn">
                                <a href="portfolio-archives.html" class="pointer-href">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item cat1 cat4">
                    <div class="portfolio-image-block">
                        <img src="img/portfolio/5.png" alt="portfolio image">
                        <div class="portfolio-image-info">
                            <a href="img/portfolio/5.png" class="gallery_popup pointer-open"><i class="fas fa-search"></i></a>
                            <h4 class="body-font">Branding</h4>
                        </div>
                        <div class="image-hover-btn">
                            <div class="full-view-btn">
                                <a href="portfolio-details.html" class="pointer-href">Full view</a>
                            </div>
                            <div class="load-more-btn">
                                <a href="portfolio-archives.html" class="pointer-href">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item cat2 cat3">
                    <div class="portfolio-image-block">
                        <img src="img/portfolio/6.png" alt="portfolio image">
                        <div class="portfolio-image-info">
                            <a href="img/portfolio/6.png" class="gallery_popup pointer-open"><i class="fas fa-search"></i></a>
                            <h4 class="body-font">Branding</h4>
                        </div>
                        <div class="image-hover-btn">
                            <div class="full-view-btn">
                                <a href="portfolio-details.html" class="pointer-href">Full view</a>
                            </div>
                            <div class="load-more-btn">
                                <a href="portfolio-archives.html" class="pointer-href">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item cat1 cat2 cat3">
                    <div class="portfolio-image-block">
                        <img src="img/portfolio/7.png" alt="portfolio image">
                        <div class="portfolio-image-info">
                            <a href="img/portfolio/7.png" class="gallery_popup pointer-open"><i class="fas fa-search"></i></a>
                            <h4 class="body-font">Branding</h4>
                        </div>
                        <div class="image-hover-btn">
                            <div class="full-view-btn">
                                <a href="portfolio-details.html" class="pointer-href">Full view</a>
                            </div>
                            <div class="load-more-btn">
                                <a href="portfolio-archives.html" class="pointer-href">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item cat1 cat2 cat3">
                    <div class="portfolio-image-block">
                        <img src="img/portfolio/8.png" alt="portfolio image">
                        <div class="portfolio-image-info">
                            <a href="img/portfolio/8.png" class="gallery_popup pointer-open"><i class="fas fa-search"></i></a>
                            <h4 class="body-font">Branding</h4>
                        </div>
                        <div class="image-hover-btn">
                            <div class="full-view-btn">
                                <a href="portfolio-details.html" class="pointer-href">Full view</a>
                            </div>
                            <div class="load-more-btn">
                                <a href="portfolio-archives.html" class="pointer-href">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item cat1 cat2 cat3">
                    <div class="portfolio-image-block">
                        <img src="img/portfolio/9.png" alt="portfolio image">
                        <div class="portfolio-image-info">
                            <a href="img/portfolio/9.png" class="gallery_popup pointer-open"><i class="fas fa-search"></i></a>
                            <h4 class="body-font">Branding</h4>
                        </div>
                        <div class="image-hover-btn">
                            <div class="full-view-btn">
                                <a href="portfolio-details.html" class="pointer-href">Full view</a>
                            </div>
                            <div class="load-more-btn">
                                <a href="portfolio-archives.html" class="pointer-href">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item cat1 cat4 cat3">
                    <div class="portfolio-image-block">
                        <img src="img/portfolio/10.png" alt="portfolio image">
                        <div class="portfolio-image-info">
                            <a href="img/portfolio/10.png" class="gallery_popup pointer-open"><i class="fas fa-search"></i></a>
                            <h4 class="body-font">Branding</h4>
                        </div>
                        <div class="image-hover-btn">
                            <div class="full-view-btn">
                                <a href="portfolio-details.html" class="pointer-href">Full view</a>
                            </div>
                            <div class="load-more-btn">
                                <a href="portfolio-archives.html" class="pointer-href">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item cat2 cat3">
                    <div class="portfolio-image-block">
                        <img src="img/portfolio/11.png" alt="portfolio image">
                        <div class="portfolio-image-info">
                            <a href="img/portfolio/11.png" class="gallery_popup pointer-open"><i class="fas fa-search"></i></a>
                            <h4 class="body-font">Branding</h4>
                        </div>
                        <div class="image-hover-btn">
                            <div class="full-view-btn">
                                <a href="portfolio-details.html" class="pointer-href">Full view</a>
                            </div>
                            <div class="load-more-btn">
                                <a href="portfolio-archives.html" class="pointer-href">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item cat1 cat2">
                    <div class="portfolio-image-block">
                        <img src="img/portfolio/12.png" alt="portfolio image">
                        <div class="portfolio-image-info">
                            <a href="img/portfolio/12.png" class="gallery_popup pointer-open"><i class="fas fa-search"></i></a>
                            <h4 class="body-font">Branding</h4>
                        </div>
                        <div class="image-hover-btn">
                            <div class="full-view-btn">
                                <a href="portfolio-details.html" class="pointer-href">Full view</a>
                            </div>
                            <div class="load-more-btn">
                                <a href="portfolio-archives.html" class="pointer-href">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item cat4 cat2 cat3">
                    <div class="portfolio-image-block">
                        <img src="img/portfolio/13.png" alt="portfolio image">
                        <div class="portfolio-image-info">
                            <a href="img/portfolio/13.png" class="gallery_popup pointer-open"><i class="fas fa-search"></i></a>
                            <h4 class="body-font">Branding</h4>
                        </div>
                        <div class="image-hover-btn">
                            <div class="full-view-btn">
                                <a href="portfolio-details.html" class="pointer-href">Full view</a>
                            </div>
                            <div class="load-more-btn">
                                <a href="portfolio-archives.html" class="pointer-href">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item cat4 cat3">
                    <div class="portfolio-image-block">
                        <img src="img/portfolio/14.png" alt="portfolio image">
                        <div class="portfolio-image-info">
                            <a href="img/portfolio/14.png" class="gallery_popup pointer-open"><i class="fas fa-search"></i></a>
                            <h4 class="body-font">Branding</h4>
                        </div>
                        <div class="image-hover-btn">
                            <div class="full-view-btn">
                                <a href="portfolio-details.html" class="pointer-href">Full view</a>
                            </div>
                            <div class="load-more-btn">
                                <a href="portfolio-archives.html" class="pointer-href">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item cat1 cat3">
                    <div class="portfolio-image-block">
                        <img src="img/portfolio/15.png" alt="portfolio image">
                        <div class="portfolio-image-info">
                            <a href="img/portfolio/15.png" class="gallery_popup pointer-open"><i class="fas fa-search"></i></a>
                            <h4 class="body-font">Branding</h4>
                        </div>
                        <div class="image-hover-btn">
                            <div class="full-view-btn">
                                <a href="portfolio-details.html" class="pointer-href">Full view</a>
                            </div>
                            <div class="load-more-btn">
                                <a href="portfolio-archives.html" class="pointer-href">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 grid-item cat2 cat1">
                    <div class="portfolio-image-block">
                        <img src="img/portfolio/16.png" alt="portfolio image">
                        <div class="portfolio-image-info">
                            <a href="img/portfolio/16.png" class="gallery_popup pointer-open"><i class="fas fa-search"></i></a>
                            <h4 class="body-font">Branding</h4>
                        </div>
                        <div class="image-hover-btn">
                            <div class="full-view-btn">
                                <a href="portfolio-details.html" class="pointer-href">Full view</a>
                            </div>
                            <div class="load-more-btn">
                                <a href="portfolio-archives.html" class="pointer-href">Load more</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div> <!-- Portfolio Grid End -->
        </div>
    </main> <!-- Single page end -->

@endsection
