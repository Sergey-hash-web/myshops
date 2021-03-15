<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/admin_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin_tol.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin_font.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin_awasume.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
<div class="sidebar-menu">

    <div class="menu">
        <ul id="menu">
            <li id="menu-home"><a href="index.html"><i class="fa fa-tachometer"></i><span>Dashboard</span></a></li>
            <li><a href="#"><i class="fa fa-cogs"></i><span>Components</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul>
                    <li><a href="grids.html">Grids</a></li>
                    <li><a href="portlet.html">Portlets</a></li>
                </ul>
            </li>
            <li id="menu-comunicacao"><a href="#"><i class="fa fa-book nav_icon"></i><span>Element</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-comunicacao-sub">
                    <li id="menu-mensagens" style="width: 120px"><a href="buttons.html">Buttons</a>
                    </li>
                    <li id="menu-arquivos"><a href="typography.html">Typography</a></li>
                    <li id="menu-arquivos"><a href="icons.html">Icons</a></li>
                </ul>
            </li>
            <li><a href="maps.html"><i class="fa fa-map-marker"></i><span>Maps</span></a></li>
            <li id="menu-academico"><a href="#"><i class="fa fa-file-text"></i><span>Pages</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub">
                    <li id="menu-academico-boletim"><a href="login.html">Login</a></li>
                    <li id="menu-academico-avaliacoes"><a href="signup.html">Sign Up</a></li>
                </ul>
            </li>

            <li><a href="charts.html"><i class="fa fa-bar-chart"></i><span>Charts</span></a></li>
            <li><a href="#"><i class="fa fa-envelope"></i><span>Mailbox</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="inbox.html">Inbox</a></li>
                    <li id="menu-academico-boletim"><a href="inbox-details.html">Compose email</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-cog"></i><span>System</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="404.html">404</a></li>
                    <li id="menu-academico-boletim"><a href="blank.html">Blank</a></li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-shopping-cart"></i><span>E-Commerce</span><span class="fa fa-angle-right" style="float: right"></span></a>
                <ul id="menu-academico-sub">
                    <li id="menu-academico-avaliacoes"><a href="product.html">Product</a></li>
                    <li id="menu-academico-boletim"><a href="price.html">Price</a></li>
                </ul>
            </li>
        </ul>
    </div>

</div>
</body>
</html>
