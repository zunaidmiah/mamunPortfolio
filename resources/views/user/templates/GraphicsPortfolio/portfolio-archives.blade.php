@extends('user.templates.GraphicsPortfolio.layouts.main_layout')

@section('body')

    <!-- Single Page -->
    <main class="single-page">
        <!-- Page Header -->
        <div class="page-header">
            <h2><a href="portfolio.html" class="pointer-large">.<span>portfolio</span></a> <span>.</span>archives
            </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna neque, pulvinar in
                orci in, pellentesque consequat tellus. Fusce mauris massa, pellentesque nec augue
                at, hendrerit rutrum ex. Cras venenatis vulputate nisi ut elementum.</p>
        </div> <!-- Page Header End -->
        <div class="separator"></div>
        <div class="portfolio-archives-wrapper">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="archives-content-left">
                        <div class="project-archives-body">
                            <div class="project-archives-single">
                                <div class="project-info">
                                    <!-- Project Short Info -->
                                    <div class="project-archives-overview">
                                        <ul>
                                            <li><a href="#" class="pointer-small"><i class="fas fa-calendar-alt"></i> 9 July 2019</a></li>
                                            <li><a href="#" class="pointer-small"><i class="fas fa-user"></i> XenMark Inc.</a></li>
                                            <li><a href="#" class="pointer-small"><i class="fas fa-tag"></i> Branding</a></li>
                                        </ul>
                                    </div> <!-- Project Short Info End -->
                                </div>
                                <!-- Project Body -->
                                <h3><a href="portfolio-details.html" class="theme-color pointer-large">We make a beautiful world for peace and easy life</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna neque,
                                    pulvinar in orci in, pellentesque consequat tellus. Fusce mauris massa,
                                    pellentesque
                                    nec augue.</p>
                                <div class="body-content-image">
                                    <img src="img/portfolio/portfolio-archives/1.jpg" alt="">
                                </div>
                                <div class="body-tags">
                                    <h6 class="body-font">TAGS:</h6>
                                    <div class="tag-keywords">
                                        <a href="#" class="pointer-small">branding</a>
                                        <a href="#" class="pointer-small">graphic-design</a>
                                        <a href="#" class="pointer-small">mockup</a>
                                    </div>
                                </div> <!-- Project Body End -->
                            </div>
                            <div class="separator-color"></div>
                            <div class="project-archives-single">
                                <div class="project-info">
                                    <!-- Project Short Info -->
                                    <div class="project-archives-overview">
                                        <ul>
                                            <li><a href="#" class="pointer-small"><i class="fas fa-calendar-alt"></i> 9 July 2019</a></li>
                                            <li><a href="#" class="pointer-small"><i class="fas fa-user"></i> XenMark Inc.</a></li>
                                            <li><a href="#" class="pointer-small"><i class="fas fa-tag"></i> Branding</a></li>
                                        </ul>
                                    </div> <!-- Project Short Info End -->
                                </div>
                                <!-- Project Body -->
                                <h3><a href="portfolio-details.html" class="theme-color pointer-large">We make a beautiful world for peace and easy life</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna neque,
                                    pulvinar in orci in, pellentesque consequat tellus. Fusce mauris massa,
                                    pellentesque
                                    nec augue.</p>
                                <div class="body-content-image">
                                    <img src="img/portfolio/portfolio-archives/2.jpg" alt="">
                                </div>
                                <div class="body-tags">
                                    <h6 class="body-font">TAGS:</h6>
                                    <div class="tag-keywords">
                                        <a href="#" class="pointer-small">branding</a>
                                        <a href="#" class="pointer-small">graphic-design</a>
                                        <a href="#" class="pointer-small">mockup</a>
                                    </div>
                                </div> <!-- Project Body End -->
                            </div>
                            <div class="separator-color"></div>
                            <div class="project-archives-single">
                                <div class="project-info">
                                    <!-- Project Short Info -->
                                    <div class="project-archives-overview">
                                        <ul>
                                            <li><a href="#" class="pointer-small"><i class="fas fa-calendar-alt"></i> 9 July 2019</a></li>
                                            <li><a href="#" class="pointer-small"><i class="fas fa-user"></i> XenMark Inc.</a></li>
                                            <li><a href="#" class="pointer-small"><i class="fas fa-tag"></i> Branding</a></li>
                                        </ul>
                                    </div> <!-- Project Short Info End -->
                                </div>
                                <!-- Project Body -->
                                <h3><a href="portfolio-details.html" class="theme-color pointer-large">We make a beautiful world for peace and easy life</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna neque,
                                    pulvinar in orci in, pellentesque consequat tellus. Fusce mauris massa,
                                    pellentesque
                                    nec augue.</p>
                                <div class="body-content-image">
                                    <img src="img/portfolio/portfolio-archives/3.jpg" alt="">
                                </div>
                                <div class="body-tags">
                                    <h6 class="body-font">TAGS:</h6>
                                    <div class="tag-keywords">
                                        <a href="#" class="pointer-small">branding</a>
                                        <a href="#" class="pointer-small">graphic-design</a>
                                        <a href="#" class="pointer-small">mockup</a>
                                    </div>
                                </div> <!-- Project Body End -->
                            </div>
                            <!-- Pagination -->
                            <div class="pagination-block mt-30">
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
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="archives-content-right">
                        <!-- Search Bar -->
                        <div class="post-search mb-70">
                            <form action="#">
                                <input class="pointer-input" value="" placeholder="Search here..." type="text">
                                <button class="post-search-box pointer-href" type="submit"> <i class="fas fa-search" aria-hidden="true"></i> </button>
                            </form>
                        </div> <!-- Search Bar End -->
                        <!-- Instagram -->
                        <div class="instagram subtitle mb-70">
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
                        </div> <!-- Instagram End -->
                        <!-- Recent Posts -->
                        <div class="recent-posts subtitle mb-70">
                            <h3 class="mb-40">.<span>recent</span> posts</h3>
                            <ul>
                                <li>
                                    <a href="#" class="pointer-href">
                                        <div class="single-post clearfix">
                                            <div class="post-thumb">
                                                <img src="img/blog/blog-details/sidebar-thumb/1.jpg" alt="post thumb">
                                            </div>
                                            <div class="post-content">
                                                <h5 class="body-font">Together we can make a difference</h5>
                                                <span><i class="fas fa-calendar-alt"></i> 9 June 2019</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pointer-href">
                                        <div class="single-post clearfix">
                                            <div class="post-thumb">
                                                <img src="img/blog/blog-details/sidebar-thumb/2.jpg" alt="post thumb">
                                            </div>
                                            <div class="post-content">
                                                <h5 class="body-font">We can work together for future</h5>
                                                <span><i class="fas fa-calendar-alt"></i> 9 June 2019</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pointer-href">
                                        <div class="single-post clearfix">
                                            <div class="post-thumb">
                                                <img src="img/blog/blog-details/sidebar-thumb/3.jpg" alt="post thumb">
                                            </div>
                                            <div class="post-content">
                                                <h5 class="body-font">It’s time to show as a best in world!</h5>
                                                <span><i class="fas fa-calendar-alt"></i> 9 June 2019</span>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div> <!-- Recent Posts End -->
                        <!-- Archives -->
                        <div class="find-archives subtitle mb-60">
                            <h3 class="mb-40">.<span>find</span> archives</h3>
                            <ul>
                                <li><a href="#" class="pointer-href">2018</a></li>
                                <li><a href="#" class="pointer-href">2017</a></li>
                                <li><a href="#" class="pointer-href">2016</a></li>
                                <li><a href="#" class="pointer-href">2015</a></li>
                                <li><a href="#" class="pointer-href">2014</a></li>
                                <li><a href="#" class="pointer-href">2013</a></li>
                            </ul>
                        </div> <!-- Archives End -->
                        <!-- Search by Category -->
                        <div class="search-category subtitle">
                            <h3 class="mb-40">.<span>search</span> categories</h3>
                            <ul>
                                <li><a href="#" class="pointer-href">Graphics</a></li>
                                <li><a href="#" class="pointer-href">Branding</a></li>
                                <li><a href="#" class="active pointer-href">Web Design</a></li>
                                <li><a href="#" class="pointer-href">Web Development</a></li>
                                <li><a href="#" class="pointer-href">Travel</a></li>
                                <li><a href="#" class="pointer-href">Trending</a></li>
                            </ul>
                        </div> <!-- Search by Category End -->
                    </div>
                </div>
            </div>
        </div>
    </main> <!-- Single page end -->

@endsection