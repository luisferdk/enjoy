@extends('layouts.sitio')
@section('content')
<div class="container mt-5">
  <div class="card">
    <div class="card-header">
      <h4 class="text-center m-0 p-0 text-white">Flights</h4>
    </div>
    <div class="card-body">
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
              <div class="col-4" ng-repeat="avion in vuelo.destino.aviones">
                <input style="display:none;" type="radio" name="avion" ng-model="vuelo.avion" id="avion@{{avion.id}}"
                  ng-value="avion">
                <label for="avion@{{avion.id}}" class="block-5 avion" style="background-image: url({{ asset('/') }}img/jets/@{{avion.id+1}}.jpeg);">
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
              <select class="form-control select2" name="pasajeros" ng-model="vuelo.pasajeros" ng-change="cambiarPasajerosVuelos()"
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
                  <input ng-model="vuelo.listaPasajeros[key].passport" class="form-control" type="text" placeholder="Passport"
                    required>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <input name="nombres[]" ng-model="vuelo.listaPasajeros[key].full_name" class="form-control" type="text"
                    placeholder="Full Name" required>
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <input name="telefono[]" ng-model="vuelo.listaPasajeros[key].phone_number" class="form-control" type="text"
                    placeholder="Phone Number" required>
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
  </div>
</div>
<!-- <section class="ftco-section mt-5 mb-5">
  <div class="container">
    <div class="row no-gutters">
      @for($i=1; $i<=8;$i++) <div class="col-md-6 col-lg-6 ftco-animate">
        <div href="#" class="block-5" style="background: transparent url('{{asset('img')}}/jets/{{ $i }}.jpeg') no-repeat center center; background-size:cover;"></div>
    </div>
    @endfor
  </div>
  </div>
</section> -->
@endsection