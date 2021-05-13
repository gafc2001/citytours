<?php

namespace App\Http\Controllers;

use App\Models\Admin\Departamento;
use App\Models\Admin\LugaresTuristico;
use Illuminate\Http\Request;


class MostrarSubdestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($destinos)
    {
        $destino= Departamento::find($destinos);
        $subdestinos= LugaresTuristico::join('tours','tours.id_lugar_turistico','=','lugares_turisticos.id')
                            ->select('lugares_turisticos.lugar_turistico as lugar_turistico','tours.id_lugar_turistico as turisticoid','tours.tour as tour','lugares_turisticos.imagen as imagenL','tours.imagen as imagenT')
                            ->where('lugares_turisticos.id_departamento','=',$destinos)
                            ->paginate();



        return view('destinos.Seleccion',compact('subdestinos'),compact('destino')) 
        ->with('i', (request()->input('page', 1) - 1) * $subdestinos->perPage());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
