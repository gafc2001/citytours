

@extends('layouts.plantilla')

@section('title','destinos')

@section('content')
       <h1>Directorio de destinos aqui</h1> 
       <ul>


<h1>Directorio de destinos  aqui</h1> 
@foreach ($destinos as $destino)
<li>DESTINO:{{$destino->name}} </li>
<div class ="card">
       <img class="card-img-top" src="{{asset($destino->image)}}"  alt="">
</div>
<a href={{route('MostrarSubdestino.show',$destino->id)}}>seleccionar destino</a>
    
@endforeach
{{$destinos->links()}}
      
  
@endsection

