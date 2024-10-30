@extends('user.templates.BasicPortfolio.layouts.main_layout')

    <style>
        div.gallery {
            border: 1px solid #ccc;
        }

        /* div.gallery:hover {
            border: 1px solid #777;
        } */

        div.gallery img {
            width: 100%;
            height: 300px;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 10px 6px;
            float: left;
            width: 33.3333%;
        }

        @media only screen and (max-width: 700px) {
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px) {
            .responsive {
                width: 100%;
            }
        }



        input[type=text], input[type=email], textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
            background-color: #020312;
            }


            input[type=submit] {
            background-color: #B92B0B;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
            }

            input[type=submit]:hover {
            background-color: #45a049;
            }

            .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
            }

            .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
            }

            /* Clear floats after the columns */
            .row:after {
            content: "";
            display: table;
            clear: both;
            }

            /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
            @media screen and (max-width: 600px) {
            .col-25, .col-75, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
            }
            .comment{
                border: 1px solid #ea3509;
                border-radius: 30px;
                padding: 1% 2%;
                margin-bottom: 15px;
            }
    </style>
    @section('body')
    <section class="blog-section">
        <div class="container">
            <div class="row">
                <!-- Blog Main Content -->
                <div class="col-lg-8">
                    <div class="blog-post">
                        <img src="assets/images/blog/img-1.jpg" alt="" class="blog-img">
                        <h4 class="blog-title"><a href="#">Safs is Full Responsive Web site Template</a></h4>
                        <p class="blog-meta"><a class="user-name" href="#">AL Mamun</a><span class="blog-date">22 FEB 2018</span><a href="#" class="blog-comment">Comments (05)</a></p>
                        <div class="blog-main-content">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore inventore nam laborum maiores aspernatur magni, totam laudantium incidunt. Itaque quia nostrum aliquam amet officiis pariatur obcaecati nulla autem facere quasi natus eligendi corporis facilis ducimus rerum omnis deserunt! Accusamus quidem quasi. Illo minus, magni commodi, tempore asperiores eligendi dolor obcaecati alias corporis assumenda! Deleniti laborum voluptatem blanditiis</p>

                            <blockquote class="blockquote bg-light">
                                <h6>Lorem ipsum dolor sit amet, consectetur.</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet totam, numquam? Voluptatum in voluptates quibusdam.</p>
                            </blockquote>

                            <p>ducimus odit dolor reiciendis assumenda commodi animi repudiandae rem libero non? Non reiciendis, quis, laudantium perspiciatis fugit ex. Deserunt itaque ad, corrupti beatae quos perferendis provident, ullam voluptates nam, sequi quia Inventore beatae tempore doloribus delectus pariatur officia non asperiores et aliquam voluptatibus sint, sit, eligendi, voluptatum deleniti optio similique? Deleniti recusandae, a quo cumque magnam repellat distinctio accusantium mollitia aspernatur hic, architecto et officiis consequatur voluptate unde. Sed quod dignissimos voluptatibus animi veniam ducimus, nemo nobis quisquam, tempora reiciendis doloribus sit error. Rem accusamus deserunt repellat. Mollitia molestiae, cupiditate suscipit laboriosam unde.</p>

                            <div class="blog-content-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <P>Share:</P>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="share text-right">
                                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                                            <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Blog Author -->
                        <div class="blog-author">
                            <div class="user-img" style="background-image: url(assets/images/team/img-1.jpg)"></div>
                            <div class="user-content">
                                <h2>AL Mamun <span>Graphic designer</span></h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus, voluptas hic animi officiis corrupti velit commodi sed tempora reprehenderit.</p>
                                <!-- Social Area -->
                                <div class="social-aria text-left">
                                    <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>
                                    <a target="_blank" href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                                <!-- // Social Area -->
                            </div>
                        </div>
                        <!-- // Blog Author -->

                        <!-- Blog Comments -->
                        <div class="blog-comment">
                            <h3>Comments (05)</h3>
                            <ol class="main-comment">
                                <li class="single-comment">

                                    <!-- Comment Content -->
                                    <div class="comment">
                                        <div class="comment-user-img" style="background-image: url(assets/images/team/img-2.jpg)"></div>
                                        <div class="comment-content">
                                            <h4>Naeem Islam</h4>
                                            <p class="comment-date">20 Feb 2018</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nihil perspiciatis placeat minima dolores magnam odio voluptatibus non. Ratione, ut, fugit.</p>
                                            <a href="#"><i class="fa fa-reply"></i>Replay</a>
                                        </div>
                                    </div>
                                    <!-- // Comment Content -->

                                    <ol class="sub-comment">
                                        <li class="single-comment">
                                            <!-- Comment Content -->
                                            <div class="comment">
                                                <div class="comment-user-img" style="background-image: url(assets/images/team/img-1.jpg)"></div>
                                                <div class="comment-content">
                                                    <h4>AL Mamun</h4>
                                                    <p class="comment-date">20 Feb 2018</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nihil perspiciatis placeat minima dolores magnam odio voluptatibus non. Ratione, ut, fugit.</p>
                                                    <a href="#"><i class="fa fa-reply"></i>Replay</a>
                                                </div>
                                            </div>
                                            <!-- // Comment Content -->
                                        </li>
                                    </ol>
                                </li>
                                <li class="single-comment">
                                    <!-- Comment Content -->
                                    <div class="comment">
                                        <div class="comment-user-img" style="background-image: url(assets/images/team/img-3.jpg)"></div>
                                        <div class="comment-content">
                                            <h4>Masud Rana</h4>
                                            <p class="comment-date">20 Feb 2018</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel nihil perspiciatis placeat minima dolores magnam odio voluptatibus non. Ratione, ut, fugit.</p>
                                            <a href="#"><i class="fa fa-reply"></i>Replay</a>
                                        </div>
                                    </div>
                                    <!-- // Comment Content -->
                                </li>
                            </ol>

                            <!-- Blog Comment Form -->
                            <div class="blog-comment-form">
                                <form action="#">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <p><input type="text" placeholder="Name" required></p>
                                        </div>
                                        <div class="col-lg-6">
                                            <p><input type="email" placeholder="Email" required></p>
                                        </div>
                                    </div>
                                    <p><input type="text" placeholder="Website"></p>
                                    <p><textarea name="" id="" placeholder="Your Comments" required></textarea></p>
                                    <div class="comment-btn text-center">
                                        <button class="button" type="submit">Comment Now</button>
                                    </div>
                                </form>
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
                                        <a href="single-blog.html">Lorem ipsum dolor sit amet onsectetur adipisicing elit.</a>
                                        <div class="blog-date">22 FEB 2018</div>
                                    </div>
                                </li>
                                <!-- Single Recent Post -->
                                <!-- Single Recent Post -->
                                <li>
                                    <span style="background-image: url(assets/images/blog/img-2.jpg)"></span>
                                    <div class="blog-content">
                                        <a href="single-blog.html">Lorem ipsum dolor sit amet onsectetur adipisicing elit.</a>
                                        <div class="blog-date">22 FEB 2018</div>
                                    </div>
                                </li>
                                <!-- Single Recent Post -->
                                <!-- Single Recent Post -->
                                <li>
                                    <span style="background-image: url(assets/images/blog/img-3.jpg)"></span>
                                    <div class="blog-content">
                                        <a href="single-blog.html">Lorem ipsum dolor sit amet onsectetur adipisicing elit.</a>
                                        <div class="blog-date">22 FEB 2018</div>
                                    </div>
                                </li>
                                <!-- Single Recent Post -->
                                <!-- Single Recent Post -->
                                <li>
                                    <span style="background-image: url(assets/images/blog/img-4.jpg)"></span>
                                    <div class="blog-content">
                                        <a href="#">Lorem ipsum dolor sit amet onsectetur adipisicing elit.</a>
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
                                                <h3>` + comment + `</h3>
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
