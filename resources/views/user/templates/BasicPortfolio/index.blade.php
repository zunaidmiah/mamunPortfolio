@extends('user.templates.BasicPortfolio.layouts.main_layout')
@section('body')
    <!-- ====== Hero Area ====== -->
    <div class="hero-aria" id="home">
        <!-- Hero Area Content -->
        <div class="container">
            <div class="hero-content h-100">
                <div class="d-table">
                    <div class="d-table-cell">
                        <h2 class="text-uppercase">Muhammad Mamun</h2>
                        <h3 class="text-uppercase"><span class="typed"></span></h3>
                        <p>Make designed by as Begindot.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- // Hero Area Content -->
        <!-- Hero Area Slider -->
        <div class="hero-area-slids owl-carousel">
            <div class="single-slider">
                <!-- Single Background -->
                <div class="slider-bg" style="background-image: url({{ asset('portfolio/images/hero-area/img-1.jpg') }})">
                </div>
                <!-- // Single Background -->
            </div>
            <div class="single-slider">
                <!-- Single Background -->
                <div class="slider-bg" style="background-image: url({{ asset('portfolio/images/hero-area/img-2.jpg') }})">
                </div>
                <!-- // Single Background -->
            </div>
        </div>
        <!-- // Hero Area Slider -->
    </div>
    <!-- ====== //Hero Area ====== -->


    <!-- ====== About Area ====== -->
    <section id="about" class="section-padding about-area bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>About Me</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus placeat unde non modi,
                            facilis, quae?</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-bg" style="background-image:url({{ asset('portfolio/images/about-bg.jpg') }})">
                        <!-- Social Link -->
                        <div class="social-aria">
                            <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>
                            <a target="_blank" href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                        <!-- // Social Link -->
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <h2>Hello, I am <span>AL Mamun</span></h2>
                        <h4>Graphic Designer and Web Designer</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis numquam ipsam ut deleniti
                            perferendis aliquid ullam, voluptatibus nam sunt eum laudantium cupiditate iste, obcaecati
                            deserunt dolores aliquam quia cum minus animi ipsa est facere culpa fugiat, maxime quam!
                            Itaque aperiam sequi accusantium impedit recusandae nobis quod sunt deserunt provident
                            omnis.</p>

                        <h5>My Skills</h5>

                        <!-- Skill Area -->
                        <div id="skills" class="skill-area">

                            <!-- Single skill -->
                            <div class="single-skill">
                                <div class="skillbar" data-percent="100%">
                                    <div class="skillbar-title"><span>HTML5</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">100%</div>
                                </div>
                            </div>
                            <!-- //Single skill -->

                            <!-- Single skill -->
                            <div class="single-skill">
                                <div class="skillbar" data-percent="85%">
                                    <div class="skillbar-title"><span>CSS3</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">85%</div>
                                </div>
                            </div>
                            <!-- //Single skill -->

                            <!-- Single skill -->
                            <div class="single-skill">
                                <div class="skillbar" data-percent="50%">
                                    <div class="skillbar-title"><span>JS</span></div>
                                    <div class="skillbar-bar"></div>
                                    <div class="skill-bar-percent">50%</div>
                                </div>
                            </div>
                            <!-- //Single skill -->

                        </div>
                        <!-- //Skill Area -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== // About Area ====== -->


    <!-- ====== Fact Counter Section ====== -->
    <!-- ====================================================================
                NOTE: You need to change  'data-count="10"' and 'p' Eliments
            ===================================================================== -->
    <section class="section-padding pb-70 bg-img fact-counter" id="counter"
        style="background-image: url({{ asset('portfolio/images/fan-fact-bg.jpg') }})">
        <div class="container">
            <div class="row">
                <!-- Single Fact Counter -->
                <div class="col-lg-3 co col-md-6 l-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="08">0</span>+</h2>
                        <p>Years Experience</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
                <!-- Single Fact Counter -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="600">0</span>+</h2>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
                <!-- Single Fact Counter -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="09">0</span>+</h2>
                        <p>Awards Win</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
                <!-- Single Fact Counter -->
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="single-fun-fact">
                        <h2><span class="counter-value" data-count="451">0</span>+</h2>
                        <p>Cups of Coffee</p>
                    </div>
                </div>
                <!-- // Single Fact Counter -->
            </div>
        </div>
    </section>
    <!-- ====== //Fact Counter Section ====== -->

    <!-- ====== Service Section ====== -->
    <section id="service" class="section-padding pb-70 service-area bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Service</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <div class="row">
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-code"></i>
                        </div>
                        <h2>Web Design</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente minima repudiandae amet,
                            accusamus ea impedit aperiam consectetur libero. Deleniti id sit minima.</p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-chart-area"></i>
                        </div>
                        <h2>Business Services</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente minima repudiandae amet,
                            accusamus ea impedit aperiam consectetur libero. Deleniti id sit minima.</p>
                    </div>
                </div>
                <!-- //Single Service -->
                <!-- Single Service -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-service">
                        <div class="service-icon">
                            <i class="fa fa-chart-line"></i>
                        </div>
                        <h2>Business Services</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente minima repudiandae amet,
                            accusamus ea impedit aperiam consectetur libero. Deleniti id sit minima.</p>
                    </div>
                </div>
                <!-- //Single Service -->
            </div>

        </div>
    </section>
    <!-- ====== //Service Section ====== -->

     <!-- ====== Pricing Area ====== -->
     <section id="pricing" class="section-padding pb-70 pricing-area">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Pricing Area</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <!-- Single Price Box -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-price-box text-center">
                        <div class="price-head">
                            <h2>Basic</h2>
                            <h3>$99<span>/ Per Month</span></h3>
                        </div>
                        <ul>
                            <li>Basic Feature</li>
                            <li>Best Output</li>
                            <li>Free Update</li>
                            <li>Live chat</li>
                        </ul>
                        <a href="#" class="button">PURCHASE NOW</a>
                    </div>
                </div>
                <!-- // Single Price Box -->
                <!-- Single Price Box -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-price-box text-center">
                        <div class="price-head">
                            <h2>Premium</h2>
                            <h3>$119<span>/ Per Month</span></h3>
                        </div>
                        <ul>
                            <li>Basic Feature</li>
                            <li>Best Output</li>
                            <li>Free Update</li>
                            <li>Live chat</li>
                        </ul>
                        <a href="#" class="button">PURCHASE NOW</a>
                    </div>
                </div>
                <!-- // Single Price Box -->
                <!-- Single Price Box -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-price-box text-center">
                        <div class="price-head">
                            <h2>Enterprise</h2>
                            <h3>$559<span>/ Per Month</span></h3>
                        </div>
                        <ul>
                            <li>Basic Feature</li>
                            <li>Best Output</li>
                            <li>Free Update</li>
                            <li>Live chat</li>
                        </ul>
                        <a href="#" class="button">PURCHASE NOW</a>
                    </div>
                </div>
                <!-- // Single Price Box -->
                <!-- Single Price Box -->
                <div class="col-lg-3 col-md-6">
                    <div class="single-price-box text-center">
                        <div class="price-head">
                            <h2>Business</h2>
                            <h3>$999<span>/ Per Month</span></h3>
                        </div>
                        <ul>
                            <li>Basic Feature</li>
                            <li>Best Output</li>
                            <li>Free Update</li>
                            <li>Live chat</li>
                        </ul>
                        <a href="#" class="button">PURCHASE NOW</a>
                    </div>
                </div>
                <!-- // Single Price Box -->
            </div>
        </div>
    </section>
    <!-- ====== // Pricing Area ====== -->

    <!-- ====== Why choose Me Section ====== -->
    <section id="" class="section-padding why-choose-us pb-70">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Why choose Me</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <!-- Single Why choose me -->
                <div class="col-md-6">
                    <div class="single-why-me why-me-left">
                        <div class="why-me-icon">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <i class="fa fa-clock"></i>
                                </div>
                            </div>
                        </div>
                        <h4>Completed on right time</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam, soluta voluptate,
                            quod dolore facilis iusto eligendi.</p>
                    </div>
                </div>
                <!-- // Single Why choose me -->

                <!-- Single Why choose me -->
                <div class="col-md-6">
                    <div class="single-why-me why-me-right">
                        <div class="why-me-icon">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <i class="fa fa-calendar-check"></i>
                                </div>
                            </div>
                        </div>
                        <h4>Completed on right time</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam, soluta voluptate,
                            quod dolore facilis iusto eligendi.</p>
                    </div>
                </div>
                <!-- // Single Why choose me -->

                <!-- Single Why choose me -->
                <div class="col-md-6">
                    <div class="single-why-me why-me-left">
                        <div class="why-me-icon">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <i class="fa fa-history"></i>
                                </div>
                            </div>
                        </div>
                        <h4>Completed on right time</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam, soluta voluptate,
                            quod dolore facilis iusto eligendi.</p>
                    </div>
                </div>
                <!-- // Single Why choose me -->

                <!-- Single Why choose me -->
                <div class="col-md-6">
                    <div class="single-why-me why-me-right">
                        <div class="why-me-icon">
                            <div class="d-table">
                                <div class="d-table-cell">
                                    <i class="fa fa-phone-volume"></i>
                                </div>
                            </div>
                        </div>
                        <h4>Completed on right time</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem laboriosam, soluta voluptate,
                            quod dolore facilis iusto eligendi.</p>
                    </div>
                </div>
                <!-- // Single Why choose me -->
            </div>
        </div>
    </section>
    <!-- ====== //Why choose Me Section ====== -->

    <!-- ====== Portfolio Section ====== -->
    <section id="portfolio" class="section-padding pb-85 portfolio-area bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Recent Work</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row justify-content-center">
                <!-- Work List Menu-->
                <div class="col-lg-8">
                    <div class="work-list text-center">
                        <ul>
                            <li class="filter" class="active" data-filter="all">ALL</li>
                            <li class="filter" data-filter=".web">Web Design</li>
                            <li class="filter" data-filter=".graphic">Graphic</li>
                            <li class="filter" data-filter=".logo">Logo</li>
                            <li class="filter" data-filter=".wp">Wordpress</li>
                            <li class="filter" data-filter=".other">Other</li>
                        </ul>
                    </div>
                </div>
                <!-- // Work List Menu -->
            </div>
            <div class="row portfolio">
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix wp graphic">
                    <div class="single-portfolio"
                        style="background-image: url({{ asset('portfolio/images/portfolio/img-1.jpg') }})">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="assets/images/portfolio/img-1.jpg"><i
                                    class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix logo web graphic other wp">
                    <div class="single-portfolio"
                        style="background-image: url({{ asset('portfolio/images/portfolio/img-2.jpg') }})">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="assets/images/portfolio/img-2.jpg"><i
                                    class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix wp other">
                    <div class="single-portfolio"
                        style="background-image: url({{ asset('portfolio/images/portfolio/img-3.jpg') }})">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="assets/images/portfolio/img-3.jpg"><i
                                    class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix logo other graphic wp web">
                    <div class="single-portfolio"
                        style="background-image: url({{ asset('portfolio/images/portfolio/img-4.jpg') }})">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="assets/images/portfolio/img-4.jpg"><i
                                    class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix logo other wp graphic web">
                    <div class="single-portfolio"
                        style="background-image: url({{ asset('portfolio/images/portfolio/img-5.jpg') }})">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="assets/images/portfolio/img-5.jpg"><i
                                    class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix wp logo graphic web">
                    <div class="single-portfolio"
                        style="background-image: url({{ asset('portfolio/images/portfolio/img-6.jpg') }})">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="assets/images/portfolio/img-6.jpg"><i
                                    class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover other">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix web wp">
                    <div class="single-portfolio"
                        style="background-image: url({{ asset('portfolio/images/portfolio/img-7.jpg') }})">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="assets/images/portfolio/img-7.jpg"><i
                                    class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix logo graphic wp web">
                    <div class="single-portfolio"
                        style="background-image: url({{ asset('portfolio/images/portfolio/img-8.jpg') }})">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="assets/images/portfolio/img-8.jpg"><i
                                    class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
                <!-- Single Portfolio -->
                <div class="col-lg-4 col-md-6 mix other logo web">
                    <div class="single-portfolio"
                        style="background-image: url({{ asset('portfolio/images/portfolio/img-9.jpg') }})">
                        <div class="portfolio-icon text-center">
                            <a data-lightbox='lightbox' href="assets/images/portfolio/img-9.jpg"><i
                                    class="fas fa-expand-arrows-alt"></i></a>
                        </div>
                        <div class="portfolio-hover">
                            <h4>Project <span>Name</span></h4>
                        </div>
                    </div>
                </div>
                <!-- // Single Portfolio -->
            </div>
        </div>
    </section>
    <!-- ====== // Portfolio Section ====== -->

    <!-- ====== Frequently asked questions ====== -->
    <section class="section-padding faq-area bg-secondary">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center faq-title">
                        <h2>Frequently asked questions</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <div class="col-lg-5">
                    <div class="faq-bg bg-img" style="background-image: url({{ asset('portfolio/images/faq.jpeg') }})">
                    </div>
                </div>
                <div class="col-lg-7">
                    <!-- FAQ Content -->
                    <div class="faq-content" id="accordion">

                        <!-- Single FAQ -->
                        <div class="single-faq">

                            <!-- FAQ Header -->
                            <h4 class="collapsed" data-toggle="collapse" data-target="#faq-1">Collapsible Group Item
                                One</h4>
                            <!-- // FAQ Header -->

                            <!-- FAQ Content -->
                            <div id="faq-1" class="collapse show" data-parent="#accordion">
                                <div class="faq-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat illo et, eum rerum
                                    nihil totam. Dolore atque quasi aspernatur fugiat commodi pariatur dignissimos,
                                    similique deleniti alias cumque, ea dolorum maiores, reprehenderit iusto quo
                                    officiis magni quibusdam est illum repellat adipisci quam qui error fugit? Fuga quam
                                    doloribus quas voluptas ducimus, adipisci minima quo consequatur ex!
                                </div>
                            </div>
                            <!-- FAQ Content -->
                        </div>
                        <!-- // Single FAQ -->

                        <!-- Single FAQ -->
                        <div class="single-faq">

                            <!-- FAQ Header -->
                            <h4 class="collapsed" data-toggle="collapse" data-target="#faq-2">Lorem ipsum dolor sit
                                amet Two</h4>
                            <!-- // FAQ Header -->

                            <!-- FAQ Content -->
                            <div id="faq-2" class="collapse" data-parent="#accordion">
                                <div class="faq-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat illo et, eum rerum
                                    nihil totam. Dolore atque quasi aspernatur fugiat commodi pariatur dignissimos,
                                    similique deleniti alias cumque, ea dolorum maiores, reprehenderit iusto quo
                                    officiis magni quibusdam est illum repellat adipisci quam qui error fugit? Fuga quam
                                    doloribus quas voluptas ducimus, adipisci minima quo consequatur ex!
                                </div>
                            </div>
                            <!-- FAQ Content -->
                        </div>
                        <!-- // Single FAQ -->

                        <!-- Single FAQ -->
                        <div class="single-faq">

                            <!-- FAQ Header -->
                            <h4 class="collapsed" data-toggle="collapse" data-target="#faq-3">Collapsible Group Item
                                Three</h4>
                            <!-- // FAQ Header -->

                            <!-- FAQ Content -->
                            <div id="faq-3" class="collapse" data-parent="#accordion">
                                <div class="faq-body">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat illo et, eum rerum
                                    nihil totam. Dolore atque quasi aspernatur fugiat commodi pariatur dignissimos,
                                    similique deleniti alias cumque, ea dolorum maiores, reprehenderit iusto quo
                                    officiis magni quibusdam est illum repellat adipisci quam qui error fugit? Fuga quam
                                    doloribus quas voluptas ducimus, adipisci minima quo consequatur ex!
                                </div>
                            </div>
                            <!-- FAQ Content -->
                        </div>
                        <!-- // Single FAQ -->

                    </div>
                    <!-- FAQ Content -->
                </div>
            </div>
        </div>
    </section>
    <!-- ====== // Frequently asked questions ====== -->

    <!-- ====== Blog Section ====== -->
    <section id="blog" class="section-padding pb-70 blog-section bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Blog Area</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <!-- Single Blog -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-thumb"
                            style="background-image: url({{ asset('portfolio/images/blog/img-1.jpg') }})"></div>
                        <h4 class="blog-title"><a href="single-blog.html">Full Responsive</a></h4>
                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit,
                            officiis non.</p>
                        <a href="single-blog.html" class="button">Read More</a>
                    </div>
                </div>
                <!-- Single Blog -->
                <!-- Single Blog -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-thumb"
                            style="background-image: url({{ asset('portfolio/images/blog/img-2.jpg') }})"></div>
                        <h4 class="blog-title"><a href="single-blog.html">Lifetime free Update</a></h4>
                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit,
                            officiis non.</p>
                        <a href="single-blog.html" class="button">Read More</a>
                    </div>
                </div>
                <!-- Single Blog -->
                <!-- Single Blog -->
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog">
                        <div class="blog-thumb"
                            style="background-image: url({{ asset('portfolio/images/blog/img-3.jpg') }})"></div>
                        <h4 class="blog-title"><a href="single-blog.html">Unlimited Support</a></h4>
                        <p class="blog-meta"><a href="#">AL Mamun</a>, 22 FEB 2018</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque similique velit,
                            officiis non.</p>
                        <a href="single-blog.html" class="button">Read More</a>
                    </div>
                </div>
                <!-- Single Blog -->
            </div>
            <div class="d-flex justify-content-center single-blog bg-none" style="background-color: unset; box-shadow: unset;">
                <a href="{{ route('blog') }}" class="button">Show ALL</a>
            </div>
        </div>
    </section>
    <!-- ====== // Blog Section ====== -->


    <!-- ====== Testimonial Section ====== -->
    <section id="testimonial" class="section-padding bg-secondary testimonial-area">
        <div class="container bg-white">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Testimonial</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="testimonials owl-carousel" data-ride="carousel">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nam suscipit similique
                                quod eaque adipisci modi recusandae nesciunt veniam, ut, rem eligendi minima et,
                                accusantium?</p>
                            <h4>Aseven M <span>CEO - aseven.info</span></h4>

                        </div>
                        <!-- // Single Testimonial -->
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nam suscipit similique
                                quod eaque adipisci modi recusandae nesciunt veniam, ut, rem eligendi minima et,
                                accusantium?</p>
                            <h4>Aseven M <span>CEO - aseven.info</span></h4>

                        </div>
                        <!-- // Single Testimonial -->
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <div class="testimonial-quote">
                                <i class="fa fa-quote-right"></i>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam nam suscipit similique
                                quod eaque adipisci modi recusandae nesciunt veniam, ut, rem eligendi minima et,
                                accusantium?</p>
                            <h4>Aseven M <span>CEO - aseven.info</span></h4>

                        </div>
                        <!-- // Single Testimonial -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== // Testimonial Section ====== -->

    <!-- ====== Team Section ====== -->
    <section class="section-padding pb-70 team-area">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Team</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->
            <div class="row">
                <!-- Single Team -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-thumb"
                            style="background-image: url({{ asset('portfolio/images/team/img-1.jpg') }})">
                            <div class="team-social">
                                <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4>AL Mamun</h4>
                            <span>CEO Founder</span>
                        </div>
                    </div>
                </div>
                <!-- // Single Team -->
                <!-- Single Team -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-thumb"
                            style="background-image: url({{ asset('portfolio/images/team/img-2.jpg') }})">
                            <div class="team-social">
                                <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4>AL Mamun</h4>
                            <span>CEO Founder</span>
                        </div>
                    </div>
                </div>
                <!-- // Single Team -->
                <!-- Single Team -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-thumb"
                            style="background-image: url({{ asset('portfolio/images/team/img-3.jpg') }})">
                            <div class="team-social">
                                <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4>AL Mamun</h4>
                            <span>CEO Founder</span>
                        </div>
                    </div>
                </div>
                <!-- // Single Team -->
                <!-- Single Team -->
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="single-team">
                        <div class="team-thumb"
                            style="background-image: url({{ asset('portfolio/images/team/img-4.jpg') }})">
                            <div class="team-social">
                                <a target="_blank" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-twitter"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-linkedin"></i></a>
                                <a target="_blank" href="#"><i class="fab fa-pinterest"></i></a>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4>AL Mamun</h4>
                            <span>CEO Founder</span>
                        </div>
                    </div>
                </div>
                <!-- // Single Team -->
            </div>
        </div>
    </section>
    <!-- ====== // Team Section ====== -->


    <!-- ====== Call to Action Area ====== -->
    <section class="section-padding call-to-action-aria bg-secondary">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2>Lorem ipsum dolor sit amet</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla fugit optio voluptatem modi,
                        nemo, cupiditate vel, aspernatur, quae consequatur officia unde totam.</p>
                </div>
                <div class="col-lg-3">
                    <div class="cta-button">
                        <div class="d-table">
                            <div class="d-table-cell">
                                <a href="#" class="button">Contact me</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====== // Call to Action Area ====== -->


    <!-- ====== Contact Area ====== -->
    <section id="contact" class="section-padding contact-section bg-light">
        <div class="container">
            <!-- Section Title -->
            <div class="row justify-content-center">
                <div class="col-lg-6 ">
                    <div class="section-title text-center">
                        <h2>Contact Me</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>
            </div>
            <!-- //Section Title -->

            <!-- Contact Form -->
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- Form -->
                    <form id="contact-form" action="mail.php" method="post" class="contact-form bg-white">
                        <div class="row">
                            <div class="col-lg-6 form-group">
                                <input type="text" class="form-control" name="name" required placeholder="Name">
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="email" class="form-control" name="email" required placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" required placeholder="Subject">
                        </div>

                        <div class="form-group">
                            <textarea name="message" id="" class="form-control" required placeholder="Message"></textarea>
                        </div>
                        <div class="form-btn text-center">
                            <button class="button" type="submit">Send Message</button>
                            <p class="form-message"></p>
                        </div>
                    </form>
                    <!-- // Form -->
                </div>
            </div>
            <!-- // Contact Form -->
        </div>
    </section>
    <!-- ====== // Contact Area ====== -->
@endsection
