@extends('layouts.app')
@section('content')



    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h4><strong style="color: white">Create table</strong></h4>

                        <a href="./tables/create" class='btn btn-primary float-right'>Create Table</a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible" >
                                <button type="button" class="close" data-dismiss="alert">&times;</button>

                                {{ session('status') }}
                            </div>
                        @endif


                        <table class="table">
                            <thead>
                            <tr>
                                <td>id</td>
                                <td>id_table</td>
                                <td>Image</td>
                                <td>branch</td>
                                <td> Section-id</td>
                                <td>Edit</td>
                                <td>Delete</td>
                                <td>Show</td>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($tables as $table)
                                <tr>
                                    <td>{{$table->id}}</td>
                                    <td>{{$table->id_table}}</td>

                                    <td>  <img src="{{asset('/admin/table/images')}}/table1.png" height='100' width='100' alt=""></td>
                                    <td>{{$branch[$table->id_branch-1]->place}}</td>
                                    <td>{{$section[$table->id_section-1]->name}}</td>

                                    <td><a href="tables/{{$table->id}}/edit" class='btn btn-warning'>Edit</a></td>
                                    <td>
                                        <form action="tables/{{$table->id}}" method='POST'>
                                            @CSRF
                                            @method('DELETE')
                                            <input type="submit" value='Delete' class='btn btn-danger'>
                                        </form>
                                    </td>
                                    <td><a href="tables/{{$table->id }}" class='btn btn-success'>Show</a></td>
                                </tr>


                            @endforeach
                            </tbody>

                        </table>

                    </div>

                    <div class="card-footer">

                    </div>
                </div>

                <div class="col-1"></div>

            </div>
        </div>

    </div>


@endsection
