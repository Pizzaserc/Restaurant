



<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>reservation</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <link rel="stylesheet" href="{{asset('/admin/menu/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{asset('/front/payment/css/page.css') }}">

</head>

<body>

    


<div class="page_price">
    <br><br><br>
    <form action="/ResturantManagement/pay" method='post'>
                            @csrf
       <input id="input_price" class="price_t"  value=" {{$data}}" name="data" readonly="readonly">
       <br>
        <h3> Enter the amount you want to pay </h3>
        <br>
        <input id="input_pric" class="price_t" required data-error="Please" placeholder=" price" name="amount" >
        <br><br>
     
         <input type="submit" class='price_t btn btn-light' style="margin: 10px 10px 10px 10px;">
   
         <br><br>
        
        
    </form>
    </div>
</body>
</html>









