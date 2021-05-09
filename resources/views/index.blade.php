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
@endsection