<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/barfiller.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">

    </head>
    <body>
    <header class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-menu">
                        <div class="logo">
                            <a href="./index.html">
                                <img src="img/caniscatus/Logo.png" class="img-logo" alt="">
                            </a>
                        </div>
                        <nav class="mobile-menu">
                            <ul>
                                <li><a href="./index.html">Inicio</a></li>
                                <li><a href="./about-us.html">Nosotros</a></li>
                                <li ><a href="./classes.html">nuestros servicios</a></li>
                                <li ><a href="./elements.html">Galeria</a></li>
                                <li ><a href="./blog.html">contactos</a></li>
                            </ul>
                        </nav>
                        <div id="mobile-menu-wrap"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('content')

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/jquery.barfiller.js"></script>
    <script src="js/main.js"></script>

    </body>
</html>
