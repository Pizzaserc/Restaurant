@extends('layouts.app')

@section('content')


    <div class="container" style="text-align: center">
        <div class="row">
            <div class="col-2">

            </div>


            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h4><strong style="color: white">Edit Table</strong></h4>
                    </div>
                    <div class="card-body">
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>

                        @endforeach


                            <form action="{{ url('tables',$tables->id) }}" method='POST' enctype='multipart/form-data'>
                            @csrf
                            @method('PUT')


                                <div class="form-group">
                                    <label for="">Section</label>
                                    <select name="branch" class='form-control'>
                                        @foreach($branch as $b)
                                            <option value="{{$b->id}}">{{$b->place}}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="">Section</label>
                                    <select name="section" class='form-control'>
                                        @foreach($section as $s)
                                            <option value="{{$s->id}}">{{$s->name}}</option>
                                        @endforeach
                                    </select>

                                </div>



                            <input type="submit" class='btn btn-danger'>
                        </form>
                    </div>

                    <div class="card-footer">

                    </div>
                </div>


            </div>

            <div class="col-2">

            </div>

        </div>

    </div>
@endsection
