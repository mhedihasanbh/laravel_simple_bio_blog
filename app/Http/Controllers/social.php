<?php

namespace App\Http\Controllers;
use App\Models\SocialMedia;
use Illuminate\Http\Request;

class social extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        // $social = SocialMedia::where('name' 'value')->all();
        return view('dashboard.socialMedia');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $social=SocialMedia::where('name','facebook')->first();
        if(!isset($social->id)){
            $social= new SocialMedia();
        } 
            $social->name='facebook';
            $social->value=$request->facebook;
            $social->save();

        $instgram=SocialMedia::where('name','instgram')->first();
        if(!isset($instgram->id)){
            $instgram= new SocialMedia();
        } 
            $instgram->name='instgram';
            $instgram->value=$request->instgram;
            $instgram->save();

        $twitter=SocialMedia::where('name','twitter')->first();
        if(!isset($twitter->id)){
            $twitter= new SocialMedia();
        } 
            $twitter->name='twitter';
            $twitter->value=$request->twitter;
            $twitter->save();
    
        $linkdin=SocialMedia::where('name','linkdin')->first();
        if(!isset($linkdin->id)){
            $linkdin= new SocialMedia();
        } 
            $linkdin->name='linkdin';
            $linkdin->value=$request->linkdin;
            $linkdin->save();
        
        
        $quora=SocialMedia::where('name','quora')->first();
        if(!isset($quora->id)){
            $quora= new SocialMedia();
        } 
            $quora->name='quora';
            $quora->value=$request->quora;
            $quora->save();
            return redirect()->back()->with('message',' social update successfully');
        
        

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
