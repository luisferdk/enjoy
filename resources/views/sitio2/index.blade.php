@extends('layouts.sitio')
@section('content')
<section class="home-slider owl-carousel">
  <div class="slider-item" style="background-image: url('{{asset('voyage')}}/images/bg_4.jpg');">
    <div class="overlay"></div>
  </div>

  <div class="slider-item" style="background-image: url('{{asset('voyage')}}/images/bg_1.jpg');">
    <div class="overlay"></div>
  </div>

  <div class="slider-item" style="background-image: url('{{asset('voyage')}}/images/bg_3.jpg');">
    <div class="overlay"></div>
  </div>
</section>


<div class="ftco-section-search">
  <div class="container">
    <div class="row">
      <div class="col-md-12 tabulation-search">
        <div class="element-animate">
          <div class="nav nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <!-- <a class="nav-link p-3 active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-flights" role="tab"
              aria-controls="v-pills-flights" aria-selected="true">Flighs</a> -->
            <a class="nav-link p-3 active" id="v-pills-transfers-tab" data-toggle="pill" href="#v-pills-transfers" role="tab"
              aria-controls="v-pills-transfers" aria-selected="false">Transfers</a>
            <a class="nav-link p-3" id="v-pills-excursions-tab" data-toggle="pill" href="#v-pills-excursions" role="tab"
              aria-controls="v-pills-excursions" aria-selected="false"> Excursions</a>
          </div>
        </div>

        <div class="tab-content py-5" id="v-pills-tabContent">
          <!-- <div class="tab-pane fade" id="v-pills-flights" role="tabpanel" aria-labelledby="v-pills-flights-tab">
            <div class="block-17">




              <form action="" class="fields" id="formFlights" method="post" ng-submit="agregarVuelo($event)">
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
                      <select class="form-control select2" name="destino" ng-model="vuelo.destino" ng-options="aux.descripcion for aux in vuelo.origen.destinos"
                        required>
                        <option value="">To</option>
                      </select>
                    </div>
                  </div>

                  <div class="col-4">
                    <div class="form-group">
                      <input ng-model="vuelo.fecha" class="form-control fecha" name="fecha" type="text" placeholder="Select Date"
                        required>
                    </div>
                  </div>
                  
                  <div class="col-12" ng-show="vuelo.destino">
                    <div class="row">
                      <h4 class="col-12 text-center text-primary">Select Airplane</h4>
                      <div class="col-12 col-md-4" ng-repeat="avion in vuelo.destino.aviones">
                        <input
                          style="display:none;"
                          type="radio"
                          name="avion"
                          ng-model="vuelo.avion" id="avion@{{avion.id}}"
                          ng-value="avion">
                        <label for="avion@{{avion.id}}" class="block-5 avion" style="background-image: url({{ asset('/') }}img/jets/@{{avion.foto}});">
                          <div class="text">
                            <h3 class="heading">@{{ avion.titulo }}</h3>
                            <p class="price">
                              <div class="price float-left">
                                Cap: @{{ avion.capacidad }} pax
                                <br>
                                Time: @{{ avion.tiempo }}
                              </div>
                              <div class="price float-right">
                                @{{ avion.precio | currency:"$ " }}
                              </div>
                            </p>
                          </div>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 mt-4">
                    <div class="form-group">
                      <select 
                        class="form-control select2"
                        name="pasajeros"
                        ng-model="vuelo.pasajeros"
                        ng-change="cambiarPasajerosVuelos()"
                        required>
                        <option value="">Passengers</option>
                        <option ng-repeat="aux in vector(vuelo.avion.capacidad)" value="@{{aux}}">@{{aux}}</option>
                      </select>
                    </div>
                  </div>

                  <h3 class="col-12 text-center text-primary" ng-show="vuelo.pasajeros>0">Passengers</h3>
                  <div class="col-12" ng-show="vuelo.pasajeros>0" ng-repeat="(key,aux) in vector(vuelo.pasajeros)">
                    <div class="row">
                      <h4 class="col-12 text-primary">Passenger @{{aux}}</h4>
                      <div class="col-4">
                        <div class="form-group">
                          <input ng-model="vuelo.listaPasajeros[key].passport" class="form-control" type="text"
                            placeholder="Passport" required>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <input name="nombres[]" ng-model="vuelo.listaPasajeros[key].full_name" class="form-control"
                            type="text" placeholder="Full Name" required>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <input name="telefono[]" ng-model="vuelo.listaPasajeros[key].phone_number" class="form-control"
                            type="text" placeholder="Phone Number" required>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <input name="email[]" ng-model="vuelo.listaPasajeros[key].email" class="form-control" type="email"
                            placeholder="Email" required>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <select class="form-control selectVuelo" ng-model="vuelo.listaPasajeros[key].nacionalization">
                            <option value>Nationalization</option>
                            <option ng-repeat="pais in paises" value="@{{pais}}">@{{pais}}</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="form-group">
                          <select name="edad[]" class="form-control selectVuelo" ng-model="vuelo.listaPasajeros[key].age"
                            placeholder="Age" required>
                            <option value>Age</option>
                            <option ng-repeat="aux in vector(100)" value="@{{ aux }}">@{{ aux }}</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 mt-2 mb-1" ng-show="vuelo.avion.precio>0">
                    <h3 class="text-center">
                      @{{vuelo.avion.precio | currency:"$ "}}
                    </h3>
                  </div>
                  <div class="col-12 text-center" ng-show="vuelo.avion.precio>0">
                    <button class="btn btn-primary" ng-click="opcion='agregar'" name="vuelo" type="submit" value="vuelo">
                      Add to <i class="ion-ios-cart"></i>
                    </button>
                    <button class="btn btn-default vuelo" ng-click="opcion='reservar'" name="vuelo" type="submit" value="vuelo">Book
                      now</button>
                  </div>
                </div>
              </form>

            </div>
          </div> -->

          <div class="tab-pane fade show active" id="v-pills-transfers" role="tabpanel" aria-labelledby="v-pills-transfers-tab">
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
                      <select class="form-control select2" name="pasajeros[]" ng-change="calcularPrecioTraslado();cambiarPasajeros()"
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
                      <select class="form-control select2" name="tipo" ng-change="calcularPrecioTraslado()" ng-model="traslado.tipo"
                        required>
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
                          <input ng-model="traslado.salida_aerolinea" class="form-control" name="salida_aerolinea" type="text"
                            placeholder="Enter airline name" ng-required="traslado.tipo==2">
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
                      <input type="text" class="form-control" id="dateTour" name="fecha" placeholder="Date" ng-model="tour.fecha"
                        required>
                    </div>
                  </div>
                  <div class="col-12 col-sm-3" ng-show="tour.modalidades.length>1">
                    <div class="form-group">
                      <select class="form-control" id="modalidad" name="modalidad" ng-model="tour.modalidad" ng-change="calcularPrecioTour()"
                        ng-options="aux.descripcion for aux in tour.modalidades" ng-required="tour.modalidades.length>1">
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
                    <button class="btn btn-primary tour" ng-click="opcion='agregar'" name="tour" type="submit" value="tour">
                      Add to <i class="ion-ios-cart"></i>
                    </button>
                    <button class="btn btn-default tour" ng-click="opcion='reservar'" name="tour" type="submit" value="tour">Book
                      now</button>
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
    <div class="row no-gutters justify-content-center">
      <div class="col-md-7 text-center heading-section">
        <h2 class="text-primary mb-3">Most Popular Excursions</h2>
      </div>
    </div>
    <div class="row no-gutters">
      <div class="col-md-6 col-lg-3" ng-repeat="aux in tours" ng-if="aux.mostrar==true && aux.id<=4">
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

@endsection