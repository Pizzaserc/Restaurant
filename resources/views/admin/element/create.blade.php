@extends('layouts.index')
@section('content')


    <div class="container" style="text-align: center">
        <div class="row">

    <div class="col-12">
            <form action="{{ url('element') }}" method='POST' enctype='multipart/form-data' style="margin: 0px 20px 0px 20px">
                @csrf
                <input name="id_menu" value="{{$id_menu}}" >
                <p>you haveto click on nox check whene select element && enter quantity</p>

            @foreach($types as $type)


                    @foreach($iteams as $iteam)
                        @if($type->id==$iteam->id_typefood)
                            <div class="form-group" >
                                <div class="col-6">
                                <input type="checkbox" name="items[]" value="{{$iteam->id}}">{{$iteam->name}}
                                </div>
                                <div class="col-6">
                                <label for="">Gram</label>
                                <input type="text" class='form-control' name='name[]' >
                                </div>

                            <br>
                        @endif
                    @endforeach
                </div>

            @endforeach

                <input id="save" id-data="{{$id_menu}}"type="submit" class='btn btn-danger' style="margin: 0px 300px 10px 300px">
            </form>
    </div>
            </div>


        </div>



    </div>

@endsection
