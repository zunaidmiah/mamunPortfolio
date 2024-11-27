<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class profileInfoController extends Controller
{
    // General Info add and delete functionality
    public function general(){
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.information.general');
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }

    public function general_info_db(Request $req){
        if(session('user_type')){
            if(session('user_type') == 'admin') {
                $user_id = session('user_id') ?? 0;
                $array_keys = array_keys($req->input());
                array_shift($array_keys);
                $array_values = array_values($req->input());
                array_shift($array_values);
                $total = count($array_keys);
                for($i = 0; $i < $total; $i++){
                    $arr = [
                        'user_key' => $array_keys[$i],
                        'user_value' => $array_values[$i],
                        'user_group' => 'general-info',
                        'user_id' => $user_id
                    ];
                    DB::table('user_metas')->updateOrInsert(
                        ['user_id' => $user_id, 'user_key' => $array_keys[$i]],
                        $arr
                    );
                }
                if(!empty($req->cv)) {
                    // Folder path to be flushed
                    $folder_path = "cv";
                    $files = glob($folder_path.'/*');
                    foreach($files as $file) {
                        if(is_file($file))

                            // Delete the given file
                            unlink($file);
                    }
                    $cv = $req->cv;
                    $destinationPath = 'cv/';
                    $cv_name = "cv_".date('YmdHis') . "." . $cv->getClientOriginalExtension();
                    $cv->move($destinationPath, $cv_name);
                    $nameCV = "{$destinationPath}{$cv_name}";
                    $arr = [
                        'user_key' => 'cv',
                        'user_value' => $nameCV,
                        'user_id' => $user_id,
                        'user_group' => 'general-info'
                    ];
                    DB::table('user_metas')->insert($arr);
                }
                \Cache::forget('general_info');
                return redirect()->route('general-info')->with('message', 'Data Inserted Successfully');
            }
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }
    // End general Info add and delete functionality


    // Social info add and delete functionality
    public function social(){
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.information.social');
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }

    public function social_info_db(Request $req){
        if(session('user_type')){
            if(session('user_type') == 'admin') {
                $user_id = session('user_id') ?? 0;
                $array_keys = array_keys($req->input());
                array_shift($array_keys);
                array_pop($array_keys);
                $array_values = array_values($req->input());
                array_shift($array_values);
                array_pop($array_values);
                $total = count($array_keys);
                for($i = 0; $i < $total; $i++){
                    $arr = [
                        'user_key' => $array_keys[$i],
                        'user_value' => $array_values[$i],
                        'user_group' => 'social-info',
                        'user_id' => $user_id
                    ];
                    DB::table('user_metas')->updateOrInsert(
                        ['user_id' => $user_id, 'user_key' => $array_keys[$i]],
                        $arr
                    );
                }
                \Cache::forget('social_info');
                return redirect()->route('social-info')->with('message', 'Data Inserted Successfully');
            }
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }
    // End social info add and delete functionality


    // website info add and delete functionality
    public function website(){
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.settings.website');
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }

    public function website_info_db(Request $req){
        if($req->input()){
            $user_id = session('user_id') ?? 0;
            $array_keys = array_keys($req->input());
            array_shift($array_keys);
            $array_values = array_values($req->input());
            array_shift($array_values);
            $total = count($array_keys);
            for($i = 0; $i < $total; $i++){
                $array = [
                    'option_key' => $array_keys[$i],
                    'option_value' => $array_values[$i] ?? null,
                    'option_group' => 'website_settings',
                    'created_by' => $user_id
                ];
                DB::table('options')->updateOrInsert(
                                                    ['option_key' => $array_keys[$i]],
                                                    $array
                                                );
            }
            if($req->file()) {
                $array_keys = array_keys($req->file());
                $array_values = array_values($req->file());
                $total = count($array_keys);
                for($i = 0; $i < $total; $i++){
                    $image = $req->file($array_keys[$i]);
                    $originalName = $image->getClientOriginalName();
                    $originalName = str_replace(" ", "", $originalName);
                    $justName = explode('.', $originalName)[0];
                    $destinationPath = 'images/website/';
                    $createNameImage = $justName ."-" . date('YmdHis') . "." . $image->getClientOriginalExtension();
                    $image->move($destinationPath, $createNameImage);
                    $nameImage = "{$destinationPath}{$createNameImage}";
                    $array = [
                        'option_key' => $array_keys[$i],
                        'option_value' => $nameImage,
                        'option_group' => 'website_settings',
                        'created_by' => $user_id
                    ];
                    DB::table('options')->updateOrInsert(
                                                        ['option_key' => $array_keys[$i]],
                                                        $array
                                                    );
                }
            }
            \Cache::forget('website_settings');
            \Cache::forget('home_page_image');
            \Cache::forget('blog_page_image');
            \Cache::forget('contact_page_image');
            \Cache::forget('about_page_image');
            \Cache::forget('portfolio_page_image');
            \Cache::forget('resume_page_image');
            return redirect('/sl-admin/website-setting')->with('message', "Website setting changed successfully");
        }else{
            return redirect()->back()->with('empty_message', 'Please insert validated information.');
        }
    }
    // End website info add and delete functionality




    // Template info add and delete functionality
    public function template(){
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.settings.template');
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }
    public function template_setting(Request $req){
        $array = [
            'option_key' => 'active_template',
            'option_value' => $req->input('template') ?? null,
            'option_group' => 'template_settings',
            'created_by' => session('user_id')
        ];
        $template = DB::table('options')->updateOrInsert(
                                            ['option_key' => 'active_template'],
                                            $array
                                        );
        \Cache::forget('active_template');
        return redirect()->back()->with('message', "Template changed successfully");
    }
    // End Template info add and delete functionality



    // Institution Information add and delete functionality
    public function institution(){
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.information.education');
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }
    public function institution_info(Request $req){
        if(!empty($req)){
            $datas = $req->all();
            array_shift($datas);
            $field = array_keys($datas);
            $total = count($datas['name']);
            $institutions = DB::table('user_metas')->where('user_key', 'institution_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
            if($institutions){
                $institutions = json_decode($institutions, true);
            } else{
                $institutions = [];
            }
            if($total != 0){
                for($i = 0; $i<$total; $i++){
                    $values = [];
                    $values[] = $datas['name'][$i];
                    $values[] = $datas['location'][$i];
                    $values[] = $datas['session'][$i];
                    $values[] = $datas['degree'][$i];
                    if(!empty($datas['filename'][$i])) {
                        $image = $req->file("filename")[$i];
                        $destinationPath = 'images/institution/';
                        $originalName = $image->getClientOriginalName();
                        $originalName = str_replace(" ", "", $originalName);
                        $justName = explode('.', $originalName)[0];
                        $portfolioImage = $justName . date('YmdHis') . "." . $image->getClientOriginalExtension();
                        $image->move($destinationPath, $portfolioImage);
                        $nameImage = "{$destinationPath}{$portfolioImage}";
                        $values[] = $nameImage;


                    }  else $values[] = null;
                    $institutions[] = array_combine($field, $values);

                }

                $array = [
                    'user_key' => 'institution_info',
                    'user_value' => json_encode($institutions),
                    'user_group' => 'institutions',
                    'user_id' => session('user_id')
                ];
                DB::table('user_metas')->updateOrInsert(
                                                    ['user_key' => 'institution_info'],
                                                    $array
                                                );
                \Cache::forget('institutions');
                return redirect()->back()->with('message', "Institutions Info saved successfully");
            }
        } else return redirect()->back()->with('empty_message', 'Please insert validated information.');


    }
    public function institution_destroy($id){
        $institutions = DB::table('user_metas')->where('user_key', 'institution_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
        if($institutions){
            $institutions = json_decode($institutions, true);
            foreach($institutions as $key => $item){
                if($key == $id){
                    unset($institutions[$key]);
                }
            }
        }
        $array = [
            'user_key' => 'institution_info',
            'user_value' => json_encode($institutions),
            'user_group' => 'institutions',
            'user_id' => session('user_id')
        ];
        DB::table('user_metas')->updateOrInsert(
                                            ['user_key' => 'institution_info'],
                                            $array
                                        );
        \Cache::forget('institutions');
        return true;
    }
    // End Institution information add and delete functionality



    // Pricing information add and delete functionality
    public function pricing(){
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.information.pricing');
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }
    public function pricing_info(Request $req){
        if(!empty($req)){
            $datas = $req->all();
            array_shift($datas);
            $field = array_keys($datas);
            $total = count($datas['name']);
            $pricing = DB::table('user_metas')->where('user_key', 'pricing_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
            if($pricing){
                $pricing = json_decode($pricing, true);
            } else{
                $pricing = [];
            }
            if($total != 0){
                for($i = 0; $i<$total; $i++){
                    $values = [];
                    $values[] = $datas['name'][$i];
                    $values[] = $datas['type'][$i];
                    $values[] = $datas['features'][$i];
                    $pricing[] = array_combine($field, $values);

                }

                $array = [
                    'user_key' => 'pricing_info',
                    'user_value' => json_encode($pricing),
                    'user_group' => 'pricing',
                    'user_id' => session('user_id')
                ];
                DB::table('user_metas')->updateOrInsert(
                                                    ['user_key' => 'pricing_info'],
                                                    $array
                                                );
                \Cache::forget('pricing');
                return redirect()->back()->with('message', "Pricing Info saved successfully");
            }
        } else return redirect()->back()->with('empty_message', 'Please insert validated information.');


    }
    public function pricing_destroy($id){
        $pricing = DB::table('user_metas')->where('user_key', 'pricing_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
        if($pricing){
            $pricing = json_decode($pricing, true);
            foreach($pricing as $key => $item){
                if($key == $id){
                    unset($pricing[$key]);
                }
            }
        }
        $array = [
            'user_key' => 'pricing_info',
            'user_value' => json_encode($pricing),
            'user_group' => 'pricing',
            'user_id' => session('user_id')
        ];
        DB::table('user_metas')->updateOrInsert(
                                            ['user_key' => 'pricing_info'],
                                            $array
                                        );
        \Cache::forget('pricing');
        return true;
    }
    // End pricing information add and delete functionality



    // Working information add and delete functionality
    public function working(){
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.information.working');
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }
    public function working_info(Request $req){
        if(!empty($req)){
            $datas = $req->all();
            array_shift($datas);
            $field = array_keys($datas);
            $total = count($datas['name']);
            $working = DB::table('user_metas')->where('user_key', 'working_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
            if($working){
                $working = json_decode($working, true);
            } else{
                $working = [];
            }
            if($total != 0){
                for($i = 0; $i<$total; $i++){
                    $values = [];
                    $values[] = $datas['name'][$i];
                    $values[] = $datas['time'][$i];
                    $values[] = $datas['c_name'][$i];
                    $values[] = $datas['description'][$i];
                    $working[] = array_combine($field, $values);

                }

                $array = [
                    'user_key' => 'working_info',
                    'user_value' => json_encode($working),
                    'user_group' => 'working',
                    'user_id' => session('user_id')
                ];
                DB::table('user_metas')->updateOrInsert(
                                                    ['user_key' => 'working_info'],
                                                    $array
                                                );
                \Cache::forget('working');
                return redirect()->back()->with('message', "Working Experinece Info saved successfully");
            }
        } else return redirect()->back()->with('empty_message', 'Please insert validated information.');


    }
    public function working_destroy($id){
        $working = DB::table('user_metas')->where('user_key', 'working_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
        if($working){
            $working = json_decode($working, true);
            foreach($working as $key => $item){
                if($key == $id){
                    unset($working[$key]);
                }
            }
        }
        $array = [
            'user_key' => 'working_info',
            'user_value' => json_encode($working),
            'user_group' => 'working',
            'user_id' => session('user_id')
        ];
        DB::table('user_metas')->updateOrInsert(
                                            ['user_key' => 'working_info'],
                                            $array
                                        );
        \Cache::forget('working');
        return true;
    }
    // End Working information add and delete functionality



    // Services add and delete functionality
    public function service(){
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.information.quality');
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }
    public function service_info(Request $req){
        if(!empty($req)){
            $datas = $req->all();
            array_shift($datas);
            $field = array_keys($datas);
            $total = count($datas['name']);
            $service = DB::table('user_metas')->where('user_key', 'service_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
            if($service){
                $service = json_decode($service, true);
            } else{
                $service = [];
            }
            if($total != 0){
                for($i = 0; $i<$total; $i++){
                    $values = [];
                    $values[] = $datas['name'][$i];
                    $values[] = $datas['description'][$i];
                    $file = $datas['image'][$i];
                    $filename = $file->getClientOriginalName();
                    $path = public_path('uploads/files');
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $file->move($path, $filename);
                
                    $values[] = 'uploads/files/'.$filename;
                    $service[] = array_combine($field, $values);

                }

                $array = [
                    'user_key' => 'service_info',
                    'user_value' => json_encode($service),
                    'user_group' => 'service',
                    'user_id' => session('user_id')
                ];
                DB::table('user_metas')->updateOrInsert(
                                                    ['user_key' => 'service_info'],
                                                    $array
                                                );
                \Cache::forget('service');
                return redirect()->back()->with('message', "Service Info saved successfully");
            }
        } else return redirect()->back()->with('empty_message', 'Please insert validated information.');


    }
    public function service_destroy($id){
        $service = DB::table('user_metas')->where('user_key', 'service_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
        if($service){
            $service = json_decode($service, true);
            foreach($service as $key => $item){
                if($key == $id){
                    unset($service[$key]);
                }
            }
        }
        $array = [
            'user_key' => 'service_info',
            'user_value' => json_encode($service),
            'user_group' => 'service',
            'user_id' => session('user_id')
        ];
        DB::table('user_metas')->updateOrInsert(
                                            ['user_key' => 'service_info'],
                                            $array
                                        );
        \Cache::forget('service');
        return true;
    }
    // End Services add and delete functionality

    // Choose me add and delete functionality
    public function chooseMe(){
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.information.choose');
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }
    public function choose_info(Request $req){
        if(!empty($req)){
            $datas = $req->all();
            array_shift($datas);
            $field = array_keys($datas);
            $total = count($datas['name']);
            $service = DB::table('user_metas')->where('user_key', 'choose_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
            if($service){
                $service = json_decode($service, true);
            } else{
                $service = [];
            }
            if($total != 0){
                for($i = 0; $i<$total; $i++){
                    $values = [];
                    $values[] = $datas['name'][$i];
                    $values[] = $datas['description'][$i];
                    $service[] = array_combine($field, $values);

                }

                $array = [
                    'user_key' => 'choose_info',
                    'user_value' => json_encode($service),
                    'user_group' => 'choose',
                    'user_id' => session('user_id')
                ];
                DB::table('user_metas')->updateOrInsert(
                                                    ['user_key' => 'choose_info'],
                                                    $array
                                                );
                \Cache::forget('choose');
                return redirect()->back()->with('message', "Choose Info saved successfully");
            }
        } else return redirect()->back()->with('empty_message', 'Please insert validated information.');


    }
    public function choose_destroy($id){
        $service = DB::table('user_metas')->where('user_key', 'choose_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
        if($service){
            $service = json_decode($service, true);
            foreach($service as $key => $item){
                if($key == $id){
                    unset($service[$key]);
                }
            }
        }
        $array = [
            'user_key' => 'choose_info',
            'user_value' => json_encode($service),
            'user_group' => 'choose',
            'user_id' => session('user_id')
        ];
        DB::table('user_metas')->updateOrInsert(
                                            ['user_key' => 'choose_info'],
                                            $array
                                        );
        \Cache::forget('choose');
        return true;
    }
    // End choose me add and delete functionality


    // FAQ add and delete functionality
    public function faq(){
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.information.faq');
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }
    public function faq_info(Request $req){
        if(!empty($req)){
            $datas = $req->all();
            array_shift($datas);
            $field = array_keys($datas);
            $total = count($datas['question']);
            $faq = DB::table('user_metas')->where('user_key', 'faq_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
            if($faq){
                $faq = json_decode($faq, true);
            } else{
                $faq = [];
            }
            if($total != 0){
                for($i = 0; $i<$total; $i++){
                    $values = [];
                    $values[] = $datas['question'][$i];
                    $values[] = $datas['answer'][$i];
                    $faq[] = array_combine($field, $values);

                }

                $array = [
                    'user_key' => 'faq_info',
                    'user_value' => json_encode($faq),
                    'user_group' => 'faq',
                    'user_id' => session('user_id')
                ];
                DB::table('user_metas')->updateOrInsert(
                                                    ['user_key' => 'faq_info'],
                                                    $array
                                                );
                \Cache::forget('faq');
                return redirect()->back()->with('message', "FAQ Info saved successfully");
            }
        } else return redirect()->back()->with('empty_message', 'Please insert validated information.');


    }
    public function faq_destroy($id){
        $faq = DB::table('user_metas')->where('user_key', 'faq_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
        if($faq){
            $faq = json_decode($faq, true);
            foreach($faq as $key => $item){
                if($key == $id){
                    unset($faq[$key]);
                }
            }
        }
        $array = [
            'user_key' => 'faq_info',
            'user_value' => json_encode($faq),
            'user_group' => 'faq',
            'user_id' => session('user_id')
        ];
        DB::table('user_metas')->updateOrInsert(
                                            ['user_key' => 'faq_info'],
                                            $array
                                        );
        \Cache::forget('faq');
        return true;
    }
    // End FAQ add and delete functionality


    // Awards add and delete functionality
    public function award(){
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.information.award');
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }
    public function award_info(Request $req){
        if(!empty($req)){
            $datas = $req->all();
            array_shift($datas);
            $field = array_keys($datas);
            $total = count($datas['name']);
            $award = DB::table('user_metas')->where('user_key', 'award_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
            if($award){
                $award = json_decode($award, true);
            } else{
                $award = [];
            }
            if($total != 0){
                for($i = 0; $i<$total; $i++){
                    $values = [];
                    $values[] = $datas['name'][$i];
                    $values[] = $datas['date'][$i];
                    $values[] = $datas['provide'][$i];
                    $values[] = $datas['description'][$i];
                    $values[] = $datas['reference'][$i];
                    $award[] = array_combine($field, $values);

                }

                $array = [
                    'user_key' => 'award_info',
                    'user_value' => json_encode($award),
                    'user_group' => 'award',
                    'user_id' => session('user_id')
                ];
                DB::table('user_metas')->updateOrInsert(
                                                    ['user_key' => 'award_info'],
                                                    $array
                                                );
                \Cache::forget('award');
                return redirect()->back()->with('message', "Award Info saved successfully");
            }
        } else return redirect()->back()->with('empty_message', 'Please insert validated information.');


    }
    public function award_destroy($id){
        $award = DB::table('user_metas')->where('user_key', 'award_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
        if($award){
            $award = json_decode($award, true);
            foreach($award as $key => $item){
                if($key == $id){
                    unset($award[$key]);
                }
            }
        }
        $array = [
            'user_key' => 'award_info',
            'user_value' => json_encode($award),
            'user_group' => 'award',
            'user_id' => session('user_id')
        ];
        DB::table('user_metas')->updateOrInsert(
                                            ['user_key' => 'award_info'],
                                            $array
                                        );
        \Cache::forget('award');
        return true;
    }
    // End awards add and delete functionality


    // contributions add and delete functionality
    public function contribution(){
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.information.contribution');
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }
    public function contribution_info(Request $req){
        if(!empty($req)){
            $datas = $req->all();
            array_shift($datas);
            $field = array_keys($datas);
            $total = count($datas['name']);
            $contribution = DB::table('user_metas')->where('user_key', 'contribution_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
            if($contribution){
                $contribution = json_decode($contribution, true);
            } else{
                $contribution = [];
            }
            if($total != 0){
                for($i = 0; $i<$total; $i++){
                    $values = [];
                    $values[] = $datas['name'][$i];
                    $values[] = $datas['date'][$i];
                    $values[] = $datas['description'][$i];
                    $values[] = $datas['reference'][$i];
                    $contribution[] = array_combine($field, $values);

                }

                $array = [
                    'user_key' => 'contribution_info',
                    'user_value' => json_encode($contribution),
                    'user_group' => 'contribution',
                    'user_id' => session('user_id')
                ];
                DB::table('user_metas')->updateOrInsert(
                                                    ['user_key' => 'contribution_info'],
                                                    $array
                                                );
                \Cache::forget('contribution');
                return redirect()->back()->with('message', "Contribution Info saved successfully");
            }
        } else return redirect()->back()->with('empty_message', 'Please insert validated information.');


    }
    public function contribution_destroy($id){
        $contribution = DB::table('user_metas')->where('user_key', 'contribution_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
        if($contribution){
            $contribution = json_decode($contribution, true);
            foreach($contribution as $key => $item){
                if($key == $id){
                    unset($contribution[$key]);
                }
            }
        }
        $array = [
            'user_key' => 'contribution_info',
            'user_value' => json_encode($contribution),
            'user_group' => 'contribution',
            'user_id' => session('user_id')
        ];
        DB::table('user_metas')->updateOrInsert(
                                            ['user_key' => 'contribution_info'],
                                            $array
                                        );
        \Cache::forget('contribution');
        return true;
    }
    // End contribution add and delete functionality



    // Skills add and delete functionality
    public function skills(){
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.information.skills');
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }
    public function skills_info(Request $req){
        if(!empty($req)){
            $datas = $req->all();
            array_shift($datas);
            $field = array_keys($datas);
            $total = count($datas['name']);
            $skills = DB::table('user_metas')->where('user_key', 'skills_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
            if($skills){
                $skills = json_decode($skills, true);
            } else{
                $skills = [];
            }
            if($total != 0){
                for($i = 0; $i<$total; $i++){
                    $values = [];
                    $values[] = $datas['name'][$i];
                    $values[] = $datas['level'][$i];
                    $values[] = $datas['percentage'][$i];
                    $skills[] = array_combine($field, $values);

                }

                $array = [
                    'user_key' => 'skills_info',
                    'user_value' => json_encode($skills),
                    'user_group' => 'skills',
                    'user_id' => session('user_id')
                ];
                DB::table('user_metas')->updateOrInsert(
                                                    ['user_key' => 'skills_info'],
                                                    $array
                                                );
                \Cache::forget('skills');
                return redirect()->back()->with('message', "Skills Info saved successfully");
            }
        } else return redirect()->back()->with('empty_message', 'Please insert validated information.');


    }
    public function skills_destroy($id){
        $skills = DB::table('user_metas')->where('user_key', 'skills_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
        if($skills){
            $skills = json_decode($skills, true);
            foreach($skills as $key => $item){
                if($key == $id){
                    unset($skills[$key]);
                }
            }
        }
        $array = [
            'user_key' => 'skills_info',
            'user_value' => json_encode($skills),
            'user_group' => 'skills',
            'user_id' => session('user_id')
        ];
        DB::table('user_metas')->updateOrInsert(
                                            ['user_key' => 'skills_info'],
                                            $array
                                        );
        \Cache::forget('skills');
        return true;
    }
    // End Skills add and delete functionality



    // Team add and delete functionality
    public function team(){
        if(session('user_type')){
            if(session('user_type') == 'admin') return view('admin.information.team');
            else return redirect()->route('login');
        } else{
            return redirect()->route('login');
        }
    }
    public function team_info(Request $req){
        if(!empty($req)){
            $datas = $req->all();
            array_shift($datas);
            $field = array_keys($datas);
            $total = count($datas['name']);
            $teams = DB::table('user_metas')->where('user_key', 'team_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
            if($teams){
                $teams = json_decode($teams, true);
            } else{
                $teams = [];
            }
            if($total != 0){
                for($i = 0; $i<$total; $i++){
                    $values = [];
                    $values[] = $datas['name'][$i];
                    $values[] = $datas['designation'][$i];
                    if(!empty($datas['filename'][$i])) {
                        $image = $req->file("filename")[$i];
                        $destinationPath = 'images/team/';
                        $originalName = $image->getClientOriginalName();
                        $originalName = str_replace(" ", "", $originalName);
                        $justName = explode('.', $originalName)[0];
                        $team = $justName . date('YmdHis') . "." . $image->getClientOriginalExtension();
                        $image->move($destinationPath, $team);
                        $nameImage = "{$destinationPath}{$team}";
                        $values[] = $nameImage;


                    }  else $values[] = null;
                    $teams[] = array_combine($field, $values);

                }

                $array = [
                    'user_key' => 'team_info',
                    'user_value' => json_encode($teams),
                    'user_group' => 'teams',
                    'user_id' => session('user_id')
                ];
                DB::table('user_metas')->updateOrInsert(
                                                    ['user_key' => 'team_info'],
                                                    $array
                                                );
                \Cache::forget('teams');
                return redirect()->back()->with('message', "Member Info saved successfully");
            }
        } else return redirect()->back()->with('empty_message', 'Please insert validated information.');


    }
    public function team_destroy($id){
        $teams = DB::table('user_metas')->where('user_key', 'team_info')->where("user_id", session('user_id'))->pluck('user_value')->first();
        if($teams){
            $teams = json_decode($teams, true);
            foreach($teams as $key => $item){
                if($key == $id){
                    unset($teams[$key]);
                }
            }
        }
        $array = [
            'user_key' => 'team_info',
            'user_value' => json_encode($teams),
            'user_group' => 'teams',
            'user_id' => session('user_id')
        ];
        DB::table('user_metas')->updateOrInsert(
                                            ['user_key' => 'team_info'],
                                            $array
                                        );
        \Cache::forget('teams');
        return true;
    }
    // End Team add and delete functionality
}
