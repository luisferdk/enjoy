<!DOCTYPE html>
<html lang="en">

<head>
  <title>Punta Cana Enjoyment - The Best web to buy tours and transfers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="The BEST Tours in Punta Cana!  Best Selection, Best Prices, Best Guarantee, Best Reviews! Dont take our word for it, listen to our Customers! CLICK HERE" />
  <meta name="keywords" content="excursions, tours, punta cana, dominican, vacation, resort, bavaro, caribbean" />

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
              <a href="https://web.facebook.com/puntacanaenjoyment/?modal=admin_todo_tour&_rdc=1&_rdr"><i class="ion-logo-facebook"></i></a>
            <a href="https://www.instagram.com/enjoymentpuntacana/?hl=es-la"><i class="ion-logo-instagram"></i></a>
            <a href="{{ url('login') }}"><i class="ion-ios-log-in"></i></a>
          </div>
        </div>
      </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
          <img class="img-fluid" src='{{ asset("/") }}img/logo.png' alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
          aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Request::is('/')?'active':'' }}">
              <a href="{{ url('/') }}" class="nav-link">Home</a>
            </li>
            <li class="nav-item {{ Request::is('shop')?'active':'' }}">
              <a href="{{ url('/shop') }}" class="nav-link"> <i class="ion-ios-cart"></i>
                @if(!Request::is('shop'))
                <span class="badge badge-primary text-white">@{{ nro }}</span>
                @else
                <span class="badge badge-light text-primary">@{{ nro }}</span>
                @endif
                Cart</a>
            </li>
            <li class="nav-item {{ Request::is('aboutUs')?'active':'' }}">
              <a href="{{ url('/aboutUs') }}" class="nav-link">About Us</a>
            </li>
            <li class="nav-item {{ Request::is('contact')?'active':'' }}">
              <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    @yield('content')

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-3">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Enjoyment</h2>
              <p>We are a work team made up of more than 20 people willing to always offer our
                customers a good service, quality products and the best travel alternatives to make reality
                Your Travel dreams.</p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Book Now</h2>
              <ul class="list-unstyled">
                @if(Request::is('/'))
                  <li><button id="Transfers" class="btn btn-link pl-0 py-2 d-block">Transfers</button></li>
                  <li><button id="Excursions" class="btn btn-link pl-0 py-2 d-block">Excursions</button></li>
                  <li><button id="Hotels" class="btn btn-link pl-0 py-2 d-block">Hotels</button></li>
                @else
                  <li><a href="{{ url('/') }}" class="pl-0 py-2 d-block">Transfers</a></li>
                  <li><a href="{{ url('/') }}" class="pl-0 py-2 d-block">Excursions</a></li>
                  <li><a href="{{ url('/') }}" class="pl-0 py-2 d-block">Hotels</a></li>
                @endif
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Policies</h2>
              <ul class="list-unstyled">
                <li><a href="{{ url('cancellation-and-refund') }}" class="py-2 d-block">Cancellation and Refund</a></li>
                <li><a href="{{ url('payment-methods') }}" class="py-2 d-block">Payment Methods</a></li>
                <li><a href="{{ url('use-and-privacy') }}" class="py-2 d-block">Use and Privacy</a></li>
                <li><a href="{{ url('exhortation') }}" class="py-2 d-block">Exhortation when Traveling</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Contact Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Av.España ,Plaza Mayoral ,Local No.203,Bavaro,P.C.</a></li>
                <li><a href="tel:+1 (809) 872-6403" class="py-2 d-block">+1 (809) 872-6403</a></li>
                <li><a href="mailto:info@puntacanaenjoyment.com" class="py-2 d-block">info@puntacanaenjoyment.com</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="">
              <ul class="ftco-footer-social list-unstyled text-center mt-0">
                <li><a href="https://web.facebook.com/puntacanaenjoyment/?modal=admin_todo_tour&_rdc=1&_rdr"><span class="icon-facebook"></span></a></li>
                <li><a href="https://www.instagram.com/enjoymentpuntacana/?hl=es-la"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <p>
              Copyright &copy; All rights reserved | Enjoyment
            </p>
          </div>
        </div>
      </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
          stroke="#F96D00" /></svg></div>

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

  <script src="{{ asset('/') }}js/angular.min.js"></script>
  <script src="{{ asset('/') }}js/angular-sanitize.min.js"></script>
  @yield('js')
  <script>
    window.opcion = "index";
    window.url = '{{ url("/") }}';
    window._token = '{{ csrf_token() }}';
  </script>

  <script src="{{ asset("/") }}js/sitio.js?v=32"></script>
  <script src="{{ asset("/") }}js/main.js?v=32"></script>
  <script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+1 (809) 872-6403", // WhatsApp number
            call_to_action: "Hello, how may we help you?", // Call to action
            button_color: "#A8CE50", // Color of button
            position: "right", // Position may be 'right' or 'left'
            order: "whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
</body>

</html>