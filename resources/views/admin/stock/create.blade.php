@extends('layouts.app')
@section('content')


    <div class="container" style="text-align: center">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="card"  style="font-size: large">
                    <div class="card-header" style="text-align: center">
                        <h4><strong style="color: white">Create New Iteam</strong></h4>
                    </div>
                    <div class="card-body">
                    </div>



                    <form action="{{ url('stock') }}" method='POST' enctype='multipart/form-data' style="margin: 0px 20px 0px 20px">
                        @csrf
                        <div class="form-group" >
                            <label for="">Name</label>
                            <input type="text" class='form-control' name='name' >
                        </div>
                        <div class="form-group">
                            <label for="">quantity</label>
                            <input type="text" class='form-control' name='quantity'>
                        </div>

                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="text" class='form-control' name='image'>
                        </div>

                        <div class="form-group">
                            <label for="">High Quantity</label>
                            <input type="text" class='form-control' name='HighQuantity'>
                        </div>
                        <div class="form-group">
                            <label for="">Type Food</label>
                            <input type="text" class='form-control' name='typefood'>
                        </div>
                        <div class="form-group">
                            <label for="">Minimum Quantity</label>
                            <input type="text" class='form-control' name='MinimumQuantity'>

                        </div>
                     

                        <div class="form-group">
                            <label for="">pricekillo</label>
                            <input type="text" class='form-control' name='price'>

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
