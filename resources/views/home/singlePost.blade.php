@extends('home.master')
@section('content')
<section class="single_post_area">
  <div class="container">
    <div class="row">
        <div class="col-md-8">
             <div class="single_post_left">
                <h2>{{$singlepost->post_tittle}}</h2>
                <div class="table_summary_btn ">
                    <button class="btn btn-info ">Summary</button>
                </div>
                <table class="styled-table">
                  
                    <thead>
                        
                        <tr>
                            <th>Age</th>
                            <th>Death Date</th>
                            <th>Death Cause</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>{{$singlepost->age}}</td>
                            <td>{{$singlepost->death_date?? 'alive'}}</td>
                            <td>{{$singlepost->death_cause??'alive'}}</td>
                        </tr> 
                       
                        
                      
                        
                        
                        <!-- and so on... -->
                    </tbody>
                </table>
                <img src="{{asset($singlepost->post_image)}}" width="600" height="600"/>
                <!---manin bio table-->
                <table class="styled-table">
                  
                  <thead>
                      <tr>
                          <th>Bio</th>
                          <th></th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                       
                      <td>Full Name</td>
                      <td>{{$singlepost->full_name}}</td>
                      
                    </tr>
                    <tr>
                      
                      <td>Profession</td>
                      <td>{{$singlepost->profession}}</td>
                      
                    </tr>
                      
                      <!-- and so on... -->
                  </tbody>
              </table>
              <!---physical status table-->
              <table class="styled-table">
                  
                <thead>
                    <tr>
                        <th>Physical status and more</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Height</td>
                    <td>{{$singlepost->height}}"</td>
                    
                  </tr>
                  <tr>
                    <td>Weight</td>
                    <td>{{$singlepost->weight}}</td>
                    
                  </tr>
                  <tr>
                    <td>Body Measurements</td>
                    <td>
                        Chest:{{$singlepost->chest}} inches <br/>
                        Waist:{{$singlepost->waist}} inches <br/>
                        Bicipes:{{$singlepost->bicipes}} inches
                    </td>
                    
                  </tr>
                  <tr>
                    <td>Eye Color</td>
                    <td>{{$singlepost->eyeColor}}</td>
                    
                  </tr>
                  <tr>
                    <td>Hair Color</td>
                    <td>{{$singlepost->hairColor}}</td>
                    
                  </tr>
                    
                    <!-- and so on... -->
                </tbody>
            </table>
                <table class="styled-table">
                  
                  <thead>
                      <tr>
                          <th>Personal Life</th>
                          <th></th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Date of Birth</td>
                      <td>{{$singlepost->birth_date}}</td>
                    </tr>
                    <tr>
                      <td>Age</td>
                      <td>{{$singlepost->age}}</td>
                    </tr>
                    <tr>
                      <td>Birth Place</td>
                      <td>{{$singlepost->birth_place}}</td>
                    </tr>
                    <tr>
                      <td>Zodic Sign</td>
                      <td>{{$singlepost->zodic_sign?? 'known'}}</td>
                    </tr>
                    <tr>
                      <td>Nationality</td>
                      <td>{{$singlepost->nationality}}</td>
                    </tr>
                    <tr>
                      <td>Home town</td>
                      <td>{{$singlepost->home_town}}</td>
                    </tr>
                    <tr>
                      <td>Education Qualifications</td>
                      <td>{{$singlepost->education_qualification}}</td>
                    </tr>
                    <tr>
                      <td>Familiy</td>
                      <td>
                      
                          <b>Father:</b>{{$singlepost->father_name}} </br>
                          <b>Mother:</b>{{$singlepost->mother_name}}</br>
                          <b>Sister:</b>{{$singlepost->sister}} </br>
                          <b>Brother:</b>{{$singlepost->brother}}</br>
                          
                      </td>
                    </tr>
                    <tr>
                      <td>Religions</td>
                      <td>{{$singlepost->regions}}</td>
                    </tr>
                    <tr>
                      <td>Hobbies</td>
                      <td>{{$singlepost->hobby}}</td>
                    </tr>
                      
                      <!-- and so on... -->
                  </tbody>
                  <!---girl and affair table-->
                 
                <table class="styled-table">
                  
                  <thead>
                      <tr>
                          <th>Girl Affair and More</th>
                          <th></th>
                          <th></th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Material status</td>
                      <td>{{$singlepost->material_status}}</td>
                    </tr>
                    <tr>
                      <td>Affair/GF or BF</td>
                      <td>Adithi <br/>
                          <img src="{{asset($singlepost->wife_image)}}" width="200"/>

                      </td>
                    </tr>
                    <tr>
                      <td>Wife/Husband</td>
                      <td>{{$singlepost->wife}}</td>
                    </tr>
                      
                      <!-- and so on... -->
                  </tbody>
              </table>
                
                  <div class="lesser_known_area">
                    <h4>Some Lesser known Facts About Dignath mancacle</h4>
                    {!!$singlepost->facts!!}
                  </div>
             </div>
             <div class="related_post mt-5">
              <h2>Related Post</h2>
                <div class="row ">
                  
                   <div class="col-md-6">
                    <div class="card">
                      <img class="card-img-top" src="{{asset('/')}}images/blog1.jpg" alt="Card image cap">
                      <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                      </div>
                    </div>
                   </div>
                   <div class="col-md-6">
                    <div class="card">
                      <img class="card-img-top" src="images/blog2.jpg" alt="Card image cap">
                      <div class="card-body">
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                      </div>
                    </div>
                   </div>
                </div>
                <div class="row mt-3">
                  
                  <div class="col-md-6">
                   <div class="card">
                     <img class="card-img-top" src="{{asset('/')}}images/blog3.jpg" alt="Card image cap">
                     <div class="card-body">
                       <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       
                     </div>
                   </div>
                  </div>
                  <div class="col-md-6">
                   <div class="card">
                     <img class="card-img-top" src="{{asset('/')}}images/blog4.jpg" alt="Card image cap">
                     <div class="card-body">
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                       
                     </div>
                   </div>
                  </div>
               </div>
             </div>
        </div>
        <div class="col-md-4 ">
         
           <div class="single_post_recent">
            <h2>Recent Post</h2>
            @foreach ($recentPosts as $recentPost )
            <a href="{{route('singlepostview.show',$recentPost->id)}}"> 
              <div class="card mb-3" style="width: 18rem;">
                <img class="card-img-top" src="{{asset($recentPost->post_image)}}" alt="Card image cap">
                <div class="card-body">
                  
                  <p class="card-text">{{$recentPost->post_tittle}}</p>
                 
                </div>
              </div>
            </a>
            
            @endforeach
           
           
            
           
           </div>
        </div>
    </div>
  </div>
</section>


@endsection
   <!---blog single post-->
 
  