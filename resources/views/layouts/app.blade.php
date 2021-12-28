<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <style type="text/css">
        i{
            font-size: 25px !important;
            padding: 10px;
        }
    </style>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Peninsula</title>

    <!-- Scripts -->
    <script src="{{ asset('admin/menu/js/app.js') }}" defer></script>
    <script src="{{ asset('admin/menu/js/jquery3.5.1.js') }}" defer></script>
    <script src="{{ asset('admin/menu/js/custom.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js."></script>

    <link rel="stylesheet" href="{{ asset('admin/menu/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/menu/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/menu/css/all.min.css') }}">
    <!--<link rel="stylesheet" href="fontawesome-free-5.13.1-web\css\all.min.css">-->

    <link href="{{ asset('admin/menu/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/menu/css/style.css') }}">


</head>
<body>




<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('front/images')}}/logo.png"  alt="" style="border-radius: 50px">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="site">Menu</a></li>
                    <li class="nav-item active"><a class="nav-link" href="about">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Admin</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="reservation">Reservation</a>
                            <a class="dropdown-item" href="stuff">Stuff</a>
                            <a class="dropdown-item" href="menu">Meal</a>
                            <a class="dropdown-item" href="category">category</a>
                            <a class="dropdown-item" href="gallery">Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="blog.html">blog</a>
                            <a class="dropdown-item" href="blog-details.html">blog Single</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<br>
<br>
<br>
<br>
<br>

<!-- End navbar -->

    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
