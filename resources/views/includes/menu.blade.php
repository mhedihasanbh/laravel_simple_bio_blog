<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog-Biography</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('logo/'.psapp()->website_logo) }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!--header-->
    <section class="header_area">
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="header_social_icon">
                       <a href="https://www.facebook.com/{{soial_data('facebook')}}"><i class="fa-brands fa-facebook social_icon facebook_icon fa-2x"></i></a>
                       <a href="https://www.instagram.com/{{soial_data('instgram')}}"><i class="fa-brands fa-instagram social_icon instgram_icon"></i></a>
                       <a href="https://twitter.com/{{soial_data('instgram')}}"><i class="fa-brands fa-twitter  social_icon twitter_icon"></i></a>
                       <a href="https://www.linkedin.com/{{soial_data('linkdin')}}"><i class="fa-brands fa-linkedin social_icon linkdin_icon"></i></a>
                       <a href="https://bn.quora.com/{{soial_data('quora')}}"><i class="fa-brands fa-quora  social_icon quora_icon"></i></a>
                    </div>
                 
                </div>
                <div class="col-md-4">
                    <div class="main_header">
                      
                            <ul>
                                @foreach ($categorys as $category )
                                <li><a href="">{{$category->category_name}}</a></li>
                                
                                @endforeach
                                
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
                            
                            <form class="form-inline" method="get" action="{{route('search')}}">
                                <div class="row">
                                  <div class="col-md-8">
                                    <input type="text" name="search" class="form-control" id="inputPassword2" placeholder="Search..">
                                  </div>
                                  <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary mb-2 ">Search</button>
                                  </div>
                                </div>
                              </form>
                            
                        </div>
                       
                    </div>

                </div>
            </div>
        </div>
       
    </section>