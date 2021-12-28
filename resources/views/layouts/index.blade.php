<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peninsula</title>

    <link rel="stylesheet" href="{{asset('employee/css/master.css')}}">
    
    <style>

    </style>
</head>
<body>
<!-- End navbar -->

    <div id="app">


        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <script src="{{asset('employee/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('employee/js/form.js')}}"></script>
</body>
</html>
