<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("css/css.css") }}">
    <link rel="stylesheet" href="{{ asset("css/font.css") }}">
    <link rel="stylesheet" href="{{ asset("css/meny_style.css") }}">
    {{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">--}}
</head>
<body class="img js-fullheight" >
<header class="menu_rel">

</header>
<nav class="navigation">

    <ul class="menu">
        <li>
            <a class="active" href="#">
                <svg class="home" width="30px" height="30px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                    <path d="M419.492,275.815v166.213H300.725v-90.33h-89.451v90.33H92.507V275.815H50L256,69.972l206,205.844H419.492 z M394.072,88.472h-47.917v38.311l47.917,48.023V88.472z"/>
                </svg>
                <span title="Home">Home</span>
            </a>
        </li>
        <li>
            <a href="#">
                <svg class="about" width="30px" height="30px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                    <path d="M407.448,360.474c-59.036-13.617-113.989-25.541-87.375-75.717 c81.01-152.729,21.473-234.406-64.072-234.406c-87.231,0-145.303,84.812-64.072,234.406c27.412,50.482-29.608,62.393-87.375,75.717 c-59.012,13.609-54.473,44.723-54.473,101.176h411.838C461.919,405.196,466.458,374.083,407.448,360.474z"/>
                </svg>
                <span title="About">About</span>
            </a>
        </li>

        <li>
            <a href="#">
                       <svg class="contact" width="30px" height="30px" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve">
                    <path d="M170.544,239.052L50,146.454v213.142L170.544,239.052z M460.928,103.407H51.416l204.593,157.162L460.928,103.407z M313.355,260.696l-57.364,43.994l-57.454-44.135L50.5,408.593h410.751L313.355,260.696z M341.367,239.212L462,359.845V146.693L341.367,239.212z"/>
                </svg>
                                          <span title="Contact">Contact</span>
            </a>
        </li>
        @auth
            <li>
                <a href="{{ route('account') }}">
                    <img src="https://img.icons8.com/ios-glyphs/30/000000/user-male.png" width="25" height="30" style="vertical-align: middle;" />
                    <span title="Contact">Account</span>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}">
                    <img src="https://img.icons8.com/office/16/000000/shutdown.png" width="30" height="30" style="vertical-align: middle;" />
                    <span title="Contact">Logout</span>
                </a>
            </li>
        @endauth
        @guest
            <li>
                <a href="{{ route('register') }}">
                    <img src="https://img.icons8.com/offices/30/000000/add-user-male.png" width="30" height="30" style="vertical-align: middle;"/>
                    <span title="registration">Sign up</span>
                </a>
            </li>
            <li>
                <a href="{{ route('login') }}">
                    <img src="https://img.icons8.com/color/48/000000/lock--v1.png" width="30" height="30" style="vertical-align: middle;" />
                    <span title="Lab">Sign in</span>
                </a>
            </li>
        @endguest


    </ul>

</nav>


@yield('content')

<script src="{{ asset("js/bootstrap.js") }}"></script>
<script src="{{ asset("js/jquery.mini.js") }}"></script>
<script src="{{ asset("js/main.js") }}"></script>
<script src="{{ asset("js/popper.js") }}"></script>



</body>
</html>
