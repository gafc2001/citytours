<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\LugaresTuristico;
use Illuminate\Http\Request;

/**
 * Class LugaresTuristicoController
 * @package App\Http\Controllers
 */
class LugaresTuristicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugaresTuristicos = LugaresTuristico::paginate();

        return view('admin.lugares-turistico.index', compact('lugaresTuristicos'))
            ->with('i', (request()->input('page', 1) - 1) * $lugaresTuristicos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lugaresTuristico = new LugaresTuristico();
        return view('admin.lugares-turistico.create', compact('lugaresTuristico'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(LugaresTuristico::$rules);

        $lugaresTuristico = LugaresTuristico::create($request->all());

        return redirect()->route('admin.lugares-turistico.index')
            ->with('success', 'LugaresTuristico created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lugaresTuristico = LugaresTuristico::find($id);

        return view('admin.lugares-turistico.show', compact('lugaresTuristico'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lugaresTuristico = LugaresTuristico::find($id);

        return view('admin.lugares-turistico.edit', compact('lugaresTuristico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  LugaresTuristico $lugaresTuristico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LugaresTuristico $lugaresTuristico)
    {
        request()->validate(LugaresTuristico::$rules);

        $lugaresTuristico->update($request->all());

        return redirect()->route('admin.lugares-turistico.index')
            ->with('success', 'LugaresTuristico updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $lugaresTuristico = LugaresTuristico::find($id)->delete();

        return redirect()->route('lugar.index')
            ->with('success', 'LugaresTuristico deleted successfully');
    }
}
