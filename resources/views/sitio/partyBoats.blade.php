@extends('base.sitio')

@section('content')

<section class="row tourParty-container">
	<div class="col-xs-12 col-sm-10 col-sm-offset-1 tourParty-fondo">
		<div class="row">
			<div class="col-xs-12 col-sm-10 col-sm-offset-1 tourParty" ng-repeat="aux in tours" ng-if="aux.partyBoat==true">
				<div class="row tourParty-Item">
					<div class="col-sm-3 col-xs-12 tourParty-Item-Imagen">
						<img class="img-responsive" src="{{ asset("/") }}img/tours/@{{aux.id}}.jpg" alt="">
					</div>
					<div class="col-sm-6 col-xs-12 tourParty-Item-Texto">
						<h3><a href="{{ url('/') }}/tour/@{{aux.id}}">@{{ aux.titulo }}</a></h3>
						<p class="textoGris thumbnail-text">@{{ aux.descripcion }}</p>
					</div>
					<div class="col-sm-3 col-xs-12 tourParty-Item-Precio">
						<div class="row text-center">
							<p class="col-xs-4 col-sm-12 fromUSD">From USD</p>
							<div class="col-xs-4 col-sm-12 precio"><span class="dolar">$</span>@{{ aux.modalidades[0].precio | currency:"" }}</div>
							<div class="col-xs-4 col-sm-12">
								<a href="{{ url('/') }}/?opcion=2&tour=@{{ aux.id }}" class="btn btn-primary right">Book Now</a><br>
								<a href="{{ url('/tour') }}/@{{ aux.id }}" class="btn btn-link right">See Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection