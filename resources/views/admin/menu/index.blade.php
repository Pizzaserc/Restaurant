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
        <a href="menu/create" class="btn-create">create meal</a>
        </div>
        <table>
            <caption>create meal
            </caption>
            <thead>

                <tr>
                <td>Id</td>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Image</td>
                                <td>Category</td>
                                <td>Edit</td>
                                <td>Delete</td>
                               
                </tr>
            </thead>
            <tbody>
           
            @foreach($menus as $menu)
                <tr>
                <td>#</td>
                                    <td>{{$menu->name}}</td>
                                    <td>{{$menu->price}}</td>
                                    <td>  <img src="{{asset('admin/menu/images')}}/{{$menu->image}}" ></td>
                                  <td>{{ $menu->category['name']}}</td>
            
                    <td><a href="menu/{{$menu->id}}/edit" class="btn-edit">Edit</a></td>
                    <td><form action="menu/{{$menu->id}}"  method='POST'>
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit"  class='btn-delete' value='Delete'>
                                        </form></td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>



@endsection




