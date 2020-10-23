@extends('master')
@section('title', 'CHECK OUT')
@section('content')
<div class="container Banner">
    <div class="row">
        <div class="col-12 p-0">
            <div class="img d-flex justify-content-center align-items-center Banner_row_col-12_img"
                style="background-image: url('frontend/img/checkout.jpg')">
                <h1 class="font-weight-bold text-only font-lg pointer animate__animated animate__fadeInDown">
                    CHECK OUT
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-4">
        <div class="col-4 animate__animated animate__fadeInUp">
            <div class="d-flex justify-content-center">
                <h5 class="m-0 font-weight-bold text-only text-uppercase text-center border-b">Customer information</h5>
            </div>
            <form action="{{ route('checkout.add') }}" method="POST">
                @csrf
                <div class="form-group mt-3 d-flex">
                    <p class="m-0 text-only text-uppercase font-weight-bold col-4">Name: </p>
                    <p class="m-0 col-8">{{Auth::user()->name}}</p>
                </div>
                <div class="form-group mt-3 d-flex">
                    <p class="m-0 text-only text-uppercase font-weight-bold col-4">Email: </p>
                    <p class="m-0 col-8">{{Auth::user()->email}}</p>
                </div>
                <div class="form-group mt-3 d-flex">
                    <p class="m-0 text-only text-uppercase font-weight-bold col-4">Phone: </p>
                    <p class="m-0 col-8">{{Auth::user()->phone}}</p>
                </div>
                <div class="form-group mt-3">
                    <input type="hidden" class="form-control rounded-0" name="user" value="{{Auth::user()->id}}">
                </div>
                <div class="form-group mt-3">
                    <input type="hidden" class="form-control rounded-0" name="total" value="{{ $total }}">
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control rounded-0" name="address" placeholder="Your address">
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="description" rows="3"
                        placeholder="Your description"></textarea>
                </div>
                <button class="btn-btn btn-block btn-lightpurple font-weight-bold text-uppercase rounded-0">
                    complete checkout
                </button>
            </form>

            <div class="d-flex flex-column align-items-center">
                <h5 class="m-0 font-weight-bold text-only text-uppercase text-center mt-5 border-b d-inline-block">
                    payment method
                </h5>
            </div>
            <div class="form-check mt-3 text-center">
                <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked>
                <label class="form-check-label font-weight-bold text-uppercase ml-2">
                    Cash On Delivery (COD) <span class="text-danger">(ONLY)</span>
                </label>
            </div>

        </div>

        <div class="col-8 animate__animated animate__fadeInUp d-flex flex-column align-items-center">
            <div class="d-flex justify-content-center">
                <h5 class="m-0 font-weight-bold text-only text-uppercase text-center border-b">order overview</h5>
            </div>

            <table class="table table-bordered mt-3">
                <thead class="thead-dark text-only text-center">
                    <tr>
                        <th scope="col">PRODUCT</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">QTY</th>
                        <th scope="col">TOTAL</th>
                    </tr>
                </thead>

            </table>

            <div class="d-flex justify-content-center">
                <h5 class="m-0 font-weight-bold text-only border-b">CART TOTALS</h5>
            </div>
            <div class="mt-3 col-6">
                <div class="total d-flex justify-content-between align-items-center p-3 border-bottom">
                    <h6 class="m-0 text-secondary font-weight-bold">SUBTOTAL</h6>
                    <h6 class="m-0 text-success font-weight-bold">$&nbsp{{ $subtotal }}</h6>
                </div>
                <div class="total d-flex justify-content-between align-items-center p-3 border-bottom">
                    <h6 class="m-0 text-secondary font-weight-bold">TAX</h6>
                    <h6 class="m-0 text-success font-weight-bold">$&nbsp{{ $tax }}</h6>
                </div>
                <div class="total d-flex justify-content-between align-items-center p-3 border-bottom">
                    <h6 class="m-0 text-secondary font-weight-bold">TOTAL</h6>
                    <h6 class="m-0 text-success font-weight-bold">$&nbsp{{ $total }}</h6>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection