@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                        <h2 class="text-center">{{ $message }}</h2>
                        <a class="text-center" href="{{url('/')}}">ir a home</a>
                    </div>
                </div>
            </div>
    </div>
@endsection
