<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src={{ mix('js/app.js') }}></script>
    <script src={{ mix('js/jquery.js') }}></script>
</head>

<body>
    <div id="wrapper">
        <header id="header">
            <h1 class="logo"><a href="#">Book Review</a></h1>
            <nav>
                <ul class="nav__list">
                    <li class="nav__item"><a href="#">HOME</a></li>
                    {{-- <li class="nav__item"><a href="{{ Route('create') }}">BOOK</a></li> --}}
                    @if (Auth::check())
                        {{-- <li class="nav__item">{{ Auth::user()->name }}さん</li> --}}
                        <li class="nav__item"><a href="/logout">LOGOUT</a></li>
                    @else
                        <li class="nav__item"><a href="/login">LOGIN</a></li>
                    @endif
                </ul>
            </nav>
        </header>
        <div class="contents">
            @yield('contents')
        </div>


        <footer id="footer">
        </footer>
    </div>
</body>

</html>
