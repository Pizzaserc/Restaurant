@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cashier</div>
                <div class="card-body">

                    <div id="table-details"></div>

                    <div class="row">
                        <div class="col-6">
                            <p>jjj</p>
                            <a her class="btn btn-dark " id='showTable'>
                                view table
                            </a>
                        </div>


                        <div class="col-6"></div>
                    </div>
                </div>

            </div>

        </div>

    </div>


</div>


@stop
@section('scripts')
    <script>
    window.onload=function (){
        $("#showTable").click(function(){
            $("p").hide();
        });
    };

    </script>
@stop
