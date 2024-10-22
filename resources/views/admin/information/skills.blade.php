@extends('admin.layout.main_layout')

@section('body')
    <div class="container">
        <div class="d-flex justify-content-center row" style="color: black;">
            <div class="col-md-12">
                <div class="mb-4">
                    <h4>
                        <i class="fas fa-shopping-bag"></i>&nbsp; Skills &nbsp;
                        <a href="#info_form" class="btn btn-primary show-form">Add Skills</a>
                    </h4>
                    <hr>
                </div>
                @if(session('message'))
                    <span class="badge badge-success">{{ session('message') }}</span>
                @endif
                @if(session('empty_message'))
                    <span class="badge badge-info">{{ session('empty_message') }}</span>
                @endif
                <div class="card-">
                <?php
                $working = DB::table('user_metas')->where('user_key', 'skills_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
                if($working):
                    $working = json_decode($working, true);
                    foreach($working as $key => $item):
                ?>  
                        <div class="card mb-4">
                          <div class="card-body">
                            <h5 class="card-title">Skills Technology : {{ $item['name']}}</h5>
                            <p class="card-text">Skills Level : {{ $item['level']}}</p>
                            <p class="card-text">Skills Percentage : {{ $item['percentage']}} %</p>
                            <div class="progress">
                                <div class="progress-bar bg-info" role="progressbar" style="width: {{ $item['percentage']}}%" aria-valuenow="{{ $item['percentage']}}" aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
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
        <h4>Add Skiils items<button class="btn btn-danger ml-4 close-form">Close</button></h4><hr><br>
        <form action="{{ route('skills-info-db') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="institution-group increment border border-info p-4 my-2">
                <h5>Skills Information</h5><hr>
                <div class="form-group">
                    <label for="exampleInputEmail1">Title</label>
                    <input type="text" class="form-control" name="name[]" placeholder="Enter your skill name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Level</label>
                    <select class="form-control" aria-label="Default select example" name="level[]" required>
                        <option selected>Open this select menu</option>
                        <option value="junior">junior</option>
                        <option value="mid">Mid</option>
                        <option value="expert">Expert</option>
                      </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Percentage</label>
                    <input type="text" class="form-control" name="percentage[]" placeholder="Enter skill percentage" required>
                </div>
                <div class="input-group-btn"> 
                    <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                </div>
            </div>


            <div class="clone hide">
                <div class="institution-group p-4 border border-info" style="margin-top:10px">
                    <h5>Skills Information</h5><hr>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" name="name[]" placeholder="Enter your skill name" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Level</label>
                        <select class="form-control" aria-label="Default select example" name="level[]" required>
                            <option selected>Open this select menu</option>
                            <option value="junior">junior</option>
                            <option value="mid">Mid</option>
                            <option value="expert">Expert</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Percentage</label>
                        <input type="text" class="form-control" name="percentage[]" placeholder="Enter skill percentage" required>
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
                text: "Do you want to delete this skiil.",
                icon: "warning",
                dangerMode: true,
                buttons: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Skill delete succesfully", {
                            icon: "success",
                        })
                        .then(function() {
                            $.ajax({
                                url: '/sl-admin/delete-skills/' + id,
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