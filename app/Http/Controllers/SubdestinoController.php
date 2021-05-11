<?php

namespace App\Http\Controllers;

use App\Models\Subdestino;
use Illuminate\Http\Request;

/**
 * Class SubdestinoController
 * @package App\Http\Controllers
 */
class SubdestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subdestinos = Subdestino::paginate();

        return view('subdestino.index', compact('subdestinos'))
            ->with('i', (request()->input('page', 1) - 1) * $subdestinos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subdestino = new Subdestino();
        return view('subdestino.create', compact('subdestino'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Subdestino::$rules);

        $subdestino = Subdestino::create($request->all());

        return redirect()->route('subdestinos.index')
            ->with('success', 'Subdestino created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $subdestino = Subdestino::find($id);

        return view('subdestino.show', compact('subdestino'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subdestino = Subdestino::find($id);

        return view('subdestino.edit', compact('subdestino'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Subdestino $subdestino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subdestino $subdestino)
    {
        request()->validate(Subdestino::$rules);

        $subdestino->update($request->all());

        return redirect()->route('subdestinos.index')
            ->with('success', 'Subdestino updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $subdestino = Subdestino::find($id)->delete();

        return redirect()->route('subdestinos.index')
            ->with('success', 'Subdestino deleted successfully');
    }
}
