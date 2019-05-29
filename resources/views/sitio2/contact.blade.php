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
              <p class="mb-0"><span>Address:</span> Av.España ,Plaza Mayoral ,Local No.203,Bavaro,P.C.</p>
            </div>
          </div>
          <div class="col mb-3 d-flex py-4 border" style="background: white;">
            <div class="align-self-center">
              <p class="mb-0"><span>Phone:</span> <a href="tel:+1(809)872-6403">+1 (809) 872-6403</a></p>
            </div>
          </div>
          <div class="col mb-3 d-flex py-4 border" style="background: white;">
            <div class="align-self-center">
              <p class="mb-0"><span>Email:</span> <a href="mailto:info@puntacanaenjoyment.com">info@puntacanaenjoyment.com</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <form action="" method="POST">
          @csrf
          <div class="form-group">
            <input name="name" type="text" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="Your Email" required>
          </div>
          <div class="form-group">
            <input name="subject" type="text" class="form-control" placeholder="Subject" required>
          </div>
          <div class="form-group">
            <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message" required></textarea>
          </div>
          <div class="form-group">
            <input name="send" type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
          </div>
        </form>
      </div>
      <div class="col-12 alert alert-warning mt-4">
        If you are a travel agent and a wholesale company and want more information please. <br>
        <strong>Contact:
          <br><a style="color:#856404;" href="mailto:joel.encarnacion@puntacanaenjoyment.com">joel.encarnacion@puntacanaenjoyment.com</a>
          <br><a style="color:#856404;" href="mailto:ingridalvarez@puntacanaenjoyment.com">ingridalvarez@puntacanaenjoyment.com</a>
        </strong>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-md-12" id="map"></div>
    </div>
  </div>
</section>
@endsection

@if(session('status'))
@section('js')
<script>
  swal('Message sent successfully','','success');
</script>
@endsection
@endif