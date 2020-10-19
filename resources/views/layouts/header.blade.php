<!-- alert -->
<div class="alert alert-dark font-small alert-dismissible fade show rounded-0 m-0" role="alert">
    <div class="d-flex justify-content-between">
        <div class="info">
            <strong class="text-danger">SALE!</strong> You should check in on some of those fields below.
        </div>

        <div class="social">
            <a class="text-decoration-none mr-3 text-lightpurple" href="">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a class="text-decoration-none mr-3 text-lightpurple" href="">
                <i class="fab fa-github"></i>
            </a>
            <a class="text-decoration-none mr-3 text-lightpurple" href="">
                <i class="fab fa-instagram"></i>
            </a>
            <a class="text-decoration-none mr-3 text-lightpurple" href="">
                <i class="fab fa-google"></i>
            </a>
        </div>
    </div>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span class="text-lightpurple" aria-hidden="true">&times;</span>
    </button>
</div>

<!-- header -->
<div class="container Header">
    <div class="row justify-content-between align-items-center py-3 border-bottom">
        <div class="col-2 d-flex justify-content-center">
            <a class="d-flex align-items-center text-decoration-none text-lightpurple" href="{{route('home')}}">
                <i class="fas fa-star fa-3x mr-2"></i>
                <h3 class="m-0 font-weight-bold">COFFEE</h3>
            </a>
        </div>

        <div class="col-6">
            <ul class="d-flex justify-content-around align-items-center m-0">
                <li class="list-unstyled">
                    <a class="d-flex align-items-center text-decoration-none text-lightpurple" href="">
                        <i class="fas fa-star mr-2"></i>
                        <small class="m-0 text-lightpurple">WISHLIST</small>
                    </a>
                </li>
                <li class="list-unstyled">
                    <a class="d-flex align-items-center text-decoration-none text-lightpurple" href="">
                        <i class="fas fa-meteor mr-2"></i>
                        <small class="m-0 text-lightpurple">CHECKOUT</small>
                    </a>
                </li>
                <li class="list-unstyled">
                    <a class="d-flex align-items-center text-decoration-none text-lightpurple"
                        href="{{ route('cart.show') }}">
                        <i class="fas fa-shopping-bag mr-2"></i>
                        <small class="m-0 text-lightpurple">CART ({{Cart::count()}})</small>
                    </a>
                </li>
                @if (Route::has('getLogin'))
                @auth
                @if (Auth::user()->role == 1 || Auth::user()->role == 2)
                <li class="list-unstyled">
                    <a class="d-flex align-items-center text-decoration-none text-lightpurple"
                        href="{{ route('dashboard') }}">
                        <i class="fas fa-chart-line mr-2"></i>
                        <small class="m-0 text-lightpurple">DASHBOARD</small>
                    </a>
                </li>
                @else
                <li class="list-unstyled dropdown">
                    <a class="d-flex align-items-center text-decoration-none text-lightpurple cursor"
                        id="dropdownMenuButton" data-toggle="dropdown">
                        <i class="fas fa-user mr-2 text-lightpurple"></i>
                        <small class="m-0 text-lightpurple">ACCOUNT</small>
                    </a>
                    <div class="dropdown-menu mt-3" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item d-flex align-items-center py-2" href="#">
                            <i class="fas fa-history mr-2"></i>
                            <p class="m-0 font-small">History</p>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                            <i class="fas fa-key mr-2"></i>
                            <p class="m-0 font-small">Log out</p>
                        </a>
                    </div>
                </li>
                @endif
                @else
                <li class="list-unstyled">
                    <a class="d-flex align-items-center text-decoration-none text-lightpurple"
                        href="{{ route('getLogin') }}">
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        <small class="m-0 text-lightpurple">LOGIN</small>
                    </a>
                </li>
                @endauth
                @endif
            </ul>
        </div>
    </div>
</div>

<!-- topbar -->
<div class="container Topbar">
    <div class="row justify-content-between align-items-center py-2">
        <div class="col-5 menu-bar">
            <ul class="p-0 m-0 d-flex justify-content-between">
                <li class="list-unstyled">
                    <a class="text-decoration-none text-lightpurple" href="">
                        HOME
                    </a>
                </li>
                <li class="list-unstyled">
                    <a class="text-decoration-none text-lightpurple" href="">
                        SHOP
                    </a>
                    <div class="sub-menu Topbar_row_col-4_ul_li_sub-menu bg-secondary py-1">
                        <ul class="m-0 p-0 list-menu">
                            <li class="list-unstyled my-2 pl-2 pr-5">
                                <a class="text-decoration-none text-light" href="">
                                    PRODUCT
                                </a>
                            </li>
                            <li class="list-unstyled my-2 pl-2 pr-5">
                                <a class="text-decoration-none text-light" href="">
                                    PRODUCT DETAIL
                                </a>
                            </li>
                            <li class="list-unstyled my-2 pl-2 pr-5">
                                <a class="text-decoration-none text-light" href="">
                                    CHECKOUT
                                </a>
                            </li>
                            <li class="list-unstyled my-2 pl-2 pr-5">
                                <a class="text-decoration-none text-light" href="">
                                    CART
                                </a>
                            </li>
                            <li class="list-unstyled my-2 pl-2 pr-5">
                                <a class="text-decoration-none text-light" href="">
                                    LOGIN
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="list-unstyled">
                    <a class="text-decoration-none text-lightpurple" href="{{ route('home.about') }}">
                        ABOUT US
                    </a>
                </li>
                <li class="list-unstyled">
                    <a class="text-decoration-none text-lightpurple" href="{{ route('home.contact') }}">
                        CONTACT US
                    </a>
                </li>
                <li class="list-unstyled">
                    <a class="text-decoration-none text-lightpurple" href="">
                        404
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-3">
            <div class="input-group">
                <input type="text" class="form-control rounded-0" placeholder="search ...">
                <div class="input-group-append">
                    <button class="btn btn-lightpurple rounded-0" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>