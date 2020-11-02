@extends('master')
@section('title', 'EDIT ACCOUNT')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 d-flex flex-column align-items-center">
            <div class="col-8 text-center">
                <h1 class="my-3 text-only font-weight-bold">MY ACCOUNT</h1>
            </div>
            <div class="col-12">
                @include('error.note')
                <form action="{{ route('account.update', $user->id) }}" method="post"
                    class="d-flex justify-content-center align-items-center flex-wrap my-3"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-4">
                        <div class="form-group mt-3 d-flex align-items-center">
                            <p class="m-0 text-only text-uppercase font-weight-bold col-4">Name: </p>
                            <input type="text" class="form-control" name="name" value="{{$user->name}}">
                        </div>
                        <div class="form-group mt-3 d-flex align-items-center">
                            <p class="m-0 text-only text-uppercase font-weight-bold col-4">Email: </p>
                            <input type="text" class="form-control" name="email" value="{{$user->email}}">
                        </div>
                        <div class="form-group mt-3 d-flex align-items-center">
                            <p class="m-0 text-only text-uppercase font-weight-bold col-4">Phone: </p>
                            <input type="text" class="form-control" name="phone" value="{{$user->phone}}">
                        </div>
                    </div>
                    <div class="form-group">
                        @if ($user->image == null)
                        <img id="avatar" class="img-thumbnail" src="backend/img/user.jpg" width="200px">
                        @else
                        <img id="avatar" class="img-thumbnail" src="{{ asset('/storage/'.$user->image) }}"
                            width="200px">
                        @endif
                        <input type="file" class="form-control-file hidden mt-2" name="image" onchange="changeImg(this)">
                    </div>
                    <div class="col-8 text-center my-4 d-flex justify-content-center">
                        <button class="btn btn-lightpurple text-uppercase font-weight-bold">
                            Change
                        </button>
                    </div>
                    <div class="col-8 text-center">
                        <form action="{{ route('account.index') }}" method="GET">
                            <button class="btn btn-danger text-uppercase font-weight-bold">
                                Back
                            </button>
                        </form>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection