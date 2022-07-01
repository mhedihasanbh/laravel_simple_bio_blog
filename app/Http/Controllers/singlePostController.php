<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\singlePost;
use App\Models\Category;

class singlePostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys=Category::all();
        return view('dashboard.singlePost',['categorys'=>$categorys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        $singlePosts=singlePost::all();
        return view('dashboard.singlePostView',[
            'singlePosts'=>$singlePosts,
            
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $imageurl='';
        if($image=$request->file('post_image')){
            $type=$image->getClientOriginalExtension();
            $name=time().'.'.$type;
            $directory='singlePost-images/';
            $image->move($directory,$name);
            $imageurl=$directory.$name;
        } 

        $wifeimageurl='';
        if($image=$request->file('wife_image')){
            $type=$image->getClientOriginalExtension();
            $name=time().'.'.$type;
            $directory='wife-images/';
            $image->move($directory,$name);
            $wifeimageurl=$directory.$name;
        } 
        
        $singlePost=new singlePost();
        $singlePost->post_tittle   =     $request->post_tittle;
        $singlePost->post_image    =     $imageurl;
        $singlePost->full_name     =     $request->full_name;
        $singlePost->profession    =     $request->profession;
        $singlePost->height        =     $request->height;
        $singlePost->weight        =     $request->weight;
        $singlePost->chest         =     $request->chest;
        $singlePost->waist         =     $request->waist;
        $singlePost->bicipes       =     $request->bicipes;
        $singlePost->eyeColor      =     $request->eyeColor;
        $singlePost->hairColor     =     $request->hairColor;
        $singlePost->birth_date    =     $request->birth_date;
        $singlePost->age           =     $request->age;
        $singlePost->birth_place   =     $request->birth_place;
        $singlePost->zodic_sign    =     $request->zodic_sign;
        $singlePost->nationality   =     $request->nationality;
        $singlePost->home_town     =     $request->home_town;
        $singlePost->education_qualification=$request->education_qualification;
        $singlePost->father_name   =     $request->father_name;
        $singlePost->mother_name   =     $request->mother_name;
        $singlePost->sister        =     $request->brother;
        $singlePost->brother       =     $request->sister;
        $singlePost->regions       =     $request->regions;
        $singlePost->hobby         =     $request->hobby;
        $singlePost->material_status=    $request->status;
        $singlePost->affair         =    $request->affair;
        $singlePost->wife           =    $request->wife;
        $singlePost->wife_image     =    $wifeimageurl;
        $singlePost->death_date     =    $request->death_date;
        $singlePost->death_cause    =    $request->date_cause;
        $singlePost->summary        =    $request->summary;
        $singlePost->save();
       return redirect()->back()->with('message',' single Post add successfully');

        


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $singlePost=singlePost::find($id);
        return view('dashboard.spViewAll',['singlePost'=>$singlePost]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $singlePost=singlePost::find($id);
        return view('dashboard.singlePostEdit',['singlePost'=>$singlePost]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $singlePost=singlePost::find($id); 
       
        if($image=$request->file('post_image')){
            if(file_exists( $singlePost->post_image)){
                unlink($singlePost->post_image);
            }
            $type=$image->getClientOriginalExtension();
            $name=time().'.'.$type;
            $directory='post-images/';
            $image->move($directory,$name);
            $imageurl=$directory.$name;
        }
        else{
            $imageurl=$singlePost->post_image;
        }
        
        if($image=$request->file('wife_image')){
            if(file_exists( $singlePost->wife_image)){
                unlink($singlePost->wife_image);
            }
            $type=$image->getClientOriginalExtension();
            $name=time().'.'.$type;
            $directory='wife-images/';
            $image->move($directory,$name);
            $wifeimageurl=$directory.$name;
        }
        else{
            $wifeimageurl=$singlePost->wife_image;
        }
        
        $singlePost->post_tittle   =     $request->post_tittle;
        $singlePost->post_image    =     $imageurl;
        $singlePost->full_name     =     $request->full_name;
        $singlePost->profession    =     $request->profession;
        $singlePost->height        =     $request->height;
        $singlePost->weight        =     $request->weight;
        $singlePost->chest         =     $request->chest;
        $singlePost->waist         =     $request->waist;
        $singlePost->bicipes       =     $request->bicipes;
        $singlePost->eyeColor      =     $request->eyeColor;
        $singlePost->hairColor     =     $request->hairColor;
        $singlePost->birth_date    =     $request->birth_date;
        $singlePost->age           =     $request->age;
        $singlePost->birth_place   =     $request->birth_place;
        $singlePost->zodic_sign    =     $request->zodic_sign;
        $singlePost->nationality   =     $request->nationality;
        $singlePost->home_town     =     $request->home_town;
        $singlePost->education_qualification=$request->education_qualification;
        $singlePost->father_name   =     $request->father_name;
        $singlePost->mother_name   =     $request->mother_name;
        $singlePost->sister        =     $request->brother;
        $singlePost->brother       =     $request->sister;
        $singlePost->regions       =     $request->regions;
        $singlePost->hobby         =     $request->hobby;
        $singlePost->material_status=    $request->status;
        $singlePost->affair         =    $request->affair;
        $singlePost->wife           =    $request->wife;
        $singlePost->wife_image     =    $wifeimageurl;
        $singlePost->death_date     =    $request->death_date;
        $singlePost->death_cause    =    $request->date_cause;
        $singlePost->summary        =    $request->summary;
        $singlePost->facts          =    $request->facts;
        $singlePost->save();
       return redirect()->back()->with('message',' single Post update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =singlePost::find($id);
        $post->delete();
        return redirect('singlepost/create')->with('message','post delete successfully');
    }
}
