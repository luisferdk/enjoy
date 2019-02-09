@extends("layouts.sitio")

@section("main")
<div class="container section-top">
  <div class="row">
    <section class="col-12">
      <h1 class="text-center text-primary">Excursions</h1>
    </section>
  </div>
</div>


<section class="ftco-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="row">
          <div v-for="(aux,key) in excursiones" v-if="aux.mostrar" class="col-md-6 col-lg-6 mb-5">
            <a href="#" class="block-5" :style="{backgroundImage: 'url({{ asset('/') }}images/excursions/'+key+'.jpg)' }">
              <div class="text">
                <h4 class="price">$@{{ aux.modalidades[0].precio }} p/p</h4>
                <h3 class="heading">@{{ aux.descripcion }}</h3>
                <!-- <div class="post-meta">
                  <span>Island, Boat</span>
                </div> -->
              </div>
            </a>
            <div class="col-12 text-center mt-3">
              <button class="btn-action btn btn-default">Details</button>
              <button class="btn-action btn btn-primary">Add to <i class="ion-ios-cart"></i></button>
            </div>
          </div>
        </div>
        <!--  <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
      </div>
      <!-- END -->


    </div>
  </div>
</section>

@endsection