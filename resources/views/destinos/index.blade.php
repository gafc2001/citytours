

@extends('layouts.plantilla')

@section('title','destinos')

@section('content')

<div class="contenedor_portada">
<div class="portada"></div>
<h1>Directorio de destinos  aqui</h1> 
@foreach ($destinos as $destino)
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
</div>





<section class="hero-section">

  <div class="card-grid">
  @foreach ($destinos as $destino)
    <a class="card" href="{{route('destinos.show',$destino->id)}}">
      <div class="card__background" style="background-image: url({{asset('storage/img/'.$destino->imagen)}})"></div>
      <div class="card__content">
        <p class="card__category">DESTINO:</p>
        <h3 class="card__heading">{{$destino->departamento}} </h3>
      </div>
    </a>
  <div>
</section>   
@endforeach

    @endforeach
  <div> 
  
</section>   

{{$destinos->links()}}
      



