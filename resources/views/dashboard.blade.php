
<head>
    <title>DASHBOARD</title>
</head>
{{--
    Show post details in this page
 --}}
@extends('masterPage')

@section('content')
    <div class="row">
        <div style="height:100%;" class = "col s12 m3 l2 deep-purple darken-2 grey-text text-lighten-5">
            <ul>
                <li><strong><a class="grey-text text-lighten-5" href="#">Blog</a></strong></li>
            </br>
                <li><strong><a class="grey-text text-lighten-5" href="#">Message</a></strong></li>
            </br>
                <li><strong><a class="grey-text text-lighten-5" href="#">Status</a></strong></li>
            </br>
                <li><strong><a class="grey-text text-lighten-5" href="#">About</a></strong></li>
            </ul>
        </div>
        <div style="padding: 10px; float:left" class="col s12 m6 l6 offset-m1 offset-l1">
            @yield('panel_container')
        </div>
    </div>
@endsection
