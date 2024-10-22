@extends('admin.layout.main_layout')

@section('body')
    <div class="container">
        <div class="d-flex justify-content-center row" style="color: black;">
            <div class="col-md-12">
                <div class="mb-4">
                    <h4>
                        <i class="fas fa-shopping-bag"></i>&nbsp; Working Experience list &nbsp;
                        <a href="#info_form" class="btn btn-primary show-form">Add Experinece</a>
                    </h4>
                    <hr>
                </div>
                @if(session('message'))
                    <span class="badge badge-success">{{ session('message') }}</span>
                @endif
                @if(session('empty_message'))
                    <span class="badge badge-info">{{ session('empty_message') }}</span>
                @endif
                <div class="card-deck">
                <?php
                $working = DB::table('user_metas')->where('user_key', 'working_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
                if($working):
                    $working = json_decode($working, true);
                    foreach($working as $key => $item):
                ?>  
                        <div class="card">
                          <div class="card-body">
                            <p class="card-text">{{ $item['time']}}</p>
                            <h5 class="card-title">{{ $item['name']}}</h5>
                            <p class="card-text">{{ $item['c_name']}}</p>
                            <p class="card-text"><?php echo htmlspecialchars_decode($item['description']); ?></p>
                          </div>
                          <div class="card-footer">
                            <a href="javascript:delete_item({{ $key }})" class="btn btn-outline-danger btn-sm mt-2" type="button">Delete working</a>
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
        <h4>Add Working Experience<button class="btn btn-danger ml-4 close-form">Close</button></h4><hr><br>
        <form action="{{ route('working-info-db') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="institution-group increment border border-info p-4 my-2">
                <h5>Wroking Information</h5><hr>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="name[]" placeholder="Enter your working name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Time</label>
                    <input type="text" class="form-control" name="time[]" placeholder="Enter working type" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Company Name</label>
                    <input type="text" class="form-control" name="c_name[]" placeholder="Enter working type" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Description</label>
                    <textarea class="ckeditor" name="description[]" cols="30" rows="10"></textarea>
                </div>
                <div class="input-group-btn"> 
                    <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                </div>
            </div>


            <div class="clone hide">
                <div class="institution-group p-4 border border-info" style="margin-top:10px">
                    <h5>Wroking Information</h5><hr>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="name[]" placeholder="Enter your working name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Time</label>
                        <input type="text" class="form-control" name="time[]" placeholder="Enter working type" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Company Name</label>
                        <input type="text" class="form-control" name="c_name[]" placeholder="Enter working type" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea class="ckeditor" name="description[]" cols="30" rows="10"></textarea>
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
                text: "Do you want to delete this working.",
                icon: "warning",
                dangerMode: true,
                buttons: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("working delete succesfully", {
                            icon: "success",
                        })
                        .then(function() {
                            $.ajax({
                                url: '/sl-admin/delete-working/' + id,
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