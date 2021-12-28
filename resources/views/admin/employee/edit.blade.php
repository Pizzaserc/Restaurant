@extends('layouts.app')

@section('content')


    <div class="container" style="text-align: center">
        <div class="row">


            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h4><strong style="color: white">Edit Details Employee</strong></h4>
                    </div>
                    <div class="card-body">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>

                        @endforeach



                        <form action="{{ url('employees',$employee->id) }}" method='POST' enctype='multipart/form-data'>
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class='form-control' value='{{$employee->name}}' name='name'>
                            </div>
                            <div class="form-group">
                                <label for="">Salary</label>
                                <input type="text" class='form-control' value='{{$employee->salary}}' name='salary'>
                            </div>

                            <div class="form-group">
                                <label for="">Image</label>
                                <input type="file" class='form-control'   name='image'>
                            </div>

                            <div class="form-group">
                                <label for="">StartDate</label>
                                <input type="text" class='form-control'value='{{$employee->startDate}}'  name='startDate'>
                            </div>

                            <div class="form-group">
                                <label for="">Bonus</label>
                                <input type="text" class='form-control'value='{{$employee->bonus}}'  name='bonus'>

                            </div>



                            <input type="submit" class='btn btn-danger'>
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
