@extends('frontEnd.master')
@section('content')
<!-- Ans Search Area Start -->
<section class="ans-search-area">
    <div class="container">
       <div class="row justify-content-center">
         <div class="col-md-12 text-center">
           <div class="search-ans-content">
             <h2>find your programming  error solution</h2>
             <p>codegrapper helps you get your programming error to fix.We always try to give correct answers and give different answers to the same question</p>
             <h3>Search you Coding Error</h3>
             <form >
               <div class="form-group">
                 <input type="text" class="form-control " id="exampleInputEmail1" placeholder="Search your Problem" aria-describedby="emailHelp">
                 </div>
                 <div class="search_btn ">
                   <button type="submit" class="btn btn-primary  w-50">Search</button>
                 </div>
               
                
             </form>

           </div>
             
         </div>
         
            
           

       </div>
    </div>
 </section>
<!-- Ans Search Area End -->

<!-- popular Category start -->
 <section class="popular-category-area">
   <div class="container">
     <div class="row">
     
        <div class="col-md-12">
         <h2 class="popular-category text-center">Popular Categories</h2>
             <div class="category-table">
               <table class="table table-bordered">
                 
                 <tbody>
                   <tr class="text-center">
                   
                     <td class="category-td">
                       <div class="table-category-item">
                         <a href="" >
                           <i class="fa-brands fa-html5"></i> <br>
                           <a href="{{route('codequestion.index')}}">HTML</a>
                         </a>
                       </div>
                      
                       
                     </td>
                     <td class="category-td">
                       <div class="table-category-item">
                         <a href="">
                           <i class="fa-brands fa-css3-alt"></i> <br>
                           <a href="{{route('codequestion.index')}}">CSS</a>
                         </a>
                       </div>
                       
                     </td>
                     <td class="category-td">
                       <div class="table-category-item">
                         <a href="">
                           <i class="fa-brands fa-bootstrap"></i><br>
                           <a href="{{route('codequestion.index')}}">BOOTSTRAP</a>
                         </a>
                       </div>
                      
                     </td>
                     <td class="category-td">
                       <div class="table-category-item">
                         <a href="">
                           <i class="fa-brands fa-js"></i> <br>
                           <a href="{{route('codequestion.index')}}">JAVASCRIPT</a>
                         </a>
                       </div>
                       
                     </td>
                     <td class="category-td">
                       <div class="table-category-item">
                         <a href="">
                           <i class="fa-brands fa-php"></i> <br>
                           <a href="{{route('codequestion.index')}}">PHP</a>
                         </a>
                       </div>
                      
                     </td>
                   </tr>

                   <tr class="text-center">
                   
                     <td class="category-td">
                       <div class="table-category-item">
                         <a href="" >
                           <i class="fa-brands fa-laravel"></i> <br>
                           <a href="{{route('codequestion.index')}}">LARAVEL</a>
                         </a>
                       </div>
                      
                       
                     </td>
                     <td class="category-td">
                       <div class="table-category-item">
                         <a href="">
                           <i class="fa-brands fa-vuejs"></i> <br>
                           <a href="{{route('codequestion.index')}}">VUE JS</a>
                         </a>
                       </div>
                       
                     </td>
                     <td class="category-td">
                       <div class="table-category-item">
                         <a href="">
                           <i class="fa-brands fa-react"></i><br>
                           <a href="{{route('codequestion.index')}}">REACT</a>
                         </a>
                       </div>
                      
                     </td>
                     <td class="category-td">
                       <div class="table-category-item">
                         <a href="">
                           <i class="fa-brands fa-wordpress"></i> <br>
                           <a href="{{route('codequestion.index')}}">WORDPRESS</a>
                         </a>
                       </div>
                       
                     </td>
                     <td class="category-td">
                       <div class="table-category-item">
                         <a href="">
                           <i class="fa-brands fa-php"></i> <br>
                           <a href="{{route('codequestion.index')}}">PHP</a>
                         </a>
                       </div>
                      
                     </td>
                   </tr>
                   <tr class="text-center">
                   
                     <td class="category-td">
                       <div class="table-category-item">
                         <a href="" >
                           <i class="fa-solid fa-c"></i> <br>
                           <a href="">C</a>
                         </a>
                       </div>
                      
                       
                     </td>
                     <td class="category-td">
                       <div class="table-category-item">
                         <a href="">
                           <i class="fa-solid fa-circle-c"></i> <br>
                           <a href="">C++</a>
                         </a>
                       </div>
                       
                     </td>
                     <td class="category-td">
                       <div class="table-category-item">
                         <a href="">
                           <i class="fa-brands fa-python"></i><br>
                           <a href="">PYTHON</a>
                         </a>
                       </div>
                      
                     </td>
                     <td class="category-td">
                       <div class="table-category-item">
                         <a href="">
                           <i class="fa-brands fa-java"></i> <br>
                           <a href="">JAVA</a>
                         </a>
                       </div>
                       
                     </td>
                     <td class="category-td">
                       <div class="table-category-item">
                         <a href="">
                           <i class="fa-solid fa-ruble-sign"></i> <br>
                           <a href="">RUBY</a>
                         </a>
                       </div>
                      
                     </td>
                   </tr>
                   
                   
                 </tbody>
               </table>
             </div>
        </div>
     </div>
   </div>
 </section>
