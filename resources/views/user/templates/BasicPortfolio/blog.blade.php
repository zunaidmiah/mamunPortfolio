@extends('user.templates.BasicPortfolio.layouts.main_layout')

    @section('body')

        @if(isset($data['blogs']))
        <section class="blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-area">
                            <div class="row">
                                <!-- Single Blog -->
                                <div class="col-sm-6">
                                    <div class="single-blog">
                                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-1.jpg)"></div>
                                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                                        <a href="single-blog.html" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-6">
                                    <div class="single-blog">
                                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-2.jpg)"></div>
                                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                                        <a href="single-blog.html" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-6">
                                    <div class="single-blog">
                                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-3.jpg)"></div>
                                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                                        <a href="single-blog.html" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-6">
                                    <div class="single-blog">
                                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-4.jpg)"></div>
                                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                                        <a href="#" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-6">
                                    <div class="single-blog">
                                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-5.jpg)"></div>
                                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                                        <a href="#" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-6">
                                    <div class="single-blog">
                                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-6.jpg)"></div>
                                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                                        <a href="single-blog.html" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-6">
                                    <div class="single-blog">
                                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-7.jpg)"></div>
                                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                                        <a href="single-blog.html" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-6">
                                    <div class="single-blog">
                                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-8.jpg)"></div>
                                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                                        <a href="single-blog.html" class="button">Read More</a>
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
                    <div class="col-lg-4">
                        <div class="blog-sidebar">
                            <!-- Sidebar Widget -->
                            <div class="sidebar-widget">
                                <h2 class="sidebar-title">Search here</h2>
                                <form action="blog.html" method="get">
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
                                            <a href="single-blog.html">Lorem ipsum dolor sit amet onsectetur</a>
                                            <div class="blog-date">22 FEB 2018</div>
                                        </div>
                                    </li>
                                    <!-- Single Recent Post -->
                                    <!-- Single Recent Post -->
                                    <li>
                                        <span style="background-image: url(assets/images/blog/img-2.jpg)"></span>
                                        <div class="blog-content">
                                            <a href="single-blog.html">Lorem ipsum dolor sit amet onsectetur</a>
                                            <div class="blog-date">22 FEB 2018</div>
                                        </div>
                                    </li>
                                    <!-- Single Recent Post -->
                                    <!-- Single Recent Post -->
                                    <li>
                                        <span style="background-image: url(assets/images/blog/img-3.jpg)"></span>
                                        <div class="blog-content">
                                            <a href="single-blog.html">Lorem ipsum dolor sit amet onsectetur</a>
                                            <div class="blog-date">22 FEB 2018</div>
                                        </div>
                                    </li>
                                    <!-- Single Recent Post -->
                                    <!-- Single Recent Post -->
                                    <li>
                                        <span style="background-image: url(assets/images/blog/img-4.jpg)"></span>
                                        <div class="blog-content">
                                            <a href="single-blog.html">Lorem ipsum dolor sit amet onsectetur</a>
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
        @else
        <section class="blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-area">
                            <div class="row">
                                <!-- Single Blog -->
                                <div class="col-sm-6">
                                    <div class="single-blog">
                                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-1.jpg)"></div>
                                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                                        <a href="single-blog.html" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-6">
                                    <div class="single-blog">
                                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-2.jpg)"></div>
                                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                                        <a href="single-blog.html" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-6">
                                    <div class="single-blog">
                                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-3.jpg)"></div>
                                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                                        <a href="single-blog.html" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-6">
                                    <div class="single-blog">
                                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-4.jpg)"></div>
                                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                                        <a href="#" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-6">
                                    <div class="single-blog">
                                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-5.jpg)"></div>
                                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                                        <a href="#" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-6">
                                    <div class="single-blog">
                                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-6.jpg)"></div>
                                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                                        <a href="single-blog.html" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-6">
                                    <div class="single-blog">
                                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-7.jpg)"></div>
                                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                                        <a href="single-blog.html" class="button">Read More</a>
                                    </div>
                                </div>
                                <!-- Single Blog -->
                                <!-- Single Blog -->
                                <div class="col-sm-6">
                                    <div class="single-blog">
                                        <div class="blog-thumb" style="background-image: url(assets/images/blog/img-8.jpg)"></div>
                                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit, officiis non.</p>
                                        <a href="single-blog.html" class="button">Read More</a>
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
                    <div class="col-lg-4">
                        <div class="blog-sidebar">
                            <!-- Sidebar Widget -->
                            <div class="sidebar-widget">
                                <h2 class="sidebar-title">Search here</h2>
                                <form action="blog.html" method="get">
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
                                            <a href="single-blog.html">Lorem ipsum dolor sit amet onsectetur</a>
                                            <div class="blog-date">22 FEB 2018</div>
                                        </div>
                                    </li>
                                    <!-- Single Recent Post -->
                                    <!-- Single Recent Post -->
                                    <li>
                                        <span style="background-image: url(assets/images/blog/img-2.jpg)"></span>
                                        <div class="blog-content">
                                            <a href="single-blog.html">Lorem ipsum dolor sit amet onsectetur</a>
                                            <div class="blog-date">22 FEB 2018</div>
                                        </div>
                                    </li>
                                    <!-- Single Recent Post -->
                                    <!-- Single Recent Post -->
                                    <li>
                                        <span style="background-image: url(assets/images/blog/img-3.jpg)"></span>
                                        <div class="blog-content">
                                            <a href="single-blog.html">Lorem ipsum dolor sit amet onsectetur</a>
                                            <div class="blog-date">22 FEB 2018</div>
                                        </div>
                                    </li>
                                    <!-- Single Recent Post -->
                                    <!-- Single Recent Post -->
                                    <li>
                                        <span style="background-image: url(assets/images/blog/img-4.jpg)"></span>
                                        <div class="blog-content">
                                            <a href="single-blog.html">Lorem ipsum dolor sit amet onsectetur</a>
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


    @endsection
