@extends('master')
@section('head')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<link href="{{asset('/')}}css/styles.css" rel="stylesheet" />
@endsection
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
                    <h4 class="card-title mb-4">Update Post</h4>
                   

                    <form action="{{route('posts.update',$post->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Post tittle</label>
                            <div class="col-sm-9">
                                <input type="text" name="post_tittle" value="{{$post->post_tittle}}" class="form-control" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Post Description</label>
                            <div class="col-sm-9">
                                <textarea  name="post_description" class="form-control" id="horizontal-email-input">{{$post->post_description}} </textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Post Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="post_image" class="form-control-file" id="horizontal-password-input">
                                <img src="{{asset(asset($post->post_image))}}" height="80" width="120" />
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input1" class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" checked name="status" id="inlineRadio1" value="1">
                                    <label class="form-check-label" for="inlineRadio1">Publish</label>
                                </div>

                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="status" id="inlineRadio2" value="0">
                                    <label class="form-check-label" for="inlineRadio2">UnPublish</label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">


                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Post</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
@endsection