<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <title>Flowery</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

 

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
        
        @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
        <div class="row justify-content-center">
        
            @yield('content')
       
        
    </div>
    </div> 
    

    <footer class="ftco-footer ftco-section">
        <div class="container">
            
          <div class="row mb-5">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Flowery</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                  <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                  <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-5">
                <h2 class="ftco-heading-2">Menu</h2>
                <ul class="list-unstyled">
                  <li><a href="{{URL::to('/shop')}}" class="py-2 d-block">Shop</a></li>
                  <li><a href="{{URL::to('/about')}}" class="py-2 d-block">About</a></li>
                  <li><a href="{{URL::to('/order')}}" class="py-2 d-block">Order</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
               <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Help</h2>
                <div class="d-flex">
                    <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                      <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                      <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                      <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                      <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                    </ul>
                    <ul class="list-unstyled">
                      <li><a href="#" class="py-2 d-block">FAQs</a></li>
                      <li><a href="#" class="py-2 d-block">Contact</a></li>
                    </ul>
                  </div>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Have a Questions?</h2>
                  <div class="block-23 mb-3">
                    <ul>
                      <li><span class="icon icon-map-marker"></span><span class="text">XY útja 42., Budapest</span></li>
                      <li><a href="#"><span class="icon icon-phone"></span><span class="text">+36 555 44 44</span></a></li>
                      <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@flowery.com</span></a></li>
                    </ul>
                  </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
  
             
            </div>
          </div>
        </div>
      </footer>
      
    
  
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
  
  
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/aos.js"></script>
    <script src="../js/jquery.animateNumber.min.js"></script>
    <script src="../js/bootstrap-datepicker.js"></script>
    <script src="../js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="../js/google-map.js"></script>
    <script src="../js/main.js"></script>
      
    </body>
  </html>