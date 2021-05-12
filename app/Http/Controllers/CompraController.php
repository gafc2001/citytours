<?php

namespace App\Http\Controllers;

use App\Models\Admin\Tour;
use App\Models\Admin\Viaje;
use Illuminate\Http\Request;

class compraController extends Controller
{
    public function index(){
        
        return view('compra.seleccionCompra');

    }
    public function show($lugarid){
        $viaje= Viaje::where('id_lugar',$lugarid)->get();
        $lugar= Tour::find($lugarid);
 
        return view('compra.seleccionCompra',compact('lugar'),compact('viaje'));
    }
}
