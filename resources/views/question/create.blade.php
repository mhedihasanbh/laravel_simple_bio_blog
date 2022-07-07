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
                    <h4 class="card-title mb-4">Add New Questioin</h4>
                   

                    <form action="" method="post">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>TITTLE</b></label>
                            <div class="col-sm-9">
                                <input type="text" name="tittle" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label"><b>URL</b></label>
                            <div class="col-sm-9">
                                <input type="text" name="url" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        
                       

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input1" class="col-sm-3 col-form-label"><b>Publication Status</b></label>
                            <div class="col-sm-9">

                                <div class="form-check form-switch ">
                                    <input class="form-check-input publication-icon" name="status"  type="checkbox" role="switch" id="flexSwitchCheckChecked" checked >
                                    <label class="form-check-label " for="flexSwitchCheckChecked">Publish & UnPublish</label>
                                  </div>

                               

                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">


                                <div>
                                    <button type="submit" class="btn btn-primary w-md">add new Question</button>
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