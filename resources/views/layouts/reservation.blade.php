<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <style type="text/css">
        i{
            font-size: 50px !important;
            padding: 10px;
        }
    </style>

    <meta charset="utf-8">
    <meta  content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Peninsula</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/admin/menu/css/bootstrap.min.css') }}">
    <!-- Site CSS -->

    <!-- Pickadate CSS -->



    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('/admin/menu/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/menu/css/app.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('/admin/menu/css/custom.css')}}">


    <link rel="stylesheet" href="{{ asset('/admin/menu/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('/admin/menu/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/admin/menu/css/all.min.css') }}">
    <!--<link rel="stylesheet" href="fontawesome-free-5.13.1-web\css\all.min.css">-->

    <link href="{{ asset('/admin/menu/css/app.css') }}" rel="stylesheet">
    <![endif]-->

    <link rel="stylesheet" href="{{asset('/admin/menu/css/classic.css')}}">
    <link rel="stylesheet" href="{{asset('/admin/menu/classic.time.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href=" {{asset('/admin/menu/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href=" {{asset('/admin/menu/css/classic.css') }}">
    <link rel="stylesheet" href=" {{asset('/admin/menu/css/classic.date.css') }}">
    <link rel="stylesheet" href=" {{asset('/admin/menu/css/classic.time.css') }}">
    <link rel="stylesheet" href="{{asset('/admin/menu/css/responsive.css')}}">
    <link rel="stylesheet" href=" {{asset('/admin/menu/css/custom.css') }}">
    <link rel="stylesheet" href="{{asset('/admin/menu/css/style.css')}}">
    <link rel="stylesheet" href=" {{asset('/front/css/stylet.css') }}">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <-- Scripts -->




    <!-- Fonts -->
    <!-- Styles -->

    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>



    <script src="{{ asset('/admin/menu/js/app.js') }}" defer></script>

    <script src="{{ asset('/admin/menu/js/custom.js') }}" defer></script>
    <script src="{{ asset('/admin/menu/js/popper.min.js') }}" defer></script>
    <script src="{{ asset('/admin/menu/js/bootstrap.min.js') }}" defer></script>
    <script src="{{ asset('/admin/menu/js/jquery.superslides.min.js') }}" defer></script>
    <script src="{{ asset('/admin/menu/js/images-loded.min.js') }}" defer></script>
    <script src="{{ asset('/admin/menu/js/isotope.min.js') }}" defer></script>
    <script src="{{ asset('/admin/menu/js/picker.js') }}" defer></script>
    <script src="{{ asset('/admin/menu/js/picker.date.js') }}" defer></script>
    <script src="{{ asset('/admin/menu/js/picker.time.js') }}" defer></script>
    <script src="{{ asset('/admin/menu/js/legacy.js') }}" defer></script>
    <script src="{{ asset('/admin/menu/js/form-validator.min.js') }}" defer></script>


    <script src="{{ asset('/admin/menu/js/contact-form-script.js') }}" defer></script>


    <script src="{{ asset('/admin/menu/js/jquery3.5.1.js') }}" defer></script>

    <script src="{{ asset('/admin/menu/js/popper.min.js') }}" defer></script>

    <script src="{{ asset('/front/js/table.js') }}" defer></script>
    <script src="{{ asset('/front/js/custom.js') }}" defer></script>

</head>


<body style="background-color: #FFBA08">


<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('/front/images')}}/logo.png"  alt="" style="border-radius: 50px">

            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                    <li class="nav-item active"><a class="nav-link" href="/">About</a></li>
                    <li class="nav-item dropdown">
                        
                    </li>



                </ul>
            </div>
        </div>
    </nav>
</header>
<br>
<br>
<br>

<br>
<!-- End navbar -->

<div id="app" >


    <main class="py-4  " >
        @yield('content')
    </main>
</div>
</body>
