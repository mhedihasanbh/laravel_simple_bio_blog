@extends('master')
@section('head')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<link href="{{asset('/')}}css/styles.css" rel="stylesheet" />
@endsection
@section('content')
<div class="container "> 
    <form action="{{route('singlepost.update',$singlePost->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="row mt-5 mb-5">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input12" class="col-sm-4 col-form-label">Post Tittle</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$singlePost->post_tittle}}" class="form-control" name="post_tittle" id="horizontal-firstname-input12" >
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-sm-4 col-form-label">Post Image</label>
                            <div class="col-sm-8">
                                <input type="file" name="post_image"  class="w-100" class="form-control-file"/>
                                <img src="{{asset($singlePost->post_image)}}" width="100" height="100"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input12" class="col-sm-4 col-form-label">Full Name</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$singlePost->full_name}}" class="form-control" name="full_name" id="horizontal-firstname-input12">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input12" class="col-sm-4 col-form-label">Profession</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$singlePost->profession}}" class="form-control" name="profession" id="horizontal-firstname-input12" >
                            </div>
                        </div>
                        
                        
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input22" class="col-sm-4 col-form-label">Weight & Height</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Height</span>
                                    </div>
                                    <input type="text" value="{{$singlePost->height}}"  id="horizontal-firstname-input22" name="height" aria-label="First name" class="form-control">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Weight</span>
                                    </div>
                                    <input type="text" value="{{$singlePost->weight}}"  name="weight" aria-label="Last name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input22" class="col-sm-4 col-form-label">Body Measurment</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Chest</span>
                                    </div>
                                    <input type="text" value="{{$singlePost->chest}}"  id="horizontal-firstname-input22" name="chest" aria-label="First name" class="form-control">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Waist</span>
                                    </div>
                                    <input type="text" value="{{$singlePost->waist}}"  name="waist" aria-label="Last name" class="form-control">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Bicipes</span>
                                    </div>
                                    <input type="text"  value="{{$singlePost->bicipes}}" name="bicipes" aria-label="Last name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input22" class="col-sm-4 col-form-label">Eye & Hair</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Eye Color</span>
                                    </div>
                                    <input type="text" value="{{$singlePost->eyeColor}}"  id="horizontal-firstname-input22" name="eyeColor" aria-label="First name" class="form-control">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Hair Color</span>
                                    </div>
                                    <input type="text"  value="{{$singlePost->hairColor}}" name="hairColor" aria-label="Last name" class="form-control">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input22" class="col-sm-4 col-form-label">Birth & Place</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Birth Date</span>
                                    </div>
                                    <input type="date" value="{{$singlePost->birth_date}}" id="horizontal-firstname-input22" name="birth_date" aria-label="First name" class="form-control">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">place</span>
                                    </div>
                                    <input type="text" value="{{$singlePost->birth_place}}"  name="birth_place" aria-label="Last name" class="form-control">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input22" class="col-sm-4 col-form-label">Age & Zodic</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Age</span>
                                    </div>
                                    <input type="text" value="{{$singlePost->age}}"  id="horizontal-firstname-input22" name="age" aria-label="First name" class="form-control">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Zodic</span>
                                    </div>
                                    <input type="text" value="{{$singlePost->zodic_sign?? 'Not'}}"  name="zodic_sign" aria-label="Last name" class="form-control">
                                    
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input12" class="col-sm-4 col-form-label">Nationality</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$singlePost->nationality}}" class="form-control" name="nationality" id="horizontal-firstname-input12" >
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input13" class="col-sm-4 col-form-label">Home Town</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$singlePost->home_town}}" class="form-control" name="home_town" id="horizontal-firstname-input13">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input14" class="col-sm-4 col-form-label">Education Qulification</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$singlePost->education_qualification}}" class="form-control" name="education_qualification" id="horizontal-firstname-input18">
                            </div>
                        </div>
                        
                        
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input19" class="col-sm-4 col-form-label">Father's Name</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$singlePost->father_name}}" class="form-control" name="father_name" id="horizontal-firstname-input19">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input14" class="col-sm-4 col-form-label">Mother's Name</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$singlePost->mother_name}}" class="form-control" name="mother_name" id="horizontal-firstname-input14">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input14" class="col-sm-4 col-form-label">Brother's Name</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$singlePost->brother}}" class="form-control" name="brother" id="horizontal-firstname-input14">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input14" class="col-sm-4 col-form-label">Sister Name</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$singlePost->sister}}" class="form-control" name="sister" id="horizontal-firstname-input14">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input14" class="col-sm-4 col-form-label">Regions</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$singlePost->regions}}" class="form-control" name="regions" id="horizontal-firstname-input14">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input14" class="col-sm-4 col-form-label">Hobby</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$singlePost->hobby}}" class="form-control" name="hobby" id="horizontal-firstname-input14">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input14" class="col-sm-4 col-form-label">Material Status</label>
                            <div class="col-sm-8">
                                <input class="form-check-input" {{$singlePost->material_status == 'married' ? 'checked' : ''}}  type="radio" name="status" id="status" value="married">
                                <label class="form-check-label" for="inlineRadio1">Maried</label>
                                <input class="form-check-input" {{$singlePost->material_status == 'unmaried' ? 'checked' : ''}} type="radio" name="status" id="status" value="unmaried">
                                <label class="form-check-label" for="inlineRadio2">Unmaried</label>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input14" class="col-sm-4 col-form-label">Affair</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$singlePost->affair}}" class="form-control" name="affair" id="horizontal-firstname-input14">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input14" class="col-sm-4 col-form-label">Wife Name</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$singlePost->wife}}" class="form-control" name="wife" id="horizontal-firstname-input14" width="100" height="100" >
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input14" class="col-sm-4 col-form-label">Wife Image</label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control-file" name="wife_image" id="horizontal-firstname-input14" >
                                <img src="{{asset($singlePost->wife_image)}}" width="100" height="100"/>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input14" class="col-sm-4 col-form-label">Death Date</label>
                            <div class="col-sm-8">
                                <input type="date" value="{{$singlePost->death_date}}" class="form-control-file" name="death_date" id="horizontal-firstname-input14" >
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input14" class="col-sm-4 col-form-label">Date Cause</label>
                            <div class="col-sm-8">
                                <input type="text" value="{{$singlePost->death_cause}}" class="form-control-file" name="date_cause" id="horizontal-firstname-input14">
                            </div>
                        </div>
                       
                        
                        </div>
                       
                       
                    </div>
                </div>
            </div>


            <div class="col-lg-12 mt-3">
                 <div class="form-group mb-4">
                            <label for="horizontal-email-input17" class="col-sm-4 col-form-label"> <b>Summary</b></label>
                            <hr/>
                            <textarea class="form-control " id="summernote" name="summary" rows="10" cols="10" id="horizontal-email-input17">{{$singlePost->summary}}</textarea>
                        </div>
                 </div>
                 <div class="col-lg-12 mt-3">
                    <div class="form-group mb-4">
                               <label for="horizontal-email-input17" class="col-sm-4 col-form-label"><b>Facts </b></label>
                               <hr/>
                               <textarea class="form-control " id="ckeditor" name="facts" rows="30" cols="50" id="horizontal-email-input17">{{$singlePost->facts}}</textarea>
                           </div>
                    </div>
            
            
           
            <div class="col-lg-4 mx-auto mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-4">
                            <label class="col-form-label">Publication Status</label>
                            <hr/>
                            <div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" checked name="status" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Published</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0">
                                    <label class="form-check-label" for="inlineRadio2">Unpublished</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-3 mb-5">
                <div class="card">
                    <div class="card-body pb-1">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block w-100">Update Post</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection