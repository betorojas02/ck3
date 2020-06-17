@extends('layouts.welcome')
@section('content')


    
    <!-- Page Preloder -->

    <!-- Header Section Begin -->

    <!-- NICOLAS PART -->

    <div class="row">
            <div class="col-12 col-md-12 col-sm-12 col-xs-12">
            <div id="carrusel">
            <a href="#" class="left-arrow"><img src="images/left-arrow.png" /></a>
            <a href="#" class="right-arrow"><img src="images/right-arrow.png" /></a>
            <div class="carrusel">
        <div class="product" id="product_0">
            <img src="img/bg.jpg" width="195" height="100" />
            <h5>Lorem ipsum 1</h5>
            <p>165.00 €</p>
        </div>
        <div class="product" id="product_1">
            <img src="img/bg.jpg" width="195" height="100" />
            <h5>Lorem ipsum 2</h5>
            <p>100.00 €</p>
        </div>
        <div class="product" id="product_2">
            <img src="img/bg.jpg" width="195" height="100" />
            <h5>Lorem ipsum 3</h5>
            <p>250.00 €</p>
        </div>
        <div class="product" id="product_3">
            <img src="img/bg.jpg" width="195" height="100" />
            <h5>Lorem ipsum 4</h5>
            <p>75.00 €</p>
        </div>
        <div class="product" id="product_4">
            <img src="img/bg.jpg" width="195" height="100" />
            <h5>Lorem ipsum 5</h5>
            <p>65.00 €</p>
        </div>
        <div class="product" id="product_5">
            <img src="img/bg.jpg" width="195" height="100" />
            <h5>Lorem ipsum 6</h5>
            <p>40.00 €</p>
        </div>
    </div>
</div>
            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script>
var current = 0;
var imagenes = new Array();
 
$(document).ready(function() {
    var numImages = 6;
    if (numImages <= 3) {
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

    <!-- Header End -->

    <!-- Footer Section End -->

        
        
            
        



    <section id="tm-section-2" class="tm-section tm-section-carousel">
						<div>
						
                            <font face="Kohne Makina">NUESTROS SERVICIOS</font>	
                            <font face="Liberation Sans Regular"><i>En CANISCATUS amamos a tu peludo y estamos capacitados para brindarle la mejor experiencia. Caniscatus cuida con estatus.</i></font>	            
							<div class="tm-img-container">
								<div class="tm-img-slider">
									
                                    <a  class="tm-slider-img"><img src="img/bg.jpg" alt="Image" class="img-fluid"></a>
                                    <a class="tm-slider-img"><img src="img/bg.jpg" alt="Image" class="img-fluid"></a>
                                    <a class="tm-slider-img"><img src="img/bg.jpg" alt="Image" class="img-fluid"></a>
                                    <a class="tm-slider-img"><img src="img/bg.jpg" alt="Image" class="img-fluid"></a>

                                    
                                </div>
							</div>		            		          

						</div>       		          	
					</section>
@endsection
