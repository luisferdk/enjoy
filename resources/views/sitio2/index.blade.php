<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dominican Air Services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/png">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('voyage') }}/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('voyage') }}/css/animate.css">

  <link rel="stylesheet" href="{{ asset('voyage') }}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('voyage') }}/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{ asset('voyage') }}/css/magnific-popup.css">

  <link rel="stylesheet" href="{{ asset('voyage') }}/css/aos.css">

  <link rel="stylesheet" href="{{ asset('voyage') }}/css/ionicons.min.css">

  <link rel="stylesheet" href="{{ asset('voyage') }}/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="{{ asset('voyage') }}/css/jquery.timepicker.css">


  <link rel="stylesheet" href="{{ asset('voyage') }}/css/flaticon.css">
  <link rel="stylesheet" href="{{ asset('voyage') }}/css/icomoon.css">

  <!--Bower-->
  <link href="{{ asset('/') }}bower_components/select2/dist/css/select2.css" rel="stylesheet" />
  <link href="{{ asset('/') }}bower_components/jquery-ui/themes/base/jquery-ui.min.css" rel="stylesheet">
  <link href="{{ asset('/') }}bower_components/jt.timepicker/jquery.timepicker.css" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('voyage') }}/css/style.css">

  <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/png">
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
                          <select 
                            class="form-control select2"
                            name="origen"
                            ng-model="vuelo.origen"
                            ng-options="aux.origen for aux in vuelos"
                            required>
                            <option value>From</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <select 
                            class="form-control select2"
                            name="destino"
                            ng-model="vuelo.destino"
                            ng-options="aux.descripcion group by aux.categoria for aux in vuelo.origen.destinos"
                            required>
                            <option value="">To</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <select
                            class="form-control select2"
                            name="adultos"
                            ng-model="vuelo.pasajeros"
                            required>
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
                  <form action="" method="post" class="d-block d-lg-flex">
                    <div class="fields d-block d-lg-flex">
                      <div class="textfield-search col-6">
                        <input type="text" class="form-control" placeholder="Search Excursions">
                      </div>

                      <div class="textfield-search col-3">
                        <select name="" class="form-control">
                          <option value="">Location</option>
                        </select>
                      </div>

                      <div class="textfield-search col-3">
                        <select name="" class="form-control">
                          <option value="">Category</option>
                        </select>
                      </div>
                    </div>
                    <input type="button" class="search-submit btn btn-primary" value="Find Excursions">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <section class="ftco-section-2">
        <div class="container-fluid d-flex">
            <div class="section-2-blocks-wrapper row no-gutters">
                <div class="img col-sm-12 col-lg-6" style="background-image: url('{{asset('voyage')}}/images/tour-1.jpg');">
                    <a href="https://vimeo.com/45830194" class="button popup-vimeo"><span class="ion-ios-play"></span></a>
                </div>
                <div class="text col-lg-6 ftco-animate">
                    <div class="text-inner align-self-start">

                        <h3>Welcome to Bon Voyage since 1898 established Far far away.</h3>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the
                            blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a
                            large language
                            ocean.</p>

                        <p>A small river named Duden flows by their place and supplies it with the necessary
                            regelialia. It is a
                            paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 promo ftco-animate">
                    <a href="#" class="promo-img mb-4" style="background-image: url({{ asset('voyage') }}/images/promo-1.jpg);"></a>
                    <div class="text text-center">
                        <h2>Group Cruises</h2>
                        <h3 class="price"><span>from</span> $299</h3>
                        <a href="#" class="read">Read more</a>
                    </div>
                </div>
                <div class="col-lg-3 promo ftco-animate">
                    <a href="#" class="promo-img mb-4" style="background-image: url({{ asset('voyage') }}/images/promo-2.jpg);"></a>
                    <div class="text text-center">
                        <h2>Beach Tours</h2>
                        <h3 class="price"><span>from</span> $199</h3>
                        <a href="#" class="read">Read more</a>
                    </div>
                </div>
                <div class="col-lg-3 promo ftco-animate">
                    <a href="#" class="promo-img mb-4" style="background-image: url({{ asset('voyage') }}/images/promo-3.jpg);"></a>
                    <div class="text text-center">
                        <h2>Mountain Tours</h2>
                        <h3 class="price"><span>from</span> $179</h3>
                        <a href="#" class="read">Read more</a>
                    </div>
                </div>
                <div class="col-lg-3 promo ftco-animate">
                    <a href="#" class="promo-img mb-4" style="background-image: url({{ asset('voyage') }}/images/promo-3.jpg);"></a>
                    <div class="text text-center">
                        <h2>Family Tours</h2>
                        <h3 class="price"><span>from</span> $599</h3>
                        <a href="#" class="read">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2>Our Services</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-sailboat"></span></div>
                        </div>
                        <div class="media-body p-2">
                            <h3 class="heading">Special Activities</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-around"></span></div>
                        </div>
                        <div class="media-body p-2">
                            <h3 class="heading">Travel Arrangements</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-compass"></span></div>
                        </div>
                        <div class="media-body p-2">
                            <h3 class="heading">Private Guide</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="d-flex justify-content-center">
                            <div class="icon d-flex justify-content-center mb-3"><span class="align-self-center flaticon-map-of-roads"></span></div>
                        </div>
                        <div class="media-body p-2">
                            <h3 class="heading">Location Manager</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container-fluid">
            <div class="row no-gutters justify-content-center mb-5 pb-5 ftco-animate">
                <div class="col-md-7 text-center heading-section">
                    <h2>Most Popular Destination</h2>
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <a href="#" class="block-5" style="background-image: url('{{asset('voyage')}}/images/tour-1.jpg');">
                        <div class="text">
                            <span class="price">$399</span>
                            <h3 class="heading">Group Tour in Maldives</h3>
                            <div class="post-meta">
                                <span>Ameeru Ahmed Magu Male’, Maldives</span>
                            </div>
                            <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                    class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                <span>500 reviews</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <a href="#" class="block-5" style="background-image: url('{{asset('voyage')}}/images/tour-2.jpg');">
                        <div class="text">
                            <span class="price">$399</span>
                            <h3 class="heading">Group Tour in Maldives</h3>
                            <div class="post-meta">
                                <span>Ameeru Ahmed Magu Male’, Maldives</span>
                            </div>
                            <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                    class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                <span>500 reviews</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <a href="#" class="block-5" style="background-image: url('{{asset('voyage')}}/images/tour-3.jpg');">
                        <div class="text">
                            <span class="price">$399</span>
                            <h3 class="heading">Group Tour in Maldives</h3>
                            <div class="post-meta">
                                <span>Ameeru Ahmed Magu Male’, Maldives</span>
                            </div>
                            <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                    class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                <span>500 reviews</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <a href="#" class="block-5" style="background-image: url('{{asset('voyage')}}/images/tour-4.jpg');">
                        <div class="text">
                            <span class="price">$399</span>
                            <h3 class="heading">Group Tour in Maldives</h3>
                            <div class="post-meta">
                                <span>Ameeru Ahmed Magu Male’, Maldives</span>
                            </div>
                            <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                    class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                <span>500 reviews</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <a href="#" class="block-5" style="background-image: url('{{asset('voyage')}}/images/tour-5.jpg');">
                        <div class="text">
                            <span class="price">$399</span>
                            <h3 class="heading">Group Tour in Maldives</h3>
                            <div class="post-meta">
                                <span>Ameeru Ahmed Magu Male’, Maldives</span>
                            </div>
                            <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                    class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                <span>500 reviews</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <a href="#" class="block-5" style="background-image: url('{{asset('voyage')}}/images/tour-6.jpg');">
                        <div class="text">
                            <span class="price">$399</span>
                            <h3 class="heading">Group Tour in Maldives</h3>
                            <div class="post-meta">
                                <span>Ameeru Ahmed Magu Male’, Maldives</span>
                            </div>
                            <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                    class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                <span>500 reviews</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <a href="#" class="block-5" style="background-image: url('{{asset('voyage')}}/images/tour-7.jpg');">
                        <div class="text">
                            <span class="price">$399</span>
                            <h3 class="heading">Group Tour in Maldives</h3>
                            <div class="post-meta">
                                <span>Ameeru Ahmed Magu Male’, Maldives</span>
                            </div>
                            <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                    class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                <span>500 reviews</span></p>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <a href="#" class="block-5" style="background-image: url('{{asset('voyage')}}/images/tour-8.jpg');">
                        <div class="text">
                            <span class="price">$399</span>
                            <h3 class="heading">Group Tour in Maldives</h3>
                            <div class="post-meta">
                                <span>Ameeru Ahmed Magu Male’, Maldives</span>
                            </div>
                            <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                    class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                <span>500 reviews</span></p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2>Our Satisfied Guests says</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="carousel owl-carousel ftco-owl">
                    <div class="item text-center">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url({{ asset('voyage') }}/images/person_1.jpg)"
                                style="border: 1px solid red;"></div>
                            <div class="text">
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                        class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
                                    and
                                    Consonantia, there live the blind texts.</p>
                                <p class="name">Dennis Green</p>
                                <span class="position">Guests from Italy</span>
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url({{ asset('voyage') }}/images/person_2.jpg)"
                                style="border: 1px solid red;"></div>
                            <div class="text">
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                        class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
                                    and
                                    Consonantia, there live the blind texts.</p>
                                <p class="name">Dennis Green</p>
                                <span class="position">Guests from Italy</span>
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url({{ asset('voyage') }}/images/person_3.jpg)"
                                style="border: 1px solid red;"></div>
                            <div class="text">
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                        class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
                                    and
                                    Consonantia, there live the blind texts.</p>
                                <p class="name">Dennis Green</p>
                                <span class="position">Guests from Italy</span>
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url({{ asset('voyage') }}/images/person_1.jpg)"
                                style="border: 1px solid red;"></div>
                            <div class="text">
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                        class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
                                    and
                                    Consonantia, there live the blind texts.</p>
                                <p class="name">Dennis Green</p>
                                <span class="position">Guests from Italy</span>
                            </div>
                        </div>
                    </div>
                    <div class="item text-center">
                        <div class="testimony-wrap p-4 pb-5">
                            <div class="user-img mb-4" style="background-image: url({{ asset('voyage') }}/images/person_1.jpg)"
                                style="border: 1px solid red;"></div>
                            <div class="text">
                                <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                        class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span></p>
                                <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia
                                    and
                                    Consonantia, there live the blind texts.</p>
                                <p class="name">Dennis Green</p>
                                <span class="position">Guests from Italy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container-fluid">
            <div class="row mb-5 pb-5 no-gutters">
                <div class="col-lg-4 bg-light p-3 p-md-5 d-flex align-items-center heading-section ftco-animate">
                    <div>
                        <h2 class="mb-5 pb-3">Want to get our hottest travel deals top tips and advice? Subscribe us
                            now!</h2>
                        <form action="#" class="subscribe-form">
                            <div class="form-group">
                                <span class="icon icon-paper-plane"></span>
                                <input type="text" class="form-control" placeholder="Enter your email address">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 p-2 pl-md-5 heading-section">
                    <h2 class="mb-5 p-2 pb-3 ftco-animate">Most Recommended Hotels</h2>
                    <div class="row no-gutters d-flex">
                        <div class="col-md-4 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('{{asset('voyage')}}/images/hotel-1.jpg');">
                                <div class="text">
                                    <span class="price">$29/night</span>
                                    <h3 class="heading">Luxe Hotel</h3>
                                    <div class="post-meta">
                                        <span>Ameeru Ahmed Magu Male’, Maldives</span>
                                    </div>
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                            class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                        <span>500 reviews</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('{{asset('voyage')}}/images/hotel-2.jpg');">
                                <div class="text">
                                    <span class="price">$29/night</span>
                                    <h3 class="heading">Deluxe Hotel</h3>
                                    <div class="post-meta">
                                        <span>Ameeru Ahmed Magu Male’, Maldives</span>
                                    </div>
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                            class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                        <span>500 reviews</span></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <a href="#" class="block-5" style="background-image: url('{{asset('voyage')}}/images/hotel-3.jpg');">
                                <div class="text">
                                    <span class="price">$29/night</span>
                                    <h3 class="heading">Deluxe Hotel</h3>
                                    <div class="post-meta">
                                        <span>Ameeru Ahmed Magu Male’, Maldives</span>
                                    </div>
                                    <p class="star-rate"><span class="icon-star"></span><span class="icon-star"></span><span
                                            class="icon-star"></span><span class="icon-star"></span><span class="icon-star-half-full"></span>
                                        <span>500 reviews</span></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-5">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2>Our Blog</h2>
                </div>
            </div>
            <div class="row ftco-animate">
                <div class="carousel1 owl-carousel ftco-owl">
                    <div class="item">
                        <div class="blog-entry">
                            <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('voyage')}}/images/image_5.jpg');">
                            </a>
                            <div class="text p-4">
                                <div class="meta">
                                    <div><a href="#">July 7, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                </div>
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <p class="clearfix">
                                    <a href="#" class="float-left">Read more</a>
                                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-entry" data-aos-delay="100">
                            <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('voyage')}}/images/image_6.jpg');">
                            </a>
                            <div class="text p-4">
                                <div class="meta">
                                    <div><a href="#">July 7, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                </div>
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <p class="clearfix">
                                    <a href="#" class="float-left">Read more</a>
                                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-entry" data-aos-delay="200">
                            <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('voyage')}}/images/image_7.jpg');">
                            </a>
                            <div class="text p-4">
                                <div class="meta">
                                    <div><a href="#">July 7, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                </div>
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <p class="clearfix">
                                    <a href="#" class="float-left">Read more</a>
                                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-entry" data-aos-delay="200">
                            <a href="blog-single.html" class="block-20" style="background-image: url('{{asset('voyage')}}/images/image_8.jpg');">
                            </a>
                            <div class="text p-4">
                                <div class="meta">
                                    <div><a href="#">July 7, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                </div>
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <p class="clearfix">
                                    <a href="#" class="float-left">Read more</a>
                                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog-entry" data-aos-delay="200">
                            <a href="blog-single.html" class="block-20" style="background-image: url('{{ asset("voyage") }}/images/image_9.jpg');">
                            </a>
                            <div class="text p-4">
                                <div class="meta">
                                    <div><a href="#">July 7, 2018</a></div>
                                    <div><a href="#">Admin</a></div>
                                </div>
                                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the
                                        blind texts</a></h3>
                                <p class="clearfix">
                                    <a href="#" class="float-left">Read more</a>
                                    <a href="#" class="float-right meta-chat"><span class="icon-chat"></span> 3</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
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
  <script src="{{ asset('voyage') }}/js/bootstrap-datepicker.js"></script>
  <script src="{{ asset('voyage') }}/js/jquery.timepicker.min.js"></script>
  <!-- 
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('voyage') }}/js/google-map.js"></script>
  -->
  <script src="{{ asset('voyage') }}/js/main.js"></script>

  <script src="{{ asset('/') }}bower_components/jquery/dist/jquery.min.js"></script>
  <script src="{{ asset('/') }}bower_components/jt.timepicker/jquery.timepicker.min.js"></script>
  <script src="{{ asset('/') }}bower_components/jquery-ui/jquery-ui.min.js"></script>
  <script src="{{ asset('/') }}bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="{{ asset('/') }}bower_components/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="{{ asset('/') }}bower_components/select2/dist/js/select2.min.js"></script>
  <script src="{{ asset('/') }}bower_components/sweetalert2/sweetalert2.min.js"></script>
  
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