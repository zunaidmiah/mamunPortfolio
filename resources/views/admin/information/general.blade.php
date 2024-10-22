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
            $data = DB::table('user_metas')->where('user_group', 'general-info')->where('user_id', session('user_id'))->pluck('user_value','user_key')->toArray();
        ?>
        <div class="p-4">
            <div class="card bg-none style-1 mb-0 card-settings">
                <div class="card-header px-0">
                    <h5 class="w-100"><i class="mdi mdi-id-card text-primary mr-3"></i> <strong>General Information</strong></h5>
                    <div class="d-block w-100">
                        <nav class="anchorific"></nav>
                    </div>
                </div>
            </div>
            @if(session('message') != null)
            <span class="badge badge-success">{{ session('message') }}</span>
            @endif
            <div class="tariff-profile-form" style="color: black;">
                <form action="{{  route('general-info-db')  }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="genaral-info">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <h5 class="font-weight-bold">Personal Information</h5>
                                <small class="text-muted">You can add/update your personal information here.</small>
                            </div>
                            <div class="col-12 col-sm-6 col-md-8 form">
                                <div class="form-group">
                                    <label>Email*</label>
                                    <input type="email" class="form-control" name="email" value="@if(isset($data['email'])) {{ $data['email'] }} @endif" @if($status) disabled @endif>
                                </div>
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" name="name" value="@if(isset($data['name'])) {{ $data['name'] }} @endif" @if($status) disabled @endif>
                                </div>
                                <div class="form-group">
                                    <label>Professional title</label>
                                    <input type="text" class="form-control" name="profession_name" value="@if(isset($data['profession_name'])) {{ $data['profession_name'] }} @endif" @if($status) disabled @endif>
                                </div>
                                <div class="form-group">
                                    <label>About me</label>
                                    <textarea class="ckeditor" name="about_me" cols="30" rows="10" @if($status) disabled @endif>@if(isset($data['about_me'])) {{ $data['about_me'] }} @endif</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Birth date</label>
                                    <input @if($status) type="text" @else type="date" @endif class="form-control" name="birth_date"  value="@if(isset($data['birth_date'])) {{ $data['birth_date'] }} @endif" @if($status) disabled @endif>
                                </div>
                                <div class="form-group">
                                    <label>Location</label>
                                    <input type="text" class="form-control" name="location" value="@if(isset($data['location'])) {{ $data['location'] }} @endif" @if($status) disabled @endif>
                                </div>
                                <div class="form-group">
                                    <label>Interest</label>
                                    <input type="text" class="form-control" name="interest" value="@if(isset($data['interest'])) {{ $data['interest'] }} @endif" @if($status) disabled @endif>
                                </div>
                                <div class="form-group">
                                    <label>Country</label>
                                    <select class="form-control" name="country" @if($status) disabled @endif>
                                        <option value="">Select one</option>
                                            <option @if(isset($data['country']) and $data['country'] == 'Bangladesh') selected @endif value="Bangladesh">Bangladesh</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Skiills Info</label>
                                    <textarea class="ckeditor" name="skills_details" cols="30" rows="10" @if($status) disabled @endif>@if(isset($data['skills_details'])) {{ $data['skills_details'] }} @endif</textarea>
                                </div>
                                <div class="form-group">
                                    <label>CV</label>
                                    @if($status)
                                    <input type="text" class="form-control" value="@if(isset($data['cv'])) {{ $data['cv'] }} @endif" disabled>
                                    @else
                                    <input type="file" class="form-control" name="cv" accept=".doc,.docx,.pdf" value="@if(isset($data['cv'])) {{ $data['cv'] }} @endif">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <h5 class="font-weight-bold">Contact Information</h5>
                                <small class="text-muted">You can update your contact information here.</small>
                            </div>
                            <div class="col-12 col-sm-6 col-md-8 form">
                                <div class="form-group">
                                    <label>Marketplace Link</label>
                                    <input type="text" class="form-control" name="marketplace" value="@if(isset($data['marketplace'])) {{ $data['marketplace'] }} @endif" @if($status) disabled @endif>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" value="@if(isset($data['phone'])) {{ $data['phone'] }} @endif" @if($status) disabled @endif>
                                </div>
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone1" value="@if(isset($data['phone1'])) {{ $data['phone1'] }} @endif" @if($status) disabled @endif>
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


@endsection
