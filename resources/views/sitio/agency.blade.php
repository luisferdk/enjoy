@extends('base.sitio')
@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-6">
                    <form>
                        <h4>Contact Information</h4>
                        <hr>
                        <input type="text" name="address" id="address" placeholder="Street Address" class="form-control"><br>
                        <input type="text" name="email" placeholder="Email" id="email" class="form-control"><br>
                        <input type="text" name="number" placeholder="Phone Number" id="number" class="form-control"><br>
                        <textarea name="comment" id="comment" class="form-control" placeholder="Comments" cols="30" rows="10"></textarea>
                    </form>
                </div>
                <div class="col-lg-6">
                    <form>
                        <h4>Travel Agency Information</h4>
                        <hr>
                        <input type="text" name="industry_market" placeholder="Industry Market" id="industry_market" class="form-control"><br>
                        <input type="text" name="host_agency_name" placeholder="Host Agency Name" id="host_agency_name" class="form-control"><br>
                        <input type="text" name="postal_code" id="postal_code" placeholder="Postal Code" class="form-control"><br>
                        <input type="text" name="LATA number" id="lata" placeholder="IATA Number" class="form-control"><br>
                        <input type="hidden" value="{{ csrf_token() }}" id="token">
                        <button type="button" id="sendAgency" class="btn btn-success traslado">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div><br>
@endsection
@section('js')
    <script src="{{ asset('js/agency.js') }}"></script>
@endsection