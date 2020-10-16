@extends('master')
@section('title', 'ABOUT US')
@section('content')
<div class="container Banner">
    <div class="row justify-content-center">
        <div class="col-12 p-0">
            <div class="img d-flex justify-content-center align-items-center Banner_row_col-12_img" style="background-image: url('frontend/img/banner.jpg');">
                <h1 class="font-weight-bold text-only font-lg pointer animate__animated animate__fadeInDown">
                    ABOUT US
                </h1>
            </div>
        </div>

        <div class="col-7 text-center my-4">
            <h1 class="m-0 font-weight-bold pointer animate__animated animate__fadeInLeft">
                It started with a simple idea:
            </h1>
            <h1 class="m-0 font-weight-bold pointer animate__animated animate__fadeInRight">
                Make great coffee.
                </h2>
                <p class="font-weight-bold mt-2 animate__animated animate__fadeInUp">
                    Everything we do is rooted in that basic concept. It’s what drives us. It’s what moves us, motivates
                    us and keeps us excited about our products, our services and all we do in the community. We are
                    coffee passionate.
                </p>
        </div>

        <div class="col-12 p-0 mb-5">
            <div class="content d-flex justify-content-center align-items-center">
                <div class="img w-50 Banner_row_col-12_content_img-1 animate__animated animate__fadeInDown" style="background-image: url('frontend/img/our-coffee.png');"></div>
                <div class="desc w-50 animate__animated animate__fadeInRight">
                    <h1 class="text-only border-b d-inline-block font-weight-bold mx-4 pointer mb-4">OUR COFFEE</h1>
                    <p class="font-weight-bold mx-4 m-0">
                        From crop to café to cup, <a class="text-lightpurple text-uppercase text-decoration-none"
                            href="{{route('home')}}">coffee</a> is passionate about offering you the perfect coffee, roasted
                        and blended into a delicious creation of flavours and aromas. With the help of our master
                        roasters and bean hunters, our beans are carefully roasted to give you the best coffee
                        experience, every time.
                    </p>
                </div>
            </div>
            <div class="content d-flex justify-content-center align-items-center">
                <div class="desc w-50 animate__animated animate__fadeInLeft">
                    <h1 class="text-only border-b d-inline-block font-weight-bold mx-4 pointer mb-4">ROASTERY</h1>
                    <p class="font-weight-bold mx-4 m-0">
                        Our roastery in Da Nang is where all the magic happens, utilising the latest technology and
                        innovation to ensure the highest quality coffee in every cup.
                    </p>
                    <p class="font-weight-bold mx-4 m-0">
                        So, we’re committed to delivering a better coffee experience for everyone.
                    </p>
                </div>
                <div class="img w-50 Banner_row_col-12_content_img-2 animate__animated animate__fadeInUp" style="background-image: url('frontend/img/roastery.png');"></div>
            </div>
        </div>
    </div>
</div>
@endsection