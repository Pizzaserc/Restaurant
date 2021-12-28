@extends('layouts.app')
@section('content')


    <div class="container" style="text-align: center">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card"  style="font-size: large">
                    <div class="card-header" style="text-align: center">
                        <h4><strong style="color: white">Create New Meal</strong></h4>
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


                        <div class="form-group">
                            <label for=""> Chef </label>

                            <!select name='chef' class='form-control'-->


                                       <br>
                                @foreach($chefs as $c)
                                    <input type="checkbox" name="chef[]" value="{{$c->id}}">{{$c->name}}
                                    <!--option value="{{$c->id}}">{{$c->name}}</option-->
                                @endforeach
                            <!/select>
                        </div>






                        <input id="save "type="submit" class='btn btn-danger saveelement' style="margin: 0px 300px 10px 300px">
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
