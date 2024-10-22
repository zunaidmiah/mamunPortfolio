@extends('admin.layout.main_layout')

@section('body')

    <?php 
      $cat = false;
      if(isset($_GET['id'])){
        $cat = DB::table('categories')->where('id', $_GET['id'])->first();
      }
    ?>
    <div class="container-fluid mt-4 pt-4" style="padding-bottom: 22%;">
        <h4>@if($cat) Update @else Add @endif Category</h4><hr><br>
        @if(session('success')!= null)
        <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {{ session('success') }}</em></div>
        @endif
        <form action="@if($cat) {{  route('update-category-db', $_GET['id'])  }}  @else {{  route('add-category-db')  }} @endif" method="post">
            @csrf
            <div class="form-group">
              <label for="name">Category Name</label>
              <input type="text" class="form-control" name="name" id="name" @if($cat) value="{{  $cat->name  }}" @endif placeholder="Abc, xyz ...">
            </div>
            <div class="form-group">
              <label for="type">Category Type</label>
              <select class="form-control" name="type" id="type">
                <option value="">Select One</option>
                <option  @if($cat and $cat->type == 'blog') selected @endif value="blog">Blog</option>
                <option  @if($cat and $cat->type == 'portfolio') selected @endif value="portfolio">Portfolio</option>
              </select>
            </div>
            <div class="form-group" id="blog_category" style="display: none;">
              <label for="parent">Blog Category</label>
              <select class="form-control" name="parent" id="parent">
                <?php
                    $category = DB::table('categories')->where('type', 'blog')->get();
                    if(isset($category) and count($category) > 0){ ?>
                        <option value="0">Select one</option>
                        <?php foreach ($category as $c) { ?>
                        <option   @if($cat and $cat->parent == $c->id) selected @endif value="{{  $c->id  }}">{{  $c->name  }}</option>
                    <?php } } else{ ?>
                        <option value="0">No categories</option>
                    <?php } ?>
              </select>
            </div>

            <div class="form-group" id="portfolio_category" style="display: none;">
              <label for="parent">Portfolio Category</label>
              <select class="form-control" name="parent" id="parent">
                <?php
                    $category = DB::table('categories')->where('type', 'portfolio')->get();
                    if(isset($category) and count($category) > 0){ ?>
                        <option value="0">Select one</option>
                        <?php foreach ($category as $c) { ?>
                        <option   @if($cat and $cat->parent == $c->id) selected @endif value="{{  $c->id  }}">{{  $c->name  }}</option>
                    <?php } } else{ ?>
                        <option value="0">No categories</option>
                    <?php } ?>
              </select>
            </div>

            <div class="form-group">
              @if($cat)
                <button class="btn btn-primary" type="submit" name="add_category">Update Category</button>
              @else
                <button class="btn btn-primary" type="submit" name="add_category">Add Category</button>
              @endif
          </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
      $('#type').on('change', function(){
        var type = $(this).val();
        if(type == 'blog'){
          $('#portfolio_category').css('display', 'none');
          $('#blog_category').css('display', '');
        }else if(type == 'portfolio'){
          $('#blog_category').css('display', 'none');
          $('#portfolio_category').css('display', '');
        }
      });

    </script>


@endsection