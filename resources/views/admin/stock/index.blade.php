<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('admin/stock/css/style.css') }}">

    <script src="{{ asset('/admin/menu/js/jquery3.5.1.js') }}" defer></script>
    <script  src="{{ asset('/admin/stock/js/store.js') }}" defer></script>


</head>

<body>
<div >

    <button class="edbtn">EDIT Minimum quantity</button>
    <button class="edbtnn">EDIT High quantity</button>
    <br><br><br>
    <a href="stock/create" class="add">Add Food</a>
    <br><br><br><br>
   <a  class="delet">Delete Food</a>
    <br><br><br>

</div>
<div class="clear"></div>
<table>
    <caption>STOCK</caption>

    <thead>
    <tr>
        <td>id</td>
        <td>image</td>
        <td>name</td>
        <td>Quantity</td>
        <td>Minimum quantity</td>
        <td>High quantity</td>
    </tr>
    </thead>
    <tbody>
    <!--start tybe of meat-->
    @foreach($types as $type)
        <tr>
            <td class="tdclass" colspan="6">{{$type->name}}<br />
                <img  class="type" src="{{asset('/admin/stock/image')}}/{{$type->name}}/{{$type->image}}"  alt="" ></td>
        </tr>
        @foreach($stocks as $stock)
            @if($stock->id_typefood==$type->id)
            <tr>
                <td>{{$stock->id}}</td>

                <td><button class="btnimg" data-id="{{$stock->id}}" ><img  src="{{asset('/admin/stock/image')}}/{{$type->name}}/{{$stock->image}}"  alt="" ></button></td>
                <td>{{$stock->name}}</td>
                <td>{{$stock->quantity}} kg</td>
                <td><P class="p1">{{$stock->MinimumQuantity}} kg</P><br /> <button  class="btn" data-id="{{$stock->id}}" data-name="MinimumQuantity">Edit</button><br /><input value="" name="" type="number" class="input2" min="100" step="100"><button  class="save">save</button></td>
                <td><P class="p2">{{$stock->HighQuantity}} kg</P><br /> <button class="btnn" data-id="{{$stock->id}}" data-name="HighQuantity"><a href="stock\edi\{{$stock->id}}">Edit</a></button><br /><input value="" name="" type="number" class="input1" min="100" step="100"><button class="save1">save</button></td>
            </tr>
            @endif
        @endforeach

    @endforeach

    </tbody>
</table>
</body>
</html>
