

@extends('layouts.plantilla')

@section('title','destinos')

@section('content')

<h1>Directorio de destinos  aqui</h1> 
@foreach ($destinos as $destino)


<p><strong>IMAGEN DEL DESTINO:</strong>
<div class ="card">
       <img class="card-img-top" src="{{asset('storage/img/'.$destino->imagen)}}"  alt="">
</div>
</p>
<p><strong>DESTINO:</strong>{{$destino->departamento}} </p>
<a href={{route('destinos.show',$destino->id)}}>seleccionar destino</a>
    
@endforeach
{{$destinos->links()}}
      



