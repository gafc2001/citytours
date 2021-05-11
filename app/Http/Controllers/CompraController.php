<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use Illuminate\Http\Request;

class compraController extends Controller
{
    public function index(){
        return view('compra.ResumenCompra');

    }
    public function show($lugarid){
        $lugar= Lugar::find($lugarid);
 
        return view('compra.seleccionCompra',compact('lugar'));
    }
}
