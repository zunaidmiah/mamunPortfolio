@extends('admin.index')

@section('body')
    {{-- link added here css and js --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <style>
        .checked {
            color: orange;
        }
    </style>

    {{-- link here css and js --}}


    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="mb-4">
                    <h4>
                        <i class="fas fa-shopping-bag"></i>&nbsp; All Recommendations &nbsp;
                        <a href="{{  route('add-recommendation')  }}" class="btn btn-sm btn-success" type="button">Add Recommendation</a>
                    </h4>
                    <hr>
                </div>
                @if(session('msg'))
                    <span class="badge badge-success">{{ session('msg') }}</span>
                @endif
                <div class="card-columns">
                <?php
                $recommendation = DB::table('recomendations')->orderBy('id', 'desc')->where("is_pending", 0)->get()->toArray();
                if($recommendation and count($recommendation) >= 1):
                    foreach($recommendation as $item):
                    $media = get_media_first($item->id, 'recommendation');
                ?>  


                    <div class="card" style="width: auto;">
                        <img src="{{ asset($media)  }}" class="card-img-top" alt="{{ $item->name }}"  width="400" height="300">
                        <div class="card-body">
                            <h6><b>Name : </b>{{ $item->name }}</h6>
                            <h6><b>Title : </b>{{ $item->title }}</h6>
                            <h6><b>Rating : </b></h6>
                            <div title="{{  $item->star  }} star rating">
                                <?php for($i=1;$i<=5;$i++){ ?>
                                <span class="fa fa-star @if(abs($item->star) >= $i) checked @endif"></span>
                                <?php } ?>
                            </div>
                            <div class="mt-1">
                                <p class="text-justify text-truncate para mb-0"><b>Status: </b><br>@if($item->is_hidden == 1) Hidden @elseif($item->is_deleted == 1) Deleted @else Approved @endif<br></p>
                                <p class="text-justify text-truncate para mb-0"><b>Message: <br></b>{{ strip_tags($item->message) }}<br><br></p>
                            </div>
                            <div class="mt-1 d-flex justify-content-between">
                                <a href="/sl-admin/add-recommendation?edit=<?php echo $item->id; ?>" class="btn btn-outline-warning btn-sm mt-2" type="button">Edit</a><br>
                                <a href="javascript:delete_recommendation({{ $item->id }})" class="btn btn-outline-danger btn-sm mt-2" type="button">Delete</a>
                            </div>
                        </div>
                    </div>


                    

                <?php
                    endforeach;
                ?>
                @else
                No data Found
                @endif
                </div>
            </div>
        </div>
    </div>
    {{-- sweet alert cdn --}}
    {{-- <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script> --}}
    <script>

        function delete_recommendation(id){
            swal({
                title: "Are you sure?",
                text: "Do you want to delete this recommendation.",
                icon: "warning",
                dangerMode: true,
                buttons: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Reomendation delete succesfully", {
                            icon: "success",
                        })
                        .then(function() {
                            $.ajax({
                                url: '/sl-admin/delete-recommendation/' + id,
                                type: 'get',
                                success: function(res) {
                                    // alert(res);
                                    location.reload();
                                }
                            });
                        });
                    }
            });
        }

    </script>

@endsection