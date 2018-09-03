@extends('base.sitio')

@section('content')

	<section class="row">
		<h1 class="col-xs-12 text-center tituloVerde" style="font-size: 3em">Reservation</h1>
		<div class="col-xs-10 col-xs-offset-1" ng-if="carrito.traslados.length==0 && carrito.tours.length==0 && carrito.vip.length==0">
			<div class="alert alert-success text-center">Add item to <i class="fa fa-shopping-cart"></i></div>
		</div>
		<div class="col-xs-10 col-xs-offset-1" ng-if="carrito.traslados.length>0">
			<h2 class="col-xs-12 text-center tituloVerde" style="font-size: 2em">Transfers</h2>
			<table class="table table-bordered text-center">
				<thead>
					<tr>
						<th class="text-center">From</th>
						<th class="text-center">To</th>
						<th class="text-center">Passengers</th>
						<th class="text-center">Type</th>
						<th class="text-center">Price</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="(index,aux) in carrito.traslados" ng-re>
						<td>@{{ aux.de }}</td>
						<td>@{{ aux.para }}</td>
						<td>@{{ aux.pasajeros }}</td>
						<td>@{{ aux.tipo==1?"One Way":"Round Trip" }}</td>
						<td>@{{ aux.precio | currency:"$ " }}</td>
						<td>
							<a ng-click="eliminarTraslado(index)"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-xs-10 col-xs-offset-1" ng-if="carrito.tours.length>0">
			<h2 class="col-xs-12 text-center tituloVerde" style="font-size: 2em">Tours</h2>
			<table class="table table-bordered text-center">
				<thead>
					<tr>
						<th class="text-center">Date</th>
						<th class="text-center">Tour</th>
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
							<a ng-click="eliminarTour(index)"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-xs-10 col-xs-offset-1" ng-if="carrito.vip.length>0">
			<h2 class="col-xs-12 text-center tituloVerde" style="font-size: 2em">Service VIP</h2>
			<table class="table table-bordered text-center">
				<thead>
					<tr>
						<th class="text-center">Nº Persons</th>
						<th class="text-center">Arrival Date</th>
						<th class="text-center">Departure Date</th>
						<th class="text-center">Price</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="aux in carrito.vip">
						<td>@{{ aux.pasajerosVIP }}</td>
						<td>@{{ aux.fechaLlegadaVIP }}</td>
						<td>@{{ aux.fechaSalidaVIP }}</td>
						<td>@{{ aux.precio | currency:"$ " }}</td>
						<td>
							<a ng-click="eliminarTour(index)"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-xs-10 col-xs-offset-1" ng-if="carrito.tours.length>0">
			<h2 class="col-xs-12 text-center tituloVerde" style="font-size: 2em">Client Info</h2>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label for="">
                        *First Name
                    </label>
                    <input class="form-control" name="nombre" type="text"  placeholder="Enter name" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label for="">
                        *Surname
                    </label>
                    <input class="form-control" name="apellido" type="text"  placeholder="Enter last name" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label for="">
                        *Email
                    </label>
                    <input class="form-control" name="correo" type="email"  placeholder="Enter email" required>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <label for="">
                        *Phone number
                    </label>
                    <input class="form-control" name="telefono" type="text"  placeholder="Enter phone number" required>
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group">
                    <label for="">
                        Comments
                    </label>
                    <textarea class="form-control" name="comentarios" rows="5" placeholder="Comments"></textarea>
                </div>
            </div>
		</div>
		<h2 class="col-xs-10 col-xs-offset-1 tituloVerde text-center">
			@{{ precioTotal() | currency:"$ "}}
		</h2>
		<div class="col-xs-10 col-xs-offset-1 mt2">
			<input data-toggle="tooltip" title="Accept terms and conditions" ng-model="terminos" id="terminos" name="terminos" type="checkbox" value="terminos">
	        <a class="" href="#" data-toggle="modal" data-target="#terminosModal">
	        	<strong data-toggle="tooltip" title="Read terms and conditions">I have read and accept the terms and conditions</strong>
	    	</a>
			<button type="submit" class="btn btn-success pull-right" ng-disabled="!terminos"><i class="fa fa-paypal"></i> Payment</button>
		</div>
	</section>

@endsection