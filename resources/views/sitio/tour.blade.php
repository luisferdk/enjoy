@extends('base.sitio')

@section('content')

<section 
	class="row partyBoatsDetails" 
	ng-app="app" 
	ng-controller="ctrl">
	<div class="col-xs-12 fondoDetails">
			<h1 class="text-center" style="color:white;">Pirate Boat</h1>
	</div>
	<div class="container">
		<div class="row contenedorTour">
			<div id="main_area" class="col-sm-8 col-xs-12">
			    <!-- Slider -->
			    <div class="row">
			        <div class="col-xs-12" id="slider">
			            <!-- Top part of the slider -->
			            <div class="row">
			                <div class="col-sm-12" id="carousel-bounding-box">
			                    <div class="carousel slide" id="myCarousel">
			                        <!-- Carousel items -->
			                        <div class="carousel-inner">
			                            <div class="item active" data-slide-number="0">
			                            	<img src="{{ asset("/") }}img/tours/@{{ tour.id.id }}/1.jpg">
			                        	</div>
			                        	<div class="item" data-slide-number="1">
			                            	<img src="{{ asset("/") }}img/tours/@{{ tour.id.id }}/2.jpg">
			                        	</div>
			                        	<div class="item" data-slide-number="2">
			                            	<img src="{{ asset("/") }}img/tours/@{{ tour.id.id }}/3.jpg">
			                        	</div>
			                        	<div class="item" data-slide-number="3">
			                            	<img src="{{ asset("/") }}img/tours/@{{ tour.id.id }}/4.jpg">
			                        	</div>

			                        </div><!-- Carousel nav -->
			                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			                            <span class="glyphicon glyphicon-chevron-left"></span>                                       
			                        </a>
			                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			                            <span class="glyphicon glyphicon-chevron-right"></span>                                       
			                        </a>                                
			                        </div>
			                </div>
			            </div>
			        </div>
			    </div><!--/Slider-->

			    <div class="row hidden-xs" id="slider-thumbs">
			            <!-- Bottom switcher of slider -->
			            <ul class="hide-bullets">
			                <li class="col-sm-3" style="margin-bottom: 0">
			                    <a class="thumbnail" style="margin-bottom: 0" id="carousel-selector-0"><img src="{{ asset("/") }}img/tours/@{{tour.id.id}}/1.jpg"></a>
			                </li>
			                <li class="col-sm-3" style="margin-bottom: 0">
			                    <a class="thumbnail" style="margin-bottom: 0" id="carousel-selector-0"><img src="{{ asset("/") }}img/tours/@{{tour.id.id}}/2.jpg"></a>
			                </li>
			                <li class="col-sm-3" style="margin-bottom: 0">
			                    <a class="thumbnail" style="margin-bottom: 0" id="carousel-selector-0"><img src="{{ asset("/") }}img/tours/@{{tour.id.id}}/3.jpg"></a>
			                </li>
			                <li class="col-sm-3" style="margin-bottom: 0">
			                    <a class="thumbnail" style="margin-bottom: 0" id="carousel-selector-0"><img src="{{ asset("/") }}img/tours/@{{tour.id.id}}/4.jpg"></a>
			                </li>
			            </ul>                 
			    </div>
			</div>
			

			<form action="/" class="col-xs-12 col-sm-4 formTour" name="form" id="formTour" method="post" ng-submit="enviar($event)">
			    <div class="row">
			        <h2 class="col-xs-12 text-center">$ @{{precioTour}}</h2>
			        <div class="col-xs-12 col-sm-6" style="display: none">
			            <div class="form-group">
			                <label for="">*Tour</label>
			                <select
			                	class="form-control"
			                	id="tourModel"
			                	ng-model="tour.id"
			                	ng-change="cambiarTour(tour.id);calcularPrecioTour()"
			                	ng-options="aux.descripcion for aux in tours"
			                	ng-init="tour.id = tours[pos]"
			                	required>
			                    <option value>Choose one</option>
			                </select>
			            </div>
			        </div>
			        <div ng-show="paso==1" class="col-xs-12 col-sm-6">
			            <div class="form-group">
			                <label for="">
			                    *Date
			                </label>
			                <input type="text" class="form-control" id="dateTour" name="fecha" placeholder="Select Date" required>
			            </div>
			        </div>
			        <div class="col-xs-12 col-sm-6" ng-show="tour.id.modalidades.length>1 && paso==1">
			            <div class="form-group">
			                <label for="">
			                    *Tour Type
			                </label>
			                <select 
			                	class="form-control"
			                	id="modalidad"
			                	ng-model="modalidad"
			                	ng-change="calcularPrecioTour()"
			                	ng-options="aux.descripcion for aux in tour.id.modalidades"
			                	required>
			                    <option value="">Choose one</option>
			                </select>
			            </div>
			        </div>
			        <div class="col-xs-12 col-sm-6" ng-show="tour.id.horario.length>1 && paso==1">
			            <div class="form-group">
			                <label for="">
			                    *Schedule
			                </label>
			                <select 
			                	class="form-control" 
			                	name="horario" 
			                	ng-model="horario"
			                	required>
			                    <option value="">Choose one</option>
			                    <option ng-repeat="aux in tour.id.horario" value="@{{ aux }}">@{{ aux }}</option>
			                </select>
			            </div>
			        </div>
			        <div ng-show="paso==1" class="col-xs-12 col-sm-6">
			            <div class="form-group">
			                <label for="">
			                    *Adults
			                </label>
			                <select 
			                	class="form-control" 
			                	name="adultos"
			                	ng-model="tour.adultos"
			                	ng-change="calcularPrecioTour()"
			                	required>
			                    <option value="">
			                        Choose one
			                    </option>
			                    <option ng-repeat="aux in pasajeros" value="@{{aux}}">@{{aux}}</option>
			                </select>
			            </div>
			        </div>
			        <div ng-show="paso==1" class="col-xs-12 col-sm-6">
			            <div class="form-group">
			                <label for="">
			                    Children (0-10)
			                </label>
			                <select 
			                	class="form-control"
			                	name="ninos"
			                	ng-model="tour.ninos"
			                	ng-change="calcularPrecioTour()">
			                    <option value="">
			                        Choose one
			                    </option>
			                    <option ng-repeat="aux in pasajeros" value="@{{aux}}">@{{aux}}</option>
			                </select>
			            </div>
			        </div>
			        <div ng-show="paso==1" class="col-xs-12">
			            <div class="form-group">
			                <label for="">
			                    *Hotel Pickup
			                </label>
			                <input class="form-control" name="hotel" type="text" list="listHoteles" placeholder="Enter Hotel" required>
							@include("base.hoteles")
			            </div>
			        </div>
			    	
			    	<div ng-show="paso==1" class="col-xs-6 col-xs-offset-6">
			            <div class="form-group">
			                <button type="submit" style="margin-top: 15px;margin-bottom: 15px;" class="col-xs-12 btn btn-white">Next</button>
			            </div>
			        </div>

			    	
			        
			        <div ng-show="paso==2" class="col-xs-12 col-sm-6">
			            <div class="form-group">
			                <label for="">
			                    *First Name
			                </label>
			                <input class="form-control" name="nombre" type="text" placeholder="Enter name" required>
			            </div>
			        </div>
			        <div ng-show="paso==2" class="col-xs-12 col-sm-6">
			            <div class="form-group">
			                <label for="">
			                    *Surname
			                </label>
			                <input class="form-control" name="apellido" type="text" placeholder="Enter last name" required>
			            </div>
			        </div>
			        <div ng-show="paso==2" class="col-xs-12 col-sm-6">
			            <div class="form-group">
			                <label for="">
			                    *Email
			                </label>
			                <input class="form-control" name="correo" type="email" placeholder="Enter email" required>
			            </div>
			        </div>
			        <div ng-show="paso==2" class="col-xs-12 col-sm-6">
			            <div class="form-group">
			                <label for="">
			                    *Phone number
			                </label>
			                <input class="form-control" name="telefono" type="text" placeholder="Enter phone number" required>
			            </div>
			        </div>

			        <div ng-show="paso==2" class="col-xs-6">
			            <div class="form-group">
			                <button type="button" ng-click="paso = paso - 1;" style="margin-top: 15px;margin-bottom: 15px;" class="col-xs-12 btn btn-white">Previous</button>
			            </div>
			        </div>
			        <div ng-show="paso==2" class="col-xs-6">
			            <div class="form-group">
			                <button type="submit" style="margin-top: 15px;margin-bottom: 15px;" class="col-xs-12 btn btn-white">Next</button>
			            </div>
			        </div>
				
					<div ng-show="paso==3" class="col-xs-12 col-sm-12">
			            <div class="form-group">
			                <label for="">
			                    Comments
			                </label>
			                <textarea class="form-control" name="comentarios" rows="5" ></textarea>
			            </div>
			        </div>

			        <div ng-show="paso==3" class="col-xs-12 text-center">
			            <div class="form-group">
			                <label for="terminos2">
			                    <input id="terminos2" name="terminos2" type="checkbox" value="terminos">
			                        I have read and accept the terms and conditions
			                </label>
			            </div>
			        </div>
			        <div ng-show="paso==3" class="col-xs-6">
			            <div class="form-group">
			                <button type="button" ng-click="paso = paso - 1;" style="margin-top: 15px;margin-bottom: 15px;" class="col-xs-12 btn btn-white">Previous</button>
			            </div>
			        </div>
			        <div ng-show="paso==3" class="col-xs-6 text-center">
			        	<div class="form-group">
				            <button type="submit" style="margin-top: 15px;margin-bottom: 15px;"  class="col-xs-12 btn btn-white disabled" id="tour" name="tour" value="tour">
				                Book now
				            </button>
			            </div>
			        </div>
			    </div>
			    <input type="hidden" name="precio"    value="@{{ precioTour }}">
				<input type="hidden" name="tourValor" value="@{{ tourValue }}">
				<input type="hidden" name="modalidad" value="@{{ modalidad.descripcion }}">
			</form>


		</div>
		<div class="col-xs-12" style="margin-top: 2em">
			<h2 class="text-center azul">Description</h2>
			<p>@{{ tour.id.descripcion }}</p>	
		</div>
	</div>
	
</section>

<script>
	window.pos = 13;
</script>

@endsection

