@extends('layouts.index')

@section('content')



@if (session('status'))
     <div class="alert alert-success alert-dismissible" >
        <button type="button" class="close" data-dismiss="alert">&times;</button>
 {{ session('status') }}
            </div>
             @endif


        <div class="load">
            <div class="one"> </div>
            <div class="tow"></div>
            <div class="three"></div>
        </div>
        <div class="create-menu ">
        <a href="./orders/create" class="btn-create">create meal</a>
        </div>
        <table>
            <caption>create orders
            </caption>
            <thead>

                <tr>
                <td>Id</td>
                                <td>Meal</td>
                                <td>Quantity</td>
                                <td>Submit</td>
                               
                </tr>
            </thead>
            <tbody>
           
            @foreach($orders as $order)
                              <tr>
                       <td>#</td>
                       <td>
                                   @foreach($details as $d)
                                    @if($d->sale_id==$order->id)
                                    {{$d->menu_name}}
                                    <br>
                                    <br>

                                    @endif
                                    @endforeach
                                    </td>
                                    <td>{{$order->updated_at}}</td>
                                    @if(!$order->submit)

                                    <td><a href="orders/{{$order->id}}"  class="btn-edit">submit</a></td>
                                    @else
                                    <td></td>
                                    @endif
            

                </tr>
                @endforeach


                
            </tbody>
        </table>

    </div>


@endsection




