@extends('layouts.sitio')
@section('content')
<div class="container">
  <form action="" class="row fields" id="formFlights" method="post" ng-submit="agregarVuelo($event)">
    <div class="col-12 mt-5">
      <div class="card">
        <div class="card-header m-0 p-0">
          <h4 class="col-12 text-white text-center mt-3 mb-3">Flights</h4>
        </div>
        <div class="card-body">
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
                <select class="form-control select2" name="pasajeros" ng-model="vuelo.pasajeros" required>
                  <option value="">
                    Passengers
                  </option>
                  <option ng-repeat="aux in vector(vuelo.destino.capacidad)" value="@{{aux}}">@{{aux}}</option>
                </select>
              </div>
            </div>
            <div class="col-12" ng-show="vuelo.destino.precio>0">
              <div class="form-group">
                <label for="">
                  *Date Flight
                </label>
                <input ng-model="vuelo.fecha" class="form-control fecha" name="fecha" type="text" placeholder="Select Date"
                  required>
              </div>
            </div>
            <div class="col-12 mt-2 mb-1" ng-show="vuelo.destino.precio>0">
              <h3 class="text-center">
                @{{vuelo.destino.precio | currency:"$ "}}
              </h3>
            </div>
            <div class="col-12 text-center" ng-show="vuelo.destino.precio>0">
              <button class="btn btn-primary" ng-click="opcion='agregar'" name="vuelo" type="submit" value="vuelo">
                Add to <i class="ion-ios-cart"></i>
              </button>
              <button class="btn btn-default vuelo" ng-click="opcion='reservar'" name="vuelo" type="submit" value="vuelo">Book
                now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>

<section class="ftco-section mt-5 mb-5">
    <div class="container">
      <div class="row no-gutters">
        @for($i=1; $i<=8;$i++) 
          <div class="col-md-6 col-lg-6 ftco-animate">
            <a href="#" class="block-5" style="background: transparent url('{{asset('img')}}/jets/{{ $i }}.jpeg') no-repeat center center; background-size:cover;"></a>
          </div>
        @endfor
      </div>
    </div>
  </section>
@endsection