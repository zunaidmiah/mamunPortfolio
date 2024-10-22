@extends('user.templates.BasicPortfolio.layouts.main_layout')

@section('body')
    <div class="section animated-row" data-section="home">
        <div class="section-inner">
            <div class="welcome-box">
                <span class="welcome-first animate" data-animate="fadeInUp">Hello, welcome to</span>
                <h1 class="welcome-title animate" data-animate="fadeInUp">elegance</h1>
                <p class="animate" data-animate="fadeInUp">This is a clean and modern HTML5 template with a video
                    background. You can use this layout for your profile page. Please spread a word about templatemo
                    to your friends. Thank you.</p>
                <div class="scroll-down next-section animate" data-animate="fadeInUp"><img src="{{ asset('portfolio/images/mouse-scroll.png') }}"
                        alt=""><span>Scroll Down</span></div>
            </div>
        </div>
    </div>

    <div class="section animated-row" data-section="about">
        <div class="section-inner">
            <div class="about-section">
                <div class="row justify-content-center">
                    <div class="col-lg-8 wide-col-laptop">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="about-contentbox">
                                    <div class="animate" data-animate="fadeInUp">
                                        <span>About Me</span>
                                        <h2>Who am i?</h2>
                                        <p>Credits go to <strong>Unsplash</strong> and <strong>Pexels</strong> for
                                            photos and video used in this template. Vivamus tincidunt, augue rutrum
                                            convallis volutpat, massa lacus tempus leo.</p>
                                    </div>
                                    <div class="facts-list owl-carousel">
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="counter-box">
                                                <i class="fa fa-trophy counter-icon" aria-hidden="true"></i><span
                                                    class="count-number">32</span> Awards Won
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="counter-box">
                                                <i class="fa fa-graduation-cap counter-icon" aria-hidden="true"></i><span
                                                    class="count-number">4</span>
                                                Degrees
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="counter-box">
                                                <i class="fa fa-desktop counter-icon" aria-hidden="true"></i><span
                                                    class="count-number">12</span> Working Years
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="counter-box">
                                                <i class="fa fa-support counter-icon" aria-hidden="true"></i><span
                                                    class="count-number">6</span> Team Members
                                            </div>
                                        </div>
                                        <div class="item animate" data-animate="fadeInUp">
                                            <div class="counter-box">
                                                <i class="fa fa-certificate counter-icon" aria-hidden="true"></i><span
                                                    class="count-number">10</span>
                                                Certificates
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <figure class="about-img animate" data-animate="fadeInUp"><img src="{{ asset('portfolio/images/profile-girl.jpg') }}"
                                        class="rounded" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section animated-row" data-section="services">
        <div class="section-inner">
            <div class="row justify-content-center">
                <div class="col-md-8 wide-col-laptop">
                    <div class="title-block animate" data-animate="fadeInUp">
                        <span>Services</span>
                        <h2>What I Do?</h2>
                    </div>
                    <div class="services-section">
                        <div class="services-list owl-carousel">
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="service-box">
                                    <span class="service-icon"><i class="fa fa-bookmark" aria-hidden="true"></i></span>
                                    <h3>Bootstrap Themes</h3>
                                    <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu
                                        maximus enim tortor vitae quam. </p>
                                </div>
                            </div>
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="service-box">
                                    <span class="service-icon"><i class="fa fa-cloud" aria-hidden="true"></i></span>
                                    <h3>HTML5 Coding</h3>
                                    <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu
                                        maximus enim tortor vitae quam. </p>
                                </div>
                            </div>
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="service-box">
                                    <span class="service-icon"><i class="fa fa-desktop" aria-hidden="true"></i></span>
                                    <h3>Fully Responsive</h3>
                                    <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu
                                        maximus enim tortor vitae quam. </p>
                                </div>
                            </div>
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="service-box">
                                    <span class="service-icon"><i class="fa fa-mobile" aria-hidden="true"></i></span>
                                    <h3>Mobile Ready</h3>
                                    <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu
                                        maximus enim tortor vitae quam. </p>
                                </div>
                            </div>
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="service-box">
                                    <span class="service-icon"><i class="fa fa-comments" aria-hidden="true"></i></span>
                                    <h3>Fast Support</h3>
                                    <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu
                                        maximus enim tortor vitae quam. </p>
                                </div>
                            </div>
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="service-box">
                                    <span class="service-icon"><i class="fa fa-database" aria-hidden="true"></i></span>
                                    <h3>24-hour Up Time</h3>
                                    <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu
                                        maximus enim tortor vitae quam. </p>
                                </div>
                            </div>
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="service-box">
                                    <span class="service-icon"><i class="fa fa-bell" aria-hidden="true"></i></span>
                                    <h3>Instant Upgrades</h3>
                                    <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu
                                        maximus enim tortor vitae quam. </p>
                                </div>
                            </div>
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="service-box">
                                    <span class="service-icon"><i class="fa fa-camera" aria-hidden="true"></i></span>
                                    <h3>Always Monitoring</h3>
                                    <p>Nullam auctor, justo vitae accumsan ultrices, arcu ex molestie massa, eu
                                        maximus enim tortor vitae quam. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section animated-row" data-section="pricing">
        <div class="section-inner">
            <div class="row justify-content-center">
                <div class="col-md-7 wide-col-laptop">
                    <div class="title-block animate" data-animate="fadeInUp">
                        <span>My Skills</span>
                        <h2>What i’m good?</h2>
                    </div>
                    <div class="skills-row animate" data-animate="fadeInDown">
                        <div class="row">
                            <div class="col-md-8 offset-md-2">
                                <div class="skill-item">
                                    <h6>HTML CSS</h6>
                                    <div class="skill-bar">
                                        <span>70%</span>
                                        <div class="filled-bar"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <h6>PSD Design</h6>
                                    <div class="skill-bar">
                                        <span>90%</span>
                                        <div class="filled-bar-2"></div>
                                    </div>
                                </div>
                                <div class="skill-item">
                                    <h6>Social Media</h6>
                                    <div class="skill-bar">
                                        <span>70%</span>
                                        <div class="filled-bar"></div>
                                    </div>
                                </div>
                                <div class="skill-item last-skill">
                                    <h6>Leadership</h6>
                                    <div class="skill-bar">
                                        <span>90%</span>
                                        <div class="filled-bar-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section animated-row" data-section="testimonials">
        <div class="section-inner">
            <div class="row justify-content-center">
                <div class="col-md-8 wide-col-laptop">
                    <div class="title-block animate" data-animate="fadeInUp">
                        <span>My Work</span>
                        <h2>what i’ve done?</h2>
                    </div>
                    <div class="gallery-section">
                        <div class="gallery-list owl-carousel">
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('portfolio/images/item-1.jpg') }}" alt="">
                                    </div>
                                    <div class="thumb-inner animate" data-animate="fadeInUp">
                                        <h4>templatemo is the best</h4>
                                        <p>Please tell your friends about it. Templatemo is the best website to
                                            download free Bootstrap CSS templates.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('portfolio/images/item-2.jpg') }}" alt="">
                                    </div>
                                    <div class="thumb-inner animate" data-animate="fadeInUp">
                                        <h4>templatemo is the best</h4>
                                        <p>Please tell your friends about it. Templatemo is the best website to
                                            download free Bootstrap themes.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('portfolio/images/item-3.jpg') }}" alt="">
                                    </div>
                                    <div class="thumb-inner animate" data-animate="fadeInUp">
                                        <h4>templatemo is the best</h4>
                                        <p>Please tell your friends about it. Templatemo is the best website to
                                            download free Bootstrap layouts.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('portfolio/images/item-1.jpg') }}" alt="">
                                    </div>
                                    <div class="thumb-inner animate" data-animate="fadeInUp">
                                        <h4>templatemo is the best</h4>
                                        <p>Please tell your friends about it. Templatemo is the best website to
                                            download free Bootstrap templates.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('portfolio/images/item-2.jpg') }}" alt="">
                                    </div>
                                    <div class="thumb-inner animate" data-animate="fadeInUp">
                                        <h4>templatemo is the best</h4>
                                        <p>Please tell your friends about it. Templatemo is the best website to
                                            download Bootstrap CSS templates.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('portfolio/images/item-3.jpg') }}" alt="">
                                    </div>
                                    <div class="thumb-inner animate" data-animate="fadeInUp">
                                        <h4>templatemo is the best</h4>
                                        <p>Please tell your friends about it. Templatemo is the best website to
                                            download free Bootstrap templates.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('portfolio/images/item-1.jpg') }}" alt="">
                                    </div>
                                    <div class="thumb-inner animate" data-animate="fadeInUp">
                                        <h4>templatemo is the best</h4>
                                        <p>Please tell your friends about it. Templatemo is the best website to
                                            download free Bootstrap templates.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('portfolio/images/item-2.jpg') }}" alt="">
                                    </div>
                                    <div class="thumb-inner animate" data-animate="fadeInUp">
                                        <h4>templatemo is the best</h4>
                                        <p>Please tell your friends about it. Templatemo is the best website to
                                            download free Bootstrap templates.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item animate" data-animate="fadeInUp">
                                <div class="portfolio-item">
                                    <div class="thumb">
                                        <img src="{{ asset('portfolio/images/item-3.jpg') }}" alt="">
                                    </div>
                                    <div class="thumb-inner animate" data-animate="fadeInUp">
                                        <h4>templatemo is the best</h4>
                                        <p>Please tell your friends about it. Templatemo is the best website to
                                            download free Bootstrap templates.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section animated-row" data-section="portfolios">
        <div class="section-inner">
            <div class="row justify-content-center">
                <div class="col-md-8 wide-col-laptop">
                    <div class="title-block animate" data-animate="fadeInUp">
                        <span>TESTIMONIALS</span>
                        <h2>what THEY SAY?</h2>
                    </div>
                    <div class="col-md-8 offset-md-2">
                        <div class="testimonials-section">
                            <div class="testimonials-slider owl-carousel">
                                <div class="item animate" data-animate="fadeInUp">
                                    <div class="testimonial-item">
                                        <div class="client-row">
                                            <img src="{{ asset('portfolio/images/profile-01.jpg') }}" class="rounded-circle" alt="profile 1">
                                        </div>
                                        <div class="testimonial-content">
                                            <h4>Sandar</h4>
                                            <p>"Ut varius leo eu mauris lacinia, eleifend posuere urna gravida.
                                                Aenean a mattis lacus."</p>
                                            <span>Managing Director</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item animate" data-animate="fadeInUp">
                                    <div class="testimonial-item">
                                        <div class="client-row">
                                            <img src="{{ asset('portfolio/images/profile-01.jpg') }}" class="rounded-circle" alt="profile 2">
                                        </div>
                                        <div class="testimonial-content">
                                            <h4>Shinn</h4>
                                            <p>"Nam iaculis, leo nec facilisis sollicitudin, dui massa tempus odio,
                                                vitae malesuada ante elit vitae eros."</p>
                                            <span>CEO and Founder</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item animate" data-animate="fadeInUp">
                                    <div class="testimonial-item">
                                        <div class="client-row">
                                            <img src="{{ asset('portfolio/images/profile-01.jpg') }}" class="rounded-circle" alt="profile 3">
                                        </div>
                                        <div class="testimonial-content">
                                            <h4>Marlar</h4>
                                            <p>"Etiam efficitur, tortor facilisis finibus semper, diam magna
                                                fringilla lectus, et fringilla felis urna posuere tortor."</p>
                                            <span>Chief Marketing Officer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section animated-row" data-section="contact">
        <div class="section-inner">
            <div class="row justify-content-center">
                <div class="col-md-7 wide-col-laptop">
                    <div class="title-block animate" data-animate="fadeInUp">
                        <span>Contact</span>
                        <h2>Get In Touch!</h2>
                    </div>
                    <div class="contact-section">
                        <div class="row">
                            <div class="col-md-6 animate" data-animate="fadeInUp">
                                <div class="contact-box">
                                    <div class="contact-row">
                                        <i class="fa fa-map-marker"></i> 123 New Street Here, Wonderful City 10220
                                    </div>
                                    <div class="contact-row">
                                        <i class="fa fa-phone"></i> 090 080 0210
                                    </div>
                                    <div class="contact-row">
                                        <i class="fa fa-envelope"></i> info@company.co
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate" data-animate="fadeInUp">
                                <form id="ajax-contact" method="post" action="#">
                                    <div class="input-field">
                                        <input type="text" class="form-control" name="name" id="name"
                                            required placeholder="Name">
                                    </div>
                                    <div class="input-field">
                                        <input type="email" class="form-control" name="email" id="email"
                                            required placeholder="Email">
                                    </div>
                                    <div class="input-field">
                                        <textarea class="form-control" name="message" id="message" required placeholder="Message"></textarea>
                                    </div>
                                    <button class="btn" type="submit">Submit</button>
                                </form>
                                <div id="form-messages" class="mt-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
