@extends('layouts.app')
@section('content')


    <div class="container">
        <div class="row">
            <div class="col-2">

            </div>

            <div class="col-10">
                <div class="card"  style="font-size: large">
                    <div class="card-header" style="text-align: center">
                        <h6>Create New Menu</h6>
                    </div>
                    <div class="card-body">
                    </div>



                    <form action="{{ url('menu') }}" method='POST' enctype='multipart/form-data' style="margin: 0px 20px 0px 20px">
                        @csrf
                        <div class="form-group" >
                            <label for="">Name</label>
                            <input type="text" class='form-control' name='name' >
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input type="text" class='form-control' name='price'>
                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" class='form-control' name='image'>
                        </div>

                        <div class="form-group">
                            <label for="">Description</label>
                            <input type="text" class='form-control' name='description'>
                        </div>

                        <div class="form-group">
                            <label for="">Add in Category</label>

                            <select name='category_id' class='form-control'>
                                @foreach($categories as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>
                        </div>



                        <input type="submit" class='btn btn-danger' style="margin: 0px 300px 10px 300px">
                    </form>
                </div>

                <div class="card-footer">

                </div>
            </div>


        </div>
    </div>

    </div>

@endsection
