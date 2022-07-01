<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.post');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $posts=Post::all();
        return view('dashboard.viewpost',['posts'=>$posts]);
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
            $directory='post-images/';
            $image->move($directory,$name);
            $imageurl=$directory.$name;
        } 
       $post= new Post();
       $post->post_tittle=$request->post_tittle;
       $post->post_description=$request->post_description;
       $post->post_image=$imageurl;
       $post->save();
       return redirect()->back()->with('message','Post add successfully');


       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $post=Post::find($id);
        return view('dashboard.postEdit',['post'=>$post]);
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
        $post=Post::find($id);
        if($image=$request->file('post_image')){
            if(file_exists( $post->post_image)){
                unlink($post->post_image);
            }
            $type=$image->getClientOriginalExtension();
            $name=time().'.'.$type;
            $directory='post-images/';
            $image->move($directory,$name);
            $imageurl=$directory.$name;
        }
        else{
            $imageurl=$post->post_image;
        }

        $post->post_tittle=$request->post_tittle;
        $post->post_description=$request->post_description;
        $post->post_image=$imageurl;
        $post->save();
         return redirect('posts/create')->with('message','post update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('posts/create')->with('message','post delete successfully');

    }
}
