@extends('layouts.plantilla')
@section('title','Principal')

@section('content')
       <!-- SLIDER -->
    <section id="section-1">
        <div class="content-slider">
          <input type="radio" id="banner1" class="sec-1-input" name="banner" checked>
          <input type="radio" id="banner2" class="sec-1-input" name="banner">
          <input type="radio" id="banner3" class="sec-1-input" name="banner">
          <input type="radio" id="banner4" class="sec-1-input" name="banner">
          <div class="slider">
            <div id="top-banner-1" class="banner">
              <div class="banner-inner-wrapper">
                <h2></h2>
                <h1></h1>
                <p class="txtbanner">“Tenemos muchos luegares el cual puedes visitar, cuenta con nosotros que tenemos una atencion excelente”</p>
                <div class="line"></div>
                <div class="learn-more-button"><a href="#nosotros">Leer más</a></div>
              </div>
            </div>
            <div id="top-banner-2" class="banner">
              <div class="banner-inner-wrapper">
                <h2></h2>
                <h1></h1>
                <p>"Encuentra las mejores ofertas para tu próximo viaje"</p>
                <div class="line"></div>
                <div class="learn-more-button"><a href="">Leer más</a></div>
              </div>
            </div>
            <div id="top-banner-3" class="banner">
              <div class="banner-inner-wrapper">
                <h2></h2>
                <h1></h1>
                <p>"Perú está lleno de encantos.Date el gusto de aprender un poco más sobre este destino de tu país."</p>
                <div class="line"></div>
                <div class="learn-more-button"><a href="">Leer más</a></div>
              </div>
            </div>
            <div id="top-banner-4" class="banner">
              <div class="banner-inner-wrapper">
                <h2></h2>
                <h1></h1>
                <p>"¡A recorrer el Perú! Descubre todo lo que puedes conocer en cada una de las regiones"</p>
                <div class="line"></div>
                <div class="learn-more-button"><a href="">Leer más</a></div>
              </div>
            </div>
          </div>
          <nav>
            <div class="controls">
              <label for="banner1"><span class="progressbar"><span class="progressbar-fill"></span></span><span></span></label>
              <label for="banner2"><span class="progressbar"><span class="progressbar-fill"></span></span><span></span></label>
              <label for="banner3"><span class="progressbar"><span class="progressbar-fill"></span></span><span></span></label>
              <label for="banner4"><span class="progressbar"><span class="progressbar-fill"></span></span><span></span></label>
            </div>
          </nav>
        </div>
  </section>
  <!-- SLIDER -->

  <!-- Contenido -->
  <div class="container">

	<h1>Muchos lugares para visitar</h1>

	<div class="gallery">

		<div class="gallery-item">
			<img class="gallery-image" src="https://images6.alphacoders.com/299/thumb-1920-299834.jpg" alt="">
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="https://fotosdelanaturaleza.es/wp-content/uploads/2017/03/Fondos-Hd-Selva-Amazónica-fotosdelanaturaleza.es-3-1024x576.jpg" alt="">
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="https://www.xtrafondos.com/wallpapers/tigre-de-bengala-en-la-selva-1627.jpg" alt="">
		</div>

		<div class="gallery-item"><a href="https://wallpapercave.com/wp/wp4201436.jpg">
			<img class="gallery-image" src="https://wallpapercave.com/wp/wp4201436.jpg" alt=""></a>
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="https://www.circuitomagicodelagua.com.pe/ckfinder/circuito_files/images/galeria/wallpapers/descargas_img/1.jpg" alt="">
		</div>

		<div class="gallery-item">
			<img class="gallery-image" src="https://images6.alphacoders.com/362/thumb-1920-362239.jpg" alt="">
		</div>

	</div>

</div>
  <!-- Contenido -->


       
    <!-- Footer -->
<footer class="footer" id="contac">
    <div class="wave" style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-2.82,119.89 C60.38,187.98 370.77,22.20 500.56,127.78 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #dedede;"></path></svg>
    </div>
    <div class="container-footer-all">
        <div class="container-body">
          <div class="colum1">
            
        </div>
            <div class="colum2">
                <h1>Redes sociales</h1>

                <div class="row">
                    <a href="" target="_blank" ><img src="/img/facebook.png" alt=""></a>
                    <label for="">Siguenos en Facebook</label>
                </div>
                <div class="row">
                    <a href="" target="_blank"><img src="img/twitter.png" alt=""></a>
                    <label for="">Siguenos en Twitter</label>
                </div>

                <div class="row">
                    <a href="" target="_blank"><img src="img/linkedin.png" alt=""></a>
                    <label for="">Siguenos en Linkedin</label>
                </div>
            </div>
            <div class="colum3">
                <h1>Información Contactos</h1>
               
                
                <div class="row2">
                    <img src="img/telefono.png" alt="" class="Telefono">
                    <label for=""></label>
                </div>

                
                <div class="row2">
                    <img src="img/celular.png" alt="" class="Smartphone">
                    <label for=""></label>
                </div>

                <div class="row2">
                    <img src="img/mensaje.png" alt="" class="Correo">
                    <label for=""></label>
                </div>
            </div>
        </div>

</div>
<div class="container-footer">
    <div class="container-f">
        <div class="copyright">
            © Todos los Derechos Reservados |<a href="">CityTours</a>
        </div>

        <div class="information">
        <a href=""> Información de Empresa</a> | <a href="">Privación y Politica</a> | <a href="">Terminos y Condiciones</a>
        </div>
    </div>    
</div>
</footer>
 <!-- Footer -->
    
@endsection