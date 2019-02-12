@extends('layouts.sitio')
@section('content')
<div class="container mt-5">
  <div class="card">
    <div class="card-header">
      <h4 class="text-center m-0 p-0 text-white">Transfers</h4>
    </div>
    <div class="card-body">
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
          <div class="col-12 mt-2 mb-1">
            <h3 class="text-center">
              @{{traslado.precio | currency:"$ "}}
            </h3>
          </div>
          <div class="col-12 text-center">
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
</div>


<section class="ftco-section mt-5 mb-5">
  <div class="container">
    <div class="row">
      <h2 class="col-12 text-center text-primary">Types Transfers</h2>
      @for($i=1; $i<=2;$i++) 
        <div class="col-md-6 col-lg-6 ftco-animate">
          <div class="block-5" style="background: transparent url('{{asset('img')}}/transfers/{{ $i }}.png') no-repeat center center; background-size:cover;">
            <div class="text">
              @if($i==1)
              <h3 class="heading">Regular</h3>
              <div class="post-meta">
                <span>The best service, fast, confort</span>
              </div>
              @else
              <h3 class="heading">VIP</h3>
              <div class="post-meta">
                <span>The best service vip</span>
              </div>
              @endif
            </div>
          </div>
        </div>
      @endfor
    </div>
  </div>
</section>
@endsection