<?php

namespace App\Http\Controllers;

use App\Models\Admin\LugaresTuristico;

use App\Models\Admin\Viaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;

class compraController extends Controller
{
    public function index(){
        return view('compra.index');

    }
    public function show($lugarid){
        $viaje= Viaje::where('id_lugar',$lugarid)->get();
        
        $lugar= LugaresTuristico::all();
        
 
        return view('compra.show',compact('lugar','viaje'));
    }
}
