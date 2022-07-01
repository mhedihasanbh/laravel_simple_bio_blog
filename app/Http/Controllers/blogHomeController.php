<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\singlePost;

use Illuminate\Http\Request;

class blogHomeController extends Controller
{
  public function index(){
   
    // $singlePosts= singlePost::all();
    $singlePosts=singlePost::latest()->paginate(15);
    $categorys=Category::orderBy('id','asc')->limit(2)->get();
    $popularPosts = singlePost::get()->sortByDesc('view_count');
    
    
    return view('home.index',[
      'categorys'=>$categorys,
      'singlePosts'=>$singlePosts,
      'popularPosts'=>$popularPosts
      

    ]);
  } 
}
