<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Caniscatus</title>

        <!-- Fonts -->
        <link href="{{asset('fonts/KOHNE-MAKINA.ttf')}}" rel="stylesheet">

        <!-- Styles -->


        <!-- Theme Style -->


        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/barfiller.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
        <link rel="stylesheet" href="css/style-dogs.css" type="text/css">

    </head>
    <body>
    <div class="container-fluid cont-header">
    <div class="container">
        <header class="header-section">
            <div class="col-lg-12">
                <div class="main-logo">
                    <a href="./index.html">
                        <img src="img/Logo.png" class="img-logo" alt="">
                    </a>
                </div>
                <nav class="mobile-menu">
                    <button class="grt-mobile-button">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </button>
                    <ul class="grt-menu">
                        <li><a href="./index.html">Inicio</a></li>
                        <li><a href="./about-us.html">Nosotros</a></li>
                        <li ><a href="./classes.html">Nuestros<br/>Servicios</a></li>
                        <li ><a href="./elements.html">Galeria</a></li>
                        <li ><a href="./blog.html">contactos</a></li>
                        <li><a href="./login.html">Login</a></li>
                    </ul>
                </nav>
                {{-- <div id="mobile-menu-wrap"></div> --}}
            </div>
        </header>
    </div>



    @yield('content')


    </div>


    </body>




</html>
