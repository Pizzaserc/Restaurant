@extends('layouts.app')
@section('content')


<div class="load">
            <div class="one"> </div>
            <div class="tow"></div>
            <div class="three"></div>
        </div>


<div class="create-menu "></div>

<body>
@foreach($menu as $m)
<table >

<caption>{{$m->name}}
            </caption>


        


        @foreach($element as $el)
        @if($el->id_menu==$m->id)
    <tr>
        <td>#</td>
        <td>{{$iteam[$el->id_iteams-1]->name}}</td>
        <td>{{$el->quanity}}    Kg</td>

    </tr>
        @endif
    @endforeach

   
</table>
@endforeach


</body>

@endsection
