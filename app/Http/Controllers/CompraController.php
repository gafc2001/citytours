<?php

namespace App\Http\Controllers;

use App\Models\Admin\LugaresTuristico;

use App\Models\Admin\Viaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\DB;

class compraController extends Controller
{
    public function index(){
        
        $var=DB::select('call fechas_vuelos (?)',array(3));
        return $var;
    }
    public function show($lugarid){
        $viaje= Viaje::where('id_lugar',$lugarid)->pluck('date','id');
        
        $lugar= LugaresTuristico::find($lugarid);
        
 
        return view('compra.show',compact('lugar','viaje'));
    }
    public function getViaje($id){
        return Viaje::find($id);
    }
}
