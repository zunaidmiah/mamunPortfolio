@extends('user.templates.GraphicsPortfolio.layouts.main_layout')

@section('body')

    <!-- Home Section -->
    <main class="home-section">
        <div class="backgroundShape-right"></div>
        <div class="home-container d-flex align-items-center justify-content-center">
            <!-- Particles Animation -->
            <div id="particles-js"></div>
            <!-- Particles Animation End -->
            <!-- Author Name, My Name, Home Page Title -->
            <div class="home-title">
                <h3>Hello World! I’m</h3>
                <h1 class="theme-color">@if(isset($data['personal_info']['name'])) {{ $data['personal_info']['name'] }} @else Zunaid Miah @endif</h1>
                <h4>@if(isset($data['personal_info']['profession_name'])) {{ $data['personal_info']['profession_name'] }} @else Professional title @endif</h4>
                <div class="template-btn">
                    <a href="@if(isset($data['personal_info']['marketplace'])) {{ $data['personal_info']['marketplace'] }} @else # @endif" class="pointer-href" target="_blank">Hire me</a>
                    <a href="@if(isset($data['personal_info']['cv'])) {{ $data['personal_info']['cv'] }} @else # @endif" class="pointer-href">Download CV</a>
                </div>
            </div> <!-- Author Name, My Name, Home Page Title End -->
            <!-- Dribbble Slider -->
            <div class="dribbble-btn pointer-href">
                <button data-toggle="tooltip" data-placement="left" title="Recent Dribbbles"><i class="fas fa-basketball-ball"></i></button>
            </div>
            <div class="dribbble-slider">
                <div class="dribbble-close-btn pointer-href">
                    <i class="fas fa-times"></i>
                </div>
                @if(isset($data['service']))
                <div class="dribbble-slider-active owl-carousel">
                    @foreach ($data['service'] as $key => $item)
                    <div class="slider-box d-flex align-items-center">
                        <div class="slider-text">
                            <h4 class="h4 theme-color">{{ $item->name }}</h4>
                            <p>{{ strip_tags(substr($item->description, 0, 100)) }}...</p>
                            <a href="#" class="read-more-btn pointer-href">Go to dribbble</a>
                        </div>
                        <div class="slider-image">
                            <?php $file = 'GraphicsPortfolio/img/slider/'.$key.'.jpg';?>
                            <img src="{{ asset($file) }}" alt="slide image">
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="slider-box d-flex align-items-center">
                    <div class="slider-text">
                        <h4 class="h4 theme-color">Web Develop</h4>
                        <p>Lorem ipsum dolor sit amet, consect etur adipisicing elit</p>
                        <a href="#" class="read-more-btn pointer-href">Go to dribbble</a>
                    </div>
                    <div class="slider-image">
                        <img src="img/slider/2.jpg" alt="slide image">
                    </div>
                </div>
                @endif
            </div> <!-- Dribbble Slider End -->
        </div>
    </main> <!-- Home Section end -->

@endsection
