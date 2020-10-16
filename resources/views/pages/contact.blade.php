@extends('master')
@section('title', 'CONTACT US')
@section('content')
<div class="container Banner">
    <div class="row justify-content-center">
        <div class="col-12 p-0">
            <div class="img d-flex justify-content-center align-items-center Banner_row_col-12_img" style="background-image: url('frontend/img/contact.png');">
                <h1 class="font-weight-bold text-only font-lg pointer animate__animated animate__fadeInDown">
                    CONTACT
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="container Content">
    <div class="row mb-4">
        <div class="col-12 my-4 text-right animate__animated animate__fadeInRight">
            <h3 class="m-0 font-weight-bold text-uppercase">
                <a class="text-decoration-none text-lightpurple" href="{{ route('home') }}">coffee</a>
                Sole Headquarters
            </h3>
            <p class="m-0 font-weight-bold text-uppercase font-small">
                690 Trần Cao Vân, Đà Nẵng
            </p>
            <p class="m-0 font-weight-bold text-uppercase font-small">
                (070) 392-8702
            </p>
        </div>
        <div class="col-12 my-3 text-center d-flex">
            <div class="content w-50">
                <h4 class="font-weight-bold text-only text-uppercase text-left mb-3 animate__animated animate__fadeInLeft">
                    For questions, please drop us a line
                </h4>
                <form action="" class="mr-5">
                    <div class="form-group text-left animate__animated animate__fadeInRight">
                        <label class="text-only font-weight-bold text-uppercase">Name</label>
                        <input type="text" class="form-control rounded-0 border-none">
                    </div>
                    <div class="form-group text-left animate__animated animate__fadeInLeft">
                        <label class="text-only font-weight-bold text-uppercase">Email</label>
                        <input type="email" class="form-control rounded-0 border-none">
                    </div>
                    <div class="form-group text-left animate__animated animate__fadeInRight">
                        <label class="text-only font-weight-bold text-uppercase">What can we help with?</label>
                        <textarea class="form-control rounded-0 border-none" id="text" rows="3"></textarea>
                    </div>
                    <button class="btn btn-lightpurple rounded-0 font-weight-bold text-uppercase px-3 animate__animated animate__fadeInUp">
                        Submit
                    </button>
                </form>
            </div>
            <div class="img w-50 Content_row_col-12_img animate__animated animate__fadeInUp" style="background-image: url('frontend/img/batender.png');"></div>
        </div>
    </div>
</div>
@endsection