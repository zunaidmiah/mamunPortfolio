<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\comments;

class FrontEndController extends Controller
{
    public function index(){
        $data = $this->get_data();
        $data['page'] = 'home';
        return view('user.templates.BasicPortfolio.index')->with('data', $data);
    }

    // blog page
    public function blog(){
        $template_dir = get_active_template();
        $data['blogs'] = $this->get_blogs();
        $data['website_settings'] = $this->get_website_data();
        $data['social_info'] = $this->get_social_data();
        $data['personal_info'] = $this->get_personal_data();
        return view('user.templates.BasicPortfolio.blog')->with('data', $data);
    }

    // blog_details page
    public function blog_details($url){
        $data['website_settings'] = $this->get_website_data();
        $data['social_info'] = $this->get_social_data();
        $data['blog'] = $this->get_blog_by_url($url);
        if(isset($data['blog']['id'])){
            $blog_id = $data['blog']['id'];
            $data['blog_category'] = $this->get_blog_category($blog_id);
            $data['blog_images'] = $this->get_blog_images($blog_id);
            $data['related_blogs'] = $this->get_related_blog($blog_id);
            $data['blog_comments'] = $this->get_blog_comments($blog_id);
        }
        $data['personal_info'] = $this->get_personal_data();
        return view('user.templates.BasicPortfolio.blog-details')->with('data', $data);
    }

    // get data set for homepage
    public function get_data(){
        $data = [];
        $data['service'] = $this->get_service_data();
        $data['portfolios'] = $this->get_portfolios_data();
        $data['working_experience'] = $this->get_working_experience_data();
        $data['career_achievements'] = $this->get_career_achievements_data();
        $data['skills'] = $this->get_skills_data();
        $data['teams'] = $this->get_team_data();
        $data['pricing'] = $this->get_pricing_data();
        $data['personal_info'] = $this->get_personal_data();
        $data['blogs'] = $this->get_blogs();
        $data['social_info'] = $this->get_social_data();
        $data['website_settings'] = $this->get_website_data();
        return $data;
    }

    // get service data
    public function get_service_data(){
        $service =  \Cache::remember('service', 1000, function () {
            return DB::table('user_metas')->where('user_group', 'service')->pluck('user_value')->toArray();
        });
        if($service){
            return json_decode($service[0]);
        }
    }


    // get all portfolios
    public function get_portfolios_data(){
        $portfolios = \Cache::remember('portfolios', 1000, function () {
            return DB::table('portfolios')->where('is_hidden', 0)->where('is_deleted', 0)->get()->toArray();
        });
        if($portfolios){
            return $portfolios;
        }
    }

    // get working_experience data
    public function get_working_experience_data(){
        $working_experience = \Cache::remember('working', 1000, function () {
            return DB::table('user_metas')->where('user_group', 'working')->pluck('user_value')->toArray();
        });
        if($working_experience){
            return json_decode($working_experience[0]);
        }
    }

    // get career_achievements_data data
    public function get_career_achievements_data(){
        $array = [];
        $award = \Cache::remember('award', 1000, function () {
            return DB::table('user_metas')->where('user_group', 'award')->pluck('user_value')->toArray();
        });
        if($award){
            $array['award'] = json_decode($award[0]);
        }
        $contribution = \Cache::remember('contribution', 1000, function () {
            return DB::table('user_metas')->where('user_group', 'contribution')->pluck('user_value')->toArray();
        });
        if($contribution){
            $array['contribution'] = json_decode($contribution[0]);
        }
        return empty($array) ? null : $array;
    }

    // get skills data
    public function get_skills_data(){
        $skills = \Cache::remember('skills', 1000, function () {
            return DB::table('user_metas')->where('user_group', 'skills')->pluck('user_value')->toArray();
        });
        if($skills){
            return json_decode($skills[0]);
        }
    }

    // get team data
    public function get_team_data(){
        $teams = \Cache::remember('teams', 1000, function () {
            return DB::table('user_metas')->where('user_group', 'teams')->pluck('user_value')->toArray();
        });
        if($teams){
            return json_decode($teams[0]);
        }
    }

    // get pricing data
    public function get_pricing_data(){
        $pricing = \Cache::remember('pricing', 1000, function () {
            return DB::table('user_metas')->where('user_group', 'pricing')->pluck('user_value')->toArray();
        });
        if($pricing){
            return json_decode($pricing[0]);
        }
    }

    // get personal information
    public function get_personal_data(){
        $info = \Cache::remember('general_info', 1000, function () {
            return DB::table('user_metas')->where('user_group', 'general-info')->pluck('user_value', 'user_key')->toArray();
        });
        if($info){
            return $info;
        }
    }

    // get all blogs
    public function get_blogs($pagination =  false){
        $blogs = \Cache::remember('blogs', 1000, function () {
            return DB::table('blogs')->where('is_hidden', 0)->where('is_deleted', 0)->orderby('id', 'desc')->paginate(6);
        });
        if($blogs){
            return $blogs;
        }
    }

    // get social information
    public function get_social_data(){
        $socials_info = \Cache::remember('social_info', 1000, function () {
            return DB::table('user_metas')->whereNotNull('user_value')->where('user_group', 'social-info')->pluck('user_value', 'user_key')->toArray();
        });
        if($socials_info){
            return $socials_info;
        }
    }

