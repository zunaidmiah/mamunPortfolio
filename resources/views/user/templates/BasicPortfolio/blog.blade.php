@extends('user.templates.BasicPortfolio.layouts.main_layout')

    @section('body')

        @if(isset($data['blogs']))
        <div class="perker_section" id="news" style="margin-top:10%;">
            <div class="perker_news">
                <div class="container">
                    <div class="perker_title_holder">
                        <span class="title">News</span>
                        <h3>Latest Blogs</h3>
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
                    <div>
                    {{ $data['blogs']->links('user.templates.BasicPortfolio.layouts.pagination') }}
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="perker_section" id="news" style="margin-top:10%;">
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


    @endsection 