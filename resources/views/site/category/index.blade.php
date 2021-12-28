@extends('layouts.app')
@section('content')
<div class="all-page-title page-breadcrumb">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1> Menu</h1>
            </div>
        </div>
    </div>
</div>



<div class="menu-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Menu</h2>
                    <p>Our menu contain the best food with the best price</p>
                </div>
            </div>
        </div>

        <div class="row inner-menu-box">





            <div class="col-3 " >
                <nav class="navbar navbar-expand-sm bg-light">
                    <ul class="menuCustomers">

                        @foreach($categories as $category)
                            <li class="nav-item" id="menuCustomers">
                                <a class="nav-link" data-id="{{$category->id}}" href="javascript:void(0)">{{$category->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </nav>

            </div>

            <div class="col-9">
                <div class="menu-list row mt-7" >

                </div>

            </div>

         <div>



         </div>



    </div>
</div>
@stop
