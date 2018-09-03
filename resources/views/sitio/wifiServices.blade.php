@extends('base.sitio')


@section('content')
<section class="row">
	<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2">
		<div class="row wifiServices">
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

<form action="" method="post" class="modal fade" id="wifiModal" tabindex="-1" role="dialog">
	<input type="hidden" name="dias" id="dias">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="exampleModalLabel">Book Now Wifi Services</h4>
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
									<input class="form-control" id="date1" name="fechaLlegada" type="text" placeholder="Select Date" required>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">
										*Time
									</label>
									<input class="form-control" id="time1" name="horaLlegada" type="text" placeholder="Select Time" required>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">
										*Airline Name
									</label>
									<input class="form-control" name="aerolineaLlegada" type="text" placeholder="Enter airline name" required>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">
										*Flight Number
									</label>
									<input class="form-control" name="vueloLlegada" type="text" placeholder="Enter flight name" required>
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
									<input class="form-control" id="date2" name="fechaSalida" type="text" placeholder="Select Date" required>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">
										*Time
									</label>
									<input class="form-control" id="time2" name="horaSalida" type="text" placeholder="Select Time" required>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">
										*Airline Name
									</label>
									<input class="form-control" name="aerolineaSalida" type="text" placeholder="Enter airline name" required>
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="">
										*Flight Number
									</label>
									<input class="form-control" name="vueloSalida" type="text" placeholder="Enter flight name" required>
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
									<select name="wifi" id="wifi" class="form-control">
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
									<input type="text" class="form-control" name="hotel" list="listHoteles">
									@include("base.hoteles")
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label class="control-label">*Name:</label>
									<input type="text" class="form-control" name="nombre">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label  class="control-label">*Email:</label>
									<input type="text" class="form-control" name="correo">
								</div>
							</div>
							<div class="col-xs-12">
								<div class="form-group">
									<label class="control-label">Comments:</label>
									<textarea class="form-control" name="comentarios"></textarea>
								</div>
							</div>
							
							<div class="col-xs-12 precioWifi azul">
								<h3 class="row">
									<div class="col-xs-12 col-sm-6 text-right">Price:</div>
									<div class="col-xs-12 col-sm-6"><span id="precio">0.00</span> $</div>
								</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="submit" name="reservar" id="reservar" value="reservar" class="btn btn-primary">Book now</button>
			</div>
		</div>
	</div>
</form>

<script>
	$(function(){
		$('#menu li').removeClass('active');
		$('#menu li.wifiActive').addClass('active');
		
		$("#wifiModal").validate({
		    rules: {
		        "nombre":{required:true},
		        "correo":{required:true,email:true},
		        "comentarios":{required:false},
		        "wifi":{required:true},
		        "fechaInicio":{required:true},
		        "fechaFin":{required:true},
		        "hotel":{required:true}
		    },
		    messages: {
		        "nombre":{required:"This field is required"},
		        "correo":{required:"This field is required",email:"This field is email"},
		        "comentarios":{},
		        "wifi":{required:"This field is required"},
		        "fechaInicio":{required:"This field is required"},
		        "fechaFin":{required:"This field is required"},
		        "hotel":{required:"This field is required"}
		    }
		});
	    $("#date2").datepicker({
	        minDate: "0"
	    });
	    
	    $("#date1").datepicker({
	        minDate: 0,
	        onSelect: function(date) {
	            var date1 = $('#date1').datepicker('getDate');
	            var date = new Date(Date.parse(date1));
	            date.setDate(date.getDate() + 1);
	            var newDate = date.toDateString();
	            newDate = new Date(Date.parse(newDate));
	            $('#date2').datepicker("option", "minDate", newDate);
	        }
	    });

	    $('#date1,#date2,#wifi').on('change',function(){
	    	var fechaInicio = new Date($('#date1').val()).getTime();
			var fechaFin    = new Date($('#date2').val()).getTime();
			var diff = fechaFin - fechaInicio;
			
			var dias = diff/(1000*60*60*24);
			$('#dias').val(dias);

			var precio = dias*8*$('#wifi').val();
			$('#precio').text(''+precio);
			console.log(precio);
	    });
	});
</script>

@endsection