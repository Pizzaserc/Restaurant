@extends('layouts.reservationtable')

@section('content')



        <div class="container text-center " >
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <br><br><br>                                    <br><br>


                    <h1><strong style="color: black; font-size:35px">Make A Reservation</strong></h1>
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible"  style="font-weight: bold">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>

                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>




    <div class="reservation-box   " >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <div class="contact-block">
                        <form  id="form1"  method='post'  style="margin: 0px 20px 0px 20px">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">

                                    <h2> <i class="fa fa-calendar-day"></i>Book a table </h2>
                                    <div class="col-md-12">
                                        <div class="form-group">



                                            <input style="border: 2px solid #FFBA08;" type="date" id="input_date" class=" form-control" name="date"  placeholder=" Enter Date" value="2021-06-07" equired data-error="Please enter Date">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select style="border: 2px solid #FFBA08;" class=" form-control" id="input_time" name="time" value="11:48:33" required data-error="Please enter time">
                                           <!-- <input type="time"id="input_time" name="time" value="11:48:33" step="30033" class=" form-control" required data-error="Please enter time" placeholder=" Enter Time"-->
                                                <option disabled selected> </option>
                                                <option value="10:00:00">10:00 AM</option>
                                                <option value="10:30:00">10:30 AM</option>
                                                <option value="11:00:00">11:00 AM</option>
                                                <option value="11:30:00">11:30 AM</option>
                                                <option value="12:00:00">12:00 AM</option>
                                                <option value="12:30:00">12:30 PM</option>
                                                <option value="13:00:00">01:00 PM</option>
                                                <option value="13:30:00">01:30 PM</option>
                                                <option value="14:00:00">02:00 PM</option>
                                                <option value="14:30:00">02:30 PM</option>
                                                <option value="15:00:00">03:00 PM</option>
                                                <option value="15:30:00">03:30 PM</option>
                                                <option value="16:00:00">04:00 PM</option>
                                                <option value="16:30:00">04:30 PM</option>
                                                <option value="17:00:00">05:00 PM</option>
                                                <option value="17:30:00">05:30 PM</option>
                                                <option value="18:00:00">06:00 PM</option>
                                                <option value="18:30:00">06:30 PM</option>
                                                <option value="19:00:00">07:00 PM</option>
                                                <option value="19:30:00">07:30 PM</option>
                                                <option value="20:00:00">08:00 PM</option>
                                                <option value="20:30:00">08:30 PM</option>
                                                <option value="21:00:00">09:00 PM</option>
                                                <option value="21:30:00">09:30 PM</option>
                                                <option value="22:00:00">10:00 PM</option>
                                                <option value="22:30:00">10:30 PM</option>
                                                <option value="23:00:00">11:00 PM</option>
                                                <option value="23:30:00">11:30 PM</option>
                                                <option value="00:00:00">12:00 PM</option>
                                                <option value="00:30:00">12:30 AM</option>
                                                <option value="01:00:00">01:00 AM</option>
                                                <option value="01:30:00">01:30 AM</option>
                                                <option value="02:00:00">02:00 AM</option>
                                                <option value="02:30:00">02:30 AM</option>

                                                <div class="help-block with-errors"></div>
                                            </select>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select style="border: 2px solid #FFBA08;" name="person" class="custom-select d-block form-control" id="person" required data-error="Please select Person">
                                                <option ><i class="fas fa-user"></i></option>
                                                @for($i=1;$i<=16;$i++)
                                                <option value="{{$i}}">---{{$i}}---  Person </option>
                                                @endfor
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <br>


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select style="border: 2px solid #FFBA08;" name="section" class="form-control" id="section" required data-error="Please select section">
                                                <option disabled selected></option>
                                                @foreach($section as $s)
                                                    <option value="{{$s->name}}">{{$s->name}}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <br>



                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <select style="border: 2px solid #FFBA08;" name="branch" class="form-control" id="branch" required data-error="Please select branche">
                                                <option disabled selected></option>
                                                @foreach($branches as $s)
                                                    <option value="{{$s->place}}">{{$s->place}}</option>
                                                @endforeach
                                            </select>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="col-md-12">
                                        <div class="submit-button text-center">



                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>



                                    <button  class='btn btn-danger' id='showTable' style="margin: 30px 200px 30px 200px ;border-radius: 70px; background: #FFBA08">Save</button>
                                </div>

                                <div class="col-md-6">
                                <br><br><br>
                                    <img src="{{asset('/admin/images/cack.jpg')}}"  style="box-shadow: 5px 5px 5px #FFBA08;" class="cak">

                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card" style="background: wheat;display: none ; border:1px solid wheat">


                    <div class="card-body" >
<h1 style="color: black;font-weight:bolder;font-size:40px;"><a style="text-shadow: 5px 5px 5px #FFBA08;">Table selec</a>tion available  </h1>
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-11 " >
                                <div><br><br><br><br></div>
                                <div style="align-content: center;" id="tableDetails" class='row mb-6'> </div>

                                <div class="row" style="background: wheat;">

                                    <div class="col-6" >
                                    </div>
                                </div>



                            </div>
                            <br>
                            <br>


                            <div class="col-12 ost " >

                                <div id="showSelectedTable">

                                </div>
                                <div id="showSelectedMenuAndTable">

                                </div>

                            </div>
                        </div>



                    </div>

                </div>
            </div>
        </div>
    </div>
        

    <div class="container contam">
    <h1 > MENU </h1>
    <br>
<div class="row inner-menu-box"> 
    <br>
    <br>

                <div class="col-3">
                    <nav class="navbar navbar-expand-sm bg-light">
                        <div class="nav navbar-nav flex-column nav-pills">

                            @foreach($categories as $category)
                                <li class="nav-item">
                                    <a class="nav-link" data-id="{{$category->id}}" href="javascript:void(0)">{{$category->name}}</a>
                                </li>
                            @endforeach
</div>
                    </nav>

                </div>
                <div class="col-9">
                    <div class="menu-list row mt-5">

                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Payment</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

                            <label class="total_price"><b>total price</b></label>
                            <br>
                            <label><input type="text" value="66" readonly></label>
                            <br>
                            <br>
                          <label class="lablecard"><a  href="" class="card cancelbt" id="pay">card pay</a></label>
                            <br>
                            <br>
                            <label class="lablecard"><a href="" class="card cancelbt" id="cashier">cacheir pay</a></label>
                            <br>
                            <br>
                            <label class="lablecard"><a href=" " class="card cancelbt">point pay</a></label>
      </div>

      <!-- Modal footer -->
     

    </div>
  </div>
</div>









@endsection
