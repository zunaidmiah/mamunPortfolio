@extends('admin.layout.main_layout')

@section('body')
    <style>
        .cat ul li, li{
            list-style: none;
            font-size: 20px;
            word-spacing: 5px;
            margin-bottom: 5px;
        }
    </style>
    <div class="container-fluid cat">
        <h4>All Categories</h4><hr><br><br>
        @if(session('success') != null)
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {{ session('success') }}</em></div>
        @endif
        <div class ="row mb-2">
            <div class="col-6">
                <b>Category name</b>
            </div>
            <div class="col-3">
                <b>Category type</b>
            </div>
            <div class="col-3">
                <b>Actions</b>
            </div>
        </div><hr>
        <div class="mb-4"></div>
        <?php $cat = DB::table('categories')->where('parent', 0)->get();
        if(isset($cat) and count($cat) > 0){ 
            $str = "<ul>";
            foreach ($cat as $c) {
                $str .= '<li>
                            <div class="row">
                                <div class="col-6">
                                    <i class="fas fa-fw fa-arrow-circle-right"></i>'.
                                    $c->name
                                .'</div>
                                <div class="col-3">'.
                                    $c->type
                                .'</div>
                                <div class="col-3">
                                    <a href="/sl-admin/add-category?id='.$c->id.'" class="btn btn-info">
                                        <i class="fas fas-pencil-square-o"></i>
                                        Edit
                                    </a>
                                    <a href="javascript:delete_category('.$c->id.')" class="btn btn-danger">
                                        Delete
                                    </a>
                                </div>
                            </div>
                        </li>';
                $child = DB::table('categories')->where('parent', $c->id)->get();
                if(count($child) > 0){
                    $str .= "<ul>";
                    foreach ($child as $c1) {
                        $str .= '<li>
                                    <div class="row">
                                        <div class="col-6">
                                            <i class="fas fa-fw fa-arrow-circle-right"></i>'.
                                            $c1->name
                                        .'</div>
                                        <div class="col-3">'.
                                            $c1->type
                                        .'</div>
                                        <div class="col-3">
                                            <a href="/sl-admin/add-category?id='.$c1->id.'" class="btn btn-info">
                                                <i class="fas fas-pencil-square-o"></i>
                                                Edit
                                            </a>
                                            <a href="javascript:delete_category('.$c1->id.')" class="btn btn-danger">
                                                Delete
                                            </a>
                                        </div>
                                    </div>
                                </li>';
                        $child1 = DB::table('categories')->where('parent', $c1->id)->get();
                        if(count($child1) > 0){
                            $str .= "<ul>";
                            foreach ($child1 as $c2) {
                                $str .= '<li>
                                        <div class="row">
                                            <div class="col-6">
                                                <i class="fas fa-fw fa-arrow-circle-right"></i>'.
                                                $c2->name
                                            .'</div>
                                            <div class="col-3">'.
                                                $c2->type
                                            .'</div>
                                            <div class="col-3">
                                                <a href="/sl-admin/add-category?id='.$c2->id.'" class="btn btn-info">
                                                    <i class="fas fas-pencil-square-o"></i>
                                                    Edit
                                                </a>
                                                <a href="javascript:delete_category('.$c2->id.')" class="btn btn-danger">
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </li>';
                            }
                            $str .= "</ul>";
                        }
                    }
                    $str .= "</ul>";
                }
            }
            $str .= "</ul>"; 
            print $str;
         } else{ ?>
            <h6>No categoires here</h6>
        <?php } ?>
    </div>

<script>
    function delete_category(id){
        swal({
            title: "Are you sure?",
            text: "Do you want to delete this category.",
            icon: "warning",
            dangerMode: true,
            buttons: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Category delete succesfully", {
                        icon: "success",
                    })
                    .then(function() {
                        $.ajax({
                            url: '/sl-admin/delete-category/' + id,
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