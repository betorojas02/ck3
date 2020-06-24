@extends('layouts.welcome')
@section('content')


    
    <!-- Page Preloder -->

    <!-- Header Section Begin -->

    <!-- NICOLAS PART -->
    <section>
    <div class="row">
    <font face="Kohne Makina"> <center> NUESTROS SERVICIOS </center> </font>	<br>
    <font face="Liberation Sans Regular"><i><center><br><br> En CANISCATUS amamos a tu peludo y estamos capacitados para brindarle la mejor experiencia. Caniscatus cuida con estatus. </center> </i></font>
            <div class="col-12 col-md-12 col-sm-12 col-xs-12">
            <center>
            <div id="carrusel">
            <a href="#" class="left-arrow"><img src="img/caniscatus/nuestrosServicios/izq.png" width="25" height="25"/></a>
            <a href="#" class="right-arrow"><img src="img/caniscatus/nuestrosServicios/der.png" width="25" height="25"/></a>
            <div class="carrusel">
        <div class="product" id="product_1">
            <img src="img/caniscatus/nuestrosServicios/logoEtologia.png" width="130" height="100" />
            <font face="Liberation Sans Regular"><i>Etología</i></font>
        </div>
        <div class="product" id="product_2">
            <img src="img/caniscatus/nuestrosServicios/logoAdiestramiento.png" width="130" height="100" />
            <font face="Liberation Sans Regular"><i>Adiestramiento
                 Básico</i></font>
        </div>

        
        <div class="product" id="product_3">
            <img src="img/caniscatus/nuestrosServicios/logoHotel.png" width="155" height="100" />
            <font face="Liberation Sans Regular"><i>Hotel</i></font>
        </div>
        <div class="product" id="product_4">
            <img src="img/caniscatus/nuestrosServicios/logoGrooming.png" width="130" height="100" />
            <font face="Liberation Sans Regular"><i>Grooming</i></font>
        </div>
        <div class="product" id="product_5">
            <img src="img/caniscatus/nuestrosServicios/logoGuarderia.png" width="130" height="100" />
            <font face="Liberation Sans Regular"><i>Guardería</i></font>
        </div>
        <div class="product" id="product_6">
            <img src="img/caniscatus/nuestrosServicios/logoPiscina.png" width="140" height="100" />
            <font face="Liberation Sans Regular"><i>Piscina</i></font>
        </div>
        <div class="product" id="product_7">
            <img src="img/caniscatus/nuestrosServicios/logoHidroterapia.png" width="130" height="100" />
            <font face="Liberation Sans Regular"><i>Hidroterapia</i></font>
        </div>
        
        <div class="product" id="product_8">
            <img src="img/caniscatus/nuestrosServicios/logoTransporte.png" width="130" height="100" />
            <font face="Liberation Sans Regular"><i>Transporte</i></font>
        </div>
        <div class="product" id="product_9">
            <img src="img/caniscatus/nuestrosServicios/logoVeterinaria.png" width="130" height="100" />
            <font face="Liberation Sans Regular"><i>Veterinaria</i></font>
        </div>
        
    </div>
</div>
            </div>

<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
  <li data-target="#demo" data-slide-to="3"></li>
  <li data-target="#demo" data-slide-to="4"></li>
  <li data-target="#demo" data-slide-to="5"></li>
  <li data-target="#demo" data-slide-to="6"></li>
  <li data-target="#demo" data-slide-to="7"></li>
  <li data-target="#demo" data-slide-to="8"></li>
  <li data-target="#demo" data-slide-to="9"></li>
  <li data-target="#demo" data-slide-to="10"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="img/caniscatus/instalaciones/ins1.jpg" width="900" height="500">
  </div>
  <div class="carousel-item">
    <img src="img/caniscatus/instalaciones/ins2.jpg" width="900" height="500">
  </div>
  <div class="carousel-item">
    <img src="img/caniscatus/instalaciones/ins3.jpg" width="900" height="500">
  </div>
  <div class="carousel-item">
    <img src="img/caniscatus/instalaciones/ins4.jpg" width="900" height="500">
  </div>
  <div class="carousel-item">
    <img src="img/caniscatus/instalaciones/ins5.jpg" width="900" height="500">
  </div>
  <div class="carousel-item">
    <img src="img/caniscatus/instalaciones/ins6.jpg" width="900" height="500">
  </div>
  <div class="carousel-item">
    <img src="img/caniscatus/instalaciones/ins7.jpg" width="900" height="500">
  </div>
  <div class="carousel-item">
    <img src="img/caniscatus/instalaciones/ins8.jpg" width="900" height="500">
  </div>
  <div class="carousel-item">
    <img src="img/caniscatus/instalaciones/ins9.jpg" width="900" height="500">
  </div>
  <div class="carousel-item">
    <img src="img/caniscatus/instalaciones/ins10.jpg" width="900" height="500">
  </div>
  <div class="carousel-item">
    <img src="img/caniscatus/instalaciones/ins11.jpg" width="900" height="500">
  </div>
</div>


</div>
        </div>
</section>
        

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script>
var current = 0;
var imagenes = new Array();
 
$(document).ready(function() {
    var numImages = 9;
    if (numImages <= 4) {
        $('.right-arrow').css('display', 'none');
        $('.left-arrow').css('display', 'none');
    }
 
    $('.left-arrow').on('click',function() {
        if (current > 0) {
            current = current - 1;
        } else {
            current = numImages - 3;
        }
 
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
 
        return false;
    });
 
    $('.left-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });
 
    $('.right-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });
 
    $('.right-arrow').on('click', function() {
        if (numImages > current + 3) {
            current = current+1;
        } else {
            current = 0;
        }
 
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
 
        return false;
    }); 
 });
</script>
<!-- NICOLAS PART -->

    <!-- Header End -->

    <!-- Footer Section End -->

        
@endsection
