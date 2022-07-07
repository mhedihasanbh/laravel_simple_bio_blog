<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programming Question and ans</title>
      <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- Font Awosome CDN -->
   <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <!-- Owl carousel -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
   <!-- Main Css -->
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
</head>
<body>
    <!-- Header Section Start -->
    <header class="header-area"> 
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <div class="header-logo">
                        <img src="images/logo.png" width="70" height="70">
                    </div>
           
                </div>
                <div class="col-md-6">
                    <nav class="navbar navbar-expand-lg ">
                       
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse header-nav" id="navbarNav">
                          <ul class="navbar-nav">
                            <li class="nav-item active">
                              <a class="nav-link" href="#">Grepper</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Search</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#">Writeups</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link ">Faq</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link ">Docs</a>
                              </li>
                          </ul>
                        </div>
                      </nav>
                </div>
                <div class="col-md-4">
                    <div class="logon-area">
                        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                            <div class="btn-group mr-2" role="group" aria-label="First group">
                              <button type="button" class="btn btn-light border">Login</button>
                              
                            </div>
                            <div class="btn-group mr-2" role="group" aria-label="Second group">
                              <button type="button" class="btn btn-light border">Register</button>
                              
                            </div>
                           
                          </div>

                    </div>
                </div>
            </div>
        </div>
        
    </header>
    <!-- Header Section end -->
    @yield('content')
    <!-- Footer Widget Start -->
    <section class="footer-widget-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="footer-single-area">
                        <h2>Greeper</h2>
                        <ul>
                            <li><a href="">Features</a></li>
                            <li><a href="">Reviews</a></li>
                            <li><a href="">Code Answer</a></li>
                            <li><a href="">Search Code Snippets</a></li>
                          
                            
                           
                        </ul>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-single-area">
                        <h2>Documents</h2>
                        <ul>
                            <li><a href="">Adding code Snippets</a></li>
                            <li><a href="">Viewing Copying Snippet</a></li>
                            <li><a href="">Faq</a></li>
                            <li><a href="">Welcome</a></li> 
                             
                        </ul>
                        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-single-area">
                        <h2>Follow us</h2>
                        <div class="footer-social-icon">
                            <i class="fa-brands fa-facebook social_icon facebook_icon fa-2x"></i></a>
                            <a href=""><i class="fa-brands fa-instagram social_icon instgram_icon fa-2x"></i></a>
                            <a href=""><i class="fa-brands fa-twitter  social_icon twitter_icon fa-2x"></i></a>
                            <a href=""><i class="fa-brands fa-linkedin social_icon linkdin_icon fa-2x"></i></a>
                            <a href=""><i class="fa-brands fa-quora  social_icon quora_icon fa-2x"></i></a>
                         </div>
                         <h4>Contact</h4>
                         <p>support@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-single-area">
                        <h2>Legal</h2>
                        <ul>
                            <li><a href="">Privacy policy</a></li>
                            <li><a href="">Terms & Conditions</a></li>
                            <li><a href="">Grepper Team</a></li> 
                            <li><a href="">Pricing</a></li>
                            
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Footer Widget End -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- owl-carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      var owl = $('.owl-carousel');
owl.owlCarousel({
    loop:true,
    nav:true,
    margin:10,
    
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },            
        960:{
            items:5
        },
        1300:{
            items:1
        }
    }
});
owl.on('mousewheel', '.owl-stage', function (e) {
    if (e.deltaY>0) {
        owl.trigger('next.owl');
    } else {
        owl.trigger('prev.owl');
    }
    e.preventDefault();
});
    </script>
</body>
</html>