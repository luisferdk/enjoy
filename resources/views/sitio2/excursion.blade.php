@extends('layouts.sitio')

@section('content')
<div class="container">
	<section class="row">
		<div class="col-12 mt-3 mb-3">
      <a 
        style="position:absolute;top:15px;left:0;font-size: 1.5em;"
        href="{{ URL::previous() }}"
        class="right">
          <i style="font-size: 1.5em;" class="ion-ios-return-left"></i>
      </a>
			<h1 class="text-center text-primary">@{{ tour.titulo }}</h1>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-12">
					<img class="img-fluid" ng-src="{{ asset("/") }}img/tours/@{{ tour.id }}/1.jpg">
				</div>


				<form action="/" class="col-12 col-sm-4" name="form" id="formTour" method="post" ng-submit="agregarTour($event)">
					<div class="row">
						<h2 class="col-12 text-center">$ @{{tour.precio}}</h2>
						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="">
									*Date
								</label>
								<input type="text" class="form-control" id="dateTour" name="fecha" placeholder="Select Date" ng-model="tour.fecha"
								 required>
							</div>
						</div>
						<div class="col-12 col-sm-6" ng-show="tour.modalidades.length>1">
							<div class="form-group">
								<label for="">
									*Tour Type
								</label>
								<select class="form-control" id="modalidad" ng-model="tour.modalidad" ng-change="calcularPrecioTour()"
								 ng-options="aux.descripcion for aux in tour.modalidades" ng-required="tour.modalidades.length>1">
									<option value="">Choose one</option>
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-6" ng-show="tour.horarios.length>1">
							<div class="form-group">
								<label for="">
									*Schedule
								</label>
								<select class="form-control" name="horario" ng-model="tour.horario" ng-required="tour.horarios.length>1">
									<option value>Choose one</option>
									<option ng-repeat="aux in tour.horarios" value="@{{ aux }}">@{{ aux }}</option>
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="">
									*Adults
								</label>
								<select class="form-control" name="adultos" ng-model="tour.adultos" ng-change="calcularPrecioTour()" required>
									<option value="">
										Choose one
									</option>
									<option ng-repeat="aux in vector(100)" value="@{{aux}}">@{{aux}}</option>
								</select>
							</div>
						</div>
						<div class="col-12 col-sm-6">
							<div class="form-group">
								<label for="">
									Children (0-10)
								</label>
								<select class="form-control" name="ninos" ng-model="tour.ninos" ng-change="calcularPrecioTour()">
									<option value="">
										Choose one
									</option>
									<option ng-repeat="aux in vector(100)" value="@{{aux}}">@{{aux}}</option>
								</select>
							</div>
						</div>
						<div class="col-12">
							<div class="row">
								<div class="col-6 text-center">
									<div class="form-group">
										<button type="submit" style="margin-top: 15px;margin-bottom: 15px;border-color: white;" class="col-12 btn btn-primary"
										 name="tour" ng-click="opcion='agregar'" value="tour">
											Add to <i class="ion-ios-cart"></i>
										</button>
									</div>
								</div>
								<div class="col-6 text-center">
									<div class="form-group">
										<button type="submit" style="margin-top: 15px;margin-bottom: 15px;" class="col-12 btn btn-default" name="tour"
										 ng-click="opcion='reservar'" value="tour">
											Book now
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>


			</div>
			<div class="row mt-4" ng-bind-html="tour.descripcion_completa"></div>
		</div>

	</section>
</div>
@endsection

@section('js')
<script>
	window.pos = {{$id}};
</script>
@endsection