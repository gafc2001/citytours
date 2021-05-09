<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use App\Models\Subdestino;
use Illuminate\Http\Request;

class destinoController extends Controller
{
    public function index(){
        $destinos= Destino::paginate();

        return view('destinos.destino',compact('destinos'));

    }
    public function show($destino){
        //tambien asi se pone 
        //compact('destino') = ['destino'=>$destino]
        
        $Subdestinos= Subdestino::where('id_destination',$destino)->get();

        
        return view('destinos.Seleccion',['destino'=>$destino],['subdestinos'=>$Subdestinos]);
    }
}
