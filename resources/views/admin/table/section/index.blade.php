@extends('layouts.app')
@section('content')



    <div class="container">
        <div class="row">
            <div class="col-1"></div>
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h4><strong style="color: white">Create Section</strong></h4>
                        <a href="./section/create" class='btn btn-primary float-right'>Create Section</a>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible" >
                                <button type="button" class="close" data-dismiss="alert">&times;</button>

                                {{ session('status') }}
                            </div>
                        @endif


                            <table class="table" style="text-align: center">
                            <thead>
                            <tr>
                                <td>id</td>
                                <td>Name</td>
                                <td>Edit</td>
                                <td>Show</td>
                                <td>Delete</td>
                            </tr>
                            </thead>
                            <tbody>
                            {{--    @if(isset($categories) && $categories->count()>0) --}}

                            @foreach($sections as $section)
                                <tr>
                                    <td> {{$section->id }}</td>
                                    <td> {{$section->name }}</td>
                                    <td><a href="./section/{{$section->id }}/edit" class='btn btn-warning'>Edit</a></td>
                                    <td><a href="./section/{{$section->id }}" class='btn btn-success'>Show</a></td>
                                    <td><form action="./section/{{$section->id }}" method='POST'>
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit"  class='btn btn-danger' value='Delete'>
                                        </form></td>
                                </tr>


                            @endforeach
                            </tbody>

                        </table>

                    </div>


                </div>


            </div>


            <div class="col-1"></div>
        </div>

    </div>


@endsection
