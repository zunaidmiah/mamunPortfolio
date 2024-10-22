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
                        <i class="fas fa-shopping-bag"></i>&nbsp; Our Blogs &nbsp;
                        <a href="{{  route('add-blog')  }}" class="btn btn-sm btn-success" type="button">Add Blogs</a>
                    </h4>
                    <hr>
                </div>
                @if(session('msg'))
                    <span class="badge badge-success">{{ session('msg') }}</span>
                @endif
                <?php
                $blogs = DB::table('blogs')->orderBy('id', 'desc')->where("is_hidden", 0)->paginate(20);
                if($blogs):
                    foreach($blogs as $item):
                    $images = DB::table('media')->where('type', 'blogs')->where('rel_id', $item->id)->pluck('link')->first();
                    $categories = get_blog_categories($item->id);
                ?>  
                    <div class="row p-2 bg-white border rounded mb-4">
                        <div class="col-md-4 mt-1">
                            <img class="img-fluid img-responsive rounded product-image" src="{{ asset($images)  }}" style="cursor: pointer;">
                        </div>  
                        <div class="col-md-6 mt-1">
                            <h5>{{ $item->title}}</h5>
                            <p class="text-justify text-truncate para mb-0">{{ strip_tags($item->description) }}<br><br></p>
                            @foreach ($categories as $key => $cat)
                            <span>#{{ $cat }} || </span>
                            @endforeach
                        </div>
                        <div class="col-md-2 mt-1">
                            <a href="/sl-admin/add-blog?edit=<?php echo $item->id; ?>" class="btn btn-outline-primary btn-sm mt-2" type="button">Edit Blog</a>
                            <a href="javascript:delete_post({{ $item->id }})" class="btn btn-outline-danger btn-sm mt-2" type="button">Delete Blog</a>
                        </div>
                    </div>

                <?php
                    endforeach;
                ?>
                <div class="link mt-4">
                    {{ $blogs->links() }}
                </div>
                @endif
            </div>
        </div>
    </div>


    <script>
        function delete_post(id){
            swal({
                title: "Are you sure?",
                text: "Do you want to delete this post.",
                icon: "warning",
                dangerMode: true,
                buttons: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Post delete succesfully", {
                            icon: "success",
                        })
                        .then(function() {
                            $.ajax({
                                url: '/sl-admin/delete-blog/' + id,
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