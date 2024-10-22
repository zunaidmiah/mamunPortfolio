<?php

namespace App\Http\Controllers;

use App\Models\recomendations;
use Illuminate\Http\Request;
use App\Models\media;

class RecomendationsController extends Controller
{
  
    public function index()
    {
        if(session('user_type')){
            if(session('user_type') == 'admin'){
                return view('admin.recommendation.add');
            }
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }

    
    public function store(Request $request)
    {
        if(isset($request) and !empty($request->all())){


            $this->validate( $request, [
                'name' => 'required',
                'title' => 'required',
                'message' => 'required'
            ]);
            $recomendation = new recomendations();
            $recomendation->name  = $request->input('name');
            $recomendation->title  = $request->input('title');
            $recomendation->message  = $request->input('message');
            $recomendation->star  = $request->input('star');
            $recomendation->save();
            $id = $recomendation->id;
            if(!empty($request->file('filename'))) {
                $image = $request->file("filename");
                $destinationPath = 'images/recommendation/';
                $originalName = $image->getClientOriginalName();
                $originalName = str_replace(" ", "", $originalName);
                $justName = explode('.', $originalName)[0];
                $recommendationImage = $justName . date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $recommendationImage);
                $nameImage = "{$destinationPath}{$recommendationImage}";
                $media = new media();
                $media->type = "recommendation";
                $media->link = $nameImage;
                $media->rel_id = $id;
                $media->save();
            }
            \Cache::forget('recommendation');
            return redirect()->route('add-recommendation')->with('success', "recommendation added successfully!");
        } else{
            return redirect()->route('404-page');
        }
    }

    
    public function show()
    {
        if(session('user_type')){
            if(session('user_type') == 'admin'or session('user_type') == 'editor') return view('admin.recommendation.all');
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }

    
    public function edit(recomendations $recomendations)
    {
        //
    }

    
    public function update(Request $request,$id)
    {
        if(session('user_type')){
            if(session('user_type') == 'admin'or session('user_type') == 'editor') {
                $recomendation = recomendations::find($id);
                $recomendation->name  = $request->input('name');
                $recomendation->title  = $request->input('title');
                $recomendation->message  = $request->input('message');
                $recomendation->star  = $request->input('star');
                $recomendation->save();
                if(!empty($request->file('filename'))) {
                    $image = $request->file("filename");
                    $destinationPath = 'images/recommendation/';
                    $originalName = $image->getClientOriginalName();
                    $originalName = str_replace(" ", "", $originalName);
                    $justName = explode('.', $originalName)[0];
                    $recommendationImage = $justName . date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $recommendationImage);
                    $nameImage = "{$destinationPath}{$recommendationImage}";
                    media::where('type', 'recommendation')->where('rel_id', $id)->delete();
                    $media = new media();
                    $media->type = "recommendation";
                    $media->link = $nameImage;
                    $media->rel_id = $id;
                    $media->save();
                }
                \Cache::forget('recommendation');
                return redirect()->route('all-recommendation')->with('success', "recommendation updated successfully!");
            }
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }

    public function destroy($id)
    {
        if(session('user_type')){
            if(session('user_type') == 'admin'or session('user_type') == 'editor') {
                recomendations::where('id', $id)->delete();
                media::where('type', 'recommendation')->where('rel_id', $id)->delete();
                return true;
            }
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }
}
