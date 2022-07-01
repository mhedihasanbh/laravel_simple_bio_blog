<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog-post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
</head>
<body>
    <!--header-->
    <section class="header_area">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="header_social_icon">
                       <a href=""><i class="fa-brands fa-facebook social_icon facebook_icon fa-2x"></i></a>
                       <a href=""><i class="fa-brands fa-instagram social_icon instgram_icon"></i></a>
                       <a href=""><i class="fa-brands fa-twitter  social_icon twitter_icon"></i></a>
                       <a href=""><i class="fa-brands fa-linkedin social_icon linkdin_icon"></i></a>
                       <a href=""><i class="fa-brands fa-quora  social_icon quora_icon"></i></a>
                    </div>
                 
                </div>
                <div class="col-md-4">
                    <div class="main_header">
                      
                            <ul>
                                <li><a href="">Entertraintment</a></li>
                                <li><a href="">Biography</a></li>
                            </ul>
                        
                    </div>

                </div>
                <div class="col-md-3">
                    <div class="header_logo">
                        <h2>Star Sunfolded</h2>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="header_search">
                        <div class="search_box">
                            <input placeholder="Search  Post"/>
                            <label for="" class="search_icon">
                               <i class="fas fa-search"></i>
                            </label>
                        </div>
                    </div>

                </div>
            </div>
        </div>
       
    </section>
   <!---blog single post-->
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
    <!---footer widget-->
    <section class="footer_widget_area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                   <div class="widget_about_us">
                       <h2 class="footer_widget_heading">Start Sunfold</h2>
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                   </div>
                </div>
                <div class="col-md-4">
                    <div class="widget_support">
                        <h2 class="footer_widget_heading">Support</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <div class="widget_social">
                            <a href=""><i class="fa-brands fa-facebook social_icon facebook_icon fa-2x"></i></a>
                            <a href=""><i class="fa-brands fa-instagram social_icon instgram_icon"></i></a>
                            <a href=""><i class="fa-brands fa-twitter  social_icon twitter_icon"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin social_icon linkdin_icon"></i></a>
                            <a href=""><i class="fa-brands fa-quora  social_icon quora_icon"></i></a>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="widget_other">
                        <h2 class="footer_widget_heading">Other</h2>
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><a href="">Privacy & Policy</a></li>
                            <li><a href="">Abouts us</a></li>
                            <li><a href="">Contact us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
     
    </section>
    <!---footer-->
    <section class="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">Donot CopyRight@StarUnfoled.com 2022</p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" ></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" ></script>
</body>
</html>