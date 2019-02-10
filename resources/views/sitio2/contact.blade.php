@extends('layouts.sitio')
@section('content')
<div class="container section-top">
  <div class="row">
    <section class="col-12">
      <h1 class="text-center text-primary">Contact Us</h1>
    </section>
  </div>
</div>

<section class="ftco-section contact-section">
  <div class="container">
    <div class="row block-9 mb-4">
      <div class="col-md-6 pr-md-5 flex-column">
        <div class="row d-block flex-row">
          <div class="col mb-3 d-flex py-4 border" style="background: white;">
            <div class="align-self-center">
              <p class="mb-0"><span>Address:</span> Bavaro, Punta Cana</p>
            </div>
          </div>
          <div class="col mb-3 d-flex py-4 border" style="background: white;">
            <div class="align-self-center">
              <p class="mb-0"><span>Phone:</span> <a href="tel://1234567920">+1 (809) 284-2817</a></p>
            </div>
          </div>
          <div class="col mb-3 d-flex py-4 border" style="background: white;">
            <div class="align-self-center">
              <p class="mb-0"><span>Email:</span> <a href="mailto:info@dominicanairservice.com">info@dominicanairservice.com</a></p>
            </div>
          </div>
          <div class="col mb-3 d-flex py-4 border" style="background: white;">
            <div class="align-self-center">
              <p class="mb-0"><span>Website</span> <a href="#">yoursite.com</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <form action="#">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Email">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Subject">
          </div>
          <div class="form-group">
            <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-12" id="map"></div>
    </div>
  </div>
</section>
@endsection