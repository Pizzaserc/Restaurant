







<head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | General UI</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.2 -->
    <link href="{{asset('assets/admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <!-- Theme style -->
    <link href="{{asset('assets/admin/dist/css/AdminLTE.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="{{asset('assets/admin/dist/css/skins/_all-skins.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>
        .color-palette {
            height: 50px;
            line-height: 50px;
            text-align: center;

        }
        .color-palette-set {
            margin-bottom: 15px;
        }
        .color-palette span {
            display: none;
        }
        .color-palette:hover span {
            display: block;
        }
    </style>
</head>











<div class="box-body chart-responsive">
    <div class="chart" id="bar-chart" style="height: 300px; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
        <svg height="300" version="1.1" width="510" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative; left: -0.5px;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" x="32.859375" y="261" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#aaaaaa" d="M45.359375,261H485" stroke-width="0.5"></path><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" x="32.859375" y="202" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">25</tspan></text><path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#aaaaaa" d="M45.359375,202H485" stroke-width="0.5"></path><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" x="32.859375" y="143" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal">
                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">50</tspan></text>
            <path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#aaaaaa" d="M45.359375,143H485" stroke-width="0.5"></path>
            <text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" x="32.859375" y="84" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">75</tspan></text><path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#aaaaaa" d="M45.359375,84H485" stroke-width="0.5"></path><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font: 12px sans-serif;" x="32.859375" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">100</tspan></text><path style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);" fill="none" stroke="#aaaaaa" d="M45.359375,25H485" stroke-width="0.5"></path><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" x="453.5970982142857" y="273.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" x="327.98549107142856" y="273.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" x="202.37388392857142" y="273.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><text style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font: 12px sans-serif;" x="76.76227678571428" y="273.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#888888" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2006</tspan></text><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="53.21010044642857" y="25" width="22.052176339285715" height="236" r="0" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="78.26227678571428" y="48.60000000000002" width="22.052176339285715" height="212.39999999999998" r="0" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="116.01590401785714" y="84" width="22.052176339285715" height="177" r="0" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="141.06808035714286" y="107.6" width="22.052176339285715" height="153.4" r="0" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="178.82170758928572" y="143" width="22.052176339285715" height="118" r="0" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="203.87388392857144" y="166.60000000000002" width="22.052176339285715" height="94.39999999999998" r="0" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="241.62751116071428" y="84" width="22.052176339285715" height="177" r="0" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="266.6796875" y="107.6" width="22.052176339285715" height="153.4" r="0" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1"></rect>
            <rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="304.43331473214283" y="143" width="22.052176339285715" height="118" r="0" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="329.48549107142856" y="166.60000000000002" width="22.052176339285715" height="94.39999999999998" r="0" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1"></rect>
            <rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="367.2391183035714" y="84" width="22.052176339285715" height="177" r="0" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1"></rect>
            <rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="392.2912946428571" y="107.6" width="22.052176339285715" height="153.4" r="0" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1"></rect><rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="430.044921875" y="25" width="22.052176339285715" height="236" r="0" rx="0" ry="0" fill="#00a65a" stroke="none" fill-opacity="1"></rect>
            <rect style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 1;" x="455.0970982142857" y="48.60000000000002" width="22.052176339285715" height="212.39999999999998" r="0" rx="0" ry="0" fill="#f56954" stroke="none" fill-opacity="1"></rect></svg><div class="morris-hover morris-default-style" style="left: 102.568px; top: 107px; display: none;"><div class="morris-hover-row-label">2007</div>
            <div class="morris-hover-point" style="color: #00a65a">
                CPU:
                75
            </div><div class="morris-hover-point" style="color: #f56954">
                DISK:
                65
            </div></div></div>
</div>


<div class="box-body">
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&timesd;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
    </div>
    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-info"></i> Alert!</h4>
        Info alert preview. This alert is dismissable.
    </div>
    <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4><i class="icon fa fa-warning"></i> Alert!</h4>
        Warning alert preview. This alert is dismissable.
    </div>
    <div class="alert alert-success alert-dismissable" style="width: 50%">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>	<i class="icon fa fa-check"></i> Alert!</h4>
        Success alert preview. This alert is dismissable.
    </div>
</div>




<div class="slider-track"><div class="slider-selection" style="left: 0%; width: 82.5%;"></div><div class="slider-handle min-slider-handle round" tabindex="0" style="left: 0%;"></div><div class="slider-handle max-slider-handle round" tabindex="0" style="left: 82.5%;"></div></div>
