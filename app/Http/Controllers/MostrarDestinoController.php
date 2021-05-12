<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Departamento;
=======
use App\Models\Admin\Departamento;
>>>>>>> 482d029b46e1739f14bf342ab49c0d9d8daf24d8
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
