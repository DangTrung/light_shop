@extends('master')
@section('title', 'DETAIL')
@section('content')
<div class="container Product">
    <div class="row my-5">
        <div class="col-12 d-flex mb-5">
            <div class="img w-50 text-center animate__animated animate__fadeInLeft">
                <img class="pic Product_row_col-12_img_pic" src="{{ asset('/storage/'.$prod->prod_image) }}">
            </div>
            <div class="info w-50 animate__animated animate__fadeInRight">
                <h2 class="text-only font-weight-bold text-uppercase">{{$prod->prod_name}}</h2>
                @if ($prod->prod_discount == 0)
                <h4 class="price text-success font-weight-bold">$&nbsp{{number_format($prod->prod_price, 2)}}</h4>
                @else
                <?php
                    $money = $prod->prod_price*(100-$prod->prod_discount)/100;
                ?>
                <div class="d-flex">
                    <h4 class="price text-secondary font-weight-bold mr-3">
                        <strike>$&nbsp{{number_format($prod->prod_price, 2)}}</strike>
                    </h4>
                    <h4 class="price text-danger font-weight-bold">$&nbsp{{number_format($money, 2)}}</h4>
                </div>
                @endif
                @if ($prod->prod_quantity > 0)
                <h6 class="font-weight-bold text-uppercase">status:
                    <span class="text-primary">Available</span>
                </h6>
                <h6 class="price font-weight-bold text-uppercase">Quantity:
                    <span class="text-primary">{{ $prod->prod_quantity }} products</span>
                </h6>
                <form action="{{ route('cart.add', $prod->prod_id) }}" method="POST">
                    @csrf
                    <input type="number" name="qty" value="1" step="1" min="1" max="{{$prod->prod_quantity}}" size="5"
                        class="text-only text-center bg-none p-2 font-weight-bold">
                    <button type="submit" class="btn btn-lightpurple py-2 rounded-0 font-weight-bold ml-3">
                        ADD TO CART
                    </button>
                </form>
                @else
                <h6 class="font-weight-bold text-uppercase">status:
                    <span class="text-danger">Out of stock</span>
                </h6>
                @endif

                <p class="description text-danger mt-5">
                    {!! $prod->prod_description !!}
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container Comment">
    <div class="row mb-5">
        <div class="col-12">
            <h1 class="m-0 text-only font-weight-bold text-center animate__animated animate__fadeInDown">
                REVIEWS
            </h1>
        </div>

        <div class="col-12 mt-2 border-b animate__animated animate__fadeInLeft">
            <div class="text-center">
                @if ($count_prod > 0)
                <p class="font-weight-bold text-only text-uppercase">The product have {{$count_prod}} comment</p>
                @else
                <p class="font-weight-bold text-only text-uppercase">The product has not comment</p>
                @endif
            </div> 

            @foreach ($info as $item)
            <div class="w-75 mb-3">
                <h6 class="text-only font-weight-bold m-0">
                    {{$item->name}}
                </h6>
                <small class="text-primary">
                    {{date('d/m/Y H:i', strtotime($item->created_at))}}
                </small>
                <p>{{$item->cmt_content}}</p>
            </div>
            @endforeach
        </div>

        @if ($count > 0)
        <div class="col-12 py-4 animate__animated animate__fadeInUp">
            <h6 class="text-only text-uppercase font-weight-bold mb-3">My review for {{$prod->prod_name}}</h6>
            <form class="w-50" action="{{ route('home.comment') }}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="hidden" class="form-control rounded-0 bg-none text-light" name="prod_id"
                        value="{{$prod->prod_id}}">
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control rounded-0 bg-none text-light" name="user_id"
                        value="{{Auth::user()->id}}">
                </div>
                <div class="form-group">
                    <textarea class="form-control rounded-0" name="content" placeholder="Your comment" rows="5"
                        required></textarea>
                </div>
                <button class="btn btn-lightpurple rounded-0 font-weight-bold">SUBMIT</button>
            </form>
        </div>
        @endif

    </div>
</div>

<div class="container Recommended">
    <div class="row mb-5 animate__animated animate__fadeInUpBig">
        <div class="col-12">
            <h1 class="m-0 text-only font-weight-bold text-center">
                YOU MAY ALSO LIKE
            </h1>
        </div>

        @foreach ($prod_rela as $item)
        <div class="col-4 d-flex flex-column justify-content-center align-items-center mt-5">
            <a class="mt-2 text-decoration-none text-orange" href="{{route('home.proddetail', $item->prod_id)}}">
                <img class="img Recommended_row_col-4_img" src="{{ asset('/storage/'.$item->prod_image) }}">
                <h5 class="m-0 text-lightpurple font-weight-bold text-uppercase text-center mt-4">{{$item->prod_name}}
                </h5>
            </a>
            <p class="m-0 text-success font-weight-bold">$&nbsp{{number_format($item->prod_price, 2)}}</p>
            <a class="btn btn-lightpurple font-weight-bold text-light rounded-0 mt-5 Recommended_row_col-4_btn"
                href="{{route('home.proddetail', $item->prod_id)}}">
                VIEW PRODUCT
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection