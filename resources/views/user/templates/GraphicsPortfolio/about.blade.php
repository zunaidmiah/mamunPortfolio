@extends('user.templates.GraphicsPortfolio.layouts.main_layout')

@section('body')
    <style>
        .checked {
            color: orange;
        }
    </style>
    <!-- Single Page -->
    <main class="single-page">
        <!-- Page Header -->
        <div class="page-header">
            <h2>.<span>about</span></h2>
            <p>@if(isset($data['personal_info']['about_me'])) <?php echo $data['personal_info']['about_me']; ?> @else Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna neque, pulvinar in orci in, pellentesque consequat tellus. Fusce mauris massa, pellentesque nec augue at, hendrerit rutrum ex. Cras venenatis vulputate nisi ut elementum. @endif</p>
            <div class="template-btn">
                <a href="@if(isset($data['personal_info']['marketplace'])) {{ $data['personal_info']['marketplace'] }} @else # @endif" class="pointer-href" target="_blank">Hire me</a>
                    <a href="@if(isset($data['personal_info']['cv'])) {{ $data['personal_info']['cv'] }} @else # @endif" class="pointer-href">Download CV</a>
            </div>
        </div> <!-- Page Header End -->
        <div class="separator"></div>
        <!-- Services -->
        <div class="my-services subtitle">
            <h3 class="mb-40">.<span>my</span> services</h3>
            <div class="row">
                @if(isset($data['service']))
                @foreach ($data['service'] as $key => $service)
                <?php
                $icon = 'fas fa-laptop-code';
                if($key == 0) $icon ='fas fa-laptop-code';
                elseif($key == 1) $icon ='fab fa-evernote';
                elseif($key == 2) $icon ='fas fa-drafting-compass';
                elseif($key == 3) $icon ='fas fa-anchor';
                elseif($key == 4) $icon ='fas fa-share-alt';
                elseif($key == 5) $icon ='fas fa-chess';
                ?>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="single-service text-center">
                        <div class="service-content">
                            <div class="service-icon">
                                <i class="{{ $icon }}"></i>
                            </div>
                            <h4 class="body-font">{{ $service->name }}</h4>
                            <?php echo $service->description; ?>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="single-service text-center">
                        <div class="service-content">
                            <div class="service-icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <h4 class="body-font">Web Design</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, doloribus repellendus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="single-service text-center">
                        <div class="service-content">
                            <div class="service-icon">
                                <i class="fab fa-evernote"></i>
                            </div>
                            <h4 class="body-font">Web Develop</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, doloribus repellendus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="single-service text-center">
                        <div class="service-content">
                            <div class="service-icon">
                                <i class="fas fa-drafting-compass"></i>
                            </div>
                            <h4 class="body-font">Branding</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, doloribus repellendus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="single-service text-center">
                        <div class="service-content">
                            <div class="service-icon">
                                <i class="fas fa-anchor"></i>
                            </div>
                            <h4 class="body-font">Marketing</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, doloribus repellendus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="single-service text-center">
                        <div class="service-content">
                            <div class="service-icon">
                                <i class="fas fa-share-alt"></i>
                            </div>
                            <h4 class="body-font">Social Media</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, doloribus repellendus.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="single-service text-center">
                        <div class="service-content">
                            <div class="service-icon">
                                <i class="fas fa-chess"></i>
                            </div>
                            <h4 class="body-font">Consulting</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui, doloribus repellendus.</p>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div> <!-- Services End -->
        <!-- Funfact Area -->
        <div class="fun-fact">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="funfact funfact-mb text-center">
                        <h3 class="counter">480</h3>
                        <span class="title">Happy Clients</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="funfact funfact-mb text-center">
                        <h3 class="counter">850</h3>
                        <span class="title">Projects Done</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="funfact text-center">
                        <h3 class="counter percent">260</h3>
                        <span class="title">Cups Coffee</span>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="funfact text-center">
                        <h3 class="counter">10</h3>
                        <span class="title">Got Awards</span>
                    </div>
                </div>
            </div>
        </div> <!-- Funfact Area End -->
        <!-- Pricing Area -->
        <div class="pricing subtitle mb-70">
            <h3 class="mb-40">.<span>price</span> list</h3>
            <div class="row">
                @if(isset($data['pricing']))
                @foreach ($data['pricing'] as $pricing)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing-box text-center mb-30">
                        <div class="pricing-plan">
                            <h4>{{ $pricing->name }}</h4>
                        </div>
                        <div class="pricing-price">
                            <h3>
                                <span>{{ $pricing->type }}</span>
                                {{-- <small>$</small>349.<span>99</span> --}}
                            </h3>
                        </div>
                        <div class="service-list">
                            {{-- <ul>
                                <li><i class="fas fa-laptop-code"></i> Web design</li>
                                <li><i class="fab fa-evernote"></i> Web Develop</li>
                                <li><i class="fas fa-drafting-compass"></i> Branding</li>
                                <li><i class="fas fa-anchor"></i> Marketing</li>
                                <li><i class="fas fa-share-alt"></i> Social Media</li>
                                <li><i class="fas fa-chess"></i> Consulting</li>
                            </ul> --}}
                            <?php echo $pricing->features; ?>
                        </div>
                        <div class="get-started">
                            <a href="@if(isset($data['personal_info']['marketplace'])) {{ $data['personal_info']['marketplace'] }} @else # @endif">Get Started <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing-box text-center mb-30">
                        <div class="pricing-plan">
                            <h4>Basic</h4>
                        </div>
                        <div class="pricing-price">
                            <h3>
                                <small>$</small>349.<span>99</span>
                            </h3>
                        </div>
                        <div class="service-list">
                            <ul>
                                <li><i class="fas fa-laptop-code"></i> Web design</li>
                                <li><i class="fab fa-evernote"></i> Web Develop</li>
                                <li><i class="fas fa-drafting-compass"></i> Branding</li>
                                <li><i class="fas fa-anchor"></i> Marketing</li>
                                <li><i class="fas fa-share-alt"></i> Social Media</li>
                                <li><i class="fas fa-chess"></i> Consulting</li>
                            </ul>
                        </div>
                        <div class="get-started">
                            <a href="#">Get Started <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing-box text-center mb-30">
                        <div class="pricing-plan">
                            <h4>Standard</h4>
                        </div>
                        <div class="pricing-price">
                            <h3>
                                <small>$</small>549.<span>99</span>
                            </h3>
                        </div>
                        <div class="service-list">
                            <ul>
                                <li><i class="fas fa-laptop-code"></i> Web design</li>
                                <li><i class="fab fa-evernote"></i> Web Develop</li>
                                <li><i class="fas fa-drafting-compass"></i> Branding</li>
                                <li><i class="fas fa-anchor"></i> Marketing</li>
                                <li><i class="fas fa-share-alt"></i> Social Media</li>
                                <li><i class="fas fa-chess"></i> Consulting</li>
                            </ul>
                        </div>
                        <div class="get-started">
                            <a href="#">Get Started <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="pricing-box text-center mb-30">
                        <div class="pricing-plan">
                            <h4>Premium</h4>
                        </div>
                        <div class="pricing-price">
                            <h3>
                                <small>$</small>849.<span>99</span>
                            </h3>
                        </div>
                        <div class="service-list">
                            <ul>
                                <li><i class="fas fa-laptop-code"></i> Web design</li>
                                <li><i class="fab fa-evernote"></i> Web Develop</li>
                                <li><i class="fas fa-drafting-compass"></i> Branding</li>
                                <li><i class="fas fa-anchor"></i> Marketing</li>
                                <li><i class="fas fa-share-alt"></i> Social Media</li>
                                <li><i class="fas fa-chess"></i> Consulting</li>
                            </ul>
                        </div>
                        <div class="get-started">
                            <a href="#">Get Started <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div> <!-- Pricing Area End -->
        <!-- Clients Testimonial -->
        <div class="clients-testimonial subtitle">
            <h3 class="mb-40">.<span>cool</span> feedback</h3>
            <div class="clients-testimonial-active owl-carousel">
                @if($data['recommendation'])
                @foreach ($data['recommendation'] as $item)
                <?php $image = DB::table('media')->where('type', 'recommendation')->where('rel_id', $item->id)->pluck('link')->first();; ?>
                <div class="single-testimonials">
                    <div class="client-image">
                        <img src="{{ asset($image) }}" alt="clients">
                    </div>
                    <div class="feedback-text">
                        <p class="client-feedback">{!! $item->message !!}</p>
                        <p class="client-name">{{ $item->name }}, <span>{{ $item->title }}</span></p>
                        <div title="{{  $item->star  }} star rating">
                            <?php for($i=1;$i<=5;$i++){ ?>
                            <span class="fa fa-star @if(abs($item->star) >= $i) checked @endif"></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                @endforeach
                @else
                <div class="single-testimonials">
                    <div class="client-image">
                        <img src="{{ asset('GraphicsPortfolio/img/clients/client-1.jpg') }}" alt="clients">
                    </div>
                    <div class="feedback-text">
                        <p class="client-feedback">It was exactly we looking for. Fariha Anjum done a great job for our projects. Definitely we will use her for our every project in future works.</p>
                        <p class="client-name">Willium Pillard, <span>Comic Agent</span></p>
                    </div>
                </div>
                <div class="single-testimonials">
                    <div class="client-image">
                        <img src="{{ asset('GraphicsPortfolio/img/clients/client-2.jpg') }}" alt="clients">
                    </div>
                    <div class="feedback-text">
                        <p class="client-feedback">It was exactly we looking for. Fariha Anjum done a great job for our projects. Definitely we will use her for our every project in future works.</p>
                        <p class="client-name">Digi Marshal, <span>MediaArt Inc.</span></p>
                    </div>
                </div>
                <div class="single-testimonials">
                    <div class="client-image">
                        <img src="{{ asset('GraphicsPortfolio/img/clients/client-3.jpg') }}" alt="clients">
                    </div>
                    <div class="feedback-text">
                        <p class="client-feedback">It was exactly we looking for. Fariha Anjum done a great job for our projects. Definitely we will use her for our every project in future works.</p>
                        <p class="client-name">Black Jogan, <span>Shudhu Media</span></p>
                    </div>
                </div>
                @endif
            </div>
        </div> <!-- Clients Testimonial End -->
        <!-- Logo Carousel -->
        <div class="clients-logo-carousel owl-carousel text-center">
            <img src="{{ asset('GraphicsPortfolio/img/clients/1.png') }}" alt="logo">
            <img src="{{ asset('GraphicsPortfolio/img/clients/2.png') }}" alt="logo">
            <img src="{{ asset('GraphicsPortfolio/img/clients/3.png') }}" alt="logo">
            <img src="{{ asset('GraphicsPortfolio/img/clients/4.png') }}" alt="logo">
            <img src="{{ asset('GraphicsPortfolio/img/clients/5.png') }}" alt="logo">
            <img src="{{ asset('GraphicsPortfolio/img/clients/6.png') }}" alt="logo">
        </div> <!-- Logo Carousel End -->
    </main> <!-- Single page end -->

@endsection
