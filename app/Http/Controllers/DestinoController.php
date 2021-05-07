<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class destinoController extends Controller
{
    public function index(){
        return view('destinos.destino');

    }
    public function show($destino){
        //tambien asi se pone 
        //compact('destino') = ['destino'=>$destino]
        return view('destinos.Seleccion',['destino'=>$destino]);
    }
}
