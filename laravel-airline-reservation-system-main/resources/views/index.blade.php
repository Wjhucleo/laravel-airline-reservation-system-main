<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('frontend/style.css') }}" />
  <link rel="icon" href="{{ asset('frontend/images/airEmsi.jpeg') }}" type="image/x-icon" />

  <!-- Animate.css -->
  <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="{{ asset('frontend/css/icomoon.css') }}">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}">
  <!-- Superfish -->
  <link rel="stylesheet" href="{{ asset('frontend/css/superfish.css') }}">

  <link rel="stylesheet" href="{{ asset('frontend/css/style1.css') }}">

  <!-- Modernizr JS -->
  <script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>

  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="{{ asset('js/respond.min.js') }}"></script>
  <![endif]-->
  <title>{{ config('app.name') }}</title>
</head>

<body> <div id="fh5co-wrapper">
  <div id="fh5co-page">
  <div id="fh5co-header">
    <header id="fh5co-header-section">
      <div class="container">
        <div class="nav-header">
          <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
          <h1 id="fh5co-logo"><a>Flight booking</a></h1>
          <!-- START #fh5co-menu-wrap -->
          <nav id="fh5co-menu-wrap" role="navigation">
            <ul class="sf-menu" id="fh5co-primary-menu">
              <li>
                <a class="fh5co-sub-ddown"><i class="glyphicon glyphicon-user"></i></a>
                <ul class="fh5co-sub-menu">
                  <li><a href="{{ route('login') }}">Login</a></li>
                  <li><a href="{{ route('register') }}">Register</a></li>
                </ul>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    
  </div>
  
  
  <div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover text-center" data-stellar-background-ratio="1" style="background-image: url(frontend/images/plane.webp);">
      <div class="desc animate-box">
        <h2>Travel Around The World.</h2>
        
        <a class="btn-primary btn-lg" href="{{ route('tickets.flights') }}">Book a flight</a>
        <a class="btn-primary btn-lg" href="{{ route('register') }}">Signup</a>
      </div>
    </div>

  </div>


  <div class="fh5co-listing">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 fh5co-item-wrap">
          <a class="fh5co-listing-item">
            <img src="frontend/images/paris.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
            <div class="fh5co-listing-copy">
              <h2>Paris</h2>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-4 fh5co-item-wrap">
          <a class="fh5co-listing-item">
            <img src="frontend/images/NYC.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
            <div class="fh5co-listing-copy">
              <h2>New York</h2>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-4 fh5co-item-wrap">
          <a class="fh5co-listing-item">
            <img src="frontend/images/london.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
            <div class="fh5co-listing-copy">
              <h2>London</h2>
            </div>
          </a>
        </div>
        <!-- END 3 row -->
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-4 fh5co-item-wrap">
          <a class="fh5co-listing-item">
            <img src="frontend/images/amsterdam.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
            <div class="fh5co-listing-copy">
              <h2>Amsterdam</h2>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-4 fh5co-item-wrap">
          <a class="fh5co-listing-item">
            <img src="frontend/images/kech.jpeg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
            <div class="fh5co-listing-copy">
              <h2>Marrakech</h2>
            </div>
          </a>
        </div>
        <div class="col-md-4 col-sm-4 fh5co-item-wrap">
          <a class="fh5co-listing-item">
            <img src="frontend/images/japan.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co" class="img-responsive">
            <div class="fh5co-listing-copy">
              <h2>Japan</h2>
            </div>
          </a>
        </div>
        <!-- END 3 row -->


      </div>
    </div>
  </div>

  <footer>
    <div>
      <p>©
        <script>
          document.write(new Date().getFullYear())
        </script> <p> All Rights Reserved.</p>
      </p>
    </div>
  </footer>
</div>
<!-- END fh5co-page -->

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
<script src="{{ asset('frontend/script.js') }}"></script></div>

  <!-- Scripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
  <script src="{{ asset('frontend/script.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('frontend/js/hoverIntent.js') }}"></script>
  <script src="{{ asset('frontend/js/superfish.js') }}"></script>
  <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>
</html>
