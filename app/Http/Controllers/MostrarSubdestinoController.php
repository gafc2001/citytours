<?php

namespace App\Http\Controllers;

use App\Models\Departamento as ModelsDepartamento;
use App\Models\LugaresTuristico;
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
        $destino= ModelsDepartamento::find($destinos);
        $subdestinos= LugaresTuristico::join('lugars','lugars.idsubdestination','=','subdestinos.id')
                            ->select('subdestinos.name as subdestino','lugars.id as lugarid','lugars.name as lugar','subdestinos.image as imagenS','lugars.precio as precio','lugars.image as imagenL')
                            ->where('subdestinos.id_destination','=',$destinos)
                            ->get();



        return view('destinos.Seleccion',compact('subdestinos'),compact('destino'));
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
