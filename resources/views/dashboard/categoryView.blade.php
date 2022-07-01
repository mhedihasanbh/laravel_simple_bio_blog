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
                <th scope="col">Category Name</th>
                <th scope="col">Category Description</th>
                <th scope="col">Category Image</th>
                <th>Publication Status</th>
                <th scope="col" class="text-right">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($categorys as $category)
                <tr>
                    
                    <td>{{$category->category_name}}</td>
                    <td>{{$category->category_description}}</td>
                    <td>
                        @if($category->category_image)
                                <img src="{{asset($category->category_image)}}" height="60" width="90">
                                @else
                                    <img src="{{asset('/category-images/dummy.jpg')}}" height="60" width="90">
                                @endif
                    </td>
                    <td>publish</td>
                    <td> 
                        <a href="{{route('category.edit',$category->id)}}" class="btn btn-success btn-sm">
                            <i class="fas fa-edit"></i>

                    </a>
                    <a class="btn btn-danger btn-sm" href="" onclick="event.preventDefault(); document.getElementById('categoryRemove{{$category->id}}').submit();">
                        <i class="fas fa-trash-alt"></i>

                    </a>
                    <form method="post" action="{{route('category.destroy',$category->id)}}" id="categoryRemove{{$category->id}}">
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