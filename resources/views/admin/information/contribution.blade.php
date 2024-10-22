@extends('admin.layout.main_layout')

@section('body')
    <div class="container">
        <div class="d-flex justify-content-center row" style="color: black;">
            <div class="col-md-12">
                <div class="mb-4">
                    <h4>
                        <i class="fas fa-shopping-bag"></i>&nbsp; Contribution list &nbsp;
                        <a href="#info_form" class="btn btn-primary show-form">Add contribution</a>
                    </h4>
                    <hr>
                </div>
                @if(session('message'))
                    <span class="badge badge-success">{{ session('message') }}</span>
                @endif
                @if(session('empty_message'))
                    <span class="badge badge-info">{{ session('empty_message') }}</span>
                @endif
                <div class="card-columns">
                <?php
                $contribution = DB::table('user_metas')->where('user_key', 'contribution_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
                if($contribution):
                    $contribution = json_decode($contribution, true);
                    foreach($contribution as $key => $item):
                ?>
                        <div class="card border-success mb-3" style="max-width: 18rem;">
                            <div class="card-header bg-transparent border-success">
                                <h5><b>{{ $item['name']}}</b></h5>
                            </div>
                            <div class="card-body text-success">
                                <p class="card-text">{!! $item['description'] !!}</p>
                                <span><i class="fa fa-calendar"></i> {{ $item['date'] }}</span>
                            </div>
                            <div class="card-footer bg-transparent border-success">
                                <a href="javascript:delete_item({{ $key }})" class="btn btn-outline-danger btn-sm mt-2" type="button">Delete contribution</a>
                            </div>
                        </div>

                <?php
                    endforeach;
                ?>
                @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4" id="info_form" style="display: none;">
        <h4>Add contribution<button class="btn btn-danger ml-4 close-form">Close</button></h4><hr><br>
        <form action="{{ route('contribution-info-db') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="institution-group increment border border-info p-4 my-2">
                <h5>Contribution Title</h5><hr>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="name[]" placeholder="Enter contribution project name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Date</label>
                    <input type="date" class="form-control" name="date[]"required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="ckeditor" name="description[]" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Referrence</label>
                    <input type="text" class="form-control" name="reference[]" placeholder="Enter reference link" required>
                </div>
                <div class="input-group-btn">
                    <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                </div>
            </div>


            <div class="clone hide">
                <div class="institution-group p-4 border border-info" style="margin-top:10px">
                    <h5>Contribution Title</h5><hr>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="name[]" placeholder="Enter contribution project name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Date</label>
                        <input type="date" class="form-control" name="date[]"required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea class="ckeditor" name="description[]" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Referrence</label>
                        <input type="text" class="form-control" name="reference[]" placeholder="Enter reference link" required>
                    </div>
                    <div class="input-group-btn">
                        <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
                    </div>
                </div>
            </div>
            <div class="input-group-btn  mt-4">
                <button class="btn btn-primary" type="submit">Save</button>
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
                jQuery(this).parents(".institution-group").remove();
            });

        });

        function delete_item(id){
            swal({
                title: "Are you sure?",
                text: "Do you want to delete this contribution.",
                icon: "warning",
                dangerMode: true,
                buttons: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("contribution delete succesfully", {
                            icon: "success",
                        })
                        .then(function() {
                            $.ajax({
                                url: '/sl-admin/delete-contribution/' + id,
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

        jQuery('.show-form').click(function(){
            jQuery('#info_form').css('display', '');
        })

        jQuery('.close-form').click(function(){
            jQuery('#info_form').css('display', 'none');
        })

    </script>

@endsection
