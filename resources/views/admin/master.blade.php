<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="backend/css/bootstrap.min.css">
    <link rel="stylesheet" href="backend/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <title>@yield('title') | Admin</title>
    <script src="/editor/ckeditor/ckeditor.js"></script>
</head>

<body>

    <div class="container-fluid Main">
        <div class="row">
            <div class="col-3">
                <!-- Logo -->
                <div class="col-12 Logo mt-2 mb-3">
                    <a class=" d-flex justify-content-center align-items-center py-3 text-lightpurple text-decoration-none"
                        href="{{ route('dashboard')}}">
                        <i class="fas fa-code fa-3x mr-2"></i>
                        <h2 class="m-0 font-weight-bold">ADMIN</h2>
                    </a>
                </div>

                <!-- Category Navbar -->
                <div class="col-12 CateNav p-0">
                    <ul class="m-0 p-0" id="side-menu">
                        <li class="list-unstyled py-1">
                            <a class="text-decoration-none text-dark font-weight-bold d-flex align-items-center py-2 px-3 Main_row_col-3_CateNav_a"
                                href="{{ route('user.index') }}">
                                <i class="fas fa-users mr-2 Main_row_col-3_CateNav_a_i text-center text-success"></i>
                                <p class="m-0 Main_row_col-3_CateNav_a_p">USERS</p>
                            </a>
                        </li>
                        <li class="list-unstyled py-1">
                            <a class="text-decoration-none text-dark font-weight-bold d-flex align-items-center py-2 px-3 Main_row_col-3_CateNav_a"
                                data-toggle="collapse" href="#collapseExample" role="button">
                                <i
                                    class="fas fa-certificate mr-2 Main_row_col-3_CateNav_a_i text-center text-danger"></i>
                                <p class="m-0 Main_row_col-3_CateNav_a_p">CATEGORIES</p>
                            </a>
                            <div class="collapse" id="collapseExample">
                                <a class="ml-5 text-decoration-none text-dark font-weight-bold d-flex align-items-center py-2 px-3 Main_row_col-3_CateNav_a"
                                    href="{{ route('productcate.index') }}" role="button">
                                    <i class="fas fa-box mr-2 Main_row_col-3_CateNav_a_i text-center text-primary"></i>
                                    <p class="m-0 Main_row_col-3_CateNav_a_p">PRODUCT</p>
                                </a>
                                <a class="ml-5 text-decoration-none text-dark font-weight-bold d-flex align-items-center py-2 px-3 Main_row_col-3_CateNav_a"
                                    href="{{ route('articlecate.index') }}" role="button">
                                    <i
                                        class="fas fa-newspaper mr-2 Main_row_col-3_CateNav_a_i text-center text-warning"></i>
                                    <p class="m-0 Main_row_col-3_CateNav_a_p">ARTICLE</p>
                                </a>
                            </div>

                        </li>
                        <li class="list-unstyled py-1">
                            <a class="text-decoration-none text-dark font-weight-bold d-flex align-items-center py-2 px-3 Main_row_col-3_CateNav_a"
                                href="{{ route('product.index') }}">
                                <i class="fas fa-box mr-2 Main_row_col-3_CateNav_a_i text-center text-primary"></i>
                                <p class="m-0 Main_row_col-3_CateNav_a_p">PRODUCTS</p>
                            </a>
                        </li>
                        <li class="list-unstyled py-1">
                            <a class="text-decoration-none text-dark font-weight-bold d-flex align-items-center py-2 px-3 Main_row_col-3_CateNav_a"
                                href="{{ route('article.index') }}">
                                <i
                                    class="fas fa-newspaper mr-2 Main_row_col-3_CateNav_a_i text-center text-warning"></i>
                                <p class="m-0 Main_row_col-3_CateNav_a_p">ARTICLES</p>
                            </a>
                        </li>
                        <li class="list-unstyled py-1">
                            <a class="text-decoration-none text-dark font-weight-bold d-flex align-items-center py-2 px-3 Main_row_col-3_CateNav_a"
                                href="{{ route('home') }}">
                                <i class="fas fa-home mr-2 Main_row_col-3_CateNav_a_i text-center text-only"></i>
                                <p class="m-0 Main_row_col-3_CateNav_a_p">HOMEPAGE</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-9 bg-lightwhite p-0">
                <div class="col-12 py-2 bg-whitesmoke d-flex justify-content-between align-items-center">
                    <div class="col-4 py-3">
                        <div class="input-group">
                            <input type="text" class="form-control rounded-0" placeholder="search ..."
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-lightpurple rounded-0" type="button" id="button-addon2">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 text-right">
                        <div class="dropdown">
                            <a class="text-white text-decoration-none py-2 px-4 bg-lightwhite text-dark rounded cursor"
                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <small class="font-small">
                                    {{ Auth::user()->name }}
                                </small>
                                <i class="ml-2 fas fa-angle-down"></i>
                            </a>
                            <div class="dropdown-menu mt-3" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item d-flex align-items-center py-2" href="#">
                                    <i class="fas fa-user mr-2"></i>
                                    <p class="m-0 font-small">Profile</p>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="fas fa-cog mr-2"></i>
                                    <p class="m-0 font-small">Settings</p>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}">
                                    <i class="fas fa-key mr-2"></i>
                                    <p class="m-0 font-small">Log out</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 bg-secondary p-0 shadow-sm">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb rounded-0">
                            <li class="breadcrumb-item active font-weight-bold ml-3" aria-current="page">
                                @yield('title')
                            </li>
                        </ol>
                    </nav>
                </div>

                @section('content') @show

            </div>

            <div class="col-12 text-center py-3 bg-secondary">
                <p class="m-0 text-white font-weight-bold">
                    DESIGN BY <a class="text-dark text-decoration-none"
                        href="https://www.facebook.com/hieupd21">JuyHiu</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Link JavaScript -->
    <script src="backend/js/jquery-3.5.1.slim.min.js"></script>
    <script src="backend/js/popper.min.js"></script>
    <script src="backend/js/bootstrap.min.js"></script>

    <script>
        // Change Image add product
        function changeImg(input){ 
            if(input.files && input.files[0]){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#avatar').attr('src',e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
      
        $(document).ready(function() {
            $('#avatar').click(function(){
                $('#img').click();
            });
        });     
    </script>
</body>

</html>