<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <title>Renny Travel</title>
        <meta content="" name="description">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link href="apple-touch-icon.png" rel="apple-touch-icon">
        <link href="{{ asset('/') }}img/logo.png" rel="shortcut icon" type="image/png">
        <link href="{{ asset('/') }}bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="{{ asset('/') }}bower_components/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
        <link href="{{ asset('/') }}bower_components/jquery-ui/themes/base/jquery-ui.min.css" rel="stylesheet">
        <link href="{{ asset('/') }}bower_components/jt.timepicker/jquery.timepicker.css" rel="stylesheet">
        <link href="{{ asset('/') }}bower_components/sweetalert2/sweetalert2.min.css" rel="stylesheet">
        <link href="{{ asset('/') }}css/main.css?11" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ranga" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <meta name="google-site-verification" content="pxRHwV5wzDBWOzzL23ZQvE2lqSneigj29rU_UTXBj_s" />

        <meta http-equiv="Expires" content="0">
        <meta http-equiv="Last-Modified" content="0">
        <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
        <meta http-equiv="Pragma" content="no-cache">

        <!--Select 2-->
        <link href="{{ asset('/') }}bower_components/select2/dist/css/select2.css" rel="stylesheet" />
    </head>
    <body class="container-fluid" ng-app="app" ng-controller="ctrl">
        <header>
            <div class="row sectionVideo">
                <div class="videoContainer">
                    <div style="background-image: url('{{asset('/')}}img/rd.jpg')" class="imagen visible-lg visible-sm"></div>
                    <video
                        id="myVideo" 
                        class="visible-lg visible-sm"
                        ng-show="!traslado.tipo"
                        poster="{{asset('/')}}img/rd.jpg"
                        src="{{asset('/')}}img/video.mp4"
                        autoplay loop muted></video>
                </div>
                <div class="col-xs-12">
                    <div class="row stretch menu-top">
                        <div class="col-xs-12 col-sm-3 text-center hidden-xs">
                            <a href="{{url('/')}}"><img style="max-height: 100px" src="{{asset('/')}}img/logo.png" alt="Renny"></a>
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
                            <a href="{{ url('/login') }}"><i class="border-right fa fa-user-circle" aria-hidden="true"></i></a>
                            <a href="{{ url('/shop') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <a class="navbar-brand visible-xs" href="{{url('/')}}">
                                    <img src="{{asset('/')}}img/logo.png" alt="Renny" style="max-height: 100px">
                                </a>
                            </div>
                            <div id="menu" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="{{url('/')}}">HOME</a></li>
                                    <li><a href="{{url('/partyBoats')}}">PARTY BOATS</a></li>
                                    <li><a href="{{url('/tours')}}">TOURS</a></li>
                                    <li><a href="{{url('/packages')}}">PACKAGES</a></li>
                                    <!-- <li><a href="{{url('/wifiServices')}}">WIFI SERVICES</a></li> -->
                                    <li><a target="_blank" href="https://www.booking.com/searchresults.en-us.html?aid=390851;sid=afea1e48601e7ca6d406845265afe3b4;city=-3364907&;ilp=1;lp_index_textlink2srdaterec=1;d_dcp=1">HOTEL BOOKING</a></li>
                                    <li><a href="{{url('/puntacana')}}">VIP ARRIVAL AND DEPARTURE PUJ</a></li>

                                </ul>
                            </div>
                            <!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
                <div class="col-xs-12 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 fondo_blanco">
                    <div class="row">
                        <!-- <h1 class="col-xs-12 text-center tituloVerde" style="margin-bottom: 2em;">We know how to travel</h1> -->
                        <ul class="nav nav-tabs">
                            <li class="tabTransfer transfer" data-toggle="tooltip" title="Form reservation transfer">
                                <a data-toggle="tab" href="#transfer">
                                    Book your transfer
                                </a>
                            </li>
                            <li class="tabTour tour" data-toggle="tooltip" title="Form reservation tour">
                                <a data-toggle="tab" href="#tours">
                                    Book your tour
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="transfer">
                                <section class="row principal">
                                    <form action="" class="col-xs-12" id="formTraslado" method="post" ng-submit="agregarTraslado($event)">
                                        <div class="row">
                                            <h3 class="col-xs-12">Private Transfer</h3>
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label for="">
                                                        *From
                                                    </label>
                                                    <select 
                                                        class="form-control select2"
                                                        ng-change="cambiarDe();calcularPrecioTraslado();"
                                                        name="de"
                                                        ng-model="traslado.de"
                                                        ng-options="aux.descripcion for aux in deOpciones" 
                                                        required>
                                                        <option value>Choose one</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label for="">
                                                        *To
                                                    </label>
                                                    <select 
                                                        id="hotel"
                                                        class="form-control select2_para" 
                                                        name="para"
                                                        ng-change="calcularPrecioTraslado(); cambiarPara();" 
                                                        ng-model="traslado.para"  
                                                        ng-options="aux.descripcion for aux in paraOpciones" 
                                                        required>
                                                        <option value="">
                                                            Choose one
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label for="">
                                                        *Passengers
                                                    </label>
                                                    <select 
                                                        class="form-control select2" 
                                                        name="adultos" 
                                                        ng-change="calcularPrecioTraslado();cambiarPasajeros()" 
                                                        ng-model="traslado.pasajeros" 
                                                        required>
                                                        <option value="">
                                                            Choose one
                                                        </option>
                                                        <option ng-repeat="aux in vector(100)" value="@{{aux}}">@{{aux}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-group">
                                                    <label for="">
                                                        *Type Transfer
                                                    </label>
                                                    <select 
                                                        class="form-control select2" 
                                                        name="tipo" 
                                                        ng-change="calcularPrecioTraslado()" 
                                                        ng-model="traslado.tipo"
                                                        required>
                                                        <option value="">
                                                            Choose one
                                                        </option>
                                                        <option value="1">
                                                            One Way
                                                        </option>
                                                        <option value="2">
                                                            Round Trip
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12" ng-show="traslado.pasajeros<=2">
                                                <div class="checkbox">
                                                  <label style="color:#555555;">
                                                    <input  ng-change="calcularPrecioTraslado();" 
                                                            ng-model="traslado.vip" 
                                                            type="checkbox" 
                                                            id="vip"
                                                            name="vip"
                                                            value="Audi">
                                                        VIP Audi A4 2017 ($65.00 + tax per direction) Perfect for 2 people
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-xs-12" ng-show="traslado.tipo==1 || traslado.tipo==2">
                                                <div class="row">
                                                    <h5 class="col-xs-12 titulo" ng-show="traslado.de.id==-1">ARRIVAL</h5>
                                                    <h5 class="col-xs-12 titulo" ng-show="traslado.de.id!=-1">DEPARTURE</h5>
                                                    <div class="col-xs-6 col-sm-3">
                                                        <div class="form-group">
                                                            <label for="">
                                                                *Date
                                                            </label>
                                                            <input 
                                                                ng-model="traslado.llegada_fecha"
                                                                class="form-control" 
                                                                id="date1" 
                                                                name="llegada_fecha" 
                                                                type="text" 
                                                                placeholder="Select Date"
                                                                ng-required="traslado.tipo">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-3">
                                                        <div class="form-group">
                                                            <label for="">
                                                                *Time
                                                            </label>
                                                            <input 
                                                                ng-model="traslado.llegada_hora"
                                                                class="form-control" 
                                                                id="time1" 
                                                                name="llegada_hora" 
                                                                type="text" 
                                                                placeholder="Select Time"
                                                                ng-required="traslado.tipo">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-3">
                                                        <div class="form-group">
                                                            <label for="">
                                                                *Airline Name
                                                            </label>
                                                            <input 
                                                                ng-model="traslado.llegada_aerolinea"
                                                                class="form-control" 
                                                                name="
                                                                llegada_aerolinea" 
                                                                type="text" 
                                                                placeholder="Enter airline name"
                                                                ng-required="traslado.tipo">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-3">
                                                        <div class="form-group">
                                                            <label for="">
                                                                *Flight Number
                                                            </label>
                                                            <input 
                                                                ng-model="traslado.llegada_vuelo"
                                                                class="form-control" 
                                                                name="llegada_vuelo" 
                                                                type="text" 
                                                                placeholder="Enter flight name"
                                                                ng-required="traslado.tipo">
                                                        </div>
                                                    </div>  
                                                </div>
                                            </div>
                                            <div class="col-xs-12" ng-show="traslado.tipo==2">
                                                <div class="row">
                                                    <h5 class="col-xs-12 titulo" ng-show="traslado.de.id==-1">DEPARTURE</h5>
                                                    <h5 class="col-xs-12 titulo" ng-show="traslado.de.id!=-1">ARRIVAL</h5>
                                                    <div class="col-xs-6 col-sm-3">
                                                        <div class="form-group">
                                                            <label for="">
                                                                *Date
                                                            </label>
                                                            <input 
                                                                ng-model="traslado.salida_fecha"
                                                                class="form-control" 
                                                                id="date2" 
                                                                name="salida_fecha" 
                                                                type="text" 
                                                                placeholder="Select Date"
                                                                ng-required="traslado.tipo==2">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-3">
                                                        <div class="form-group">
                                                            <label for="">
                                                                *Time
                                                            </label>
                                                            <input 
                                                                ng-model="traslado.salida_hora"
                                                                class="form-control" 
                                                                id="time2" 
                                                                name="salida_hora" 
                                                                type="text" 
                                                                placeholder="Select Time"
                                                                ng-required="traslado.tipo==2">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-3">
                                                        <div class="form-group">
                                                            <label for="">
                                                                *Airline Name
                                                            </label>
                                                            <input 
                                                                ng-model="traslado.salida_aerolinea"
                                                                class="form-control" 
                                                                name="salida_aerolinea" 
                                                                type="text" 
                                                                placeholder="Enter airline name"
                                                                ng-required="traslado.tipo==2">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-3">
                                                        <div class="form-group">
                                                            <label for="">
                                                                *Flight Number
                                                            </label>
                                                            <input 
                                                                ng-model="traslado.salida_vuelo"
                                                                class="form-control" 
                                                                name="salida_vuelo" 
                                                                type="text" 
                                                                placeholder="Enter flight name"
                                                                ng-required="traslado.tipo==2">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-12" ng-show="traslado.tipo==1 || traslado.tipo==2">
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <label for="">Extras</label>
                                                    </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                        <div class="thumbnail">
                                                            <img ng-src="{{ asset("/") }}img/productos/cerveza.jpg" alt="...">
                                                            <div class="caption text-center">
                                                                <h4>Beer</h4>
                                                                <select ng-model="cervezas" name="cervezas" id="" class="form-control" data-ng-change="calcularPrecioTraslado();">
                                                                    <option value="0">($5.00)</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                        <div class="thumbnail">
                                                            <img ng-src="{{ asset("/") }}img/productos/cocacola.jpg" alt="...">
                                                            <div class="caption text-center">
                                                                <h4>Sodas</h4>
                                                                <select ng-model="sodas" name="sodas" id="" class="form-control" data-ng-change="calcularPrecioTraslado();">
                                                                    <option value="0">($3.00)</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                        <div class="thumbnail">
                                                            <img ng-src="{{ asset("/") }}img/productos/vino.jpg" alt="...">
                                                            <div class="caption text-center">
                                                                <h4>Wine</h4>
                                                                <select ng-model="vino" name="vino" id="" class="form-control" data-ng-change="calcularPrecioTraslado();">
                                                                <option value="0">($20.00 bottle)</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                                <option value="8">8</option>
                                                                <option value="9">9</option>
                                                                <option value="10">10</option>
                                                            </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-6 col-sm-6 col-md-3">
                                                        <div class="thumbnail">
                                                            <img ng-src="{{ asset("/") }}img/productos/champagne.jpg" alt="...">
                                                            <div class="caption text-center">
                                                                <h4>Champagne</h4>
                                                                <select ng-model="champagne" name="champagne" id="" class="form-control" data-ng-change="calcularPrecioTraslado();">
                                                                    <option value="0">($25.00 bottle)</option>
                                                                    <option value="1">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="4">4</option>
                                                                    <option value="5">5</option>
                                                                    <option value="6">6</option>
                                                                    <option value="7">7</option>
                                                                    <option value="8">8</option>
                                                                    <option value="9">9</option>
                                                                    <option value="10">10</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="col-xs-12 text-center mt2" style="margin-bottom: 0;">
                                                <a  href="{{ url("/?opcion=2") }}" 
                                                    target="_blank" 
                                                    data-toggle="tooltip" 
                                                    title="Press click book excursion" 
                                                    data-placement="bottom">Book your excursion now</a>
                                            </div> -->
                                            <div class="col-xs-12">
                                                <h3 class="text-center">
                                                    @{{traslado.precio | currency:"$ "}}
                                                </h3>
                                            </div>
                                            <div class="col-xs-12 text-center">
                                                <button class="btn btn-primary traslado" ng-click="opcion='agregar'" name="traslado" type="submit" value="traslado">
                                                    Add to <i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <button class="btn btn-success traslado" ng-click="opcion='reservar'" name="traslado" type="submit" value="traslado">Book now</button>
                                            </div>
                                        </div>
                                    </form>
                                </section>      
                            </div>
                            <div class="tab-pane fade" id="tours">
                                <section class="row principal">
                                    <form action="" class="col-xs-12" id="formTour" method="post" ng-submit="agregarTour($event)">
                                        <div class="row">
                                            <h3 class="col-xs-12">Reservation Tour</h3>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="">*Tour</label>
                                                    <select 
                                                        class="form-control"
                                                        id="tourModel"
                                                        ng-model="tour"
                                                        ng-change="cambiarTour();calcularPrecioTour()"
                                                        ng-options="aux.titulo for aux in tours"
                                                        required>
                                                        <option value>Choose one</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="">
                                                        *Date
                                                    </label>
                                                    <input 
                                                        type="text" 
                                                        class="form-control" 
                                                        id="dateTour" 
                                                        name="fecha" 
                                                        placeholder="Select Date" 
                                                        ng-model="tour.fecha"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6" ng-show="tour.modalidades.length>1">
                                                <div class="form-group">
                                                    <label for="">
                                                        *Tour Type
                                                    </label>
                                                    <select 
                                                        class="form-control"
                                                        id="modalidad"
                                                        name="modalidad"
                                                        ng-model="tour.modalidad"
                                                        ng-change="calcularPrecioTour()"
                                                        ng-options="aux.descripcion for aux in tour.modalidades"
                                                        ng-required="tour.modalidades.length>1">
                                                        <option value="">Choose one</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6" ng-show="tour.horarios.length>1">
                                                <div class="form-group">
                                                    <label for="">
                                                        *Schedule
                                                    </label>
                                                    <select 
                                                        class="form-control" 
                                                        name="horario"
                                                        ng-model="tour.horario"
                                                        ng-required="tour.horarios.length>1">
                                                        <option value="">Choose one</option>
                                                        <option ng-repeat="aux in tour.horarios" value="@{{ aux }}">@{{ aux }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6">
                                                <div class="form-group">
                                                    <label for="">
                                                        *Adults
                                                    </label>
                                                    <select 
                                                        class="form-control" 
                                                        name="adultos"
                                                        ng-model="tour.adultos"
                                                        ng-change="calcularPrecioTour()"
                                                        required>
                                                        <option value="">
                                                            Choose one
                                                        </option>
                                                        <option ng-repeat="aux in pasajeros" value="@{{aux}}">@{{aux}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6" ng-show="tour.modalidades[pos].nino != 0">
                                                <div class="form-group">
                                                    <label for="">
                                                        Children (0-10)
                                                    </label>
                                                    <select 
                                                        class="form-control"
                                                        name="ninos"
                                                        ng-model="tour.ninos"
                                                        ng-change="calcularPrecioTour()">
                                                        <option value="">
                                                            Choose one
                                                        </option>
                                                        <option ng-repeat="aux in pasajeros" value="@{{aux}}">@{{aux}}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- <div class="col-xs-12 col-sm-6">
                                                              <div class="form-group">
                                                                  <label for="">
                                                                      *Hotel Pickup
                                                                  </label>
                                                                  <input 
                                                                      ng-model="tour.hotel" 
                                                                      class="form-control" 
                                                                      name="hotel" 
                                                                      type="text" 
                                                                      list="listHoteles" 
                                                                      placeholder="Enter Hotel" 
                                                                      required>
                                                                  @include("base.hoteles")
                                                              </div>
                                                          </div>     -->              

                                            <div class="col-xs-12">
                                                <h3 class="text-center">
                                                    @{{tour.precio | currency:"$ "}}
                                                </h3>
                                            </div>
                                            <div class="col-xs-12 text-center">
                                                <button class="btn btn-primary tour" ng-click="opcion='agregar'" name="tour" type="submit" value="tour">
                                                    Add to <i class="fa fa-shopping-cart"></i>
                                                </button>
                                                <button class="btn btn-success tour" ng-click="opcion='reservar'" name="tour" type="submit" value="tour">Book now</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!--
                                    <div class="col-xs-12 col-sm-4 hidden-xs derecha">
                                        <div class="row whyChoose">
                                            <h2 class="col-xs-12">WHY CHOOSE US?</h2>
                                            <div class="col-xs-12 itemWhy">
                                                <div class="icon"><i aria-hidden="true" class="fa fa-globe"></i></div>
                                                <h4>Diverse Destinations</h4>
                                            </div>
                                            <div class="col-xs-12 itemWhy">
                                                <div class="icon"><i aria-hidden="true" class="fa fa-money"></i></div>
                                                <h4>Value Money</h4>
                                            </div>
                                            <div class="col-xs-12 itemWhy">
                                                <div class="icon"><i aria-hidden="true" class="fa fa-camera"></i></div>
                                                <h4>Beautiful Places</h4>
                                            </div>
                                            <div class="col-xs-12 itemWhy">
                                                <div class="icon"><i aria-hidden="true" class="fa fa-calculator"></i></div>
                                                <h4>Fast Booking</h4>
                                            </div>
                                            <div class="col-xs-12 itemWhy">
                                                <div class="icon"><i aria-hidden="true" class="fa fa-comments"></i></div>
                                                <h4>Support Team</h4>
                                            </div>
                                            <div class="col-xs-12 itemWhy">
                                                <div class="icon"><i aria-hidden="true" class="fa fa-heart"></i></div>
                                                <h4>Passionate Travel</h4>
                                            </div>
                                        </div>
                                    </div>          
                                    -->
                                </section>    
                            </div>

                            <div id="terminosModal" class="modal fade" role="dialog">
                                <div class="modal-dialog" style="width: 80%">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h3 style="color: #8dc740" class="modal-title text-center">TERMS AND CONDITIONS</h3>
                                        </div>
                                        <div class="modal-body">
                                            <p>The information data and material contained in this website has been prepared solely for the purpose of providing information about Renny Travel DMC, its subsidiaries and partners and the services that they offer. <br><br>
                                            Your access to the website is subject to the following terms and conditions. By using the website you agree to be bound by the Terms and Conditions and we therefore encourage you to click through to read the Terms and Conditions in full. If you do not agree to these Terms and Conditions please do not use the website. Please also see our Privacy page, which explains how we treat your information.
                                            </p>
                                            <br>
                                            <div>
                                                <h4>1. YOUR USE OF THE WEBSITE</h4>
                                                <ul>
                                                    <li>1.1 You agreex to abide by all applicable laws, regulations and codes of conduct when using the website and to be solely responsible for all things arising from your use of the website;</li>
                                                    <li>1.2 not to use the website in any way which might infringe any rights of any third party or give rise to a legal claim against Renny Travel DMC by any third party;</li>
                                                    <li>1.3 not to damage, interfere with or disrupt access to the website or do anything that may interrupt or impair its functionality;</li>
                                                    <li>1.4 not to obtain or attempt to obtain unauthorized access, through whatever means, to the website or other services or computer systems or areas of our, or any of our partners’,networks which are identified as restricted;</li>
                                                    <li>1.5 not to collect or store personal data about other users for commercial purposes;</li>
                                                    <li>1.6 to respect the privacy of your fellow Internet users;</li>
                                                    <li>1.7 to provide true, accurate, complete and current information to us and notify us immediately of any change.</li>
                                                </ul>
                                            </div>
                                            <br>
                                            <div>
                                                <h4>2. CONTENT</h4>
                                                <ul>
                                                    <li>2.1 The material and content provided to you on the website is solely for your personal non-commercial use and you agree not for yourself or through any third party to distribute or commercially exploit all or any part of the Content.</li>

                                                    <li>2.2 All Content (including, but not limited to articles, features, photographs, images, brands, logos, illustrations, audio clips and video clips, as well as all products, software, technology or processes described in this website are protected by copyright, trade marks, service marks and/or other intellectual property rights and laws and all Rights in relation to the website are and shall remain owned or controlled by Renny Travel DMC, or as appropriate, the third party Rights owner. You shall abide by all additional copyright notices, information, or restrictions contained in any Content accessed through this website.</li>

                                                    <li>2.3 Nothing contained on the website should be construed as granting, by implication or otherwise, any license or right to use, deal with or copy in any way in party or in whole any Rights without our written permission or, as appropriate, the permission of the third party Rights owner. Your misuse of the Rights, except as expressly provided in these Terms and Conditions, is strictly prohibited.</li>
                                                </ul>
                                            </div>
                                            <br>
                                            <div>
                                                <h4>3. ACCESSES AND AVAILABILITY OF SERVICE AND LINKS</h4>
                                                <p>This website from time to time contains links to other related World Wide Web Internet sites, resources and sponsors of this website. Since Renny Travel DMC does not approve, check, edit, vet or endorse such sites, you agree that Renny Travel DMC is not responsible or liable in any way for the content, advertising or products available from such sites or any dealings that you may have, or the consequences of such dealings, with the operators of such sites. You agree that any dealings you have with such third party site operators shall be on the terms and conditions (if any) of the third party site operator and should direct any concerns regarding any external link to the site administrator or Webmaster of such site. Renny Travel DMC makes no representations nor does it take any responsibility in relation to the content of any sites accessed through these links.</p>
                                            </div>
                                            <br>
                                            <div>
                                                <h4>4. CHANGES TO TERMS AND CONDITIONS</h4>
                                                <p>Renny Travel DMC may from time to time change, alter, adapt, add or remove portions of these Terms and Conditions and, if it does so, will post any such changes on this website. Your continued use of the website after such changes constitutes your acceptance of those changes.</p>
                                            </div>
                                            <br>
                                            <div>
                                                <h4>5. CHANGES TO WEBSITE</h4>
                                                <p>Renny Travel DMC may also change, suspend or discontinue any aspect of the website, including the availability of any features, information, database or content or restrict your access to parts or all of the website at its discretion without notice or liability.</p>
                                            </div>
                                            <br>
                                            <div>
                                                <h4>6. NO WARRANTIES</h4>
                                                <ul>
                                                    <li>6.1 The website is provided "as is" without any representations or warranties (either express or implied), including but not limited to any implied warranties or implied terms of reliability, quality, functionality, absence of contaminants (including viruses, worms, trojan horses or similar), availability, satisfactory quality, fitness for a particular purpose or non-infringement. All such implied terms and warranties are hereby excluded. Please note that some jurisdictions may not allow the exclusion of implied warranties, so some of the above exclusions may not apply to you. Check your local laws for any restrictions of limitations regarding the exclusion of implied warranties.</li>

                                                    <li>6.2 While Renny Travel DMC uses reasonable efforts to include accurate and up to date information on the website, it makes no warranties or representations as to its accuracy or completeness. Renny Travel DMC is not responsible for any errors or omissions or for the results obtained from the use of such information. The information does not constitute any form of advice, recommendation or arrangement by Renny Travel DMC or its affiliates or any other party involved in the website and is not intended to be relied upon by users in making (or refraining from making) any decisions based on such information. You must make your own decisions on whether or not to rely on any information posted on the website.</li>

                                                    <li>6.3 While Renny Travel DMC takes all reasonable steps to ensure a fast and reliable service it will not be held responsible for the security of the website or for any disruption of the website however caused, loss of or corruption of any material in transit, or loss of or corruption of material or data when downloaded onto any computer system. You will remain responsible and liable for material you upload on to or access from the website and you will indemnify Renny Travel DMC in the manner set out in paragraph 9.2 below in the Terms and Conditions in relation to your accessing or uploading.</li>
                                                </ul>
                                            </div>
                                            <br>
                                            <div>
                                                <h4>7. LIABILITY FOR LOSSES/INDEMNITY</h4>
                                                <ul>
                                                    <li>7.1 By accessing this website you agree that Renny Travel DMC will not be held liable to you or any third party for any direct, indirect, special, consequential or any other loss or damage arising from the use of or inability to use the website or from your access of other material on the internet via web links from this website.</li>

                                                    <li>7.2 You agree to indemnify, keep indemnified, defend and hold harmless Renny Travel DMC and its parent companies, subsidiaries, affiliates and their respective officers, directors, employees, owners, agents, information providers and licensors from and against any and all claims, damages, liability, losses, costs and expenses (including legal fees) (whether or not foreseeable or avoidable) incurred or suffered by any Indemnified Party and any claims or legal proceedings which are brought or threatened arising from your use of, connection with or conduct on the website or any breach by you of these Terms and Conditions. Renny Travel DMC reserves the right, at its own expense, to assume the exclusive defense and control of any matter otherwise subject to indemnification by you, and in such case, you agree to co-operate with out defense of such claim.</li>                           
                                                </ul>
                                            </div>
                                            <br>
                                            <div>
                                                <h4>8. EXCLUSIONS</h4>
                                                <p>The exclusions and limitations contained in these Terms and Conditions apply only to the extent permitted by law.</p>
                                            </div>
                                            <br>
                                            <div>
                                                <h4>9. LEGAL JURISDICTIONS AND APPLICABLE LAW</h4>
                                                <p>Renny’s Management, S.R.L is a Dominican company and Renny Travel DMC is a Dominican Republican company. The terms and conditions of the use of this website shall be governed in accordance with the laws of the Dominican Republic. The user is deemed to hereby submit and agree to the exclusive jurisdiction of the courts of the Dominican Republic in respect of any disputes arising out of or in connection with this Web Site, so the user expressly waives any jurisdiction that may correspond by reason of his domicile. These terms and conditions or any further terms and conditions referenced on this Web Site or any matter related to or in connection herewith.</p>
                                            </div>
                                            <br>
                                            <div>
                                                <h4>10. LIABILITY</h4>
                                                <ul>
                                                    <li>10.1 Online Booking of Independent Third Party Suppliers: Booking services provided for excursions on this site involve services offered by independent third party suppliers. RENNY TRAVEL is not liable nor does it accept liability for actions or omissions of the independent contractors supplying the excursions for which booking services are provided; and the purchaser of the excursions here provided shall be deemed to have waived any claims against RENNY TRAVEL in connection with the excursions purchased.</li>

                                                    <li>10.2 Products, services or excursions on this site for which booking services may be requested involve activities that may involve risk. The consumer of this service assumes the risk inherent in all such activities. By accepting these services, the purchaser thereof agrees that RENNY TRAVEL is not responsible for losses or damages including bodily injury, property damage, or economic loss incurred while participating in the activity for which booking services are provided.</li>                          
                                                </ul>
                                            </div>
                                            <br>
                                            <div>
                                                <h4>11. PROTECTION PLUS</h4>
                                                <p>Protection Plus is an insurance supplement to your personal travel insurance. Protection Plus provides basic personal coverage in case of an accident which may occur during an excursion booked through Renny Travel. The policy includes limited financial reimbursement for ambulance, medical coverage, accidental death and repatriation. Protection Plus is contacted through established insurance companies in destination. The coverage includes: <br>
                                                <h5>Dominican Republic: Seguros Banreservas</h5>
                                                <ul>
                                                    <li>Accident Medical Expense - $15,000 USD</li>
                                                    <li>Accidental death & dismemberment –$15,000 USD</li>
                                                    <li>Ambulance & medical transfers - $50,000 USD</li>
                                                </ul>
                                                </p>
                                            </div>
                                            <br>
                                            <div>
                                                <h4>12. CONDITIONS OF CONTRACT OF ONLINE BOOKINGS</h4>
                                                <p>The service supplier reserves the right to cancel, shorten or alter the excursion due to circumstances outside of their control. In the event of such an occurrence, a full or partial refund may be given, however, the consumer hereby waives any claim against Renny Travel DMC, or the service supplier for any consequential damages arising as a result thereof.</p>
                                            </div>
                                            <br>
                                            <div>
                                                <h4>13. REFUNDS, CANCELLATIONS AND CHANGES</h4>
                                                <ul>
                                                    <li>100% of purchase price when cancellation is made more than 48 hours in advance.</li>
                                                    <li>50% fee of purchase price when cancellation is made between 24 and 48 hours in advance.</li>
                                                    <li>All deposits are non reimbursable.</li> 
                                                    <li>All cancellations made less than 24 hours prior to the start time of the service will be charged in full unless otherwise supported by a medical note from a qualified doctor stating the valid medical conditions for which the client cannot receive the reserved service(s).</li>
                                                    <li>
                                                        All changes to the day/time of the same service shall be subject to the following conditions:
                                                        <ul>
                                                            <li>No charges shall apply to change requests made more than 24 hours in advance.</li>
                                                            <li>Some charges may apply when the request is made less than 24 hours in advance.</li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                            <br>
                                            <div>
                                                <h4>14. TERMINATIONS AND SUSPENSION</h4>
                                                <p>Renny Travel DMC (and any persons authorized by it), may at its sole discretion immediately suspend or terminate your right to use the website without any warning if it considers that you have contravened any of these Terms and Conditions. This is without prejudice to any other rights or remedies that Renny Travel DMC may have.</p>
                                            </div>
                                            <br>
                                            <div>
                                                <h4>15. ASSIGNMENT</h4>
                                                <p>Renny Travel DMC may assign its rights and obligations under these Terms and Conditions and upon any such assignment it shall be relieved of any further obligation hereunder.</p>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="row">
            <!--
            <div class="col-xs-12 parallax-fondo">
                <h3 class="col-xs-12 text-center">Dominican Republic</h3>
            </div>
            -->
            <div class="col-xs-12">
                <div class="row">
                    <h2 class="col-xs-12 text-center tituloVerde mt2">The Best Tours</h2>
                    <div class="col-sm-3 col-xs-12">
                        <div class="thumbnail">
                            <img ng-src="{{asset('/')}}img/tours/@{{ tours[0].id }}.jpg" alt="...">
                            <div class="caption text-center">
                                <h3 style="font-size: 1.5em">@{{ tours[0].titulo }}</h3>
                                <p class="thumbnail-text">@{{ tours[0].descripcion }}</p>
                                <p>
                                    <a href="{{ url('/tour') }}/@{{ tours[0].id }}" class="btn btn-primary" role="button">Book Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="thumbnail">
                            <img ng-src="{{asset('/')}}img/tours/@{{ tours[3].id }}.jpg" alt="...">
                            <div class="caption text-center">
                                <h3>@{{ tours[3].titulo }}</h3>
                                <p class="thumbnail-text">@{{ tours[3].descripcion }}</p>
                                <p>
                                    <a href="{{ url('/tour') }}/@{{ tours[3].id }}" class="btn btn-primary" role="button">Book Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="thumbnail">
                            <img ng-src="{{asset('/')}}img/tours/@{{ tours[5].id }}.jpg" alt="...">
                            <div class="caption text-center">
                                <h3>@{{ tours[5].titulo }}</h3>
                                <p class="thumbnail-text">@{{ tours[5].descripcion }}</p>
                                <p>
                                    <a href="{{ url('/tour') }}/@{{ tours[5].id }}" class="btn btn-primary" role="button">Book Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-12">
                        <div class="thumbnail">
                            <img ng-src="{{asset('/')}}img/tours/@{{ tours[6].id }}.jpg" alt="...">
                            <div class="caption text-center">
                                <h3>@{{ tours[6].titulo }}</h3>
                                <p class="thumbnail-text">@{{ tours[6].descripcion }}</p>
                                <p>
                                    <a href="{{ url('/tour') }}/@{{ tours[6].id }}" class="btn btn-primary" role="button">Book Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <h3 class="col-xs-12 text-center">
                        <a href="{{url('/tours')}}" style="text-decoration: underline;">More tours</a>
                    </h3>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modalPromocion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h1 class="modal-title text-center azul" id="myModalLabel">Renny Travel</h1>
              </div>
              <div class="modal-body">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <img style="max-height:250px;max-width: 100%" src="{{ asset('/') }}img/code.jpeg" alt="">
                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <div class="col-xs-12 text-center">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>








    <footer class="row rojo">
        <div class="col-xs-6 col-sm-4">
            <h4>About Us</h4>   
            <p>We are a DMC Company based in the Dominican Republic with the vision to provide the best travel experience in the caribbean.</p>
            <br>
            <!-- <a style="display:block;color:white;" href="{{ url("/faqs") }}">Faqs</a>
            <a style="display:block;color:white;" href="{{ url("/contactUs") }}">Form Contact Us</a> -->
            
        </div>
        <div class="col-xs-6 col-sm-4 hidden-xs">
            <img class="img-responsive mt" src="{{ asset("/img/logo-footer.png") }}" alt="">    
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
    <script src="{{ asset("/") }}bower_components/select2/dist/js/select2.min.js"></script>
    <script src="{{ asset("/") }}bower_components/sweetalert2/sweetalert2.min.js"></script>
    
    <script src="{{ asset("/") }}js/angular.min.js"></script>

    <script>
        window.opcion="index";
        window.url = '{{ url("/") }}';
        window._token = '{{ csrf_token() }}';
        function myFunction(x) {
            if (x.matches) { // If media query matches
                var video = document.getElementById("myVideo");
                video.play();
                video.muted = true;
                document.getElementById("myVideo").play(); 
            } else {
                document.getElementById("myVideo").pause(); 
            }
        }

        var x = window.matchMedia("(min-width: 768px)");
        myFunction(x); // Call listener function at run time
        x.addListener(myFunction); // Attach listener function on state changes  
    </script>

    <?php if (isset($_GET['tour'])): ?>
        <script>
            window.pos = {{ $_GET['tour'] }};
        </script>
    <?php endif ?>

    <script src="{{ asset("/") }}js/sitio.js?v=1"></script>
    <script src="{{ asset("/") }}js/main.js?v=1"></script>
    <?php if (isset($_GET['opcion'])): ?>
        <?php if ($_GET['opcion']==1): ?>
            <script>$(function(){$('.transfer').trigger('click');});</script>
        <?php else: ?>
            <script>$(function(){$('.tour').trigger('click');});</script>
        <?php endif ?>
    <?php endif ?>

    @if(session('status') )
    <div class="modal fade" id="completado">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <h2 class="col-xs-12 text-center" style="color:green;"><i class="fa fa-check fa-2x"></i></h2>
                        <h2 class="col-xs-12 text-center">Thanks for reservation</h2>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#completado').modal('show');
    </script>
    @endif
</body>
</html>