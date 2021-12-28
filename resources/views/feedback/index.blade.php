<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>css</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
    <link href="{{asset('/feedback/css/grid.css')}}" rel="stylesheet" type="text/css" />
    
    <style>

    </style>
</head>

<body>
    <div class="containt">
        <table>
            <thead>
                <tr>
                    <td>name</td>
                    <td>image</td>
                    <td>describtion</td>
                    <td>evaluation</td>
                </tr>

            </thead>
            <tbody>
                @foreach($details as $detail)
                
                    @foreach($menus as $menu   )
                    @if($menu->id==$detail->id_menu)
                    <tr>
                    <td>{{$menu->name}}</td>
                    <td><img src="{{asset('/admin/menu/images')}}/{{$menu->image}}" ></td>
                    <td>{{$menu->description}}</td>
                    <td><input type="range" class="rang" minlength="10" max="100" step="10">
                   <i style="color: wheat;" class="degree fas fa-chevron-circle-right"   data-branch="{{$detail->id_branch}}" data-id="{{$menu->id}}" data-chef="{{$detail->id_chef}}"></i>
                 </td>
                </tr>
                @endif
                @endforeach
                @endforeach
            </tbody>
        </table>

    </div>




    <script src="{{asset('/feedback/js/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('/feedback/js/form.js')}}"></script>
</body>

</html>