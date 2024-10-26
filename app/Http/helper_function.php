<?php

function category_print($items, $str = '')
{
    foreach($items as $item){

        $child = DB::table('categories')->where('parent', $item->id)->get();
        if(count($child) > 0){
            category_print($child, $str);
        }
    }
    $str .= '</ul';
    return $str;
}

function get_username(){
    $name = \Cache::rememberForever('username', function () {
        return DB::table('users')->pluck('name')->first();
    });
    return $name;
}


function category_name($id){
    $all_categories = \Cache::remember('all_categories', 100, function () {
        return DB::table('categories')->select('id', 'name')->pluck('name', 'id')->toArray();
    });
    if(array_key_exists($id, $all_categories)){
        return $all_categories[$id];
    }else{
        return DB::table('categories')->where('id', $id)->pluck('name')->first();
    }
}

function get_active_template(){
    return \Cache::remember('active_template', 100, function () {
        $active_template = DB::table('options')->where('option_group', 'template_settings')->where('option_key', 'active_template')->pluck('option_value')->toArray();
        if(is_array($active_template) and !empty($active_template)){
            return array_pop($active_template);
        }
    });
}

function get_media_first($id, $type){
    $all_medias = \Cache::remember('all_medias', 100, function () {
        return DB::table('media')->select('link', 'type', 'rel_id')->get();
    });
    $link = collect($all_medias)->where('type', $type)->where('rel_id', $id)->pluck('link')->toArray();
    if(!empty($link) and is_array($link)){
        return array_shift($link);
    }else{
        return DB::table('media')->where('type', $type)->where('rel_id', $id)->first()->link ?? false;
    }
}

function get_blog_categories($id){
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
    return [];
}
