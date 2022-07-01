<?php
use App\Models\WebsiteSetting as appModel;
use App\Models\SocialMedia;

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
 
?>