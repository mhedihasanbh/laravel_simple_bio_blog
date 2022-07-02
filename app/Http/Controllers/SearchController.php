<?php

namespace App\Http\Controllers;
use App\Models\singlePost;
use App\Models\Category;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $this->validate($request,[
            'search'=>'required',
            
         ]);
       $search_text=$request->search;
       
      
                
                $categorys=Category::orderBy('id','asc')->limit(2)->get();
                $singlePosts =singlePost::where('post_tittle','LIKE','%'. $search_text.'%')
                ->orWhere('summary','LIKE','%'.$search_text.'%')
                ->get();
                $popularPosts = singlePost::get()->sortByDesc('view_count');
                
                
                return view('home.search',[
                  'categorys'=>$categorys,
                  'singlePosts'=>$singlePosts,
                  'popularPosts'=>$popularPosts
                  
            
                ]);
    }
}
