<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Restaurant') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('assets/admin/menu/js/app.js') }}" defer></script>
    <script src="{{ asset('assets/admin/menu/js/jquery3.5.1.js') }}" defer></script>
    <script src="{{ asset('assets/admin/menu/js/custom.js') }}" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js."></script>

    <link rel="stylesheet" href="{{ asset('assets/admin/menu/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/admin/menu/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/menu/css/all.min.css') }}">
    <!--<link rel="stylesheet" href="fontawesome-free-5.13.1-web\css\all.min.css">-->

    <link href="{{ asset('assets/admin/menu/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/menu/css/style.css') }}">


</head>
<body>

    <div class="container">
        <div class="row">




            <div class="col-2"></div>
                    @foreach($branches as $branch)

                    <div class="col-5">

                        <img class="imgg" src="{{asset('assets/admin/branch')}}/{{$branch->image}}" height='600' width='600' alt="" style=" border-radius: 100%">
                    <br><br>  <h1 style=" color: #1c00cf;text-align: center">{{$branch->place}}</h1>
                        <br><br><br>
                    </div>

                    @endforeach







        </div>

    </div>


</body>
