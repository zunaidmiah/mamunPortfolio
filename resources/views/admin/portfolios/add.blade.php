@extends('admin.layout.main_layout')

@section('body')

<style>
    #upload {
            opacity: 0;
        }

        #upload-label {
            position: absolute;
            top: 50%;
            left: 1rem;
            transform: translateY(-50%);
        }

        .field{
            border: 2px solid #F1F1F1;
            background-color: #F1F1F1;
        }

        .image-area {
            border: 2px dashed rgba(255, 255, 255, 0.7);
            padding: 1rem;
            position: relative;
        }

        .image-area::before {
            content: 'Uploaded image result';
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 0.8rem;
            z-index: 1;
        }

        .image-area img {
            z-index: 2;
            position: relative;
        }

        div.gallery {
            border: 1px solid #ccc;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
                margin-top:40px;
                padding: 10px 6px;
                float: left;
                width: 24.99999%;
            }

        @media only screen and (max-width: 700px) {
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px) {
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
</style>
<?php
    if(isset($_REQUEST['edit'])){
        $id = $_REQUEST['edit'];
        $item = DB::table('portfolios')->where('id', $id)->first();
        $technologies = json_decode($item->technology, true);
        $backend = $technologies['backend'];
        $frontend = $technologies['frontend'];
        $technology = $technologies['technology'];
    }
?>
<div class="container m-4">
    <form action="@if(isset($item)) {{  route('update-portfolio-db', $item->id) }} @else {{ route('add-portfolio-db') }} @endif" method="post" enctype="multipart/form-data">
        @csrf
        <div class="title">
            <div class="p-4 mr-2 mb-2" style="background-color: #FFFFFF;">
                <h4>
                    <i class="fas fa-shopping-bag"></i>&nbsp; @if(isset($item)) Edit Portfolio @else Add Portfolio @endif &nbsp;
                    <button type="submit" class="float-right btn btn-sm btn-primary">@if(isset($item)) Update Portfolio @else Save Portfolio @endif</button>
                </h4>
                @if(session('success'))
                    <span class="badge badge-success">{{ session('success') }}</span>
                @endif
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col col-12">
                <div class="general container mb-2" style="background-color: #FFFFFF; padding: 20px 15px; border-radius: 10px;">
                    <div class="form-group">
                        <label for="title">Portfolio Title</label>
                        <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'border-danger' : '' }}" id="title" @if(isset($item)) value="{{ $item->title }}" @endif placeholder="Enter portfolio title" required>
                    </div>
                    <div class="form-group d-none">
                        <label for="description">Description</label>
                        <textarea class="ckeditor" name="description" id="description" cols="30" rows="10">@if(isset($item)) {{ $item->description }} @endif</textarea>
                        @if($errors->has('description'))
                            <span style="color: red;">You must need to add description</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="link">Website Link</label>
                        <input type="text" name="link" class="form-control {{ $errors->has('link') ? 'border-danger' : '' }}" id="link" @if(isset($item)) value="{{ $item->link }}" @endif placeholder="Enter Website link" required>
                    </div>
                    <div class="form-group">
                        <label for="parent">Category</label>
                        <select class="form-control" name="category" id="parent">
                          <?php
                              $category = DB::table('categories')->where('type', 'portfolio')->get();
                              if(isset($category) and count($category) > 0){ ?>
                                  <option value="0">Select one</option>
                                  <?php foreach ($category as $c) { ?>
                                  <option   @if(isset($item) and $item->category == $c->id) selected @endif value="{{  $c->id  }}">{{  $c->name  }}</option>
                              <?php } } else{ ?>
                                  <option value="0">No categories</option>
                              <?php } ?>
                        </select>
                    </div>
                    <div class="form-group d-none">
                        <label for="backend">Backend</label>
                        <input type="text" name="technology[]" class="form-control {{ $errors->has('technology') ? 'border-danger' : '' }}" id="backend" @if(isset($item)) value="{{ $backend }}" @endif placeholder="Enter Backend language separate by comma">
                    </div>
                    <div class="form-group d-none">
                        <label for="frontend">Frontend</label>
                        <input type="text" name="technology[]" class="form-control {{ $errors->has('technology') ? 'border-danger' : '' }}" id="frontend" @if(isset($item)) value="{{ $frontend }}" @endif placeholder="Enter Frontend language separate by comma">
                    </div>
                    <div class="form-group d-none">
                        <label for="technology">Technology</label>
                        <input type="text" name="technology[]" class="form-control {{ $errors->has('technology') ? 'border-danger' : '' }}" id="technology" @if(isset($item)) value="{{ $technology }}" @endif placeholder="Enter technology separate by comma">
                    </div>
                </div>

                {{-- <div class="image container mb-2" style="background-color: #FFFFFF; padding: 20px 15px; border-radius: 10px;">
                    <label for="upload">Pictures</label>
                    <!-- Upload image input-->
                    <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm field">
                        <input id="upload" name="image[]" type="file" onchange="readURL(this);" class="form-control border-2" multiple>
                        <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                        <div class="input-group-append">
                            <label for="upload" class="btn btn-light m-0 rounded-pill px-4">
                                <i class="fa fa-cloud-upload mr-2 text-muted"></i>
                                <small class="text-uppercase font-weight-bold text-muted">Choose file</small>
                            </label>
                        </div>
                    </div>
                    @if($errors->has('image')) <span style="color:red;">{{ $errors->first('image')}} @endif</span>
                    <!-- Uploaded image area-->
                    <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
                    <div class="image-area mt-4">
                        <img id="imageResult" src="@if(isset($item)){{ $item->images }} @endif" alt="" class="img-fluid rounded shadow-sm mx-auto d-block">
                    </div>
                </div> --}}

                <div class="input-group control-group increment" >
                    <input type="file" name="filename[]" class="form-control" accept=".jpg, .jpeg, .png">
                    <div class="input-group-btn d-none">
                      <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                    </div>
                  </div>
                  <div class="clone hide d-none">
                    <div class="control-group input-group" style="margin-top:10px">
                      <input type="file" name="filename[]" class="form-control" accept=".jpg, .jpeg, .png">
                      <div class="input-group-btn">
                        <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                      </div>
                    </div>
                  </div>
                  @if($errors->has('filename')) <span style="color:red;">{{ $errors->first('filename')}} </span>@endif
                  @if(isset($item))
                    <?php
                        $images = DB::table('media')->where('type', 'portfolios')->where('rel_id', $id)->get();
                        foreach ($images as $image) {?>
                            <div class="responsive">
                                <div class="gallery">
                                  <a target="_blank" href="{{  asset($image->link)  }}">
                                    <img src="{{  asset($image->link)  }}" alt="Cinque Terre" width="600" height="400">
                                  </a>
                                  <div class="desc">Add a description of the image here</div>
                                </div>
                              </div>
                    <?php } ?>
                  @endif

            </div>
        </div>

    </form>

</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>

    jQuery(document).ready(function() {

        jQuery(".btn-success").click(function(){
            var html = $(".clone").html();
            jQuery(".increment").after(html);
        });

        jQuery("body").on("click",".btn-danger",function(){
            jQuery(this).parents(".control-group").remove();
        });

    });

    // function readURL(input) {
    //     if (input.files && input.files[0]) {
    //         var reader = new FileReader();

    //         reader.onload = function (e) {
    //             $('#imageResult')
    //                 .attr('src', e.target.result);
    //         };
    //         reader.readAsDataURL(input.files[0]);
    //     }
    // }

    // $(function () {
    //     $('#upload').on('change', function () {
    //         readURL(input);
    //     });
    // });

    /*  ==========================================
        SHOW UPLOADED IMAGE NAME
    * ========================================== */
    // var input = document.getElementById( 'upload' );
    // var infoArea = document.getElementById( 'upload-label' );

    // input.addEventListener( 'change', showFileName );
    // function showFileName( event ) {
    // var input = event.srcElement;
    // var fileName = input.files[0].name;
    // infoArea.textContent = 'File name: ' + fileName;
    // }
</script>

@endsection
