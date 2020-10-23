@extends('master')
@section('title', 'SUCCESS')
@section('content')
<div class="col-12 d-flex flex-column align-items-center mt-5">
    <div class="col-4 p-0">
        <div class="alert alert-success text-center" role="alert">
            <p class="m-0">Order Success. Thank you for your trust in our products !!!</p>
            <p class="m-0">Click on "Back to home" to continue any shopping ^^</p>
        </div>
    </div>

    <div class="col-4 my-3 text-center">
        <a class="btn-btn btn-lightpurple text-uppercase font-weight-bold text-decoration-none" href="{{ route('home') }}">
            Back to home
        </a>
    </div>
</div>
@endsection