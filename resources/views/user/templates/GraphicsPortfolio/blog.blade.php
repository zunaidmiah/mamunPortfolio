@extends('user.templates.GraphicsPortfolio.layouts.main_layout')

@section('body')
    <?php Illuminate\Pagination\Paginator::useBootstrap(); ?>
    <!-- Single Page -->
    <main class="single-page">
        <!-- Page Header -->
        <div class="page-header">
            <h2>.<span>blog</span></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna neque, pulvinar in orci in, pellentesque consequat tellus. Fusce mauris massa, pellentesque nec augue at, hendrerit rutrum ex. Cras venenatis vulputate nisi ut elementum.</p>
        </div> <!-- Page Header End -->
        <div class="separator"></div>
        <div class="blog-wrapper">
            <div class="row grid-3">
                @if(isset($data['blogs']))
                <?php foreach($data['blogs'] as $key => $blog):
                $media = get_media_first($blog->id, 'blogs'); ?>
                <!-- Blog Single Container -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item-3">
                    <div class="newsfeed-container">
                        <div class="newsfeed-image">
                            <img src="{{ $media }}" alt="blog image" height="250" width="300">
                            <div class="date-box">
                                <span>{{ date('d M, Y', strtotime($blog->created_at)) }}</span>
                            </div>
                        </div>
                        <div class="newsfeed-wrap">
                            <div class="newsfeed-header">
                                <a href="#" class="newsfeed-tag pointer-small"><i class="fas fa-tag"></i> Blog</a>
                                <a href="#" class="newsfeed-user pointer-small"><i class="fas fa-user"></i> {{ get_username() ?? "Star Labs" }} </a>
                            </div>
                            <div class="newsfeed-content">
                                <h4><a href="/blog-details/{{ urlencode($blog->title) }}" class="pointer-href">{{ substr($blog->title, 0, 45) }}</a></h4>
                                <p style="min-height: 90px;max-height: 140px;">{{ strip_tags(substr($blog->description, 0, 100)) }}...</p>
                            </div>
                            <div class="blog-btn">
                                <a href="/blog-details/{{ urlencode($blog->title) }}" class="pointer-href">Read More</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- Blog Single Container End -->
                <?php endforeach; ?>
                @else
                <!-- Blog Single Container -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item-3">
                    <div class="newsfeed-container">
                        <div class="newsfeed-image">
                            <img src="{{  asset('GraphicsPortfolio/img/blog/blog-grid/7.jpg')  }}" alt="blog image"  height="250" width="300">
                            <div class="date-box">
                                <span>28 JUN 2019</span>
                            </div>
                        </div>
                        <div class="newsfeed-wrap">
                            <div class="newsfeed-header">
                                <a href="#" class="newsfeed-tag pointer-small"><i class="fas fa-tag"></i> Branding</a>
                                <a href="#" class="newsfeed-user pointer-small"><i class="fas fa-user"></i> Admin</a>
                            </div>
                            <div class="newsfeed-content">
                                <h4><a href="#" class="pointer-href">It’s time to show yourself as a best in world!</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ut magna neque, pulvinar in orci in, pellentesque consequat tellus.
                                </p>
                            </div>
                            <div class="blog-btn">
                                <a href="#" class="pointer-href">Read More</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- Blog Single Container End -->
                <!-- Blog Single Container -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item-3">
                    <div class="newsfeed-container">
                        <div class="newsfeed-image">
                            <img src="{{  asset('GraphicsPortfolio/img/blog/blog-grid/8.jpg')  }}" alt="blog image"  height="250" width="300">
                            <div class="date-box">
                                <span>28 JUN 2019</span>
                            </div>
                        </div>
                        <div class="newsfeed-wrap">
                            <div class="newsfeed-header">
                                <a href="#" class="newsfeed-tag pointer-small"><i class="fas fa-tag"></i> Branding</a>
                                <a href="#" class="newsfeed-user pointer-small"><i class="fas fa-user"></i> Admin</a>
                            </div>
                            <div class="newsfeed-content">
                                <h4><a href="#" class="pointer-href">It’s time to show yourself as a best in world!</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ut magna neque, pulvinar in orci in, pellentesque consequat tellus.
                                </p>
                            </div>
                            <div class="blog-btn">
                                <a href="#" class="pointer-href">Read More</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- Blog Single Container End -->
                <!-- Blog Single Container -->
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 grid-item-3">
                    <div class="newsfeed-container">
                        <div class="newsfeed-image">
                            <img src="{{  asset('GraphicsPortfolio/img/blog/blog-grid/9.jpg')  }}" alt="blog image"  height="250" width="300">
                            <div class="date-box">
                                <span>28 JUN 2019</span>
                            </div>
                        </div>
                        <div class="newsfeed-wrap">
                            <div class="newsfeed-header">
                                <a href="#" class="newsfeed-tag pointer-small"><i class="fas fa-tag"></i> Branding</a>
                                <a href="#" class="newsfeed-user pointer-small"><i class="fas fa-user"></i> Admin</a>
                            </div>
                            <div class="newsfeed-content">
                                <h4><a href="#" class="pointer-href">It’s time to show yourself as a best in world!</a></h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing Ut magna neque, pulvinar in orci in, pellentesque consequat tellus.
                                </p>
                            </div>
                            <div class="blog-btn">
                                <a href="#" class="pointer-href">Read More</a>
                            </div>
                        </div>
                    </div>
                </div> <!-- Blog Single Container End -->
                @endif
            </div>
            <!-- Pagination -->
            @if(isset($data['blogs']))
            <div class="">
                {{ $data['blogs']->links() }}
            </div>
            @else
            <div class="pagination-block">
                <nav>
                    <ul>
                        <li><a href="#" class="pointer-href"><i class="fas fa-chevron-left"></i> Prev</a></li>
                        <li><a href="#" class="pointer-href">1</a></li>
                        <li><a href="#" class="active pointer-href">2</a></li>
                        <li><a href="#" class="pointer-href">3</a></li>
                        <li><a href="#" class="pointer-href">4</a></li>
                        <li><a href="#" class="pointer-href">Next <i class="fas fa-chevron-right"></i></a></li>
                    </ul>
                </nav>
            </div> <!-- Pagination End -->
            @endif
        </div>
    </main> <!-- Single page end -->

@endsection
