

@extends('layouts.plantilla')

@section('title','destinos')

@section('content')

<h1>Directorio de destinos  aqui</h1> 
@foreach ($destinos as $destino)

<p><strong>DESTINO:</strong>{{$destino->departamento}} </p>

<p><strong>IMAGEN DEL DESTINO:</strong>
<div class ="card">
       <img class="card-img-top" src="{{asset('storage/img/'.$destino->imagen)}}"  alt="">
</div>
</p>
<a href={{route('destinos.show',$destino->id)}}>seleccionar destino</a>
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<section class="hero-section">
  <div class="card-grid">
    <a class="card" href="{{route('destinos.show',$destino->id)}}">
      <div class="card__background" style="background-image: url({{asset('storage/img/'.$destino->imagen)}})"></div>
      <div class="card__content">
        <p class="card__category">DESTINO:</p>
        <h3 class="card__heading">{{$destino->departamento}} </h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url({{asset('storage/img/'.$destino->imagen)}})"></div>
      <div class="card__content">
        <p class="card__category">DESTINO:</p>
        <h3 class="card__heading">{{$destino->departamento}} </h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url({{asset('storage/img/'.$destino->imagen)}})"></div>
      <div class="card__content">
        <p class="card__category">DESTINO:</p>
        <h3 class="card__heading">{{$destino->departamento}} </h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url({{asset('storage/img/'.$destino->imagen)}})"></div>
      <div class="card__content">
        <p class="card__category">DESTINO:</p>
        <h3 class="card__heading">{{$destino->departamento}} </h3>
      </div>
    </a>
  <div>
</section>   
@endforeach
{{$destinos->links()}}
      



