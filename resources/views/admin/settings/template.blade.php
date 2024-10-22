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
            $active_template = DB::table('options')->where('option_group', 'template_settings')->where('option_key', 'active_template')->pluck('option_value')->toArray();
        ?>
        <div class="p-4">
            @if(session('message') != null)
            <span class="badge badge-success">{{ session('message') }}</span>
            @endif
            <div class="card bg-none style-1 mb-0 card-settings">
                <div class="card-header px-0">
                    <h5 class="w-100"><i class="mdi mdi-id-card text-primary mr-3"></i> <strong>Template Settings</strong></h5>
                    <div class="d-block w-100">
                        <nav class="anchorific"></nav>
                    </div>
                </div>
            </div>
            <div class="tariff-profile-form">
                <form action="{{  route('template-setting-db')  }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="genaral-info">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <h5 class="font-weight-bold">Select Template</h5>
                                <small class="text-muted">You can change template from here.</small>
                            </div>
                            <div class="col-12 col-sm-6 col-md-8 form">
                                <div class="form-group">
                                    <select class="form-control" aria-label="Default select example" name="template"  onchange="load_template_image(this.value)">
                                        <option selected>Default</option>
                                        <option @if(is_array($active_template) and in_array( 'BasicPortfolio', $active_template)) selected @endif value="BasicPortfolio">Basic Portfolio Template</option>
                                        <option @if(is_array($active_template) and in_array( 'GraphicsPortfolio', $active_template)) selected @endif value="GraphicsPortfolio">Graphics Portfolio Template</option>
                                      </select>
                                </div>
                                <div class="form-group template-preview">
                                    @if(is_array($active_template) and in_array( 'GraphicsPortfolio', $active_template))
                                    <img class="template_img" src="../images/GraphicsPortfolio.jpg" height="600" width="95%" alt="">
                                    @else
                                    <img class="template_img" src="{{  asset('../images/BasicPortfolio.jpg')  }}" height="600" width="95%" alt="">
                                    @endif
                                </div>
                                <div class="tariff-profile-form-button">
                                    <button class="btn btn-success">
                                        Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                    
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-6 col-md-4">
                                <h5 class="font-weight-bold">Contact Information</h5>
                                <small class="text-muted">You can update your contact information here.</small>
                            </div>
                            <div class="col-12 col-sm-6 col-md-8 form">
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" class="form-control" name="phone" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tariff-profile-form-button">
                        <button class="btn btn-success">
                            Update
                        </button>
                    </div>
            </div>
        </div>


        <script>
            function load_template_image(data){
                if(data == 'GraphicsPortfolio'){      
                    jQuery('.template_img').remove();
                    jQuery('.template-preview').append(`<img class="template_img" src="../images/GraphicsPortfolio.jpg" height="600" width="95%">`);              
                } else if(data =='BasicPortfolio'){
                    jQuery('.template_img').remove();
                    jQuery('.template-preview').append(`<img class="template_img" src="../images/BasicPortfolio.jpg" height="600" width="95%">`);
                }
            }
        </script>

@endsection