@extends('user.templates.GraphicsPortfolio.layouts.main_layout')

@section('body')

    <style>
        .comment{
                border: 1px solid #EA2262;
                border-radius: 30px;
                padding: 1% 2%;
                margin-bottom: 15px;
            }
    </style>
    <!-- Single Page -->
    <main class="single-page">
        <!-- Page Header -->
        <div class="page-header">
            <h2><a href="blog.html" class="pointer-large">.<span>blog</span></a> <span>.</span>details</h2>
        </div> <!-- Page Header End -->
        <div class="separator"></div>
        <div class="blog-details-wrapper">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="details-content-left">
                        <!-- Blog Header -->
                        <div class="blog-info clearfix">
                            <div class="blog-overview-block">
                                <div class="blog-head-thumb">
                                    <img src="{{ asset('GraphicsPortfolio/img/blog/blog-details/thumb-big.jpg') }}" alt="blog thumb">
                                </div>
                                <div class="blog-overview">
                                    <ul>
                                        @if($data['blog'])
                                        <li><a href="#" class="newsfeed-calendar pointer-small"><i class="fas fa-calendar-alt"></i> {{ date('d M Y', strtotime($data['blog']['created_at'])) }}</a></li>
                                        <li><a href="#" class="newsfeed-tag pointer-small"><i class="fas fa-tag"></i> Blog</a></li>
                                        <li><a href="#" class="newsfeed-user pointer-small"><i class="fas fa-user"></i> {{ get_username() ?? "Star Labs" }} </a></li>
                                        <li><a href="#" class="newsfeed-comments pointer-small"><i class="fas fa-comments"></i> {{ count($data['blog_comments']) }} Comment</a></li>
                                        @else
                                        <li><a href="#" class="newsfeed-calendar pointer-small"><i class="fas fa-calendar-alt"></i> 28 July 2019</a></li>
                                        <li><a href="#" class="newsfeed-tag pointer-small"><i class="fas fa-tag"></i> Branding</a></li>
                                        <li><a href="#" class="newsfeed-user pointer-small"><i class="fas fa-user"></i> Author</a></li>
                                        <li><a href="#" class="newsfeed-comments pointer-small"><i class="fas fa-comments"></i> 3 Comments</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-share-links">
                                <span>Share with</span>
                                <ul>
                                    <li><a href="#" class="pointer-href"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#" class="pointer-href"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#" class="pointer-href"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#" class="pointer-href"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div> <!-- Blog Header End -->
                        <!-- Blog Body -->
                        <div class="blog-body">
                            @if(isset($data['blog']))
                            <h3 class="theme-color">{{ $data['blog']['title'] }}</h3>
                            <input type="hidden" value="{{  $data['blog']['id'] ?? 0  }}" id="id">
                            <?php echo substr($data['blog']['description'], 0, 250); ?>...
                            @else
                            <h3 class="theme-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna neque, pulvinar in orci
                                in, pellentesque consequat tellus. Fusce mauris massa, pellentesque nec augue at,
                                hendrerit rutrum ex. Cras venenatis vulputate nisi ut elementum.</p>
                            @endif
                            <div class="blog-feature-image">
                                <div class="row grid-2">
                                    @if(isset($data['blog_images']))
                                    @foreach ($data['blog_images'] as $key => $image) 
                                    <?php
                                    $col = 8;
                                    if($key == 1 or $key == 2)
                                        $col = 4;
                                    if($key == 3)
                                        break;
                                    ?>
                                    <div class="col-xl-{{$col}} col-lg-{{$col}} col-md-{{$col}} col-sm-{{$col}} grid-item-2">
                                        <div class="blog-content-image text-center">
                                            <img src="{{ asset($image) }}" alt="blog image">
                                            <div class="blog-popup-block">
                                                <a href="{{ asset($image) }}" class="blog_content_popup pointer-open"><i class="fas fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    @else
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 grid-item-2">
                                        <div class="blog-content-image text-center">
                                            <img src="{{ asset('GraphicsPortfolio/img/blog/blog-details/1.jpg') }}" alt="blog image">
                                            <div class="blog-popup-block">
                                                <a href="{{ asset('GraphicsPortfolio/img/blog/blog-details/1.jpg') }}" class="blog_content_popup pointer-open"><i class="fas fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 grid-item-2">
                                        <div class="blog-content-image text-center">
                                            <img src="{{ asset('GraphicsPortfolio/img/blog/blog-details/2.jpg') }}" alt="blog image">
                                            <div class="blog-popup-block">
                                                <a href="{{ asset('GraphicsPortfolio/img/blog/blog-details/2.jpg') }}" class="blog_content_popup pointer-open"><i class="fas fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 grid-item-2">
                                        <div class="blog-content-image text-center">
                                            <img src="{{ asset('GraphicsPortfolio/img/blog/blog-details/3.jpg') }}" alt="blog image">
                                            <div class="blog-popup-block">
                                                <a href="{{ asset('GraphicsPortfolio/img/blog/blog-details/3.jpg') }}" class="blog_content_popup pointer-open"><i class="fas fa-search"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            @if(isset($data['blog']))
                            <?php echo $data['blog']['description']; ?>
                            @else
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna neque, pulvinar in orci
                                in, pellentesque consequat tellus. Fusce mauris massa, pellentesque nec augue at,
                                hendrerit rutrum ex. Cras venenatis vulputate nisi ut elementum.</p>
                            <div class="body-tags mb-50 mt-30">
                                <h6 class="body-font">TAGS:</h6>
                                <div class="tag-keywords">
                                    <a href="#" class="pointer-small">branding</a>
                                    <a href="#" class="pointer-small">graphic-design</a>
                                    <a href="#" class="pointer-small">mockup</a>
                                </div>
                            </div>
                            @endif
                            <div class="comment-section" style="margin-top: 5%; margin-bottom: 5%;">
                                <h4 style="color: #EA2262;">All comments</h4>
                                <div class="all-comment">
                                @foreach ($data['blog_comments'] as $comment)
                                <div class="comment">
                                    <h4>{{ $comment->comment }}</h4>
                                    <div style="display: flex; justify-content: space-between">
                                        <p>{{ $comment->name }}</p>
                                        <p>{{ date('d M, Y', strtotime($comment->created_at)) }}</p>
                                    </div>
                                </div>
                                @endforeach
                                </div>
                            </div>
                            <div class="blog-comment-box">
                                <h4 class="mb-40">Leave a comment:</h4>
                                <form action="javascript:comment()">
                                    <div class="row">
                                        <div class="col-xl-12">
                                            <div class="leave-form">
                                                <input class="pointer-input" id="name" placeholder="Your name" type="text">
                                            </div>
                                            <div class="leave-form">
                                                <input class="pointer-input" id="email" placeholder="Your email" type="email">
                                            </div>
                                            <div class="text-leave">
                                                <textarea class="pointer-input" id="comment" placeholder="Your comments"></textarea>
                                                <button class="submit pointer-href" type="submit">POST COMMENT</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div> <!-- Blog Body End -->
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
                            <h3 class="mb-40">.<span>blog</span> categories</h3>
                            <ul>
                                @if(isset($data['blog']))
                                @if(isset($data['blog_category']))
                                @foreach ($data['blog_category'] as $c)
                                <li><a href="#" class="pointer-href">{{ $c }}</a></li>
                                @endforeach
                                @else
                                No categories <br><br>
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
                            <h3 class="mb-40">.<span>recent</span> posts</h3>
                            <ul>
                                @if(isset($data['blog']) and isset($data['related_blogs']))
                                @foreach ($data['related_blogs'] as $blog)
                                <?php $image = get_media_first($blog->id, 'blogs'); ?>
                                <li>
                                    <a href="/blog-details/{{ urlencode($blog->title) }}" class="pointer-href">
                                        <div class="single-post clearfix">
                                            <div class="post-thumb">
                                                <img src="{{ asset($image) }}" alt="post thumb">
                                            </div>
                                            <div class="post-content">
                                                <h5 class="body-font">{{ $blog->title }}</h5>
                                                <span><i class="fas fa-calendar-alt"></i> {{ date('d M, Y', strtotime($blog->created_at)) }}</span>
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

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script>

        function comment() {
            var name = jQuery('#name').val();
            var email = jQuery('#email').val();
            var comment = jQuery('#comment').val();
            var id = jQuery('#id').val();
            var time = "{{ date('d M, Y', strtotime('now')) }}";
            $.ajax({
                url: '/comment-db',
                type: 'POST',
                data: { name : name, email : email, comment : comment, _token : "{{csrf_token()}}", rel_id : id },
                success: function(res) {
                    $('.all-comment').prepend(`<div class="comment" id="new-comment-">
                                                <h4>` + comment + `</h4>
                                                <div style="display: flex; justify-content: space-between">
                                                    <p>` + name + `</p>
                                                    <p>` + time + `</p>
                                                </div>
                                            </div>`);
                    $('.blog-comment-box').prepend(`<p style="color: green;"> Comment added </p>`);
                    jQuery('#name').val('');
                    jQuery('#email').val('');
                    jQuery('#comment').val('');
                    $('html, body').animate({
                        scrollTop: $("#new-comment").offset().top
                    }, 1000);
                },
                error: function(){
                    alert("Opps! something went wrong");
                }
            });
        }
    </script>

@endsection
