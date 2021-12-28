@extends('layouts.app')
@section('content')


    <div class="container" style="text-align: center">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card"  style="font-size: large">
                    <div class="card-header" style="text-align: center">
                        <h4><strong style="color: white">ُEnter new employee</strong></h4>
                    </div>
                    <div class="card-body">
                    </div>



                    <form action="{{ url('employees') }}" method='POST' enctype='multipart/form-data' style="margin: 0px 20px 0px 20px">
                        @csrf
                        <div class="form-group" >
                            <label for="">Name</label>
                            <input type="text" class='form-control' name='name' >
                        </div>
                        <div class="form-group">
                            <label for="">Salary</label>
                            <input type="text" class='form-control' name='salary'>
                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class='form-control' name='image'>
                        </div>


                        <div class="form-group">
                            <label for="">Type Employee</label>

                            <select name='type' class='form-control'>
                                
                                    <option value="chef">chef</option>
                                    <option value="waiter">waiter</option>
                                    <option value="cashier">cashier</option>
                                    <option value="storage-admin">storage-admins</option>
                                
                            </select>
                        </div>


                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class='form-control' name='email'>

                        </div>



                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="text" class='form-control' name='password'>

                        </div>

                        
                        <div class="form-group">
                            <label for="">Branch</label>

                            <select name='branch' class='form-control'>
                                @foreach($branch as $c)
                                    <option value="{{$c->id}}">{{$c->place}}</option>
                                @endforeach
                            </select>
                        </div>


                        <input type="submit" class='btn btn-danger' style="margin: 0px 300px 10px 300px">
                    </form>
                </div>

                <div class="card-footer">

                </div>
            </div>
            <div class="col-2"></div>


        </div>
    </div>

    </div>

@endsection
