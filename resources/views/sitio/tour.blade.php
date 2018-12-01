@extends('base.sitio')

@section('content')
<div class="container">
<section 
	class="row partyBoatsDetails" 
	ng-app="app" 
	ng-controller="ctrl"
	style="margin:0 !important;">
	<div class="col-xs-12 fondoDetails">
			<a style="position:absolute;top:30px;left:0;" href="{{ URL::previous() }}" class="right"><i class="fa fa-2x fa-arrow-left"></i></a>
			<h1 class="text-center" style="color:white;">@{{ tour.titulo }}</h1>
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
			                            	<img ng-src="{{ asset("/") }}img/tours/@{{ tour.id }}/1.jpg">
			                        	</div>
			                        	<div class="item" data-slide-number="1">
			                            	<img ng-src="{{ asset("/") }}img/tours/@{{ tour.id }}/2.jpg">
			                        	</div>
			                        	<div class="item" data-slide-number="2">
			                            	<img ng-src="{{ asset("/") }}img/tours/@{{ tour.id }}/3.jpg">
			                        	</div>
			                        	<div class="item" data-slide-number="3">
			                            	<img ng-src="{{ asset("/") }}img/tours/@{{ tour.id }}/4.jpg">
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
			                    <a class="thumbnail" style="margin-bottom: 0" id="carousel-selector-0"><img ng-src="{{ asset("/") }}img/tours/@{{tour.id}}/1.jpg"></a>
			                </li>
			                <li class="col-sm-3" style="margin-bottom: 0">
			                    <a class="thumbnail" style="margin-bottom: 0" id="carousel-selector-1"><img ng-src="{{ asset("/") }}img/tours/@{{tour.id}}/2.jpg"></a>
			                </li>
			                <li class="col-sm-3" style="margin-bottom: 0">
			                    <a class="thumbnail" style="margin-bottom: 0" id="carousel-selector-2"><img ng-src="{{ asset("/") }}img/tours/@{{tour.id}}/3.jpg"></a>
			                </li>
			                <li class="col-sm-3" style="margin-bottom: 0">
			                    <a class="thumbnail" style="margin-bottom: 0" id="carousel-selector-3"><img ng-src="{{ asset("/") }}img/tours/@{{tour.id}}/4.jpg"></a>
			                </li>
			            </ul>                 
			    </div>
			</div>
			

			<form action="/" class="col-xs-12 col-sm-4 formTour" name="form" id="formTour" method="post" ng-submit="agregarTour($event)">
			    <div class="row">
			        <h2 class="col-xs-12 text-center">$ @{{tour.precio}}</h2>
			        <div class="col-xs-12 col-sm-6">
			            <div class="form-group">
			                <label for="">
			                    *Date
			                </label>
			                <input 
			                	type="text" 
			                	class="form-control" 
			                	id="dateTour" 
			                	name="fecha" 
			                	placeholder="Select Date" 
			                	ng-model="tour.fecha"
			                	required>
			            </div>
			        </div>
			        <div class="col-xs-12 col-sm-6" ng-show="tour.modalidades.length>1">
			            <div class="form-group">
			                <label for="">
			                    *Tour Type
			                </label>
			                <select 
			                	class="form-control"
			                	id="modalidad"
			                	ng-model="tour.modalidad"
			                	ng-change="calcularPrecioTour()"
			                	ng-options="aux.descripcion for aux in tour.modalidades"
			                	ng-required="tour.modalidades.length>1">
			                    <option value="">Choose one</option>
			                </select>
			            </div>
			        </div>
			        <div class="col-xs-12 col-sm-6" ng-show="tour.horarios.length>1">
			            <div class="form-group">
			                <label for="">
			                    *Schedule
			                </label>
			                <select 
			                	class="form-control" 
			                	name="horario" 
			                	ng-model="tour.horario"
			                	ng-required="tour.horarios.length>1">
			                    <option value>Choose one</option>
			                    <option ng-repeat="aux in tour.horarios" value="@{{ aux }}">@{{ aux }}</option>
			                </select>
			            </div>
			        </div>
			        <div class="col-xs-12 col-sm-6">
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
			                    <option ng-repeat="aux in vector(100)" value="@{{aux}}">@{{aux}}</option>
			                </select>
			            </div>
			        </div>
			        <div class="col-xs-12 col-sm-6">
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
			                    <option ng-repeat="aux in vector(100)" value="@{{aux}}">@{{aux}}</option>
			                </select>
			            </div>
			        </div>
					<div class="col-xs-12">
						<div class="row">
							<div class="col-xs-6 text-center">
					        	<div class="form-group">
									<button 
										type="submit" 
										style="margin-top: 15px;margin-bottom: 15px;border-color: white;" 
										class="col-xs-12 btn btn-primary" 
										name="tour" 
										ng-click="opcion='agregar'"
										value="tour">
						                Add to <i class="fa fa-shopping-cart"></i>
						            </button>
					            </div>
					        </div>	
							<div class="col-xs-6 text-center">
					        	<div class="form-group">
									<button 
										type="submit"
										style="margin-top: 15px;margin-bottom: 15px;"  
										class="col-xs-12 btn btn-success" 
										name="tour" 
										ng-click="opcion='reservar'"
										value="tour">
						                Book now
						            </button>
					            </div>
					        </div>	
						</div>
					</div>
			    </div>
			</form>


		</div>
		<div class="row tour-detalle" ng-bind-html="tour.descripcion_completa"></div>
	</div>
	
</section>
</div>
@endsection

@section('js')
<script>
	window.pos = {{ $id }};
</script>
@endsection

