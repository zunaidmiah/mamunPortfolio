@extends('admin.layout.main_layout')

@section('body')
    <div class="px-2">
        <div class="card bg-none style-1 mb-0 card-settings" style="color: black;">
            <div class="card-body pt-3 px-0">
                <hr class="thin mt-0 mb-5">
                @if(session('message') != null)
                    <span class="ml-2 mb-2 badge badge-success">{{ session('message') }}</span>
                @endif
                <?php 
                    $data = DB::table('user_metas')->where('user_group', 'social-info')->where('user_id', session('user_id'))->pluck('user_value','user_key')->toArray();
                ?>
                <div class="row">
                    <div class="col-md-3 px-4">
                        <h5 class="font-weight-bold">Social Media</h5>
                        <small class="text-muted">Add links to your social media accounts. Once set up, you can use them anywhere on your site using the 'social networks' module with drag and drop technology.</small>
                    </div>
                    <div class="col-md-9">
                        <div class="card bg-light style-1 mb-3">
                            <div class="card-body pt-3">
                                <div id="mw-global-fields-social-profile-set">
                                    <div class="">
                                        <div class="row">
                                            <div class="col-12 socials-settings">
                                                <form action="{{  route('social-info-db')  }}" method="post">
                                                @csrf
                                                <div class="form-group mb-4">
                                                    <label class="control-label">Select and type socials links you want to show</label>
                                                    <small class="text-muted d-block mb-2">Select the social networks you want to see on your site, blog and store</small>
                                                </div>

                                                <div class="form-group">
                                                    <div class="custom-control  d-flex align-items-center">
                                                        <label class="custom-control-label mr-2 d-flex" for="github_enabled"><i class="mdi mdi-github mdi-20px lh-1_0 mr-2"></i> github.com/</label>
                                                        <input type="text" class=" form-control" name="github_url" value="@if(isset($data['github_url'])){{  $data['github_url']  }} @endif"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="custom-control  d-flex align-items-center">
                                                        <label class="custom-control-label mr-2 d-flex" for="linkedin_enabled"><i class="mdi mdi-linkedin mdi-20px lh-1_0 mr-2"></i> linkedin.com/</label>
                                                        <input type="text" class=" form-control" name="linkedin_url" value="@if(isset($data['linkedin_url'])){{  $data['linkedin_url']  }} @endif"/>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="custom-control  d-flex align-items-center">
                                                        <label class="custom-control-label mr-2 d-flex" for="facebook_enabled"><i class="mdi mdi-facebook mdi-20px lh-1_0 mr-2"></i> facebook.com/</label>
                                                        <input type="text" option-group="" class=" form-control" name="facebook_url" value="@if(isset($data['facebook_url'])){{  $data['facebook_url']  }} @endif">
                                                    </div>
                                                </div>
                            
                                                <div class="form-group">
                                                    <div class="custom-control  d-flex align-items-center">
                                                        <label class="custom-control-label mr-2 d-flex" for="twitter_enabled"><i class="mdi mdi-twitter mdi-20px lh-1_0 mr-2"></i> twitter.com/</label>
                                                        <input type="text" option-group="" class=" form-control" name="twitter_url" value="@if(isset($data['twitter_url'])){{  $data['twitter_url']  }} @endif">
                                                    </div>
                                                </div>
                            
                                                <a href="javascript:;" class="btn btn-outline-primary btn-sm mb-3" data-toggle="collapse" data-target="#more-socials-settings" aria-expanded="true">Show more</a>
                            
                                                <div class="collapse" id="more-socials-settings">
                                                    <div class="form-group">
                                                        <div class="custom-control  d-flex align-items-center">
                                                            <label class="custom-control-label mr-2 d-flex" for="youtube_enabled"><i class="mdi mdi-youtube mdi-20px lh-1_0 mr-2"></i> youtube.com/</label>
                                                            <input type="text"  class=" form-control" name="youtube_url" value="@if(isset($data['youtube_url'])){{  $data['youtube_url']  }} @endif"/>
                                                        </div>
                                                    </div>
                            
                                                    <div class="form-group">
                                                        <div class="custom-control  d-flex align-items-center">
                                                            <label class="custom-control-label mr-2 d-flex" for="pinterest_enabled"><i class="mdi mdi-pinterest mdi-20px lh-1_0 mr-2"></i> pinterest.com/</label>
                                                            <input type="text" class=" form-control" name="pinterest_url" value="@if(isset($data['pinterest_url'])){{  $data['pinterest_url']  }} @endif"/><span></span>
                                                        </div>
                                                    </div>                        
                            
                                                    <div class="form-group">
                                                        <div class="custom-control  d-flex align-items-center">
                                                            <label class="custom-control-label mr-2 d-flex" for="instagram_enabled"><i class="mdi mdi-instagram mdi-20px lh-1_0 mr-2"></i> instagram.com/</label>
                                                            <input type="text" class=" form-control" name="instagram_url" value="@if(isset($data['instagram_url'])){{  $data['instagram_url']  }} @endif"/>
                                                        </div>
                                                    </div>
                            
                                                    <div class="form-group">
                                                        <div class="custom-control  d-flex align-items-center">
                                                            <label class="custom-control-label mr-2 d-flex" for="soundcloud_enabled"><i class="mdi mdi-soundcloud mdi-20px lh-1_0 mr-2"></i> soundcloud.com/</label>
                                                            <input type="text" class=" form-control" name="soundcloud_url" value="@if(isset($data['soundcloud_url'])){{  $data['soundcloud_url']  }} @endif"/>
                                                        </div>
                                                    </div>
                            
                                                </div>
                                                <div class="form-group">
                                                    <div class="custom-control d-flex align-items-center">
                                                        <input type="submit" name="save" value="Save" class="btn btn-primary"/>
                                                    </div>
                                                </div>
                                                </form>
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
    </div>

@endsection