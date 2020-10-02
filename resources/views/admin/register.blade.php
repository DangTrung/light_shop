<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="frontend/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400;700&display=swap">
    <title>Login</title>

</head>

<body class="bg-whitesmoke">

    <div class="container">
        <div class="row vh-100">
            <div class="col-md-4 col-6 bg-dark m-auto py-5">
                <h1 class="text-center text-only font-weight-bold mb-3">REGISTER</h1>
                @include('error.note')
                <form action="{{ route('postRegister') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="text-uppercase text-only font-weight-bold">
                            Name
                        </label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase text-only font-weight-bold">
                            Email
                        </label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <label class="text-uppercase text-only font-weight-bold">
                            Password
                        </label>
                        <input type="password" class="form-control" name="password">
                    </div> 
                    <div class="form-group">
                        <label class="text-uppercase text-only font-weight-bold">
                            Phone Number
                        </label>
                        <input type="text" class="form-control" name="phone">
                    </div>
                    <button type="submit" class="btn btn-lightpurple btn-block font-weight-bold text-uppercase mt-4">
                        SUBMIT
                    </button>
                </form>
                <p class="m-0 mt-3 text-center">
                    <a class="text-uppercase text-lightpurple text-decoration-none font-weight-bold"
                        href="{{ route('getLogin') }}">
                        Back
                    </a>
                </p>
            </div>
        </div>
    </div>

</body>

</html>

{{-- <ul class="navbar-nav ml-auto">
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
</li>
@if (Route::has('register'))
<li class="nav-item">
    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
</li>
@endif
@else
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>
</li>
@endguest
</ul> --}}