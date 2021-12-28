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
        <a href="./employees/create" class="btn-create">create employee</a>
        </div>
        <table>
            <caption>create employee
            </caption>
            <thead>

                <tr>
                <td>Id</td>
                                <td>Name</td>
                                <td>Salary</td>
                                <td>Image</td>
                                <td>StartDate</td>
                                <td>type</td>
                                <td>Edit</td>
                                <td>Delete</td>
                               
                </tr>
            </thead>
            <tbody>
           
            @foreach($employees as $employee)
                <tr>
                <td>#</td>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->salary}}</td>

                                    <td>  <img src="{{asset('admin/employee')}}/{{$employee->image}}"></td>
                                    <td>{{$employee->startDate}}</td>
                                    <td>{{$employee->type}}</td>
            
                    <td><a href="employees/{{$employee->id}}/edit" class="btn-edit">Edit</a></td>
                    <td><form action="employees/{{$employee->id}}"  method='POST'>
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




