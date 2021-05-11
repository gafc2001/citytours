<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class DestinoController
 * @package App\Http\Controllers
 */
class DestinoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinos = Destino::paginate();

        return view('destino.index', compact('destinos'))
            ->with('i', (request()->input('page', 1) - 1) * $destinos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destino = new Destino();
        return view('destino.create', compact('destino'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        request()->validate(Destino::$rules);
        $image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/img',$image);

        $destino = Destino::insert([
                'name' => $request->name,
                'image' =>$image
        ]);

        return redirect()->route('destinos.index')
            ->with('success', 'Destino created successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $destino = Destino::find($id);

        return view('destino.show', compact('destino'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $destino = Destino::find($id);

        return view('destino.edit', compact('destino'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Destino $destino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destino $destino)
    {
        request()->validate(Destino::$rules);
        $old_image = $destino->image;
        $dirs = Storage::delete('public/img/'.$old_image);

        $new_image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/img',$new_image);
        
        $destino->update([
            'name' => $request->name,
            'image' => $new_image
        ]);

        return redirect()->route('destinos.index')
            ->with('success', 'Destino updated successfully');
    }


    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {

        $destino = Destino::find($id);
        $img_path = $destino->image;
        $destino->delete();
        $dirs = Storage::delete('public/img/'.$img_path);
        return redirect()->route('destinos.index')
            ->with('success', 'Destino deleted successfully');
    }
}
