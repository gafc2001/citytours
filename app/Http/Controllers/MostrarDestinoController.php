<?php

namespace App\Http\Controllers;

use App\Models\Departamento;
use Illuminate\Http\Request;

class MostrarDestinoController extends Controller
{
    public function index(){
        $destinos= Departamento::paginate();

        return view('destinos.destino',compact('destinos'));

    }
    public function show(){
        //tambien asi se pone 
        //compact('destino') = ['destino'=>$destino]
        
    }
}