<!-- popular Category end-->
<!-- Section-one Start-->
<section class="section-one-area">
  <div class="container">
     <div class="row">
        <div class="col-md-6">
           <div class="section-one-text">
                <h2>The ultimate RAM upgrade for your brain, easily snag and access code answers.</h2>
                <p>Accrue code answers to common coding problems, find code answers without thinking - using Greppers “code problem” search engine.</p>
                <button class="btn btn-info">More Details</button>
           </div>
        </div>
        <div class="col-md-6">
           <div class="section-one-image">
               <img class="img-thumbnail" src="images/laravel-errors.png" width="100%" height="400"/>
           </div>
        </div>
     </div>
  </div>
</section>

<!-- Sign Up Area Start -->
<section class="sign-up-area">
 <div class="container">
   <div class="row">
     <div class="col-md-6">
        <div class="signup-image">
           <img src="images/signup-area.png" width="100%" />
        </div>
     </div>
     <div class="col-md-6">
         <div class="signup-text ">
            <h2>This is an open source platform. You can easily solve any coding problem using this platform.</h2>
            <p>A community-based space to find and contribute answers to technical challenges, and one of the most popular websites in the world.</p>
            <div class="signup-btn-area text-center">
             <button  type="submit" class="singup-btn">Join The Platform</button>
            </div>

         </div>
     </div>
   </div>
 </div>
</section>
<!-- Sign Up Area End -->
<!-- platform Featurs Area Start -->
  <section class="platform-featurs-area">
    <div class="container">
      <div class="row">
       <div class="col-md-4">
         <div class="platform-features">
           <div class="card features-card">
             <div class="card-body">
               <h5 class="card-title features-tittle">Advertising</h5>
               <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              
             </div>
         </div>
       </div>
       </div>
       <div class="col-md-4">
         <div class="platform-features">
           <div class="card features-card">
             <div class="card-body">
               <h5 class="card-title features-tittle">Talent</h5>
               <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
               
             </div>
         </div>
           
         </div>
       </div>
       <div class="col-md-4">
         <div class="platform-features">
           <div class="card features-card">
             <div class="card-body">
               <h5 class="card-title features-tittle">Collective</h5>
               <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
               
             </div>
         </div>
         </div>
       </div>
      
      </div>
    </div>
  </section>
<!-- platform Featurs Area end -->

<!-- Why Choose us Area Start -->
<section class="why-choose-area">
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               <h2 class="text-center mb-3">Why you should use Grepper</h2>
               <div class="choose-us-content">
                   <div class="accordion" id="accordionExample">
                       <div class="card">
                         <div class="card-header" id="headingOne">
                           <h2 class="mb-0">
                             <button class="btn btn-link btn-block choose-accordion-tittle text-left text-decoration-none text-uppercase" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               Develop Faster <i class="fa-solid fa-plus"></i>
                             </button>
                           </h2>
                         </div>
                     
                         <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                           <div class="card-body">
                               Having answers at the top of your search results keeps you from having to scour forums for the correct answer, having quick access to the right answer allows you to stay in the "developer zone" (you know that thing where there is no distance from you and the computer).
                           </div>
                         </div>
                       </div>
                       <div class="card">
                         <div class="card-header" id="headingTwo">
                           <h2 class="mb-0">
                             <button class="btn btn-link btn-block choose-accordion-tittle text-left collapsed text-decoration-none text-uppercase" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                               Learn & constantly improve your coding skills<i class="fa-solid fa-plus"></i>
                             </button>
                           </h2>
                         </div>
                         <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                           <div class="card-body">
                             Some placeholder content for the second accordion panel. This panel is hidden by default.
                           </div>
                         </div>
                       </div>
                       <div class="card">
                         <div class="card-header" id="headingThree">
                           <h2 class="mb-0">
                             <button class="btn btn-link btn-block choose-accordion-tittle text-left collapsed text-decoration-none text-uppercase" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                               Grow your Career<i class="fa-solid fa-plus"></i>
                             </button>
                           </h2>
                         </div>
                         <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                           <div class="card-body">
                             And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                           </div>
                         </div>
                       </div>
                     </div>
                   
                   
               </div>
           </div>
       </div>
   </div>

</section>
<!-- Why Choose us Area End -->
<!-- Client testimonial Area Start -->
 <section class="testimonial-area">
     <div class="container">
        <div class="row">
           <div class="col-md-12">
               <h2 class="text-center testimonial-heading">Other Developers on Grepper</h2>
               <div class="owl-carousel owl-theme">
                   <div class="item">
                       <div class="card testimonial-card" >
                           <img class="testimonial-card-image" src="images/testimonial-image-2.jpg" alt="Card image cap" width="50" >
                           <div class="card-body">
                             <h5 class="card-title d-inline ">Luios Serman</h5>
                             <div class="testimonial-icon d-inline">
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             </div>
                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            
                           </div>
                         </div>
                   </div>
                   <div class="item">
                       <div class="card testimonial-card" >
                           <img class="testimonial-card-image" src="images/testimonial-image-1.jpg" alt="Card image cap" width="50" >
                           <div class="card-body">
                             <h5 class="card-title d-inline ">Luios Serman</h5>
                             <div class="testimonial-icon d-inline">
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             <i class="fa-solid fa-star"></i>
                             </div>
                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            
                           </div>
                         </div>
                   </div>

                   
                   
               </div>
           </div>
        </div>
     </div>
 </section>
<!-- Client testimonial Area End -->

@endsection
