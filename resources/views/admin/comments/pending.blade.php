@extends('admin.index')

@section('body')
    {{-- link added here css and js --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <?php 
        Illuminate\Pagination\Paginator::useBootstrap();
    ?>

    {{-- link here css and js --}}


    <div class="container mt-5 mb-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="mb-4">
                    <h4>
                        <i class="fas fa-shopping-bag"></i>&nbsp; Pending Comments &nbsp;
                    </h4>
                    <hr>
                </div>
                @if(session('msg'))
                    <span class="badge badge-success">{{ session('msg') }}</span>
                @endif
                <div class="card-columns">
                <?php
                $comment = DB::table('comments')->orderBy('id', 'desc')->where("is_pending", 1)->where('is_deleted', 0)->paginate(20);
                if(isset($comment) and count($comment) >= 1):
                    foreach($comment as $item):
                ?>  
                    <div class="card border-success mb-3" style="max-width: auto;">
                        <div class="card-header bg-transparent border-success">
                            <h5>Email: {{ $item->email }}</h5>
                            <h5>Name: {{  $item->name  }}</h5>
                        </div>
                        <div class="card-body text-success">
                        <p class="text-justify text-truncate para mb-0" style="color:gray;"><b>Status: </b><br>Pending<br></p>
                        <p class="card-text">Comment: {!! $item->comment !!}</p>
                        </div>
                        <div class="card-footer bg-transparent border-success d-flex justify-content-between">
                            <a href="javascript:approve_comment({{ $item->id }})" class="btn btn-outline-primary btn-sm mt-2" type="button">Approve</a>
                            <a href="javascript:delete_comment({{ $item->id }})" class="btn btn-outline-danger btn-sm mt-2" type="button">Delete</a>
                        </div>
                    </div>

                <?php
                    endforeach;
                ?>
                </div>
                <div class="link mt-4">
                    {{ $comment->links() }}
                </div>
                @else
                No data Found
                @endif
            </div>
        </div>
    </div>
    {{-- sweet alert cdn --}}
    {{-- <script src="{{ asset('assets/sweetalert2/sweetalert2.min.js') }}"></script> --}}
    <script>
        function approve_comment(id){
            swal({
                title: "Are you sure?",
                text: "Do you want to approve this comment.",
                icon: "warning",
                dangerMode: true,
                buttons: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Comment Updated succesfully", {
                            icon: "success",
                        })
                        .then(function() {
                            $.ajax({
                                url: '/sl-admin/update-comment/' + id,
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

        function delete_comment(id){
            swal({
                title: "Are you sure?",
                text: "Do you want to delete this comment.",
                icon: "warning",
                dangerMode: true,
                buttons: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Comment delete succesfully", {
                            icon: "success",
                        })
                        .then(function() {
                            $.ajax({
                                url: '/sl-admin/delete-comment/' + id,
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