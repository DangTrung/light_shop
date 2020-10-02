<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/style.css">
    <link rel="shortcut icon" href="frontend/img/favicon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <title>@yield('title') | COFFEE</title>
</head>

<body class="bg-lightwhite">

    @include('layouts.header')
    
    @include('layouts.slide')

    <!-- content -->
    <div class="container Content">
        <div class="row my-5">
            @include('layouts.categories')

            @section('content') @show
        </div>
    </div>

    @include('layouts.footer')

    <!-- Link JavaScript -->
    <script src="frontend/js/jquery-3.5.1.slim.min.js"></script>
    <script src="frontend/js/popper.min.js"></script>
    <script src="frontend/js/bootstrap.min.js"></script>
</body>

</html>