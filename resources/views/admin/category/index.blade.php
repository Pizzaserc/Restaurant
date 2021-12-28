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
        <a href="./category/create" class="btn-create">create meal</a>
        </div>
        <table>
            <caption>create meal
            </caption>
            <thead>

                <tr>
                    <td>id</td>
                    <td>Name</td>
                    <td>Edit</td>
                    <td>Delete</td>
                    <td>Show</td>

                </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id }}</td>
                    <td>{{$category->name }}</td>
            
                    <td><a href="./category/{{$category->id }}/edit" class="btn-edit">Edit</a></td>
                    <td><form action="./category/{{$category->id }}" method='POST'>
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit"  class='btn-delete' value='Delete'>
                                        </form></td>
                    <td><a href="./category/{{$category->id }}"  class="btn-edit">show</a></td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>




    


@endsection
