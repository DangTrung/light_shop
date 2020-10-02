@extends('master')
@section('title', 'HOME')
@section('content')
<div class="col-9 d-flex flex-wrap">
    <div class="col-md-12 py-4 mb-4 bg-whitesmoke d-flex justify-content-between align-items-center">
        <div class="show">
            <p class="m-0 text-only text-uppercase font-weight-bold ml-3">Showing 20 result</p>
        </div>
        <div class="sort">
            <div class="dropdown">
                <a class="mr-3 text-black d-flex justify-content-between align-items-center" type="button"
                    id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <p class="m-0 mr-3 text-only">Default sorting</p>
                    <i class="fas fa-angle-down text-only"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">
                        <small>Sort by price: Low to High</small>
                    </a>
                    <a class="dropdown-item" href="#">
                        <small>Sort by price: High to Low</small>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-12 my-3 text-center">
        <div class="title">
            <h2 class="text-orange font-weight-bold text-only text-uppercase">Features Product</h2>
        </div>
    </div>

    <div class="col-md-4 my-5 Products_row_col-4">
        <div class="badge Products_row_col-4_badge d-flex flex-column align-items-center bg-cream">
            <small class="font-weight-bold text-black d-flex flex-wrap text-white">FEATURED</small>
            <small class="font-weight-bold text-black d-flex flex-wrap text-white">PRODUCT</small>
        </div>
        <div class="product-top Products_row_col-4_product-top text-center">
            <img class="img Products_row_col-4_product-top_img" src="frontend/img/euro-espresso.png">
            <div class="overlay Products_row_col-4_product-top_overlay d-flex flex-column justify-content-center">
                <a class="btn btn-lightpurple my-2 rounded-0" href="">
                    <i class="fas fa-eye"></i>
                </a>
                <a class="btn btn-lightpurple my-2 rounded-0" href="">
                    <i class="fas fa-star"></i>
                </a>
                <a class="btn btn-lightpurple my-2 rounded-0" href="">
                    <i class="fas fa-shopping-bag"></i>
                </a>
            </div>
        </div>
        <div class="product-bottom text-center mt-4">
            <a class="text-decoration-none" href="#detail">
                <h5 class="m-0 text-lightpurple text-uppercase">Euro Espresso</h5>
            </a>
            <p class="m-0 text-success font-weight-bold">$30.00</p>
        </div>
    </div>

    <div class="col-md-12 my-3 text-center">
        <div class="title">
            <h2 class="text-orange font-weight-bold text-only text-uppercase">All Product</h2>
        </div>
    </div>

    <div class="col-md-4 my-5 Products_row_col-4">
        <div class="product-top Products_row_col-4_product-top text-center">
            <img class="img Products_row_col-4_product-top_img" src="frontend/img/euro-espresso.png">
            <div class="overlay Products_row_col-4_product-top_overlay d-flex flex-column justify-content-center">
                <a class="btn btn-lightpurple my-2 rounded-0" href="">
                    <i class="fas fa-eye"></i>
                </a>
                <a class="btn btn-lightpurple my-2 rounded-0" href="">
                    <i class="fas fa-heart"></i>
                </a>
                <a class="btn btn-lightpurple my-2 rounded-0" href="">
                    <i class="fas fa-shopping-bag"></i>
                </a>
            </div>
        </div>
        <div class="product-bottom text-center mt-4">
            <a class="text-decoration-none" href="#detail">
                <h5 class="m-0 text-lightpurple text-uppercase">Euro Espresso</h5>
            </a>
            <p class="m-0 text-success font-weight-bold">$30.00</p>
        </div>
    </div>
</div>
@endsection