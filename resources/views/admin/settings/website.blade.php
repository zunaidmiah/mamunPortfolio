@extends('admin.layout.main_layout')

@section('body')


    <style>
        .tariff-profile-form {
            padding: 10px;
            border-radius: 5px;
        }

        .genaral-info {
            padding: 10px;
            border-radius: 5px;
            border-bottom: 2px solid #dfdfdf;
        }

        .contact-info {
            padding: 10px;
            border-radius: 5px;
            border-bottom: 2px solid #dfdfdf;
            margin-top: 30px;
        }

        .customer-info {
            padding: 10px;
            border-radius: 5px;
            margin-top: 30px;
        }

        .tariff-profile-form-button {
            text-align: right;
            margin-top: 20px;
        }

        .form {
            box-shadow: 0 0 1px 1px #e6e6e6;
            border-radius: 5px;
            padding: 10px;
            background: #fff;
        }
    </style>
    <?php 
        $status = true;
        if(isset($_GET['edit'])){
            $status = false;
        }
        $data = DB::table('options')->where('option_group', 'website_settings')->pluck('option_value', 'option_key')->toArray();
        // dd($data);
    ?>
    <div class="p-4">
        <div class="card bg-none style-1 mb-0 card-settings">
            <div class="card-header px-0">
                <h5 class="w-100"><i class="mdi mdi-id-card text-primary mr-3"></i> <strong>Website Information</strong></h5>
                <div class="d-block w-100">
                    <nav class="anchorific"></nav>
                </div>
            </div>
        </div>
        @if(session('message') != null)
        <span class="badge badge-success">{{ session('message') }}</span>
        @endif
        <div class="tariff-profile-form">
            <form action="{{  route('website-info-db')  }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="genaral-info">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <h5 class="font-weight-bold">Basic Information</h5>
                            <small class="text-muted">You can add/update your website basic information here.</small>
                        </div>
                        <div class="col-12 col-sm-6 col-md-8 form">
                            <div class="form-group">
                                <label class="font-weight-bold">Website Title</label>
                                <input type="text" class="form-control" name="title" value="@if(isset($data['title'])) {{ $data['title'] }} @endif" @if($status) disabled @endif>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Favicon</label>
                                @if($status)
                                <br>
                                    @if(isset($data['favicon']))    
                                    <img src="{{ asset($data['favicon']) }}" alt="favicon" width="50" height="50">
                                    @else
                                    <p>No image</p>
                                    @endif
                                @else
                                <input type="file" class="form-control" name="favicon" value="@if(isset($data['favicon'])) {{ $data['favicon'] }} @endif">
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Logo Type</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="logo_type" id="logo_text" @if(isset($data['logo_type']) and $data['logo_type'] == 'logo_text') {{ "checked" }} @endif value="logo_text" onclick="logo_type_text()">
                                    <label class="form-check-label" for="logo_text">
                                      Text
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="logo_type" id="logo_image" value="logo_image" @if(!isset($data['logo_type']) or (isset($data['logo_type']) and $data['logo_type'] == 'logo_image')) {{ "checked" }} @endif onclick="logo_type_image()">
                                    <label class="form-check-label" for="logo_image">
                                      Image
                                    </label>
                                  </div>
                            </div>
                            <div class="form-group logo-text" @if(!isset($data['logo_type']) or (isset($data['logo_type']) and $data['logo_type'] == 'logo_image')) {{ 'style=display:none;' }} @endif>
                                <label class="font-weight-bold">Logo text</label>
                                <input type="text" class="form-control" name="logo_text"  value="@if(isset($data['logo_text'])) {{ $data['logo_text'] }} @endif" @if($status) disabled @endif>
                            </div>
                            <div class="form-group logo-image" @if(isset($data['logo_type']) and $data['logo_type'] == 'logo_text')  {{ 'style=display:none;' }}  @endif>
                                <label class="font-weight-bold">Logo</label>
                                @if($status)
                                <br>
                                    @if(isset($data['logo_text'])) 
                                    <img src="{{ asset($data['logo_text']) }}" alt="logo" width="400" height="500">
                                    @else
                                    <p>No image</p>
                                    @endif
                                @else
                                <input type="file" class="form-control" name="logo" value="@if(isset($data['logo_text'])) {{ $data['logo_text'] }} @endif">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-info">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <h5 class="font-weight-bold">Website Images</h5>
                            <small class="text-muted">You can add images for your website.</small>
                        </div>
                        <div class="col-12 col-sm-6 col-md-8 form">
                            <div class="form-group">
                                <label class="font-weight-bold">Hero section image</label>
                                @if($status)
                                <br>
                                    @if(isset($data['hero_image'])) 
                                    <img src="{{ asset($data['hero_image']) }}" alt="hero_image" width="400" height="500" >
                                    @else
                                    <p>No image</p>
                                    @endif
                                @else
                                <input type="file" class="form-control" name="hero_image" value="@if(isset($data['hero_image'])) {{ $data['hero_image'] }} @endif">
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">About section image</label>
                                @if($status)
                                <br>
                                    @if(isset($data['about_image'])) 
                                    <img src="{{ asset($data['about_image']) }}" alt="about_image" width="400" height="500">
                                    @else
                                    <p>No image</p>
                                    @endif
                                @else
                                <input type="file" class="form-control" name="about_image" value="@if(isset($data['about_image'])) {{$data['about_image']}} @endif">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="contact-info">
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <h5 class="font-weight-bold">Webpage Images</h5>
                            <small class="text-muted">You can add images for your individual page.</small>
                        </div>
                        <div class="col-12 col-sm-6 col-md-8 form">
                            <div class="form-group">
                                <label class="font-weight-bold">Homepage image</label>
                                @if($status)
                                <br>
                                    @if(isset($data['home_page_image'])) 
                                    <img src="{{ asset($data['home_page_image']) }}" alt="home_page_image" width="400" height="500" >
                                    @else
                                    <p>No image</p>
                                    @endif
                                @else
                                <input type="file" class="form-control" name="home_page_image" value="@if(isset($data['home_page_image'])) {{ $data['home_page_image'] }} @endif">
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Blog page image</label>
                                @if($status)
                                <br>
                                    @if(isset($data['blog_page_image'])) 
                                    <img src="{{ asset($data['blog_page_image']) }}" alt="blog_page_image" width="400" height="500" >
                                    @else
                                    <p>No image</p>
                                    @endif
                                @else
                                <input type="file" class="form-control" name="blog_page_image" value="@if(isset($data['blog_page_image'])) {{ $data['blog_page_image'] }} @endif">
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Portfolio page image</label>
                                @if($status)
                                <br>
                                    @if(isset($data['portfolio_page_image'])) 
                                    <img src="{{ asset($data['portfolio_page_image']) }}" alt="portfolio_page_image" width="400" height="500" >
                                    @else
                                    <p>No image</p>
                                    @endif
                                @else
                                <input type="file" class="form-control" name="portfolio_page_image" value="@if(isset($data['portfolio_page_image'])) {{ $data['portfolio_page_image'] }} @endif">
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Resume page image</label>
                                @if($status)
                                <br>
                                    @if(isset($data['resume_page_image'])) 
                                    <img src="{{ asset($data['resume_page_image']) }}" alt="resume_page_image" width="400" height="500" >
                                    @else
                                    <p>No image</p>
                                    @endif
                                @else
                                <input type="file" class="form-control" name="resume_page_image" value="@if(isset($data['resume_page_image'])) {{ $data['resume_page_image'] }} @endif">
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">About page image</label>
                                @if($status)
                                <br>
                                    @if(isset($data['about_page_image'])) 
                                    <img src="{{ asset($data['about_page_image']) }}" alt="about_page_image" width="400" height="500" >
                                    @else
                                    <p>No image</p>
                                    @endif
                                @else
                                <input type="file" class="form-control" name="about_page_image" value="@if(isset($data['about_page_image'])) {{ $data['about_page_image'] }} @endif">
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Contact page image</label>
                                @if($status)
                                <br>
                                    @if(isset($data['contact_page_image'])) 
                                    <img src="{{ asset($data['contact_page_image']) }}" alt="contact_page_image" width="400" height="500" >
                                    @else
                                    <p>No image</p>
                                    @endif
                                @else
                                <input type="file" class="form-control" name="contact_page_image" value="@if(isset($data['contact_page_image'])) {{ $data['contact_page_image'] }} @endif">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tariff-profile-form-button">
                    @if(!$status)
                    <button class="btn btn-success">
                        Update
                    </button>
                    @else
                    <a href="?edit=true" class="btn btn-info">Edit</a>
                    @endif
                </div>
            </form>
        </div>
    </div>

    <script>
        function logo_type_image(){
            $('.logo-image').css('display', 'block');
            $('.logo-text').css('display', 'none');
        }

        function logo_type_text(){
            $('.logo-image').css('display', 'none');
            $('.logo-text').css('display', 'block');
        }
    </script>

@endsection