@extends('layouts.sitio')

@section('content')
<div class="container">
	<form class="row" action="" method="post" id='reservation'>
		@csrf
		<h1 class="col-12 text-center text-primary">Reservation</h1>

		<div class="col-10 offset-1" ng-if="carrito.traslados.length==0 && carrito.tours.length==0 && carrito.vuelos.length==0">
			<div class="alert alert-primary text-center">Add item to <i class="ion-ios-cart"></i></div>
		</div>

		<div class="col-10 offset-1" ng-if="carrito.vuelos.length>0">
			<h2 class="col-12 text-center text-primary">Flights</h2>
			<table class="table table-bordered text-center">
				<thead>
					<tr>
						<th class="text-center">Date</th>
						<th class="text-center">Origin</th>
						<th class="text-center">Destination</th>
						<th class="text-center">Passengers</th>
						<th class="text-center">Price</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="(index,aux) in carrito.vuelos">
						<td>@{{ aux.fecha }}</td>
						<td>@{{ aux.origen }}</td>
						<td>@{{ aux.destino }}</td>
						<td>@{{ aux.pasajeros }}</td>
						<td>@{{ aux.precio | currency:"$ " }}</td>
						<td>
							<a ng-click="eliminarVuelo(index)"><i class="ion-md-trash text-danger"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-10 offset-1" ng-if="carrito.traslados.length>0">
			<h2 class="col-12 text-center text-primary">Transfers</h2>
			<table class="table table-bordered text-center">
				<thead>
					<tr>
						<th class="text-center">From</th>
						<th class="text-center">To</th>
						<th class="text-center">Service</th>
						<th class="text-center">Passengers</th>
						<th class="text-center">Type</th>
						<th class="text-center">Price</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="(index,aux) in carrito.traslados">
						<td>@{{ aux.de }}</td>
						<td>@{{ aux.para }}</td>
						<td>@{{ aux.vip?aux.vip:'Regular' }}</td>
						<td>@{{ aux.pasajeros }}</td>
						<td>@{{ aux.tipo==1?"One Way":"Round Trip" }}</td>
						<td>@{{ aux.precio | currency:"$ " }}</td>
						<td>
							<a ng-click="eliminarTraslado(index)"><i class="ion-md-trash text-danger"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="col-10 offset-1" ng-if="carrito.tours.length>0">
			<h2 class="col-12 text-center text-primary">Excursions</h2>
			<table class="table table-bordered text-center">
				<thead>
					<tr>
						<th class="text-center">Date</th>
						<th class="text-center">Excursion</th>
						<th class="text-center">Modality</th>
						<th class="text-center">Adults</th>
						<th class="text-center">Children</th>
						<th class="text-center">Price</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="aux in carrito.tours">
						<td>@{{ aux.fecha }}</td>
						<td>@{{ aux.tour }}</td>
						<td>@{{ aux.modalidad }}</td>
						<td>@{{ aux.adultos }}</td>
						<td>@{{ aux.ninos }}</td>
						<td>@{{ aux.precio | currency:"$ " }}</td>
						<td>
							<a ng-click="eliminarTour(index)"><i class="ion-md-trash text-danger"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="col-10 offset-1" ng-if="precioTotal()>0">
			<div class="row">
				<h2 class="col-12 text-center text-primary">Client Info</h2>
				<div class="col-12 col-sm-6">
					<div class="form-group">
						<label for="">
							*First Name
						</label>
						<input class="form-control" name="nombre" type="text" required>
					</div>
				</div>
				<div class="col-12 col-sm-6">
					<div class="form-group">
						<label for="">
							*Surname
						</label>
						<input class="form-control" name="apellido" type="text" required>
					</div>
				</div>
				<div class="col-12 col-sm-6">
					<div class="form-group">
						<label for="">
							*Email
						</label>
						<input class="form-control" name="correo" type="email" required>
					</div>
				</div>
				<div class="col-12 col-sm-6">
					<div class="form-group">
						<label for="">
							*Phone number
						</label>
						<input class="form-control" name="telefono" type="text" required>
					</div>
				</div>
				<div class="col-12 col-sm-6">
					<div class="form-group">
						<label for="">
							*Cupon
						</label>
						<input class="form-control" id="cupon" name="cupon" type="text">
					</div>
				</div>
				<div class="col-12 col-sm-6" ng-if="carrito.tours.length>0">
					<div class="form-group">
						<label for="">
							*Hotel Pickup
						</label>
						<input class="form-control" name="hotel" type="text" list="listHoteles" required>
						@include("base.hoteles")
					</div>
				</div>
				<div class="col-12">
					<div class="form-group">
						<label for="">
							Comments
						</label>
						<textarea class="form-control" name="comentarios" rows="5"></textarea>
					</div>
				</div>
			</div>
		</div>

		<input type="hidden" id="finalPrice" name="finalPrice">
		<h2 id="priceText" class="col-10 offset-1 text-primary text-center" ng-show="precioTotal()>0">
			@{{ precioTotal() | currency:"$ "}}
			<input type="hidden" id="price" name="precio" value="@{{ precioTotal() }}">
		</h2>

		<div class="col-10 offset-1 card mt-2 mb-2" ng-show="precioTotal()>0">
			<div class="row card-body">
				<div class="col-6 offset-3 mb-2 col-sm-4 offset-sm-4">
					<img class="img-fluid" src="{{ asset('img/tarjetas.png') }}" alt="">
				</div>
				<div class='col-6 form-group'>
					<label class='control-label'>Card Number</label>
					<input autocomplete='off' class='form-control' size='20' type='text' name="card_no" id="card_no" required>
				</div>
				<div class='col-6 form-group'>
					<label class='control-label'>Full Name</label>
					<input autocomplete='off' class='form-control' type='text' name="full_name" id="full_name" required>
				</div>
				<div class='col-4 form-group'>
					<label class='control-label'>CVV</label>
					<input autocomplete='off' class='form-control' placeholder='ex. 311' size='3' type='number' name="cvvNumber" id="cvvNumber"
					 required>
				</div>
				<div class='col-4 form-group'>
					<label class='control-label'>Exp Month</label>
					<input class='form-control' placeholder='MM' size='2' min="0" max="12" type='text' name="ccExpiryMonth" id="ccExpiryMonth"
					 required>
				</div>
				<div class='col-4 form-group'>
					<label class='control-label'>Exp Year</label>
					<input class='form-control card-expiry-year' placeholder='YY' size='2' min="18" type='text' name="ccExpiryYear" id="ccExpiryYear"
					 required>
				</div>
			</div>
		</div>

		<div class="col-10 offset-1 mt-2 mb-4" ng-show="precioTotal()>0">
			<input 
				data-toggle="tooltip" 
				title="Accept terms and conditions"
				ng-model="terminos"
				id="terminos"
				name="terminos"
			 type="checkbox" value="terminos">
			<a class="" href="#" data-toggle="modal" data-target="#terminosModal">
				<strong data-toggle="tooltip" title="Read terms and conditions">
					I have read and accept the terms and conditions
				</strong>
			</a>
			<button type="submit" class="btn btn-primary float-right" ng-disabled="!terminos">
				<!--i class="fa fa-paypal"></i-->
				Payment
			</button>
		</div>

	</form>
</div>

@endsection

@section('js')
<script src="{{ asset('js/cleave.min.js') }}"></script>
<script src="{{ asset('js/coupon.js') }}"></script>
<script>
	new Cleave('#card_no', {
		creditCard: true
	});

	new Cleave('#ccExpiryMonth', {
		date: true,
		datePattern: ['m']
	});

	new Cleave('#ccExpiryYear', {
		date: true,
		datePattern: ['y']
	});
	$(document).ready(function () {
		getDiscountSession();
	});
</script>
@endsection