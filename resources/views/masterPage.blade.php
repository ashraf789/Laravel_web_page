<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Personal page</title>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('materialize/css/materialize.min.css')}}">

    {{-- CDN link not work at the bottom of page --}}
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <style>
    body {display: flex;min-height: 100vh;flex-direction: column;}
    main {flex: 1 0 auto;}
    footer {
        ul {
            &.justify {
                text-align: center;
                display: table;
                overflow: hidden;
                margin: 0 auto;
                li {
                    margin-left:auto;
                    margin-right:auto;
                    //width: 138px; // 3 ICONS
                    //width: 100px; // 4 ICONS
                    width: 82px; // 5 ICONS
                }
            }
        }
    }
    </style>

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
                <li><a class="grey-text text-darken-1" href="{{ route('logout') }}"><b>LOG OUT</b></a></li>
            @else
                <li><a class="grey-text text-darken-1" href="/login"><b>LOGIN</b></a></li>
                <li><a class="grey-text text-darken-1" href="/"><b>SIGN UP</b></a></li>
            @endif
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Address:</h5>
                    <p class="grey-text text-lighten-4">
                        Viglacera Tower, Tu Liem, Hanoi
                    </p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Social activity</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">Twitter</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Copyright ©Ashraf 2019
            </div>
        </div>
    </footer>

    <!-- Load java script at last -->
    <script type="text/javascript" src="{{ URL::asset('materialize/js/materialize.min.js') }}"></script>
</body>
</html>
