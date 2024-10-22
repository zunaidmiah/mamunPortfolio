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
        $item = DB::table('recomendations')->where('id', $id)->first();
        $images = DB::table('media')->where('type', 'recommendation')->where('rel_id', $item->id)->pluck('link')->first();
    }
?>
<div class="container m-4">
    <form action="@if(isset($item)) {{  route('update-recommendation-db', $item->id) }} @else {{ route('add-recommendation-db') }} @endif" method="post" enctype="multipart/form-data">
        @csrf
        <div class="title">
            <div class="p-4 mr-2 mb-2" style="background-color: #FFFFFF;">
                <h4>
                    <i class="fas fa-shopping-bag"></i>&nbsp; @if(isset($item)) Edit Recommendation @else Add Recommendation @endif &nbsp;
                    <button type="submit" class="float-right btn btn-sm btn-primary">@if(isset($item)) Update Recommendation @else Save Recommendation @endif</button>
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
                        <label for="name">Client Name</label>
                        <input type="text" name="name" class="form-control {{ $errors->has('name') ? 'border-danger' : '' }}" id="name" @if(isset($item)) value="{{ $item->name }}" @endif placeholder="Enter Client name" required>
                    </div>
                    <div class="form-group">
                        <label for="title">Client Title</label>
                        <input type="text" name="title" class="form-control {{ $errors->has('title') ? 'border-danger' : '' }}" id="title" @if(isset($item)) value="{{ $item->title }}" @endif placeholder="Enter Client title" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="ckeditor" name="message" id="message" cols="30" rows="10">@if(isset($item)) {{ $item->message }} @endif</textarea>
                        @if($errors->has('description'))
                            <span style="color: red;">You must need to add description</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="star">Star</label>
                        <select class="form-control" name="star" id="star">
                            <option   @if(isset($item) and $item->star == 1) selected @endif value="1">1 Star</option>
                            <option   @if(isset($item) and $item->star == 2) selected @endif value="2">2 Star</option>
                            <option   @if(isset($item) and $item->star == 3) selected @endif value="3">3 Star</option>
                            <option   @if(isset($item) and $item->star == 4) selected @endif value="4">4 Star</option>
                            <option   @if(isset($item) and $item->star == 5) selected @endif value="5">5 Star</option>
                        </select>
                    </div>
                </div>

                <div class="image container mb-2" style="background-color: #FFFFFF; padding: 20px 15px; border-radius: 10px;">
                    <label for="upload">Pictures</label>
                    <!-- Upload image input-->
                    <div class="input-group mb-3 px-2 py-2 rounded-pill bg-white shadow-sm field">
                        <input id="upload" name="filename" type="file" onchange="readURL(this);" class="form-control border-2" multiple>
                        <label id="upload-label" for="upload" class="font-weight-light text-muted">Choose file</label>
                        <div class="input-group-append">
                            <label for="upload" class="btn btn-light m-0 rounded-pill px-4"> 
                                <i class="fa fa-cloud-upload mr-2 text-muted"></i>
                                <small class="text-uppercase font-weight-bold text-muted">Choose file</small>
                            </label>
                        </div>
                    </div>
                    @if($errors->has('filename')) <span style="color:red;">{{ $errors->first('filename')}} @endif</span>
                    <!-- Uploaded image area-->
                    <p class="font-italic text-white text-center">The image uploaded will be rendered inside the box below.</p>
                    <div class="image-area mt-4">
                        <img id="imageResult" src="@if(isset($images)){{ asset($images) }} @endif" alt="recommendation" width="300" height="300" class="img-fluid rounded shadow-sm mx-auto d-block">
                    </div>
                </div>
            </div>
        </div>

    </form>

</div>
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#imageResult')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(function () {
        $('#upload').on('change', function () {
            readURL(input);
        });
    });

    /*  ==========================================
        SHOW UPLOADED IMAGE NAME
    * ========================================== */
    var input = document.getElementById( 'upload' );
    var infoArea = document.getElementById( 'upload-label' );

    input.addEventListener( 'change', showFileName );
    function showFileName( event ) {
    var input = event.srcElement;
    var fileName = input.files[0].name;
    infoArea.textContent = 'File name: ' + fileName;
    }
</script>

@endsection