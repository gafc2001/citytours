<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class compraController extends Controller
{
    public function index(){
        return view('compra.seleccionCompra');

    }
    public function show($detalles){
 
        return view('compra.ResumenCompra',['detalles'=>$detalles]);
    }
}
