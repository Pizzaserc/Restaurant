
@extends('layouts.index')
@section('content')


<div class="load">
            <div class="one"> </div>
            <div class="tow"></div>
            <div class="three"></div>
        </div>

        <div class="create-menu "></div>



        <table>
            <caption>meal
            </caption>
            <thead>

                <tr>
                <td>Id</td>
                <td>Name</td>
                                <td>Price</td>
                                <td>Image</td>
                                <td>Cost</td>
                                <td>Profit</td>
                               
                </tr>
            </thead>
            <tbody>
                            @foreach($menu as $m)
                                @for($i=0;$i<sizeof($profit);$i++)
                                  @if($m->id==$profit[$i]->id_menu)

                                      <tr>
                                          <td>{{$profit[$i]->id}}</td>
                                          <td>{{$m->name}}</td>
                                          <td>{{$profit[$i]->price}}$</td>

                                          <td>  <img src="{{asset('/admin/menu/images')}}/{{$m->image}}" ></td>

                                          {{--<td>{{$menu->getCat[0]->name}}</td>--}}


                                          <td>{{$profit[$i]->cost}}$</td>
                                          <td>{{$profit[$i]->profit}}$</td>
                                        
                                      </tr>
                                  @endif
                                @endfor




                            @endforeach


                
            </tbody>
        </table>



                            </tbody>

                        </table>

                    </div>

                    <div class="card-footer">

                    </div>
                </div>


            </div>
            <div class="col-1"></div>
        </div>

    </div>


@endsection




