@extends('user.templates.GraphicsPortfolio.layouts.main_layout')

@section('body')

    <!-- Single Page -->
    <main class="single-page">
        <!-- Page Header -->
        <div class="page-header">
            <h2>.<span>resume</span></h2>
            <p>@if(isset($data['personal_info']['skills_details']))
                <?php print($data['personal_info']['skills_details']); ?>
                @else
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna neque, pulvinar in
                orci in, pellentesque consequat tellus. Fusce mauris massa, pellentesque nec augue
                at, hendrerit rutrum ex. Cras venenatis vulputate nisi ut elementum.
                @endif
            </p>
            <div class="template-btn">
                <a href="@if(isset($data['personal_info']['marketplace'])) {{ $data['personal_info']['marketplace'] }} @else # @endif" class="pointer-href">Hire me</a>
                <a href="@if(isset($data['personal_info']['cv'])) {{ $data['personal_info']['cv'] }} @else # @endif" class="pointer-href">Download CV</a>
            </div>
        </div> <!-- Page Header End -->
        <div class="separator"></div>
        <div class="resume-wrapper">
            <div class="row">
                <div class="col-xl-8 col-lg-8">
                    <div class="resume-content-left">
                        <!-- Education Timeline -->
                        <div class="education subtitle mb-70">
                            <h3 class="mb-40">.<span>education</span></h3>
                            <div class="timeline clearfix">
                                @if(isset($data['institution_info']))
                                @foreach ($data['institution_info'] as $institution)
                                <div class="timeline-item clearfix">
                                    <div class="timeline-left">
                                        <h6 class="item-period body-font">{{ $institution['session'] }}</h6>
                                        <span class="item-company">{{ $institution['name'] }}</span>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="timeline-right">
                                        <h6 class="item-title body-font">{{ $institution['degree'] }}</h6>
                                        <img src="{{ $institution['filename'] }}" alt="{{ $institution['name'] }}" height="100" width="200">
                                        <h6 class="item-title body-font">{{ $institution['location'] }}</h6>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <div class="timeline-item clearfix">
                                    <div class="timeline-left">
                                        <h6 class="item-period body-font">2015</h6>
                                        <span class="item-company">Oxford University</span>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="timeline-right">
                                        <h6 class="item-title body-font">UI/UX Designer</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna neque, pulvinar in orci in, pellentesque.</p>
                                    </div>
                                </div>
                                <div class="timeline-item clearfix">
                                    <div class="timeline-left">
                                        <h6 class="item-period body-font">2016</h6>
                                        <span class="item-company">Maxon University</span>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="timeline-right">
                                        <h6 class="item-title body-font">Web Developer</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna neque, pulvinar in orci in, pellentesque.</p>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <!-- Timeline - Experience -->
                        <div class="experience subtitle">
                            <h3 class="mb-40">.<span>experience</span></h3>
                            <div class="timeline clearfix">
                                @if(isset($data['working_experience']))
                                @foreach ($data['working_experience'] as $experience)
                                <div class="timeline-item clearfix">
                                    <div class="timeline-left">
                                        <h6 class="item-period body-font">{{ $experience->time }}</h6>
                                        <span class="item-company">{{ $experience->c_name }}</span>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="timeline-right">
                                        <h6 class="item-title body-font">{{ $experience->name }}</h6>
                                        <span><?php echo htmlspecialchars_decode($experience->description); ?></span>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <div class="timeline-item clearfix">
                                    <div class="timeline-left">
                                        <h6 class="item-period body-font">2015-2017</h6>
                                        <span class="item-company">Jatra Link</span>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="timeline-right">
                                        <h6 class="item-title body-font">UI/UX Designer</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna neque, pulvinar in orci in, pellentesque.</p>
                                    </div>
                                </div>
                                <div class="timeline-item clearfix">
                                    <div class="timeline-left">
                                        <h6 class="item-period body-font">2014-2015</h6>
                                        <span class="item-company">Catelog Media</span>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="timeline-right">
                                        <h6 class="item-title body-font">Branding Designer</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut magna neque, pulvinar in orci in, pellentesque.</p>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4">
                    <div class="resume-content-right">
                        <!-- Skills -->
                        <div class="skills clearfix">
                            @if(isset($data['skills']))
                            <div class="design-skill subtitle mb-70">
                                <h3 class="mb-40">.<span>technical </span>skills</h3>
                                @foreach ($data['skills'] as $skill)
                                <div class="single-skill">
                                    <div class="skillbar-title"><span>{{ $skill->name }}</span></div>
                                    <div class="skill-bar-percent">{{ $skill->percentage }}%</div>
                                    <div class="skillbar clearfix" data-parcent="{{ $skill->percentage }}%">
                                        <div class="skillbar-bar"></div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @else
                            <div class="design-skill subtitle mb-70">
                                <h3 class="mb-40">.<span>design </span>skills</h3>
                                <div class="single-skill">
                                    <div class="skillbar-title"><span>Adobe Illustrator</span></div>
                                    <div class="skill-bar-percent">80%</div>
                                    <div class="skillbar clearfix" data-parcent="80%">
                                        <div class="skillbar-bar"></div>
                                    </div>
                                </div>
                                <div class="single-skill">
                                    <div class="skillbar-title"><span>Adobe Photoshop</span></div>
                                    <div class="skill-bar-percent">90%</div>
                                    <div class="skillbar clearfix" data-parcent="90%">
                                        <div class="skillbar-bar"></div>
                                    </div>
                                </div>
                                <div class="single-skill">
                                    <div class="skillbar-title"><span>Adobe XD</span></div>
                                    <div class="skill-bar-percent">60%</div>
                                    <div class="skillbar clearfix" data-parcent="60%">
                                        <div class="skillbar-bar"></div>
                                    </div>
                                </div>
                                <div class="single-skill">
                                    <div class="skillbar-title"><span>Cinema 4D</span></div>
                                    <div class="skill-bar-percent">70%</div>
                                    <div class="skillbar clearfix" data-parcent="70%">
                                        <div class="skillbar-bar"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="developing-skill subtitle">
                                <h3 class="mb-40">.<span>developing </span>skills</h3>
                                <div class="single-skill">
                                    <div class="skillbar-title"><span>HTML/CSS</span></div>
                                    <div class="skill-bar-percent">90%</div>
                                    <div class="skillbar clearfix" data-parcent="90%">
                                        <div class="skillbar-bar"></div>
                                    </div>
                                </div>
                                <div class="single-skill">
                                    <div class="skillbar-title"><span>Javascript</span></div>
                                    <div class="skill-bar-percent">70%</div>
                                    <div class="skillbar clearfix" data-parcent="70%">
                                        <div class="skillbar-bar"></div>
                                    </div>
                                </div>
                                <div class="single-skill">
                                    <div class="skillbar-title"><span>PHP</span></div>
                                    <div class="skill-bar-percent">80%</div>
                                    <div class="skillbar clearfix" data-parcent="80%">
                                        <div class="skillbar-bar"></div>
                                    </div>
                                </div>
                                <div class="single-skill">
                                    <div class="skillbar-title"><span>WordPress</span></div>
                                    <div class="skill-bar-percent">90%</div>
                                    <div class="skillbar clearfix" data-parcent="90%">
                                        <div class="skillbar-bar"></div>
                                    </div>
                                </div>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
