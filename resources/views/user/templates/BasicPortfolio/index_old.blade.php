@extends('user.templates.BasicPortfolio.layouts.main_layout')

    @section('body')
        <!-- Hero -->
        <div class="perker_section" id="home">
            @if(isset($data['website_settings']['hero_image']))
            <div class="perker_hero_wrap" data-img-url="{{ asset($data['website_settings']['hero_image']) }}">
            @else
            <div class="perker_hero_wrap" data-img-url="{{ asset('one_page/img/hero/1.jpg') }}">
            @endif
                <div class="overlay"></div>
                <div class="container">
                    <div class="hero_texts">
                        <h3 class="name">@if(isset($data['personal_info']['name'])) {{ $data['personal_info']['name'] }} @else Star Labs @endif</h3>
                        <span class="subtitle">Web Developer Based on Laravel since 2019</span>
                    </div>
                    <div class="perker_down">
                        <div class="line_wrapper">
                            <div class="line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Hero -->

        <!-- About -->
        <div class="perker_section" id="about">
            <div class="perker_about_wrap">
                <div class="container">
                    <div class="about_inner">
                        <div class="leftpart">
                            <div class="image">
                                <img src="{{ asset('one_page/img/about/550x650.jpg') }}" alt="" />
                                @if(isset($data['website_settings']['about_image']))
                                <div class="main" data-img-url="{{ asset($data['website_settings']['about_image']) }}"></div>
                                @else
                                <div class="main" data-img-url="{{ asset('one_page/img/about/1.jpg') }}"></div>
                                @endif
                            </div>
                        </div>
                        <div class="rightpart">
                            <div class="about_title">
                                <span class="title">About Me</span>
                                <h3>Hello! I am <span>{{ $data['personal_info']['name'] ?? "John Doe" }}</span></h3>
                            </div>
                            <div class="text">
                                <?php print $data['personal_info']['about_me'] ?? "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book." ?>
                            </div>
                            <div class="info_list">
                                <ul>
                                    <li><p><span class="left">Name:</span><span class="right">{{ $data['personal_info']['name'] ?? "John Doe" }}</span></p></li>
                                    <li><p><span class="left">Birthday:</span><span class="right">{{ $data['personal_info']['birth_date'] ?? "2000-01-01" }}</span></p></li>
                                    <li><p><span class="left">From:</span><span class="right">{{ $data['personal_info']['location'] ?? "Dhaka Bangladesh" }}</span></p></li>
                                    <li><p><span class="left">Phone:</span><span class="right">{{ $data['personal_info']['phone'] ?? "+0909090909   " }}</span></p></li>
                                    <li><p><span class="left">Interests:</span><span class="right">{{ $data['personal_info']['interest'] ?? "Lorem Text" }}</span></p></li>
                                    <li><p><span class="left">Mail:</span><span class="right"><a href="#">{{ $data['personal_info']['email'] ?? "email@gmail.com" }}</a></span></p></li>
                                </ul>
                            </div>
                            <div class="perker_button">
                                <a href="@if(isset($data['personal_info']['cv'])) {{ $data['personal_info']['cv'] }} @else # @endif">Download CV</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /About -->

        <!-- Resume -->
        @if(isset($data['working_experience']))
        <div class="perker_section" id="resume">
            <div class="perker_resume">
                <div class="container">
                    <div class="perker_title_holder">
                        <span class="title">Resume</span>
                        <h3>Working Experience</h3>
                    </div>
                    <div class="resume_list perker_appear">
                        <ul>
                            <?php
                                $experiences = $data['working_experience'];
                                foreach($experiences as $key => $experience):
                            ?>
                            <li>
                                <div class="inner">
                                    <h3 class="year">{{ $experience->time }}</h3>
                                    <h3 class="title">{{ $experience->name }}</h3>
                                    <h5 class="year">{{ $experience->c_name }}</h5><br>
                                    <?php print strip_tags(substr($experience->description, 0, 100)) ?>...
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="perker_section" id="resume">
            <div class="perker_resume">
                <div class="container">
                    <div class="perker_title_holder">
                        <span class="title">Resume</span>
                        <h3>Working Experience</h3>
                    </div>
                    <div class="resume_list perker_appear">
                        <ul>
                            <li>
                                <div class="inner">
                                    <h3 class="year">2005 - 2006</h3>
                                    <h3 class="title">Graphic Designer</h3>
                                    <p>For instance, whenever I go back to the guest house during the morning to copy out the contract...</p>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <h3 class="year">2006 - 2009</h3>
                                    <h3 class="title">Fronted Developer</h3>
                                    <p>For instance, whenever I go back to the guest house during the morning to copy out the contract...</p>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <h3 class="year">2009 - 2010</h3>
                                    <h3 class="title">Mobile App Developer</h3>
                                    <p>For instance, whenever I go back to the guest house during the morning to copy out the contract...</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- /Resume -->

        <!-- Career Achievements -->
        @if(isset($data['career_achievements']))
        <div class="perker_section">
            <div class="">
                <div class="container">
                    <div class="perker_title_holder">
                        <span class="title">Career</span>
                        <h3>Career Achievements</h3>
                        <p>My journey as a Software Engineer has been marked by unwavering dedication to learning and skill enhancement, along with enthusiastic participation in project. As a result, I have collected a list of notable awards and certifications</p>
                    </div>
                    <div class="career_achivement">
                        <?php
                            $awards = $data['career_achievements']['award']??[];
                            if(!empty($awards)):
                        ?>
                        <div id="workexperience" class="sectionClass">
                            <div class="row ">
                                <div class="fullWidth eight columns">
                                    <div class="perker_title_holder career-title">
                                        <h3>
                                            Awards
                                            <i class="fa fa-trophy" aria-hidden="true"></i>
                                        </h3>
                                        <hr class="solid-divider">
                                    </div>
                                    <ul class="cbp_tmtimeline">
                                        @foreach($awards as $key => $award)
                                        <li>
                                            <div class="cbp_tmicon cbp_tmicon-phone">
                                                <i class="faPra fa-briefcase"></i>
                                            </div>
                                            <div class="cbp_tmlabel wow fadeInRight animated">
                                                <h3>{{ $award->name }}</h3>
                                                <div class="date">
                                                    <i class="fa fa-calendar"></i>{{ date('F Y', strtotime($award->date)) }}
                                                </div>
                                                <h4><i class="fa fa-flag"></i>{{ $award->provide }}</h4>
                                                <p class="projectParagraph">{!! $award->description !!}</p>
                                                @if (!empty($award->reference))
                                                <a href="{{ $award->reference }}" class="more-btn">
                                                        More Info
                                                        <i class="fa fa-external-link" aria-hidden="true"></i>
                                                </a>
                                                @endif
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @else
                        <div id="workexperience" class="sectionClass">
                            <div class="row ">
                                <div class="fullWidth eight columns">
                                    <div class="perker_title_holder career-title">
                                        <h3>
                                            Awards
                                            <i class="fa fa-trophy" aria-hidden="true"></i>
                                        </h3>
                                        <hr class="solid-divider">
                                    </div>
                                    <ul class="cbp_tmtimeline">
                                        <li>
                                            <div class="cbp_tmicon cbp_tmicon-phone">
                                                <i class="faPra fa-briefcase"></i>
                                            </div>
                                            <div class="cbp_tmlabel wow fadeInRight animated">
                                                <h3>Web developer</h3>
                                                <div class="date">
                                                    <i class="fa fa-calendar"></i>April 2014
                                                </div>
                                                <h4><i class="fa fa-flag"></i>Davic Company, Bratislava</h4>
                                                <p class="projectParagraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit obcaecati ipsa quae, iusto laudantium qui, nisi eum modi perspiciatis quasi facilis corporis iure soluta enim incidunt itaque aspernatur sequi tempora.</p>
                                                <a href="" class="more-btn">
                                                        More Info
                                                        <i class="fa fa-external-link" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cbp_tmicon cbp_tmicon-screen">
                                                <i class="faPra fa-briefcase"></i>
                                            </div>
                                            <div class="cbp_tmlabel wow fadeInRight animated">
                                                <h3>Web designer</h3>
                                                <h4><i class="fa fa-flag"></i>Fannous Company, Prague</h4>
                                                <div class="date"><i class="fa fa-calendar"></i>June 2012</div>
                                                <p class="projectParagraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt quasi perspiciatis, aliquid sed maiores accusamus. Adipisci quidem nostrum quos quae doloremque esse a, ipsum earum, recusandae omnis dignissimos et sint.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cbp_tmicon cbp_tmicon-mail">
                                                <i class="faPra fa-briefcase"></i>
                                            </div>
                                            <div class="cbp_tmlabel wow fadeInRight animated">
                                                <h3>Web designer</h3>
                                                <h4><i class="fa fa-flag"></i>Techixs Company, London</h4>
                                                <div class="date"><i class="fa fa-calendar"></i>November 2009</div>
                                                <p class="projectParagraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla labore atque alias ipsa, nam quod rerum repellat cumque, aliquam sequi vitae voluptatibus cum soluta incidunt tempore accusamus eius sed excepturi!Lorem ipsum dolor sit amet,
                                                    consectetur adipisicing elit. Tempora natus veritatis aperiam repellendus dolor vel, expedita assumenda eos, mollitia quae ullam esse voluptas vero. Dolores culpa eaque vitae eum quibusdam?</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cbp_tmicon cbp_tmicon-phone">
                                                <i class="faPra fa-briefcase"></i>
                                            </div>
                                            <div class="cbp_tmlabel wow fadeInRight animated">
                                                <h3>Freelancer</h3>
                                                <div class="date"><i class="fa fa-calendar"></i>Januar 2006</div>
                                                <p class="projectParagraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse iusto, possimus hic at quisquam, incidunt illo asperiores et nobis, qui nulla consequatur molestiae quibusdam expedita dignissimos? Iste eum velit quos.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endif
                        <?php
                            $contributions = $data['career_achievements']['contribution']??[];
                            if(!empty($contributions)):
                        ?>
                        <div id="workexperience" class="sectionClass">
                            <div class="row ">
                                <div class="fullWidth eight columns">
                                    <div class="perker_title_holder career-title">
                                        <h3>
                                            Contributions
                                            <i class="fa fa-code-fork" aria-hidden="true"></i>
                                        </h3>
                                        <hr class="solid-divider">
                                    </div>
                                    <ul class="cbp_tmtimeline">
                                        @foreach($contributions as $key => $contribution)
                                        <li>
                                            <div class="cbp_tmicon cbp_tmicon-phone">
                                                <i class="faPra fa-briefcase"></i>
                                            </div>
                                            <div class="cbp_tmlabel wow fadeInRight animated">
                                                <h3>{{ $contribution->name }}</h3>
                                                <div class="date">
                                                <i class="fa fa-calendar"></i>{{ date('F Y', strtotime($contribution->date)) }}
                                                </div>
                                                <p class="projectParagraph">{!! $contribution->description !!}</p>
                                                @if (!empty($contribution->reference))
                                                <a href="{{ $contribution->reference }}" class="more-btn">
                                                        More Info
                                                        <i class="fa fa-external-link" aria-hidden="true"></i>
                                                </a>
                                                @endif
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @else
                        <div id="workexperience" class="sectionClass">
                            <div class="row ">
                                <div class="fullWidth eight columns">
                                    <div class="perker_title_holder career-title">
                                        <h3>
                                            Contributions
                                            <i class="fa fa-code-fork" aria-hidden="true"></i>
                                        </h3>
                                        <hr class="solid-divider">
                                    </div>
                                    <ul class="cbp_tmtimeline">
                                        <li>
                                            <div class="cbp_tmicon cbp_tmicon-phone">
                                                <i class="faPra fa-briefcase"></i>
                                            </div>
                                            <div class="cbp_tmlabel wow fadeInRight animated">
                                                <h3>Web developer</h3>
                                                <div class="date">
                                                <i class="fa fa-calendar"></i>April 2014
                                                </div>
                                                <h4><i class="fa fa-flag"></i>Davic Company, Bratislava</h4>
                                                <p class="projectParagraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit obcaecati ipsa quae, iusto laudantium qui, nisi eum modi perspiciatis quasi facilis corporis iure soluta enim incidunt itaque aspernatur sequi tempora.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cbp_tmicon cbp_tmicon-screen">
                                                <i class="faPra fa-briefcase"></i>
                                            </div>
                                            <div class="cbp_tmlabel wow fadeInRight animated">
                                                <h3>Web designer</h3>
                                                <h4><i class="fa fa-flag"></i>Fannous Company, Prague</h4>
                                                <div class="date"><i class="fa fa-calendar"></i>June 2012</div>
                                                <p class="projectParagraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt quasi perspiciatis, aliquid sed maiores accusamus. Adipisci quidem nostrum quos quae doloremque esse a, ipsum earum, recusandae omnis dignissimos et sint.</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="cbp_tmicon cbp_tmicon-mail">
                                                <i class="faPra fa-briefcase"></i>
                                            </div>
                                            <div class="cbp_tmlabel wow fadeInRight animated">
                                                <h3>Web designer</h3>
                                                <h4><i class="fa fa-flag"></i>Techixs Company, London</h4>
                                                <div class="date"><i class="fa fa-calendar"></i>November 2009</div>
                                                <p class="projectParagraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla labore atque alias ipsa, nam quod rerum repellat cumque, aliquam sequi vitae voluptatibus cum soluta incidunt tempore accusamus eius sed excepturi!Lorem ipsum dolor sit amet,
                                                consectetur adipisicing elit. Tempora natus veritatis aperiam repellendus dolor vel, expedita assumenda eos, mollitia quae ullam esse voluptas vero. Dolores culpa eaque vitae eum quibusdam?</p>

                                            </div>
                                        </li>
                                        <li>
                                            <div class="cbp_tmicon cbp_tmicon-phone">
                                                <i class="faPra fa-briefcase"></i>
                                            </div>
                                            <div class="cbp_tmlabel wow fadeInRight animated">
                                                <h3>Freelancer</h3>
                                                <div class="date"><i class="fa fa-calendar"></i>Januar 2006</div>
                                                <p class="projectParagraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse iusto, possimus hic at quisquam, incidunt illo asperiores et nobis, qui nulla consequatur molestiae quibusdam expedita dignissimos? Iste eum velit quos.</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- /Career Achievements -->

        <!-- Portfolio -->
        @if(isset($data['portfolios']))
        <div class="perker_section" id="portfolio">
            <div class="perker_portfolio">
                <div class="container">
                    <div class="perker_title_holder">
                        <span class="title">Portfolio</span>
                        <h3>Awesome Works</h3>
                    </div>
                    <div class="portfolio_list perker_appear">
                        <ul class="gallery_zoom">
                            <?php
                                $portfolios = $data['portfolios'];
                                foreach ($portfolios as $key => $portfolio):
                                $media = get_media_first($portfolio->id, 'portfolios');
                                $category = category_name($portfolio->category);
                            ?>
                            <li>
                                <div class="inner">
                                    <a href="{{ $portfolio->link }}" target="_blank">
                                    <div class="image_wrap">
                                        <div class="image">
                                            <img src="{{ $media }}" alt="" height="400" width="600"/>
                                            <div class="main" data-img-url="{{ $media }}"></div>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <h3>{{ $portfolio->title }}</h3>
                                        <span>{{ $category }}</span>
                                    </div>
                                    </a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="perker_section" id="portfolio">
            <div class="perker_portfolio">
                <div class="container">
                    <div class="perker_title_holder">
                        <span class="title">Portfolio</span>
                        <h3>Awesome Works</h3>
                    </div>
                    <div class="portfolio_list perker_appear">
                        <ul class="gallery_zoom">
                            <li>
                                <div class="inner">
                                    <div class="image_wrap">
                                        <div class="image">
                                            <img src="{{ asset('one_page/img/portfolio/600x850.jpg') }}" alt="" />
                                            <div class="main" data-img-url="{{ asset('one_page/img/portfolio/1.jpg') }}"></div>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <h3>Colorful Cups</h3>
                                        <span>Branding</span>
                                    </div>
                                    <a class="link zoom" href="{{ asset('one_page/img/portfolio/1.jpg') }}"></a>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="image_wrap">
                                        <div class="image">
                                            <img src="{{ asset('one_page/img/portfolio/600x850.jpg') }}" alt="" />
                                            <div class="main" data-img-url="{{ asset('one_page/img/portfolio/2.jpg') }}"></div>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <h3>Game Controller</h3>
                                        <span>Design</span>
                                    </div>
                                    <a class="link zoom" href="{{ asset('one_page/img/portfolio/2.jpg') }}"></a>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="image_wrap">
                                        <div class="image">
                                            <img src="{{ asset('one_page/img/portfolio/600x850.jpg') }}" alt="" />
                                            <div class="main" data-img-url="{{ asset('one_page/img/portfolio/3.jpg') }}"></div>
                                        </div>
                                    </div>
                                    <div class="title">
                                        <h3>Blue Bag</h3>
                                        <span>Photography</span>
                                    </div>
                                    <a class="link zoom" href="{{ asset('one_page/img/portfolio/3.jpg') }}"></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- /Portfolio -->

        <!-- Services -->
        @if(isset($data['service']))
        <div class="perker_section" id="services">
            <div class="perker_services_wrap">
                <div class="container">
                    <div class="perker_title_holder">
                        <span class="title">Services</span>
                        <h3>Quality Services</h3>
                    </div>
                    <div class="service_list perker_appear">
                        <ul>
                            <?php
                            $service = $data['service'];
                            foreach ($service as $key => $item):
                            $icon = 'camera-diaphragm';
                            if($key == 0) $icon ='camera-diaphragm';
                            elseif($key == 1) $icon ='seo-performance-marketing-graphic';
                            elseif($key == 2) $icon ='share';
                            elseif($key == 3) $icon ='layers';
                            elseif($key == 4) $icon ='adobe-illustrator';
                            elseif($key == 5) $icon ='icon';
                            ?>
                            <li>
                                <div class="inner">
                                    <img class="svg" src="{{ asset('one_page/img/svg/'.$icon.'.svg') }}" alt="" />
                                    <h3 class="title">{{ $item->name }}</h3>
                                    <p class="text">{{ strip_tags(substr($item->description, 0, 100)) }}...</p>
                                    <a class="link" href="#"></a>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="perker_section" id="services">
            <div class="perker_services_wrap">
                <div class="container">
                    <div class="perker_title_holder">
                        <span class="title">Services</span>
                        <h3>Quality Services</h3>
                    </div>
                    <div class="service_list perker_appear">
                        <ul>
                            <li>
                                <div class="inner">
                                    <img class="svg" src="{{ asset('one_page/img/svg/camera-diaphragm.svg') }}" alt="" />
                                    <h3 class="title">Photography</h3>
                                    <p class="text">Photography is the art, application and practice of creating durable images by recording...</p>
                                    <a class="link" href="#"></a>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <img class="svg" src="{{ asset('one_page/img/svg/seo-performance-marketing-graphic.svg') }}" alt="" />
                                    <h3 class="title">Marketing</h3>
                                    <p class="text">Marketing refers to activities undertaken by a company to promote the buying...</p>
                                    <a class="link" href="#"></a>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <img class="svg" src="{{ asset('one_page/img/svg/share.svg') }}" alt="" />
                                    <h3 class="title">Social Media</h3>
                                    <p class="text">Social media is computer-based technology that facilitates the sharing of ideas...</p>
                                    <a class="link" href="#"></a>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <img class="svg" src="{{ asset('one_page/img/svg/layers.svg') }}" alt="" />
                                    <h3 class="title">Branding</h3>
                                    <p class="text">Branding, by definition, is a marketing practice in which a company creates a name...</p>
                                    <a class="link" href="#"></a>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <img class="svg" src="{{ asset('one_page/img/svg/adobe-illustrator.svg') }}" alt="" />
                                    <h3 class="title">Adobe Illustrator</h3>
                                    <p class="text">Adobe Illustrator is a software application for creating drawings, illustrations and...</p>
                                    <a class="link" href="#"></a>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <img class="svg" src="{{ asset('one_page/img/svg/icon.svg') }}" alt="" />
                                    <h3 class="title">App Development</h3>
                                    <p class="text">App development is the act or process by which a mobile app is developed for devices.</p>
                                    <a class="link" href="#"></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- /Services -->

        <!-- Skills -->
        @if(isset($data['skills']))
        <div class="perker_section" id="skills">
            <div class="perker_skills_wrap">
                <div class="container">
                    <div class="skills_inner">
                        <div class="left">
                            <h3 class="title">I provide maximum quality</h3>
                            <?php if(isset($data['personal_info']['skills_details'])) print $data['personal_info']['skills_details']; ?>
                        </div>
                        <div class="right">
                            <div class="perker_progress">
                                <?php
                                    $skills = $data['skills'];
                                    foreach($skills as $key => $skill):
                                ?>
                                <div class="progress_inner" data-value="{{ $skill->percentage }}" data-color="#ea3509">
                                    <span><span class="label">{{ $skill->name }}</span><span class="number">{{ $skill->percentage }}%</span></span>
                                    <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="perker_section" id="skills">
            <div class="perker_skills_wrap">
                <div class="container">
                    <div class="skills_inner">
                        <div class="left">
                            <h3 class="title">I provide maximum quality</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <div class="right">
                            <div class="perker_progress">
                                <div class="progress_inner" data-value="95" data-color="#ea3509">
                                    <span><span class="label">Web Development</span><span class="number">80%</span></span>
                                    <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                </div>
                                <div class="progress_inner" data-value="70" data-color="#ea3509">
                                    <span><span class="label">Brand Identity</span><span class="number">70%</span></span>
                                    <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                </div>
                                <div class="progress_inner" data-value="90" data-color="#ea3509">
                                    <span><span class="label">Javascript</span><span class="number">95%</span></span>
                                    <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                </div>
                                <div class="progress_inner" data-value="85" data-color="#ea3509">
                                    <span><span class="label">WordPress</span><span class="number">85%</span></span>
                                    <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                </div>
                                <div class="progress_inner" data-value="87" data-color="#ea3509">
                                    <span><span class="label">Photoshop</span><span class="number">90%</span></span>
                                    <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- /Skills -->

        <!-- Team -->
        @if(isset($data['teams']))
        <div class="perker_section" id="team">
            <div class="perker_team">
                <div class="container">
                    <div class="perker_title_holder">
                        <span class="title">Team</span>
                        <h3>Creative Team</h3>
                    </div>
                    <div class="team_list perker_appear">
                        <ul>
                            <?php
                                $teams = $data['teams'];
                                foreach($teams as $key => $team):
                            ?>
                            <li>
                                <div class="inner">
                                    <div class="image">
                                        <img src="{{ $team->filename }}" alt="" height="400" width="300"/>
                                        <div class="main" data-img-url="{{ $team->filename }}"></div>
                                    </div>
                                    <div class="texts">
                                        <h3>{{ $team->name }}</h3>
                                        <span>{{ $team->designation }}</span>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="perker_section" id="team">
            <div class="perker_team">
                <div class="container">
                    <div class="perker_title_holder">
                        <span class="title">Team</span>
                        <h3>Creative Team</h3>
                    </div>
                    <div class="team_list perker_appear">
                        <ul>
                            <li>
                                <div class="inner">
                                    <div class="image">
                                        <img src="{{ asset('one_page/img/about/550x650.jpg') }}" alt="" />
                                        <div class="main" data-img-url="{{ asset('one_page/img/about/3.jpg') }}"></div>
                                    </div>
                                    <div class="texts">
                                        <h3>John Doe</h3>
                                        <span>Web Developer</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="image">
                                        <img src="{{ asset('one_page/img/about/550x650.jpg') }}" alt="" />
                                        <div class="main" data-img-url="{{ asset('one_page/img/about/4.jpg') }}"></div>
                                    </div>
                                    <div class="texts">
                                        <h3>Diana Angel</h3>
                                        <span>Web Designer</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="image">
                                        <img src="{{ asset('one_page/img/about/550x650.jpg') }}" alt="" />
                                        <div class="main" data-img-url="{{ asset('one_page/img/about/5.jpg') }}"></div>
                                    </div>
                                    <div class="texts">
                                        <h3>Albert Thomas</h3>
                                        <span>SEO Ecxpert</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- /Team -->

        <!-- Pricing -->
        @if(isset($data['pricing']))
        <div class="perker_section" id="pricing">
            <div class="perker_pricing">
                <div class="container">
                    <div class="perker_title_holder">
                        <span class="title">Pricing</span>
                        <h3>Choose Pricing</h3>
                    </div>
                    <div class="pricing_list perker_appear">
                        <ul>
                            <?php
                            $pricing = $data['pricing'];
                            foreach ($pricing as $key => $price):
                            $icon = 'fire';
                            if($key == 0) $icon ='icon';
                            elseif($key == 1) $icon ='fire';
                            elseif($key == 2) $icon ='small-rocket-ship-silhouette';
                            if($key == 3) break;
                            ?>
                            <li>
                                <div class="inner">
                                    <div class="in" style="min-height:500px; max-height:500px;">
                                        <div class="icon"><img class="svg" src="{{ asset('one_page/img/svg/'.$icon.'.svg') }}" alt="" /></div>
                                        <p class="title">{{ $price->name }}</p>
                                        <p class="price">{{ $price->type }}</p>
                                        <?php print $price->features; ?>
                                        <div class="perker_button">
                                            <a href="#">Select</a>
                                        </div>
                                        @if($key == 1)
                                        <div class="shape"></div>
                                        <span class="recommend">Recommended</span>
                                        @endif
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="perker_section" id="pricing">
            <div class="perker_pricing">
                <div class="container">
                    <div class="perker_title_holder">
                        <span class="title">Pricing</span>
                        <h3>Choose Pricing</h3>
                    </div>
                    <div class="pricing_list perker_appear">
                        <ul>
                            <li>
                                <div class="inner">
                                    <div class="in">
                                        <div class="icon"><img class="svg" src="{{ asset('one_page/img/svg/icon.svg') }}" alt="" /></div>
                                        <p class="title">Basic</p>
                                        <p class="price">22$/<span>month</span></p>
                                        <ul>
                                            <li><span>2 Website</span></li>
                                            <li><span>50 GB SSD Storage</span></li>
                                            <li><span>Standard Performance</span></li>
                                        </ul>
                                        <div class="perker_button">
                                            <a href="#">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="in">
                                        <div class="icon"><img class="svg" src="{{ asset('one_page/img/svg/fire.svg') }}" alt="" /></div>
                                        <p class="title">Plus</p>
                                        <p class="price">33$/<span>month</span></p>
                                        <ul>
                                            <li><span>10 Website</span></li>
                                            <li><span>200 GB SSD Storage</span></li>
                                            <li><span>Standard Performance</span></li>
                                        </ul>
                                        <div class="perker_button">
                                            <a href="#">Select</a>
                                        </div>
                                        <div class="shape"></div>
                                        <span class="recommend">Recommended</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="in">
                                        <div class="icon"><img class="svg" src="{{ asset('one_page/img/svg/small-rocket-ship-silhouette.svg') }}" alt="" /></div>
                                        <p class="title">Pro</p>
                                        <p class="price">55$/<span>month</span></p>
                                        <ul>
                                            <li><span>Unlimited Website</span></li>
                                            <li><span>Unlimited SSD Storage</span></li>
                                            <li><span>High Performance</span></li>
                                        </ul>
                                        <div class="perker_button">
                                            <a href="#">Select</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- /Pricing -->

        <!-- News -->
        @if(isset($data['blogs']))
        <div class="perker_section" id="news">
            <div class="perker_news">
                <div class="container">
                    <div class="perker_title_holder">
                        <span class="title">News</span>
                        <div style="display: flex; justify-content: space-between">
                            <div><h3>Latest Blogs</h3></div>
                            <div>
                                @if($data['blogs']->hasMorePages())
                                <a href="{{ route('blog') }}" style="text-decoration: none;color: #fff;
                                        display: inline-block;
                                        background-color: #ea3509;
                                        font-weight: 500;
                                        padding: 10px 30px;
                                        border-radius: 5px;
                                        font-family: 'Saira';">
                                    View All
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="news_list perker_appear">
                        <ul>
                            <?php
                                $blogs = $data['blogs'];
                                foreach($blogs as $key => $blog):
                                $media = get_media_first($blog->id, 'blogs');
                            ?>
                            <li>
                                <div class="inner">
                                    <div class="image">
                                        <img src="{{ $media }}" alt="" height="400" width="300"/>
                                        <div class="main" data-img-url="{{ $media }}"></div>
                                        <a class="link" href="#"></a>
                                    </div>
                                    <div class="texts">
                                        <div class="date">
                                            <span>{{ date('M d, Y', strtotime($blog->created_at)) }}</span>
                                        </div>
                                        <div class="title">
                                            <h3><a href="#">{{ substr($blog->title, 0, 50) }}</a></h3>
                                        </div>
                                        <div class="def">
                                            <p style="min-height: 90px;max-height: 140px;">{{ strip_tags(substr($blog->description, 0, 100)) }}...</p>
                                        </div>
                                        <div class="perker_button">
                                            <a href="/blog-details/{{ urlencode($blog->title) }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="perker_section" id="news">
            <div class="perker_news">
                <div class="container">
                    <div class="perker_title_holder">
                        <span class="title">News</span>
                        <h3>Latest News</h3>
                    </div>
                    <div class="news_list perker_appear">
                        <ul>
                            <li>
                                <div class="inner">
                                    <div class="image">
                                        <img src="{{ asset('one_page/img/blog/500x350.jpg') }}" alt="" />
                                        <div class="main" data-img-url="{{ asset('one_page/img/blog/1.jpg') }}"></div>
                                        <a class="link" href="#"></a>
                                    </div>
                                    <div class="texts">
                                        <div class="date">
                                            <span>Jun 02, 2019 in <a href="#">Media</a></span>
                                        </div>
                                        <div class="title">
                                            <h3><a href="#">New Collection 2022</a></h3>
                                        </div>
                                        <div class="def">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</p>
                                        </div>
                                        <div class="perker_button">
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="image">
                                        <img src="{{ asset('one_page/img/blog/500x350.jpg') }}" alt="" />
                                        <div class="main" data-img-url="{{ asset('one_page/img/blog/2.jpg') }}"></div>
                                        <a class="link" href="#"></a>
                                    </div>
                                    <div class="texts">
                                        <div class="date">
                                            <span>July 14, 2019 in <a href="#">Development</a></span>
                                        </div>
                                        <div class="title">
                                            <h3><a href="#">PHP is best or not ?</a></h3>
                                        </div>
                                        <div class="def">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</p>
                                        </div>
                                        <div class="perker_button">
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="inner">
                                    <div class="image">
                                        <img src="{{ asset('one_page/img/blog/500x350.jpg') }}" alt="" />
                                        <div class="main" data-img-url="{{ asset('one_page/img/blog/3.jpg') }}"></div>
                                        <a class="link" href="#"></a>
                                    </div>
                                    <div class="texts">
                                        <div class="date">
                                            <span>July 25, 2019 in <a href="#">Photography</a></span>
                                        </div>
                                        <div class="title">
                                            <h3><a href="#">Art of Photography</a></h3>
                                        </div>
                                        <div class="def">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...</p>
                                        </div>
                                        <div class="perker_button">
                                            <a href="#">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @endif
        <!-- /News -->

        <!-- Contact -->
        <div class="perker_section" id="contact">
            <div class="perker_contact">
                <div class="container">
                    <div class="perker_title_holder">
                        <span class="title">Contact</span>
                        <h3>Get In Touch</h3>
                    </div>
                    <div class="contact_inner">
                        <div class="left">
                            <ul>
                                <li>
                                    <div class="inner">
                                        <img class="svg" src="{{ asset('one_page/img/svg/placeholder.svg') }}" alt="" />
                                        <span>
                                            <?php print isset($data['personal_info']['location']) ? $data['personal_info']['location'] : 'Mirpur, Dhaka, Bangnladesh'; ?>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <img class="svg" src="{{ asset('one_page/img/svg/telephone.svg') }}" alt="" />
                                        <span>
                                            +88<?php print isset($data['personal_info']['phone']) ? $data['personal_info']['phone'] : '010909091'; ?>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <img class="svg" src="{{ asset('one_page/img/svg/envelope.svg') }}" alt="" />
                                        <span>
                                            <?php print isset($data['personal_info']['email']) ? $data['personal_info']['email'] : 'email@gmail.com'; ?>
                                        </span>
                                    </div>
                                </li>
                                <li>
                                    <div class="inner">
                                        <img class="svg" src="{{ asset('one_page/img/svg/whatsapp.svg') }}" alt="" />
                                        <span>
                                            @<?php print isset($data['personal_info']['whatsapp']) ? $data['personal_info']['whatsapp'] : 'StarLabs'; ?>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="right">
                            <div class="first_row">
                                <ul>
                                    <li>
                                        <input type="text" placeholder="Name" />
                                    </li>
                                    <li>
                                        <input type="text" placeholder="Email" />
                                    </li>
                                </ul>
                            </div>
                            <div class="second_row">
                                <textarea placeholder="Message"></textarea>
                            </div>
                            <div class="perker_button">
                                <a href="#">Submit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Contact -->

    @endsection


