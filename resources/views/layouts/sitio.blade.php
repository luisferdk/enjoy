<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dominican Air Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/png">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('voyage') }}/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('voyage') }}/css/animate.css">
  <link rel="stylesheet" href="{{ asset('voyage') }}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('voyage') }}/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{ asset('voyage') }}/css/magnific-popup.css">
  <link rel="stylesheet" href="{{ asset('voyage') }}/css/aos.css">
  <link rel="stylesheet" href="{{ asset('voyage') }}/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('voyage') }}/css/jquery.timepicker.css">
  <link rel="stylesheet" href="{{ asset('voyage') }}/css/flaticon.css">
  <link rel="stylesheet" href="{{ asset('voyage') }}/css/icomoon.css">

  <!--Bower-->
  <link href="{{ asset('/') }}bower_components/select2/dist/css/select2.css" rel="stylesheet" />
  <link href="{{ asset('/') }}bower_components/jquery-ui/themes/base/jquery-ui.min.css" rel="stylesheet">
  <link href="{{ asset('/') }}bower_components/sweetalert2/sweetalert2.min.css" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('voyage') }}/css/style.css">

  @yield('css')
</head>

<body>

  <div ng-app="app" ng-controller="ctrl">


    <div class="container-fluid header-line">
      <div class="container">
        <div class="row">
          <div class="col-12 iconos">
            <a href="#"><i class="ion-logo-instagram"></i></a>
            <a href="#"><i class="ion-logo-facebook"></i></a>
            <a href="#"><i class="ion-logo-twitter"></i></a>
            <a href="{{ url('login') }}"><i class="ion-ios-log-in"></i></a>
          </div>
        </div>
      </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img style="height:80px;" class="img-fluid" src='{{ asset("/") }}img/logo.png' alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::is('/')?'active':'' }}">
              <a href="{{ url('/') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item {{ Request::is('flights')?'active':'' }}">
              <a href="{{ url('/flights') }}" class="nav-link">Flights</a>
            </li>
            <li class="nav-item {{ Request::is('transfers')?'active':'' }}">
              <a href="{{ url('/transfers') }}" class="nav-link">Transfers</a>
            </li>
            <li class="nav-item {{ Request::is('excursions')?'active':'' }}">
              <a href="{{ url('/excursions') }}" class="nav-link">Excursions</a>
            </li>
            <li class="nav-item {{ Request::is('contact')?'active':'' }}">
              <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
            </li>
            <li class="nav-item {{ Request::is('shop')?'active':'' }}">
              <a href="{{ url('/shop') }}" class="nav-link"> <i class="ion-ios-cart"></i> Cart</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->


    @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-3">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Dominican Air Service</h2>
              <p>Description ...</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Book Now</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Flight</a></li>
                <li><a href="#" class="py-2 d-block">Transfers</a></li>
                <li><a href="#" class="py-2 d-block">Excursions</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Top Deals</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Flight: PUJ to STO</a></li>
                <li><a href="#" class="py-2 d-block">Transfers: PUJ to Hotel</a></li>
                <li><a href="#" class="py-2 d-block">Excursions: Saona Island</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Punta Cana, Dominican Republic</a></li>
                <li><a href="#" class="py-2 d-block">+1 (809)123-45678</a></li>
                <li><a href="#" class="py-2 d-block">info@dominicanairservices.com</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="">
              <ul class="ftco-footer-social list-unstyled text-center mt-0">
                <li class="><a href=" #"><span class="icon-twitter"></span></a></li>
                <li class="><a href=" #"><span class="icon-facebook"></span></a></li>
                <li class="><a href=" #"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <p>
              Copyright &copy; All rights reserved | Dominican Air Services
            </p>
          </div>
        </div>
      </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>

  </div>
  <script src="{{ asset('voyage') }}/js/jquery.min.js"></script>
  <script src="{{ asset('voyage') }}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{ asset('voyage') }}/js/popper.min.js"></script>
  <script src="{{ asset('voyage') }}/js/bootstrap.min.js"></script>
  <script src="{{ asset('voyage') }}/js/jquery.easing.1.3.js"></script>
  <script src="{{ asset('voyage') }}/js/jquery.waypoints.min.js"></script>
  <script src="{{ asset('voyage') }}/js/jquery.stellar.min.js"></script>
  <script src="{{ asset('voyage') }}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('voyage') }}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{ asset('voyage') }}/js/aos.js"></script>
  <script src="{{ asset('voyage') }}/js/jquery.animateNumber.min.js"></script>
  <script src="{{ asset('voyage') }}/js/jquery.timepicker.min.js"></script>
  <script src="{{ asset('/') }}bower_components/jquery-ui/jquery-ui.min.js"></script>
  <script src="{{ asset('/') }}bower_components/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="{{ asset('/') }}bower_components/select2/dist/js/select2.min.js"></script>
  <script src="{{ asset('/') }}bower_components/sweetalert2/sweetalert2.min.js"></script>
  <!-- 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('voyage') }}/js/google-map.js"></script>
    -->
  <script src="{{ asset('voyage') }}/js/main.js"></script>

  <script src="{{ asset('/') }}js/angular.min.js"></script>
  <script src="{{ asset('/') }}js/angular-sanitize.min.js"></script>
  @yield('js')
  <script>
    window.opcion = "index";
    window.url = '{{ url("/") }}';
    window._token = '{{ csrf_token() }}';
  </script>

  <script src="{{ asset("/") }}js/sitio.js?v=31"></script>
  <script src="{{ asset("/") }}js/main.js?v=31"></script>

</body>

</html>