    // get Website setting
    public function get_website_data(){
        $website_settings = \Cache::remember('website_settings', 1000, function () {
            return DB::table('options')->where('option_group', 'website_settings')->pluck('option_value', 'option_key')->toArray();
        });
        if($website_settings){
            return $website_settings;
        }
    }

    // get Website setting
    public function get_institution_info(){
        $institution_info = \Cache::remember('institutions', 1000, function () {
            return DB::table('user_metas')->where('user_group', 'institutions')->pluck('user_value')->toArray();
        });
        if($institution_info){
            return json_decode($institution_info[0], true);
        }
    }

    // get recommendation setting
    public function get_recommendation_data(){
        $recommendation = \Cache::remember('recommendation', 1000, function () {
            return DB::table('recomendations')->where('is_hidden', 0)->get()->toArray();
        });
        if($recommendation){
            return $recommendation;
        }
    }

    // get portfolio categories
    public function get_portfolio_categories(){
        $categories = DB::table('categories')->where('type', 'portfolio')->pluck('name', 'id')->where('is_hidden', 0)->where('is_deleted', 0)->toArray();
        if($categories){
            return $categories;
        }
    }

    // get blog by url
    public function get_blog_by_url($url){
        $blog = DB::table('blogs')->where('title', 'LIKE' ,urldecode($url))->where('is_hidden', 0)->where('is_deleted', 0)->first();
        if($blog){
            return collect($blog)->toArray();
        }
    }

    // get blog category
    public function get_blog_category($id){
        $category = DB::table('categories')
                    ->join('category_relations', 'category_relations.cat_id', '=', 'categories.id')
                    ->where('category_relations.rel_id', $id)
                    ->where('category_relations.type', 'blog')
                    ->select('categories.name', 'categories.id')
                    ->pluck('categories.name', 'categories.id')
                    ->toArray();
        if($category){
            return $category;
        }
    }

    // get blog category
    public function get_blog_images($id){
        $images = DB::table('media')
                    ->where('rel_id', $id)
                    ->where('type', 'blogs')
                    ->pluck('link')
                    ->toArray();
        if($images){
            return $images;
        }
        return [];
    }

    // get related blog
    public function get_related_blog($id){
        $blogs = DB::table('blogs')
                    ->where('id', '<>', $id)
                    ->where('is_hidden', 0)
                    ->where('is_deleted', 0)
                    ->orderBy('id', 'desc')
                    ->limit(3)
                    ->select('id', 'title', 'created_at')
                    ->get();
        if($blogs){
            return collect($blogs)->toArray();
        }
    }

    // get related blog
    public function get_blog_comments($id){
        $comments = DB::table('comments')
                    ->where('rel_id', $id)
                    ->where('type', 'blog')
                    ->where('is_hidden', 0)
                    ->where('is_deleted', 0)
                    ->where('is_pending', 0)
                    ->orderBy('id', 'desc')
                    ->get();
        if($comments){
            return collect($comments)->toArray();
        }
    }

    // get portfolio by url
    public function get_portfolio_by_url($url){
        $portfolios = DB::table('portfolios')->where('title', 'LIKE' ,urldecode($url))->where('is_hidden', 0)->where('is_deleted', 0)->first();
        if($portfolios){
            return collect($portfolios)->toArray();
        }
    }

    // get portfolio category
    public function get_portfolio_category($id){
        $category = DB::table('categories')
                    ->join('category_relations', 'category_relations.cat_id', '=', 'categories.id')
                    ->where('category_relations.rel_id', $id)
                    ->where('category_relations.type', 'blog')
                    ->select('categories.name', 'categories.id')
                    ->pluck('categories.name', 'categories.id')
                    ->toArray();
        if($category){
            return $category;
        }
    }

    // get portfolio category
    public function get_portfolio_images($id){
        $images = DB::table('media')
                    ->where('rel_id', $id)
                    ->where('type', 'portfolios')
                    ->pluck('link')
                    ->toArray();
        if($images){
            return $images;
        }
    }

    // get related portfolio
    public function get_related_portfolio($id){
        $portfolios = DB::table('portfolios')
                    ->where('id', '<>', $id)
                    ->where('is_hidden', 0)
                    ->where('is_deleted', 0)
                    ->orderBy('id', 'desc')
                    ->limit(3)
                    ->select('id', 'title', 'created_at')
                    ->get();
        if($portfolios){
            return collect($portfolios)->toArray();
        }
    }

    //add comment to DB
    public function comment_db(Request $request){
        $data = [];
        if(isset($_POST['name'])){
            $data['name'] = $_POST['name'];
        }
        if(isset($_POST['email'])){
            $data['email'] = $_POST['email'];
        }
        if(isset($_POST['comment'])){
            $data['comment'] = $_POST['comment'];
        }
        if(isset($_POST['rel_id'])){
            $data['rel_id'] = $_POST['rel_id'];
        }
        try {
            $comments = new comments();
            $comments->name = $data['name'];
            $comments->email = $data['email'];
            $comments->comment = $data['comment'];
            $comments->rel_id = $data['rel_id'];
            $comments->is_pending = 0;
            $comments->type = 'blog';
            $comments->save();
            return true;

        } catch (\Throwable $th) {
            return false;
        }

        return false;
    }


}
