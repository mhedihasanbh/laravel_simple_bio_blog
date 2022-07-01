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
                <th scope="col">Post Image</th>
                <th scope="col">Full Name</th>
                <th>Publication Status</th>
                <th scope="col" class="text-right">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($singlePosts as $singlePost)
                <tr>
                    <td>{{$singlePost->post_tittle}}</td>
                    <td>
                        @if($singlePost->post_image)
                                <img src="{{asset($singlePost->post_image)}}" height="60" width="90">
                                @else
                                    <img src="{{asset('/post-images/dummy.jpg')}}" height="60" width="90">
                                @endif
                    </td>
                    <td>{{$singlePost->full_name}}</td>
                    <td>Publish</td>
                    <td> 
                        <a href="{{route('singlepost.show',$singlePost->id)}}" class="btn btn-success"> <i class="fa-solid fa-eye"></i> </a>
                        <a href="{{route('singlepost.edit',$singlePost->id)}}" class="btn btn-warning"> <i class="fa-solid fa-edit"></i> </a>
                        
                        <a class="btn btn-danger btn-sm" href="" onclick="event.preventDefault(); document.getElementById('postRemove{{$singlePost->id}}').submit();">
                            <i class="fa-solid fa-xmark"></i>
    
                        </a>
                        <form method="post" action="{{route('singlepost.destroy',$singlePost->id)}}" id="postRemove{{$singlePost->id}}">
                            @csrf
                           @method('delete')
                           </form>
                    </td>
                    </td>
                </tr> 
                @endforeach
                
              </tbody>
          </table>
</div>
@endsection