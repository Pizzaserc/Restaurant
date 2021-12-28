<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>css</title>
    <link href="{{asset('/feedback/css/animate.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('/feedback/css/callery.css')}}" rel="stylesheet" type="text/css" />

    <!--link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/callery.css"-->
    <style>

    </style>
</head>

<body>
    <div class="load">
        <div class="one"> </div>
        <div class="tow"></div>
        <div class="three"></div>
        <div class="title">THE PENINSULA
        </div>
        <div class="four"> </div>
        <div class="five"></div>
        <div class="six"></div>
    </div>


    <div class="chooese">

        <div>
            <span>lebanon</span><br /><img src=" {{asset('/admin/branch/maras-restaurant-interior-1.jpg')}}"><br /><a  class="chooes" href="feedBackme/index/1" data-id="1">chooese</a>
        </div>
        <div>
            <span>lebanon</span><br /><img class="one-img" src=" {{asset('/admin/branch/maras-restaurant-interior-1.jpg')}}"><br /><a href="feedBackme/index/2" class="chooes" data-id="2">chooese</a>
        </div>
        <div>
            <span>lebanon</span><br /><img class="tow-img" src=" {{asset('/admin/branch/maras-restaurant-interior-1.jpg')}}"><br /><a   class="chooes" href="feedBackme/index/3" data-id="3">chooese</a>
        </div>
        <div>
            <span>lebanon</span><br /><img class="three-img" src=" {{asset('/admin/branch/maras-restaurant-interior-1.jpg')}}"><br /><a  class="chooes"  href="feedBackme/index/4" data-id="4">chooese</a>
        </div>
        <div>
            <span>lebanon</span><br /><img class="four-img" src=" {{asset('/admin/branch/maras-restaurant-interior-1.jpg')}}"><br /><a class="chooes" href="feedBackme/index/5"  data-id="5">chooese</a>
        </div>

    </div>
   





    <script src="{{asset('/feedback/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('/feedback/js/form.js')}}"></script>
</body>

</html>