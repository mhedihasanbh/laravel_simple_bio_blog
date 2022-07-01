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
                    <h4 class="card-title mb-4">Website Settings</h4>
                   

                    <form action="{{route('websitesettings.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Website Logo</label>
                            <div class="col-sm-9">
                                <input type="file" name="website_logo" class="form-control" id="horizontal-firstname-input">
                                <img src="{{ asset('logo/'.$app->website_logo) }}" height="auto" width="100" />
                            </div>
                        </div>
                       
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Website Favicon</label>
                            <div class="col-sm-9">
                                <input type="file" name="website_favicon" class="form-control" id="horizontal-firstname-input">
                                <img src="{{ asset('favicon/'.$app->website_favicon) }}" height="auto" width="80" />
                            </div>
                        </div>

                        

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">


                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update</button>
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