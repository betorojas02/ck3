<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Caniscatus</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->


        <!-- Theme Style -->


        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
        <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="css/barfiller.css" type="text/css">
        <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
        <link rel="stylesheet" href="{{asset('css/style.css')}} type="text/css">

    </head>
    <body>
    <div class="row">
        <header class="header-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="logo">
                                <a href="./index.html">
                                    <img src="img/caniscatus/Logo.png" alt="">
                                </a>
                            </div>
                            <nav class="mobile-menu">
                                <ul>
                                    <li><a href="./index.html">Inicio</a></li>
                                    <li><a href="./about-us.html">Nosotros</a></li>
                                    <li><a href="./classes.html">nuestros servicios</a></li>
                                    <li><a href="./elements.html">Galeria</a></li>
                                    <li><a href="./blog.html">contactos</a></li>

                                </ul>
                            </nav>
                            <div id="mobile-menu-wrap"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </div>


    @yield('content')





    </body>




</html>
