@extends('master')
@section('head')
<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
<link href="{{asset('/')}}css/styles.css" rel="stylesheet" />
@endsection
@section('content')
<div class="container"> 
    <div class="row"> 
       <div class="col-md-12 mt-5"> 
        <table class="table">
            <thead class="table-dark">
              <tr>
                <th scope="col">Post Tittle</th>
                <th scope="col">Post Description</th>
                <th scope="col">Post Image</th>
                <th>Publication Status</th>
                <th scope="col" class="text-right">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    
                    <td>{{$post->post_tittle}}</td>
                    <td>{{$post->post_description}}</td>
                    <td>
                        @if($post->post_image)
                                <img src="{{asset($post->post_image)}}" height="60" width="90">
                                @else
                                    <img src="{{asset('/post-images/dummy.jpg')}}" height="60" width="90">
                                @endif
                    </td>
                    <td>publish</td>
                    <td> 
                        <a href="{{route('posts.edit',$post->id)}}" class="btn btn-success btn-sm">
                            <i class="fas fa-edit"></i>

                    </a>
                    <a class="btn btn-danger btn-sm" href="" onclick="event.preventDefault(); document.getElementById('postRemove{{$post->id}}').submit();">
                        <i class="fas fa-trash-alt"></i>

                    </a>
                    <form method="post" action="{{route('posts.destroy',$post->id)}}" id="postRemove{{$post->id}}">
                        @csrf
                       @method('delete')
                       </form>
                    </td>
                  </tr>
                @endforeach
              </tbody>
          </table>
</div>
@endsection