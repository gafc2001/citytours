@extends('layouts.plantilla')

@section('title','Seleccion '.$destino)

@section('content')
       <h1> Los subdestinos de para este destino son:</h1> 
       @foreach ($subdestinos as $subdestino)
       <li>{{$subdestino-> name}} </li>
       <a href="">seleccionar subdestino</a>
       @endforeach
       
@endsection

