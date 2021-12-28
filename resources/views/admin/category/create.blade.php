@extends('layouts.app')
@section('content')


    <div class="container" style="text-align: center">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h6> <strong style="color: white">Create New Category</strong></h6>
                    </div>
                    <div class="card-body">
                            </div>



                        <form action="{{ url('category') }}" method='POST'>
                            @csrf

                            <label for="" style="margin: 0px 10px 10px 10px;"> New Category</label>
                            <input type="text" class='form-control' name='name' style="margin: 0px 10px 10px 0px;">
                            <input type="submit" class='btn btn-danger' style="margin: 10px 10px 10px 10px;">
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
