@extends('master')
@section('content')
<div class="container"> 
    <div class="row"> 
        <div class="col-md-12 mt-5">
            @if($message=Session::get('message'))
                        
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{$message}}</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Ans Code</h4>
                   

                    <form action="" method="post">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Select Question</label>
                            <div class="col-sm-9">
                                <input type="hidden" name="ans_id"/>
                             </div>
                            <div class="col-sm-9">
                               <select class="form-control" name="question_id">
                                   <option>---Select Question-----</option>
                                   @foreach($questions as $question)
                                       <option value="{{$question->id}}">{{$question->title}}</option>
                                   @endforeach
                               </select>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-2 col-form-label"><b>Code</b></label>
                            <div class="col-sm-10">
                                <textarea class="form-control " id="ckeditor" name="text" rows="30" cols="50" id="horizontal-email-input17"></textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-2 col-form-label"><b>Code Language</b></label>
                            <div class="col-sm-10">
                                <input type="text" name="autho_name" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        
                       
                        
                       

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input1" class="col-sm-2 col-form-label"><b>Publication Status</b></label>
                            <div class="col-sm-10">

                                <div class="form-check form-switch ">
                                    <input class="form-check-input publication-icon" name="status"  type="checkbox" role="switch" id="flexSwitchCheckChecked" checked >
                                    <label class="form-check-label " for="flexSwitchCheckChecked">Publish & UnPublish</label>
                                  </div>

                               

                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">


                                
                                    <button type="submit" class="btn btn-primary w-md">add new Code</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</div>
@endsection