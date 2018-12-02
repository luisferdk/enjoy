@extends('base.sitio')


@section('content')
<section class="row">
	<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<img class="img-responsive" src="{{ asset("/") }}img/wifi.jpg" alt="">
			</div>
			<div class="col-xs-12 col-sm-6 text-center">
				<div class="row">
					<h1 class="col-xs-12">Wifi Services</h1>
					<h1 class="col-xs-12">$8.00</h1>
					<p class="col-xs-12 mt1">per day – With the capacity to connect 5 devices at the same time.</p>
					<div class="col-xs-12 text-center">
						<i class="fa fa-check-circle" aria-hidden="true"></i>
						<span class="unidadesWifi">15</span>
						in stock
					</div>
					<div class="col-xs-12">
						<button class="btn btn-primary precio mt1" data-toggle="modal" data-target="#wifiModal">Book now</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<form action="" method="post" class="modal fade" id="wifiModal" tabindex="-1" role="dialog" ng-submit="agregarWifi($event)">
	<input type="hidden" name="dias" ng-model="wifi.dias" id="dias">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title text-center" id="exampleModalLabel">Wifi Service</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-xs-12">
						<div class="row">
							<h5 class="col-xs-12 titulo text-center">
								<strong style="padding:1em 0;">ARRIVAL</strong>
							</h5>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">
										*Date
									</label>
									<input class="form-control" id="date1" name="llegada_fecha" ng-model="wifi.llegada_fecha" type="text" placeholder="Select Date" required>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">
										*Time
									</label>
									<input class="form-control" id="time1" name="llegada_hora" ng-model="wifi.llegada_hora" type="text" placeholder="Select Time" required>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">
										*Airline Name
									</label>
									<input class="form-control" name="llegada_aerolinea" ng-model="wifi.llegada_aerolinea" type="text" placeholder="Enter airline name" required>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">
										*Flight Number
									</label>
									<input class="form-control" name="llegada_vuelo" ng-model="wifi.llegada_vuelo" type="text" placeholder="Enter flight name" required>
								</div>
							</div>	
						</div>
					</div>
					<div class="col-xs-12">
						<div class="row">
							<h5 class="col-xs-12 titulo text-center">
								<strong style="padding:1em 0;">DEPARTURE</strong>
							</h5>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">
										*Date
									</label>
									<input class="form-control" id="date2" name="salida_fecha" ng-model="wifi.salida_fecha" type="text" placeholder="Select Date" required>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">
										*Time
									</label>
									<input class="form-control" id="time2" name="salida_hora" ng-model="wifi.salida_hora" type="text" placeholder="Select Time" required>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">
										*Airline Name
									</label>
									<input class="form-control" name="salida_aerolinea" ng-model="wifi.salida_aerolinea" type="text" placeholder="Enter airline name" required>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">
										*Flight Number
									</label>
									<input class="form-control" name="salida_vuelo" ng-model="wifi.salida_vuelo" type="text" placeholder="Enter flight name" required>
								</div>
							</div>	
						</div>
					</div>
					<div class="col-xs-12">
						<div class="row">
							<h5 class="col-xs-12 titulo text-center">
								<strong style="padding:3em 0 2em 0;">RESERVATION INFO</strong>
							</h5>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="wifi" class="control-label">Wifi:</label>
									<select name="wifi" ng-model="wifi.dispositivos" id="wifi" class="form-control">
									<option value>Choose one</option>
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
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label class="control-label">*Hotel:</label>
									<input type="text" class="form-control" name="hotel" ng-model="wifi.hotel" list="listHoteles">
									@include("base.hoteles")
								</div>
							</div>
							
							<div class="col-xs-12 precioWifi azul">
								<h3 class="row">
									<input type="hidden" id="precio2">
									<div class="col-xs-12 col-sm-6 text-right">Price:</div>
									<div class="col-xs-12 col-sm-6"><span id="precio">0.00</span> $</div>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
				<button type="submit" ng-click="opcion='agregar'" value="reservar" class="btn btn-success">Add to <i class="fa fa-shopping-cart"></i></button>
				<button type="submit" ng-click="opcion='reservar'" value="reservar" class="btn btn-primary">Book Now</button>
			</div>
		</div>
	</div>
</form>

@endsection

@section('js')
<script>
	$(function(){
	    $('#date1,#date2,#wifi').on('change',function(){
	    	var fechaInicio = new Date($('#date1').val()).getTime();
			var fechaFin    = new Date($('#date2').val()).getTime();
			var diff = fechaFin - fechaInicio;
			
			var dias = diff/(1000*60*60*24);
			$('#dias').val(dias);

			var precio = dias*8*$('#wifi').val();
			precio = parseFloat(precio);
			if(precio){
				$('#precio').text(''+precio);
				$("#precio2").val(precio);
				console.log(precio);
			}
	    });
	});
</script>
@endsection