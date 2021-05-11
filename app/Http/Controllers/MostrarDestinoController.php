<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use App\Models\Subdestino;
use Illuminate\Http\Request;

class MostrarDestinoController extends Controller
{
    public function index(){
        $destinos= Destino::paginate();

        return view('destinos.destino',compact('destinos'));

    }
    public function show(){
        //tambien asi se pone 
        //compact('destino') = ['destino'=>$destino]
        
    }
}
