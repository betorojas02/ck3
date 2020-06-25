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
</div>

<!-- PARTE DE LAURA -->
<section>
    <div class="row">
        <div class="col-12 col-md-12 col-sm-12 col-xs-12">
            <centering>
                <section>
                    <!-- The video -->
                    <video autoplay muted loop id="myVideo" width="1040" height="860" controls>
                        <source src="img/baNNER CANISCATUS.mp4" type="video/mp4">
                    </video>


                </section>
                <centering>
        </div>

    </div>
</section>

<section class="section bg-light py-5  bottom-slant-gray">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6" alt="Image" class="img-fluid">
                <div style="position:relative">
                    <img src="img/rect. negro foto.png" width="300" hspace="10" height="400" vspace="0.1" />
                    <DIV STYLE="position:absolute; top:50px; left:10px; visibility:visible z-index:1">
                        <IMG height="300" SRC="img/IMG_0168.jpg" width="300">
                    </div>
                </div>
            </div>
            <div class="col-lg-5 ml-auto">
                <div class="text-left heading-wrap">
                    <h2><font face="arial">¿</font><font face="Kohne Makina">QUIENES SOMOS</font><font face="arial">?</font></h2>
                </div>
                <!-- <h3 class="mb-4">Welcome To Our Restaurant</h3> -->
                <font face="Liberation Sans Regular">  <p align="justify"> <br> <strong>CANISCATUS S.A.S. Es una empresa creada con el objetivo principal de brindar un servicio de calidad y calidez
                            para tu mascota, teniendo en cuenta las características y necesidades de la misma, Así mismo, las instalaciones
                            dispuestas para ello, están adaptadas y acondicionadas pensado en el bienestar animal... </strong></p>
                    <div style="text-align: right;width:420px">
                        <p><a class="boton_personalizado" href="https://vinkula.com">Conócenos más!</a></font></p>
            </div>
        </div>



    </div>
    </div>
</section>
<div class="container-fluid cont-banner">
    <div class="container">
    </div>
</div>
<div class="container-fluid cont-clients diagonal">
    <div class="container wrapper-clients">
        <div class="slogan">
            <img src="img/texto.jpeg" alt="">
        </div>
        <div class="cards-dogs">
            <div class="card-dog">
                <span>Shagui</span>
                <img src="img/Nagual.png" alt="">
            </div>
            <div class="card-dog">
                <span>Shagui</span>
                <img src="img/Sue.png" alt="">
            </div>
            <div class="card-dog">
                <img src="img/Tequila.png" alt="">
                <span>Shagui</span>
            </div>
            <div class="card-dog">
                <img src="img/Nagual.png" alt="">
                <span>Shagui</span>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid cont-footer diagonal">
    <div class="container wrapper-footer">
        <div class="cont-f-1 cont-33">
            <img src="img/perro.png" alt="">
        </div>
        <div class="cont-f-2 cont-33">
            <h5>INFORMACIÓN DE CONTACTO</h5>
            <ul>
                <li>Teléfono: +57 350 844 9157</li>
                <li>Dirección: Calle 200 No. 56-77</li>
                <li>Correo: info@caniscatus.com</li>
            </ul>
        </div>
        <div class="cont-f-3 cont-33">
            <h5>HORARIO DE ATENCIÓN</h5>
            <ul>
                <li>Lunes a Domingo</li>
                <li>5am-10pm</li>
            </ul>
            <ul class="redes">
                <li><img src="img/icono facebook.png" alt=""></li>
                <li><img src="img/icono instagram.png" alt=""></li>
                <li><img src="img/icono whatsapp.png" alt=""></li>
            </ul>
        </div>
    </div>
</div>
{{-- @yield('content') --}}

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/circle-progress.min.js"></script>
<script src="js/jquery.barfiller.js"></script>
<script src="js/main.js"></script>
<script>
    /*!
* GRT Responsive Menu - jQuery Plugin
* Version: 1.0
* Author: GRT107
*
* Copyright (c) 2018 GRT107
* Released under the MIT license
*/

    // Create a function for mobile version
    (function( $ ){
        $.fn.grtmobile = function () {
            if ($(window).width() < 768) {
                $('.grt-mobile-button').on('click', function(){
                    $(this).toggleClass("grt-mobile-button-open");
                    $("ul.grt-menu").toggleClass("open-grt-menu ");
                    $("html, body").toggleClass("body-overflow");
                });
                $('li.grt-dropdown').on('click', function(e){
                    $(this).toggleClass("active-dropdown");
                });
            }
        }
    })( jQuery );

    // Initialize and check for mobile
    $.fn.grtmobile();

    // On resize window check for mobile

    var resizeTimeout;
    $(window).resize(function(){
        if(!!resizeTimeout){ clearTimeout(resizeTimeout); }
        resizeTimeout = setTimeout(function(){
            $.fn.grtmobile();
        },200);
    });

    // Add shadow on scroll after 60px
    $(window).scroll(function(e){
        if ($(this).scrollTop() > 60){
            $('header').addClass('scrolled');
        } else {
            $('header').removeClass('scrolled');
        }
    });

    // Prevent a href clicks on dropdown category
    $('li.grt-dropdown > a').on('click', function(e){
        e.preventDefault();
    });
</script>

</body>
</html>
