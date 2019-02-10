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
  
  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('voyage') }}/css/style.css">
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
            <li class="nav-item {{ Request::is('about')?'active':'' }}">
              <a href="{{ url('/about') }}" class="nav-link">About</a>
            </li>
            <li class="nav-item {{ Request::is('contact')?'active':'' }}">
              <a href="{{ url('/contact') }}" class="nav-link">Contact</a>
            </li>
            <li class="nav-item {{ Request::is('cart')?'active':'' }}">
              <a href="{{ url('/cart') }}" class="nav-link"> <i class="ion-ios-cart"></i> Cart</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('{{asset('voyage')}}/images/bg_4.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Experience the best trip ever</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('{{asset('voyage')}}/images/bg_1.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Making the most out of your holiday</h1>
            </div>
          </div>
        </div>
      </div>

      <div class="slider-item" style="background-image: url('{{asset('voyage')}}/images/bg_3.jpg');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <h1 class="mb-3">Travel Operator Just For You</h1>
            </div>
          </div>
        </div>
      </div>
    </section>


    <div class="ftco-section-search">
      <div class="container">
        <div class="row">
          <div class="col-md-12 tabulation-search">
            <div class="element-animate">
              <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link p-3 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-flights" role="tab"
                  aria-controls="v-pills-flights" aria-selected="true">Flighs</a>
                <a class="nav-link p-3" id="v-pills-transfers-tab" data-toggle="pill" href="#v-pills-transfers" role="tab"
                  aria-controls="v-pills-transfers" aria-selected="false">Transfers</a>
                <a class="nav-link p-3" id="v-pills-excursions-tab" data-toggle="pill" href="#v-pills-excursions" role="tab"
                  aria-controls="v-pills-excursions" aria-selected="false"> Excursions</a>
              </div>
            </div>

            <div class="tab-content py-5" id="v-pills-tabContent">
              <div class="tab-pane fade show active" id="v-pills-flights" role="tabpanel" aria-labelledby="v-pills-flights-tab">
                <div class="block-17">




                  <form action="" class="fields" id="formFlights" method="post" ng-submit="agregarTraslado($event)">
                    <div class="row">
                      <div class="col-4">
                        <div class="form-group">
                          <select class="form-control select2" name="origen" ng-model="vuelo.origen" ng-options="aux.origen for aux in vuelos"
                            required>
                            <option value>From</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <select class="form-control select2" name="destino" ng-model="vuelo.destino" ng-options="aux.descripcion group by aux.categoria for aux in vuelo.origen.destinos"
                            required>
                            <option value="">To</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <select class="form-control select2" name="adultos" ng-model="vuelo.pasajeros" required>
                            <option value="">
                              Passengers
                            </option>
                            <option ng-repeat="aux in vector(100)" value="@{{aux}}">@{{aux}}</option>
                          </select>
                        </div>
                      </div>

                      <!-- 
                      <div class="col-12" ng-show="vuelo.pasajeros>0">
                        <div class="row">
                          <h5 class="col-12 titulo" ng-show="traslado.de.id==-1">ARRIVAL</h5>
                          <h5 class="col-12 titulo" ng-show="traslado.de.id!=-1">DEPARTURE</h5>
                          <div class="col-6 col-sm-3">
                            <div class="form-group">
                              <label for="">
                                *Date
                              </label>
                              <input ng-model="traslado.llegada_fecha" class="form-control" id="date1" name="llegada_fecha"
                                type="text" placeholder="Select Date" ng-required="traslado.tipo">
                            </div>
                          </div>
                          <div class="col-6 col-sm-3">
                            <div class="form-group">
                              <label for="">
                                *Time
                              </label>
                              <input ng-model="traslado.llegada_hora" class="form-control" id="time1" name="llegada_hora"
                                type="text" placeholder="Select Time" ng-required="traslado.tipo">
                            </div>
                          </div>
                          <div class="col-6 col-sm-3">
                            <div class="form-group">
                              <label for="">
                                *Airline Name
                              </label>
                              <input ng-model="traslado.llegada_aerolinea" class="form-control" name="
                                                      llegada_aerolinea"
                                type="text" placeholder="Enter airline name" ng-required="traslado.tipo">
                            </div>
                          </div>
                          <div class="col-6 col-sm-3">
                            <div class="form-group">
                              <label for="">
                                *Flight Number
                              </label>
                              <input ng-model="traslado.llegada_vuelo" class="form-control" name="llegada_vuelo" type="text"
                                placeholder="Enter flight name" ng-required="traslado.tipo">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12" ng-show="traslado.tipo==2">
                        <div class="row">
                          <h5 class="col-12 titulo" ng-show="traslado.de.id==-1">DEPARTURE</h5>
                          <h5 class="col-12 titulo" ng-show="traslado.de.id!=-1">ARRIVAL</h5>
                          <div class="col-6 col-sm-3">
                            <div class="form-group">
                              <label for="">
                                *Date
                              </label>
                              <input ng-model="traslado.salida_fecha" class="form-control" id="date2" name="salida_fecha"
                                type="text" placeholder="Select Date" ng-required="traslado.tipo==2">
                            </div>
                          </div>
                          <div class="col-6 col-sm-3">
                            <div class="form-group">
                              <label for="">
                                *Time
                              </label>
                              <input ng-model="traslado.salida_hora" class="form-control" id="time2" name="salida_hora"
                                type="text" placeholder="Select Time" ng-required="traslado.tipo==2">
                            </div>
                          </div>
                          <div class="col-6 col-sm-3">
                            <div class="form-group">
                              <label for="">
                                *Airline Name
                              </label>
                              <input ng-model="traslado.salida_aerolinea" class="form-control" name="salida_aerolinea"
                                type="text" placeholder="Enter airline name" ng-required="traslado.tipo==2">
                            </div>
                          </div>
                          <div class="col-6 col-sm-3">
                            <div class="form-group">
                              <label for="">
                                *Flight Number
                              </label>
                              <input ng-model="traslado.salida_vuelo" class="form-control" name="salida_vuelo" type="text"
                                placeholder="Enter flight name" ng-required="traslado.tipo==2">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12 mt-2 mb-1" ng-show="traslado.precio>0">
                        <h3 class="text-center">
                          @{{vuelo.precio | currency:"$ "}}
                        </h3>
                      </div>
                      <div class="col-12 text-center" ng-show="traslado.precio>0">
                        <button class="btn btn-primary traslado" ng-click="opcion='agregar'" name="traslado" type="submit"
                          value="traslado">
                          Add to <i class="ion-ios-cart"></i>
                        </button>
                        <button class="btn btn-default traslado" ng-click="opcion='reservar'" name="traslado" type="submit"
                          value="traslado">Book now</button>
                      </div>
                    -->
                    </div>
                  </form>












                </div>
              </div>

              <div class="tab-pane fade" id="v-pills-transfers" role="tabpanel" aria-labelledby="v-pills-transfers-tab">
                <div class="block-17">


                  <form action="" class="fields" id="formTraslado" method="post" ng-submit="agregarTraslado($event)">
                    <div class="row">
                      <div class="col-3">
                        <div class="form-group">
                          <select class="form-control select2" ng-change="cambiarDe();calcularPrecioTraslado();" name="de"
                            ng-model="traslado.de" ng-options="aux.descripcion for aux in deOpciones" required>
                            <option value>From</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="form-group">
                          <select id="hotel" class="form-control select2_para" name="para" ng-change="calcularPrecioTraslado(); cambiarPara();"
                            ng-model="traslado.para" ng-options="aux.descripcion for aux in paraOpciones" required>
                            <option value="">
                              To
                            </option>
                          </select>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="form-group">
                          <select class="form-control select2" name="adultos" ng-change="calcularPrecioTraslado();cambiarPasajeros()"
                            ng-model="traslado.pasajeros" required>
                            <option value="">
                              Passengers
                            </option>
                            <option ng-repeat="aux in vector(100)" value="@{{aux}}">@{{aux}}</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-3">
                        <div class="form-group">
                          <select class="form-control select2" name="tipo" ng-change="calcularPrecioTraslado()"
                            ng-model="traslado.tipo" required>
                            <option value="">
                              Type Transfer
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
                      <div class="col-12" ng-show="traslado.pasajeros<=2">
                        <div class="checkbox">
                          <label style="color:#555555;">
                            <input ng-change="calcularPrecioTraslado();" ng-model="traslado.vip" type="checkbox" id="vip"
                              name="vip" value="Audi">
                            VIP Audi A4 2017 ($65.00 + tax per direction) Perfect for 2 people
                          </label>
                        </div>
                      </div>
                      <div class="col-12" ng-show="traslado.tipo==1 || traslado.tipo==2">
                        <div class="row">
                          <h5 class="col-12 titulo" ng-show="traslado.de.id==-1">ARRIVAL</h5>
                          <h5 class="col-12 titulo" ng-show="traslado.de.id!=-1">DEPARTURE</h5>
                          <div class="col-6 col-sm-3">
                            <div class="form-group">
                              <label for="">
                                *Date
                              </label>
                              <input ng-model="traslado.llegada_fecha" class="form-control" id="date1" name="llegada_fecha"
                                type="text" placeholder="Select Date" ng-required="traslado.tipo">
                            </div>
                          </div>
                          <div class="col-6 col-sm-3">
                            <div class="form-group">
                              <label for="">
                                *Time
                              </label>
                              <input ng-model="traslado.llegada_hora" class="form-control" id="time1" name="llegada_hora"
                                type="text" placeholder="Select Time" ng-required="traslado.tipo">
                            </div>
                          </div>
                          <div class="col-6 col-sm-3">
                            <div class="form-group">
                              <label for="">
                                *Airline Name
                              </label>
                              <input ng-model="traslado.llegada_aerolinea" class="form-control" name="
                                                  llegada_aerolinea"
                                type="text" placeholder="Enter airline name" ng-required="traslado.tipo">
                            </div>
                          </div>
                          <div class="col-6 col-sm-3">
                            <div class="form-group">
                              <label for="">
                                *Flight Number
                              </label>
                              <input ng-model="traslado.llegada_vuelo" class="form-control" name="llegada_vuelo" type="text"
                                placeholder="Enter flight name" ng-required="traslado.tipo">
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-12" ng-show="traslado.tipo==2">
                        <div class="row">
                          <h5 class="col-12 titulo" ng-show="traslado.de.id==-1">DEPARTURE</h5>
                          <h5 class="col-12 titulo" ng-show="traslado.de.id!=-1">ARRIVAL</h5>
                          <div class="col-6 col-sm-3">
                            <div class="form-group">
                              <label for="">
                                *Date
                              </label>
                              <input ng-model="traslado.salida_fecha" class="form-control" id="date2" name="salida_fecha"
                                type="text" placeholder="Select Date" ng-required="traslado.tipo==2">
                            </div>
                          </div>
                          <div class="col-6 col-sm-3">
                            <div class="form-group">
                              <label for="">
                                *Time
                              </label>
                              <input ng-model="traslado.salida_hora" class="form-control" id="time2" name="salida_hora"
                                type="text" placeholder="Select Time" ng-required="traslado.tipo==2">
                            </div>
                          </div>
                          <div class="col-6 col-sm-3">
                            <div class="form-group">
                              <label for="">
                                *Airline Name
                              </label>
                              <input ng-model="traslado.salida_aerolinea" class="form-control" name="salida_aerolinea"
                                type="text" placeholder="Enter airline name" ng-required="traslado.tipo==2">
                            </div>
                          </div>
                          <div class="col-6 col-sm-3">
                            <div class="form-group">
                              <label for="">
                                *Flight Number
                              </label>
                              <input ng-model="traslado.salida_vuelo" class="form-control" name="salida_vuelo" type="text"
                                placeholder="Enter flight name" ng-required="traslado.tipo==2">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-12" ng-show="traslado.tipo==1 || traslado.tipo==2">
                        <div class="row">
                          <div class="col-12">
                            <label for="">Extras</label>
                          </div>
                          <div class="col-6 col-sm-6 col-md-3">
                            <div class="thumbnail text-center">
                              <img class="img-fluid" ng-src="{{ asset("/") }}img/productos/cerveza.jpg" alt="...">
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


                          <div class="col-6 col-sm-6 col-md-3">
                            <div class="thumbnail text-center">
                              <img class="img-fluid" ng-src="{{ asset("/") }}img/productos/cocacola.jpg" alt="...">
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


                          <div class="col-6 col-sm-6 col-md-3">
                            <div class="thumbnail text-center">
                              <img class="img-fluid" ng-src="{{ asset("/") }}img/productos/vino.jpg" alt="...">
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

                          <div class="col-6 col-sm-6 col-md-3">
                            <div class="thumbnail text-center">
                              <img class="img-fluid" ng-src="{{ asset("/") }}img/productos/champagne.jpg" alt="...">
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
                      <div class="col-12 mt-2 mb-1" ng-show="traslado.precio>0">
                        <h3 class="text-center">
                          @{{traslado.precio | currency:"$ "}}
                        </h3>
                      </div>
                      <div class="col-12 text-center" ng-show="traslado.precio>0">
                        <button class="btn btn-primary traslado" ng-click="opcion='agregar'" name="traslado" type="submit"
                          value="traslado">
                          Add to <i class="ion-ios-cart"></i>
                        </button>
                        <button class="btn btn-default traslado" ng-click="opcion='reservar'" name="traslado" type="submit"
                          value="traslado">Book now</button>
                      </div>
                    </div>

                  </form>



                </div>
              </div>




              <div class="tab-pane fade" id="v-pills-excursions" role="tabpanel" aria-labelledby="v-pills-excursions-tab">
                <div class="block-17">



                  <form action="" class="col-12" id="formTour" method="post" ng-submit="agregarTour($event)">
                    <div class="row">
                      <div class="col-12 col-sm-3">
                        <div class="form-group">
                          <select class="form-control" id="tourModel" ng-model="tour" ng-change="cambiarTour();calcularPrecioTour()"
                            ng-options="aux.titulo for aux in tours" required>
                            <option value>Tour</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12 col-sm-3">
                        <div class="form-group">
                          <input type="text" class="form-control" id="dateTour" name="fecha" placeholder="Date"
                            ng-model="tour.fecha" required>
                        </div>
                      </div>
                      <div class="col-12 col-sm-3" ng-show="tour.modalidades.length>1">
                        <div class="form-group">
                          <select class="form-control" id="modalidad" name="modalidad" ng-model="tour.modalidad"
                            ng-change="calcularPrecioTour()" ng-options="aux.descripcion for aux in tour.modalidades"
                            ng-required="tour.modalidades.length>1">
                            <option value="">Tour Type</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12 col-sm-3" ng-show="tour.horarios.length>1">
                        <div class="form-group">
                          <select class="form-control" name="horario" ng-model="tour.horario" ng-required="tour.horarios.length>1">
                            <option value="">Schedule</option>
                            <option ng-repeat="aux in tour.horarios" value="@{{ aux }}">@{{ aux }}</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12 col-sm-3">
                        <div class="form-group">
                          <select class="form-control" name="adultos" ng-model="tour.adultos" ng-change="calcularPrecioTour()"
                            required>
                            <option value="">
                              Adults
                            </option>
                            <option ng-repeat="aux in pasajeros" value="@{{aux}}">@{{aux}}</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-12 col-sm-3" ng-show="tour.modalidades[pos].nino != 0">
                        <div class="form-group">
                          <select class="form-control" name="ninos" ng-model="tour.ninos" ng-change="calcularPrecioTour()">
                            <option value="">
                              Children (0-10)
                            </option>
                            <option ng-repeat="aux in pasajeros" value="@{{aux}}">@{{aux}}</option>
                          </select>
                        </div>
                      </div>

                      <div class="col-12" ng-show="tour.precio>0">
                        <h3 class="text-center">
                          @{{tour.precio | currency:"$ "}}
                        </h3>
                      </div>
                      <div class="col-12 text-center" ng-show="tour.precio>0">
                        <button class="btn btn-primary tour" ng-click="opcion='agregar'" name="tour" type="submit"
                          value="tour">
                          Add to <i class="ion-ios-cart"></i>
                        </button>
                        <button class="btn btn-default tour" ng-click="opcion='reservar'" name="tour" type="submit"
                          value="tour">Book now</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <section class="ftco-section mt-5">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center ftco-animate">
          <div class="col-md-7 text-center heading-section">
            <h2 class="text-primary mb-3">Most Popular Excursions</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div
            class="col-md-6 col-lg-3 ftco-animate"
            ng-repeat="aux in tours" ng-if="aux.mostrar==true && aux.id<=4">
            <a href="#" class="block-5" style="background-image: url({{ asset('/') }}img/tours/@{{aux.id}}.jpg);">
              <div class="text">
                  <h3 class="heading">@{{ aux.titulo }}</h3>
                <h4 class="price">@{{ aux.modalidades[0].precio | currency:"$ " }}</h4>
              </div>
            </a>
          </div>
          <h3 class="col-12 text-center mt-3 mb-3">
            <a href="{{ url('/excursions') }}">More Excursions</a>
          </h3>
        </div>
      </div>
    </section>


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
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
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

  <script>
    window.opcion = "index";
    window.url = '{{ url("/") }}';
    window._token = '{{ csrf_token() }}';
  </script>

  <script src="{{ asset("/") }}js/sitio.js?v=30"></script>
  <script src="{{ asset("/") }}js/main.js?v=30"></script>

</body>

</html>