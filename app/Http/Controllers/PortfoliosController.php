<?php

namespace App\Http\Controllers;

use App\Models\media;
use App\Models\portfolios;
use Illuminate\Http\Request;

class PortfoliosController extends Controller
{
    public function index()
    {
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.portfolios.add');
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
                'description' => 'required',
                'link' => 'required',
                'category' => 'required',
                'technology' => 'required'
            ]);
            $technology_type = ['backend', 'frontend', 'technology'];
            $technology = json_encode(array_combine($technology_type, $request->input('technology')));
            $portfolio = new portfolios();
            $portfolio->title  = $request->input('title');
            $portfolio->description  = $request->input('description');
            $portfolio->created_by = session('user_id');
            $portfolio->link = $request->input('link');
            $portfolio->category = $request->input('category');
            $portfolio->technology = $technology;
            $portfolio->save();
            $id = $portfolio->id;
            if(!empty($request->file('filename'))) {
                $images = $request->file("filename");
                foreach($images as $image){
                    $destinationPath = 'images/portfolios/';
                    $originalName = $image->getClientOriginalName();
                    $originalName = str_replace(" ", "", $originalName);
                    $justName = explode('.', $originalName)[0];
                    $portfolioImage = $justName . date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $portfolioImage);
                    $nameImage = "{$destinationPath}{$portfolioImage}";
                    $media = new media();
                    $media->type = "portfolios";
                    $media->link = $nameImage;
                    $media->rel_id = $id;
                    $media->save();
                }

            }
            \Cache::forget('portfolios');
            return redirect()->route('add-portfolio')->with('success', "portfolio added successfully!");
        } else{
            return redirect()->route('404-page');
        }
    }

    public function update($id, Request $request)
    {
        if(isset($request) and !empty($request->all())){

            $this->validate( $request, [
                'title' => 'required',
                'description' => 'required',
                'category' => 'required',
                'link' => 'required',
                'technology' => 'required'
            ]);
            $technology_type = ['backend', 'frontend', 'technology'];
            $technology = json_encode(array_combine($technology_type, $request->input('technology')));
            $portfolio = portfolios::find($id);
            $portfolio->title  = $request->input('title');
            $portfolio->description  = $request->input('description');
            $portfolio->created_by = session('user_id');
            $portfolio->link = $request->input('link');
            $portfolio->category = $request->input('category');
            $portfolio->technology = $technology;
            $portfolio->save();
            if(!empty($request->file('filename'))) {
                $images = $request->file("filename");
                foreach($images as $image){
                    $destinationPath = 'images/portfolios/';
                    $portfolioImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $portfolioImage);
                    $nameImage = "{$destinationPath}{$portfolioImage}";
                    $media = new media();
                    $media->type = "portfolios";
                    $media->link = $nameImage;
                    $media->rel_id = $id;
                    $media->save();
                }

            }
            \Cache::forget('portfolios');
            return redirect()->route('add-portfolio')->with('success', "portfolio added successfully!");
        } else{
            return redirect()->route('404-page');
        }
    }

    public function show(){
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.portfolios.all');
            else return redirect()->route('404-page');
        } else{
            return redirect()->route('404-page');
        }
    }

    public function destroy($id){
        portfolios::where('id', $id)->delete();
        media::where('type', 'portfolios')->where('rel_id', $id)->delete();
        \Cache::forget('portfolios');
        return redirect()->route('all-portfolio')->with('msg', "portfolio deleted succesfully!");
    }
}
