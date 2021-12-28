@extends('layouts.app')

@section('content')


    <div class="container" style="text-align: center">
        <div class="row">

            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h4 ><strong style="color: white">Create New Category</strong></h4>
                    </div>
                    <div class="card-body">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>

                        @endforeach



                        <form action="{{url('category',$category->id)}}" method='POST'>
                            @csrf
                            @method('PUT')
                            <label for="">Edit Category</label>
                            <input type="text" class='form-control' value='{{$category->name}}' name='name'>
                            <input type="submit" class='btn btn-danger' value='Update' style="margin: 10px 100px 10px 100px">
                        </form>
                    </div>

                    <div class="card-footer">

                    </div>
                </div>


            </div>
            <div class="col-2"></div>
        </div>

    </div>
@endsection
