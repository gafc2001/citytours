@extends('layouts.plantilla')

@section('title','destinos')

@section('content')
       <h1>Directorio de destinos  aqui</h1> 
       <ul>

              @foreach ($destinos as $destino)
              <li>DESTINO: {{$destino-> name}} </li>
              <a href={{route('Mostrardestinos.show',$destino-> id)}}>seleccionar destino</a>
                  
              @endforeach
       </ul>
       {{$destinos->links()}}
@endsection

