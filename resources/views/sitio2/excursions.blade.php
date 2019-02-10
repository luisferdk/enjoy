@extends("layouts.sitio")

@section("content")

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7 text-center heading-section">
        <h2 class="text-primary mt-3 mb-2">Excursions</h2>
      </div>
      <div class="col-6 mb-5">
        <input
          ng-model="buscador"
          type="text"
          placeholder="Enter Excursion"
          class="form-control text-center">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-4 mb-4" ng-repeat="aux in tours | filter:buscador" ng-if="aux.mostrar==true">
        <a href="#" class="block-5" style="background-image: url({{ asset('/') }}img/tours/@{{aux.id}}.jpg);">
          <div class="text">
            <h3 class="heading">@{{ aux.titulo }}</h3>
            <h4 class="price">@{{ aux.modalidades[0].precio | currency:"$ " }}</h4>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

@endsection