@extends('home.master')
@section('content')
<!---blog summary-->
<section class="summary_area">
    <div class="container">
       <div class="row">
         <div class="col-md-6">
             <div class="summary_image">
                 <img src="{{asset('/')}}images/summary.png" class="rounded w-100">
             </div>
         </div>
         <div class="col-md-6 summary_content_bg">
             <div class="summary_content">
                  <h2>Find Artist Biography</h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,survived not only  </p>
                   <div class="summary_btn text-center">
                     <a href="https://www.facebook.com/{{soial_data('facebook')}}" class="btn btn-dark"> Live Chat</a>
                   </div>
                  
             </div>

         </div>
       </div>
    </div>
 </section>
 <!---Blog main post-->
 <section class="main_post_area">
     <div class="container">
         <div class="row">
             <div class="col-md-10">
                 <h5>Latest Post</h5>
                 <div class="row">
                      @foreach ($singlePosts as $singlePost)
                     <div class="col-md-4 ">
                         <a href="{{route('singlepostview.show',$singlePost->id)}}" class="text-decoration-none"> 
                             <div class="card h-100">
                                 <img src="{{asset($singlePost->post_image)}}" class="card-img-top" alt="...">
                                 <div class="card-body">
                                   <h5 class="card-title">{{$singlePost->post_tittle}}</h5>
                                    <p class="card-text"> {!! Str::of($singlePost->summary)->words(3, ' --')!!}</p> 
                                   {{-- <p class="card-text">{!! Str::words($singlePost->summary, 8, ' ...') !!}  --}}

                                 {{-- </p> --}}
                                 <p class="card-text">{!! $singlePost->summary !!}
                                 
                                   <a href="{{route('singlepostview.show',$singlePost->id)}}" class="btn btn-primary">Read More</a>
                                 </div>
                               </div>
                         </a>
                        
                     </div>  
                     @endforeach
                     
                     
                     
                    
                 </div>
                
                
                
             </div>
             
             
             <div class="col-md-2">
                 <div class="popular_post">
                     <h5>Popular Post</h5>
                     @foreach ($popularPosts as $popularPost )
                     <a href="">
                         <div class="card mb-3">
                             <img src="{{asset($popularPost->post_image)}}" class="card-img-top popular_post_image" alt="...">
                             <div class="card-body">
                               <h5 class="card-title popular_post_tittle">Rithia sign age boyfriend</h5>
                              
                             </div>
                           </div>
                     </a>
                     @endforeach
                     
                     <a href="">
                         <div class="card mb-3" >
                             <img src="images/blog2.jpg" class="card-img-top popular_post_image" alt="...">
                             <div class="card-body">
                               <h5 class="card-title popular_post_tittle">Rithia sign age boyfriend</h5>
                              
                             </div>
                           </div>
                     </a>
                     <a href="">
                         <div class="card mb-3">
                             <img src="images/blog3.jpg" class="card-img-top popular_post_image" alt="...">
                             <div class="card-body">
                               <h5 class="card-title popular_post_tittle">Rithia sign age boyfriend</h5>
                              
                             </div>
                           </div>
                     </a>
                     <a href="">
                         <div class="card ">
                             <img src="images/blog4.jpg" class="card-img-top popular_post_image" alt="...">
                             <div class="card-body">
                               <h5 class="card-title popular_post_tittle">Rithia sign age boyfriend</h5>
                              
                             </div>
                           </div>
                     </a>
                     
                 </div>
             </div>
         </div>
     </div>

 </section>
@endsection