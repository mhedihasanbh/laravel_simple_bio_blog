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
                    <h4 class="card-title mb-4">Social Account Update</h4>
                   

                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input1" class="col-sm-3 col-form-label">Facebook</label>
                            <div class="col-sm-9">
                                <input type="text" name="facebook" class="form-control" value="{{soial_data('facebook')}}" id="horizontal-firstname-input">
                                 
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input2" class="col-sm-3 col-form-label">Instgram</label>
                            <div class="col-sm-9">
                                <input type="text" name="instgram" value="{{soial_data('instgram')}}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Twiiter</label>
                            <div class="col-sm-9">
                                <input type="text" name="twitter" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Linkdin</label>
                            <div class="col-sm-9">
                                <input type="text" name="linkdin" value="{{soial_data('linkdin')}}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Quora</label>
                            <div class="col-sm-9">
                                <input type="text" name="quora" value="{{soial_data('quora')}}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        
                       


                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">


                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Social</button>
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