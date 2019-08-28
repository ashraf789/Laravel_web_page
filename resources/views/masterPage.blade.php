<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Personal page</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('materialize/css/materialize.min.css')}}">
</head>
<body>
    <nav class="nav-wrapper  grey lighten-5">
        <ul class="left nav-mobile">
            @if (Session::has('user_name'))
                <li><a class="brown-text brown lighten-5" href="{{route('dashboard')}}"><b>DASHBOARD</b></a></li>
            @else
                <li><a class="brown-text brown lighten-5" href="#"><b>WELCOME</b></a></li>
            @endif
        </ul>
        <ul class="right">
            <li><a class="grey-text text-darken-1" href="/"><b>HOME</b></a></li>
            <li><a class="grey-text text-darken-1" href="#"><b>CONTACT</b></a></li>

            @if (Session::has('user_name'))
                <li><a class="grey-text text-darken-1" href="/"><b>LOG OUT</b></a></li>
            @else
                <li><a class="grey-text text-darken-1" href="/login"><b>LOGIN</b></a></li>
                <li><a class="grey-text text-darken-1" href="/"><b>SIGN UP</b></a></li>
            @endif
        </ul>
    </nav>


@yield('content')
@include('footer')
    <!-- Load java script at last -->
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>
