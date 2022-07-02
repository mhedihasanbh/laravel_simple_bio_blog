<?php
use Illuminate\Support\Str;
use App\Models\WebsiteSetting as appModel;
use App\Models\SocialMedia;
use App\Models\Category;
use App\Models\singlePost;

 if(!function_exists('soial_data')){
    function soial_data($name){
        $data = SocialMedia::all();
        $getData = $data->where('name', $name)->first();
        return ($getData)?$getData->value:NULL;
    }
 }
 if (!function_exists('psapp')) {
    function psapp()
    {
        // $app =App::take(1)->first();
         return appModel::first();
         
        
        }
}

if(!function_exists('category')){
    function category(){
        $category=Category::limit(2)->get();
        return $category;
    }
 }
 
 if(!function_exists('summaryLimit')){
    function summaryLimit(){
        $singlePosts=singlePost::latest()->paginate(15);
        
        return Str::words($singlePosts, 100, '...');
    }
 }

;
 
?>