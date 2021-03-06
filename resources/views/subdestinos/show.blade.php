@extends('layouts.plantilla')


@section('content')
<section class="cabecera">
  <section class="imagen" style="background-image: url({{route('storage',$destino->imagen)}});">
    <h2>{{$destino->departamento}}</h2>
  </section>
</section>
<div class="boton-regresar">
  <a href="{{route('destinos.index')}}">Volver a destinos</a>
</div>

<section class="contenido mx-auto">
  <section class="subdestinos-cont">

    <!--- Carrusel de Boostrap-->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <!-- Botones de Cambio -->
        @foreach ($destino->subdestinos()->get() as $subdestino)
        @if ($loop->first)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="carouselItem active"></li>
        @else
        <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="carouselItem"></li>
        @endif

        @endforeach
      </ol>

      <!-- Sudestinos -->
      <div class="carousel-inner">

        @foreach ($destino->subdestinos()->get() as $subdestino)
        @if ($loop->first)
        <div class="carousel-item active" index="{{$subdestino->id}}">
          <a class="btn-buy" href="{{route('compra.show',$subdestino->id)}}"><i class="fas fa-plane"></i> Comprar boleto</a>
          <img class="d-block w-100" src="{{route('storage',$subdestino->imagen)}}">
          <div class="carousel-caption d-none d-md-block">
            <h5>{{$subdestino->lugar_turistico}}</h5>
            <p>Te da la Bienvenida </p>
          </div>
        </div>
        @else
        <div class="carousel-item" index="{{$subdestino->id}}">
          <a class="btn-buy" href="{{route('compra.show',$subdestino->id)}}"><i class="fas fa-plane"></i> Comprar boleto</a>
          <img class="d-block w-100" src="{{route('storage',$subdestino->imagen)}}">
          <div class="carousel-caption d-none d-md-block">
            <h5>{{$subdestino->lugar_turistico}}</h5>
            <p>Te da la Bienvenida</p>
          </div>
        </div>
        @endif


        @endforeach
      </div>

      <!-- Botones de Cambio -->
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>


    <!--- Carrusel de Boostrap (FIN)-->


  </section>
  <section class="descripcion">
    <!--             <section class="cont-letra"> 
                <p>Descripcion Destino
                </p>
            </section> -->
    <section class="Sitios-Turisticos">
      <H3>Tours</H3>

      <section class="cont-sitios">

        @foreach ($subdestinos as $subdestino)
        <div class="sitio1">
          <a href="#{{$subdestino->idtour}}">
            <img src="{{route('storage',$subdestino->imagenT)}}" alt="">
            <p>{{$subdestino->tour}}</p>
          </a>
        </div>
        @endforeach

      </section>


    </section>

    <!-- Boton de Zoom-->
    @foreach ($subdestinos as $subdestino)

    <section class="pantacompleta" id="{{$subdestino->idtour}}">
      <div class="botones-pantallacompleta mx-auto" style="width: 800px;">
        <p>{{$subdestino->tour}}</p>
        <a href="" class="botoncerrar"><i class="fas fa-times" style="width:100%;"></i></a>
      </div>
      <div class="imagezoom">
        <a href=""><img src="{{route('storage',$subdestino->imagenT)}}" alt=""></a>
      </div>
      <div class="contenedor-letra">
        <p>{{$subdestino->details}}</p>
      </div>

    </section>
    @endforeach



  </section>
</section>

@endsection