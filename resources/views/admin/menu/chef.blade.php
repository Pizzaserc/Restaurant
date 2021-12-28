@extends('layouts.index')
@section('content')



<div class="load">
            <div class="one"> </div>
            <div class="tow"></div>
            <div class="three"></div>
        </div>
        <div class="create-menu "></div>


<body>



<table >
    <thead>

<tr>
    <td>id</td>
    <td>Number Menu</td>
    <td>Chef </td>

</tr>
</thead>
    <tbody>

    @foreach($menu as $m)
   <tr>
       <td>#</td>
        <td>{{$m->id_menu}}</td>
        @foreach($employee as  $e)
            @if($e->id==$m->id_chef)
                <td>  <img src="{{asset('/admin/employee')}}/{{$e->image}}" ></td>

            @endif
          
        @endforeach
        </tr>
    @endforeach

    </tbody>
</table>



</body>
@endsection