<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys=Category::all();
        return view('dashboard.categoryView',['categorys'=>$categorys]);
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
        if($image=$request->file('category_image')){
            $type=$image->getClientOriginalExtension();
            $name=time().'.'.$type;
            $directory='category-images/';
            $image->move($directory,$name);
            $imageurl=$directory.$name;
        } 
       $category= new Category();
       $category->category_name=$request->category_name;
       $category->category_description=$request->category_description;
       $category->category_image=$imageurl;
       $category->save();
       return redirect()->back()->with('message','category add successfully');

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
        $category=Category::find($id);
        return view('dashboard.categoryEdit',['category'=>$category]);
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
        $category=Category::find($id);
        if($image=$request->file('category_image')){
            if(file_exists( $category->category_image)){
                unlink($category->category_image);
            }
            $type=$image->getClientOriginalExtension();
            $name=time().'.'.$type;
            $directory='ctegory-images/';
            $image->move($directory,$name);
            $imageurl=$directory.$name;
        }
        else{
            $imageurl=$category->category_image;
        }

        $category->category_name=$request->category_name;
        $category->category_description=$request->category_description;
        $category->category_image=$imageurl;
        $category->save();
         return redirect('category/create')->with('message','Category update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('category/create')->with('message','Category delete successfully');
    }
}
