@extends('layouts.index')
@section('content')
<div class="containt">


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
        </div>
        <table>
            <caption>Bonus Employee
            </caption>
            <thead>

                <tr>
                    <td>id</td>
                    <td>Name</td>
                    <td>Bouns</td>
                    

                </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id }}</td>
                    <td>{{$category->name }}</td>
                    <td>{{$category->bouns }}</td>

            
                 

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>




    


@endsection
