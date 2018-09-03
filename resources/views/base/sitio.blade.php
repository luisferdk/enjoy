<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <title>Renny Travel</title>
        <meta content="" name="description">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="apple-touch-icon.png" rel="apple-touch-icon">
        <link href="{{ asset('img/logo.png') }}" rel="shortcut icon" type="image/png">
        <link href="{{ asset('img/logo.png') }}" rel="shortcut icon" type="image/png">
        <link href="{{ asset('/') }}bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('/') }}bower_components/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('/') }}bower_components/jquery-ui/themes/base/jquery-ui.min.css" rel="stylesheet">
        <link href="{{ asset('/') }}bower_components/jt.timepicker/jquery.timepicker.css" rel="stylesheet">
        <link href="{{ asset('/') }}css/main.css?10" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <meta name="google-site-verification" content="pxRHwV5wzDBWOzzL23ZQvE2lqSneigj29rU_UTXBj_s" />

        <!--Select 2-->
        <link href="{{ asset('/') }}bower_components/select2/dist/css/select2.css" rel="stylesheet" />
    </head>
    <body class="container-fluid" ng-app="app" ng-controller="ctrl">
        <header>
            <div class="row stretch menu-top">
                <div class="col-xs-12 col-sm-3 text-center hidden-xs">
                    <a href="{{ url("/") }}"><img style="max-height: 100px" src="{{ asset('/') }}img/logo.png" alt="Renny"></a>
                </div>
                <div class="col-xs-8 col-sm-6">
                    <div class="row center text-center" style="height: 100%;line-height: 1.5em;">
                        <a href="tel:+1(809)949-0519" class="col-xs-12">
                            <strong>+1 (809) 949-0519</strong>
                        </a>
                        <a href="mailto:info@rennytravel.com" class="col-xs-12">
                            <strong>info@rennytravel.com</strong>
                        </a>
                        <a href="#" class="col-xs-12 hidden-xs">
                            <strong>08:00 AM - 05:00 PM</strong>
                        </a>
                    </div>
                </div>
                <div class="col-xs-4 col-sm-3 text-right iconos">
                    <a href="http://www.facebook.com/rennytravel"><i aria-hidden="true" class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/RennysTravel"><i aria-hidden="true" class="fa fa-twitter"></i></a>
                    <a href="https://www.instagram.com/rennytravel/"><i aria-hidden="true" class="fa fa-instagram"></i></a>
                    <a href="{{ url('/admin') }}"><i class="border-right fa fa-user-circle" aria-hidden="true"></i></a>
                </div>
            </div>
            <div class="menu">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand visible-xs" href="{{ url('/') }}">
                                <img src="{{ asset('/') }}img/logo.png" alt="Renny" style="max-height: 100px">
                            </a>
                        </div>
                        <div id="menu" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class=" {{ Request::is('/')?'active':'' }}">
                                    <a href="{{ url('/') }}">HOME</a>
                                </li>
                                <li class=" {{ Request::is('partyBoats')?'active':'' }}
                                            redirect partyActive">
                                    <a href="{{ url('/partyBoats') }}">PARTY BOATS</a></li>
                                <li class=" {{ Request::is('tours')?'active':'' }}
                                            redirect toursActive">
                                    <a href="{{ url('/tours') }}">TOURS</a></li>
                                <li class=" {{ Request::is('packages')?'active':'' }}
                                            redirect weddingActive">
                                    <a href="{{ url('/packages') }}">PACKAGES</a></li>
                                <li class=" {{ Request::is('wifiServices')?'active':'' }}
                                            redirect wifiActive">
                                    <a href="{{ url('/wifiServices') }}">WIFI SERVICES</a></li>
                                <li>
                                    <a target="_blank" href="https://www.booking.com/searchresults.en-us.html?aid=390851;sid=afea1e48601e7ca6d406845265afe3b4;city=-3364907&;ilp=1;lp_index_textlink2srdaterec=1;d_dcp=1">HOTEL BOOKING</a>
                                </li>
                                <li class=" {{ Request::is('puntacana')?'active':'' }}
                                            redirect PuntaCanaVIP">
                                    <a href="{{ url('/puntacana') }}">VIP ARRIVAL AND DEPARTURE PUJ</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </nav>
            </div>            
        </header>











		@yield('content')







	<footer class="row rojo">
		<div class="col-xs-6 col-sm-4">
			<h4>About Us</h4>	
			<p>We are a DMC Company based in the Dominican Republic with the vision to provide the best travel experience in the caribbean.</p>
			<br>
			<a style="display:block;color:white;" href="{{ url("/faqs") }}">Faqs</a>
			<a style="display:block;color:white;" href="{{ url("/contactUs") }}">Form Contact Us</a>
			
		</div>
		<div class="col-xs-6 col-sm-4 hidden-xs">
			<img class="img-responsive mt" src="{{ asset("img/logo-footer.png") }}" alt="">	
			<script src='//www.weddingwire.com/assets/vendor/widgets/ww-rated-2013.js' type='application/javascript'></script><div id='ww-widget-wwrated-2013'><a class="ww-top" target="_blank" title="Weddings, Wedding, Wedding Venues" href="https://www.weddingwire.com"></a><a class="ww-bottom" target="_blank" title="Renny Travel Reviews, Dominican Republic Transportation" href="https://www.weddingwire.com/reviews/renny-travel-punta-cana/0099b5164be06de7.html"></a></div><script>  WeddingWire.ensureInit(function() {WeddingWire.createWWRated2013({"vendorId":"0099b5164be06de7" }); });</script>
		</div>
		<div class="col-xs-6 col-sm-4">
			<h4>Contact Us</h4>
			<p><i class="fa fa-home" aria-hidden="true"></i> Avenida Barcelo Plaza Meeting Point Local B-05</p>
			<p><i class="fa fa-envelope" aria-hidden="true"></i> info@rennytravel.com</p>
			<p><i class="fa fa-phone" aria-hidden="true"></i> +1 829 850 7005</p>
			<p><i class="fa fa-phone" aria-hidden="true"></i> Emergency +1 (809) 949-0519</p>
			<p><i class="fa fa-phone" aria-hidden="true"></i> Cell +1 (829) 850-7005</p>
			<p><i class="fa fa-phone" aria-hidden="true"></i> USA +1 (786) 630-6006</p>
			
		</div>
		<div class="col-xs-12 text-center">
			<p></p>Developed by <a href="http://domtecno.com" class="verde">Domtecno.com</a>
			<p>&copy Copyright Renny Travel 2018</p>
		</div>
	</footer>
	<script src="{{ asset("/") }}bower_components/jquery/dist/jquery.min.js"></script>
	<script src="{{ asset("/") }}bower_components/jt.timepicker/jquery.timepicker.min.js"></script>
	<script src="{{ asset("/") }}bower_components/jquery-ui/jquery-ui.min.js"></script>
	<script src="{{ asset("/") }}bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="{{ asset("/") }}bower_components/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="{{ asset("/") }}bower_components/select2/dist/js/select2.min.js"></script>
	
	<script src="{{ asset("/") }}js/angular.min.js"></script>
	<script src="{{ asset("/") }}js/app.js"></script>
    <script src="{{ asset("/") }}js/main.js"></script>

	<script>

		setTimeout(function(){

			if($('#menu li.active').hasClass('redirect')==true){
			    $('#redirectTransfer').attr("href","{{ url("/") }}?opcion=1");
			    $('#redirectTransfer2').attr("href","{{ url("/") }}?opcion=1");
			    $('#redirectTours').attr("href","{{ url("/") }}?opcion=2");
			    $('#redirectTransfer').removeAttr('data-toggle');
			    $('#redirectTours').removeAttr('data-toggle');
			}

		}, 500);

	</script>
    
    @include('base.angular')
    @yield('js')
</body>
</html>