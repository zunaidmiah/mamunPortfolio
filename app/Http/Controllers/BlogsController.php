<?php

namespace App\Http\Controllers;

use App\Models\blogs;
use App\Models\media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
    public function index()
    {
        if(session('user_type')){
            if(session('user_type') == 'admin' or session('user_type') == 'editor') return view('admin.blog.add');
            else return redirect()->route('404-page');
        } else{
            return redirect()->route('404-page');
        }
    }


    public function store(Request $request)
    {
        if(isset($request) and !empty($request->all())){


            $this->validate( $request, [
                'title' => 'required',
                'description' => 'required'
            ]);

            $blog = new blogs();
            $blog->title  = $request->input('title');
            $blog->description  = $request->input('description');
            $blog->created_by = session('user_id');
            $blog->save();
            $id = $blog->id;
            if(!empty($request->file('filename'))) {
                $images = $request->file("filename");
                foreach($images as $image){
                    $destinationPath = 'images/blogs/';
                    $originalName = $image->getClientOriginalName();
                    $originalName = str_replace(" ", "", $originalName);
                    $justName = explode('.', $originalName)[0];
                    $blogImage = $justName . date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $blogImage);
                    $nameImage = "{$destinationPath}{$blogImage}";
                    $media = new media();
                    $media->type = "blogs";
                    $media->link = $nameImage;
                    $media->rel_id = $id;
                    $media->save();
                }

            }
            $catArray = [];
            if(!empty($request->input('category'))){
                foreach($request->input('category') as $category){
                    $cat = [];
                    $cat['cat_id'] = (int)$category;
                    $cat['rel_id'] = $id;
                    $cat['type'] = 'blog';
                    $catArray[] = $cat;
                }
            }
            if(!empty($catArray)){
                DB::table('category_relations')->insert($catArray);
            }
            \Cache::forget('blogs');
            return redirect()->route('add-blog')->with('success', "Blog added successfully!");
        } else{
            return redirect()->route('404-page');
        }
    }

    public function update($id, Request $request)
    {
        if(isset($request) and !empty($request->all())){


            $this->validate( $request, [
                'title' => 'required',
                'description' => 'required'
            ]);

            $blog = blogs::find($id);
            $blog->title  = $request->input('title');
            $blog->description  = $request->input('description');
            $blog->created_by = session('user_id');
            $blog->save();
            if(!empty($request->file('filename'))) {
                $images = $request->file("filename");
                foreach($images as $image){
                    $destinationPath = 'images/blogs/';
                    $blogImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $blogImage);
                    $nameImage = "{$destinationPath}{$blogImage}";
                    $media = new media();
                    $media->type = "blogs";
                    $media->link = $nameImage;
                    $media->rel_id = $id;
                    $media->save();
                }

            }
            \Cache::forget('blogs');
            return redirect()->route('add-blog')->with('success', "Blog Updated successfully!");
        } else{
            return redirect()->route('404-page');
        }
    }

    public function show(){
        if(session('user_type')){
            if(session('user_type') == 'admin' or session('user_type') == 'editor') return view('admin.blog.all');
            else return redirect()->route('404-page');
        } else{
            return redirect()->route('404-page');
        }
    }

    public function destroy($id){
        blogs::where('id', $id)->delete();
        media::where('type', 'blogs')->where('rel_id', $id)->delete();
        // DB::table('blogs')->where('id', $id)->delete();
        // DB::table('categories')->where('parent', $id)->update(['parent' => 0]);
        \Cache::forget('blogs');
        return redirect()->route('all-blog')->with('msg', "Blog deleted succesfully!");
    }
}
