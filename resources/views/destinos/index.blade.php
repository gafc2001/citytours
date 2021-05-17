

@extends('layouts.plantilla')

@section('title','destinos')

@section('content')

<div class="contenedor_portada">
<div class="portada"></div>
<h1>Directorio de destinos  aqui</h1> 
<<<<<<< HEAD
@foreach ($destinos as $destino)
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
=======
</div>





>>>>>>> 21b55155891a6e6b47703706ef80292be71f7c9c
<section class="hero-section">

  <div class="card-grid">
<<<<<<< HEAD
    <a class="card" href="{{route('subdestinos.show',$destino->id)}}">
=======
  @foreach ($destinos as $destino)
    <a class="card" href="{{route('destinos.show',$destino->id)}}">
>>>>>>> 21b55155891a6e6b47703706ef80292be71f7c9c
      <div class="card__background" style="background-image: url({{asset('storage/img/'.$destino->imagen)}})"></div>
      <div class="card__content">
        <p class="card__category">DESTINO:</p>
        <h3 class="card__heading">{{$destino->departamento}} </h3>
      </div>
    </a>
<<<<<<< HEAD
  <div>
</section>   
@endforeach

=======
    @endforeach
  <div> 
  
</section>   

{{$destinos->links()}}
>>>>>>> 21b55155891a6e6b47703706ef80292be71f7c9c
      



