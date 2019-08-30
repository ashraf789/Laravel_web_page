
<head>
    <title>DASHBOARD</title>
    <style media="screen">
        li{
            padding: 8px;
        }
    </style>
</head>
@extends('masterPage')

@section('content')
    <div class="row">
        <div style="padding:0px; margin:0px" class = "col s12 m3 l2 deep-purple darken-2 grey-text text-lighten-5">
            <ul style="padding:0px; margin:0px">
                <li class="hoverable"><strong><a class="grey-text text-lighten-5" href="{{route('dashboard')}}">Blog</a></strong></li>
            </br>
                <li class="hoverable"><strong><a class="grey-text text-lighten-5" href="#">Message</a></strong></li>
            </br>
                <li class="hoverable"><strong><a class="grey-text text-lighten-5" href="#">Status</a></strong></li>
            </br>
                <li class="hoverable"><strong><a class="grey-text text-lighten-5" href="#">About</a></strong></li>
            </ul>
        </div>
        <div style="padding: 10px; float:left" class="col s12 m6 l6 offset-m1 offset-l1">
            @yield('panel_container')
        </div>
    </div>
@endsection
