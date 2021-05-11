<?php

namespace App\Http\Controllers;

use App\Models\Lugar;
use App\Models\Subdestino;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

/**
 * Class LugarController
 * @package App\Http\Controllers
 */
class LugarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugars = Lugar::join('subdestinos','subdestinos.id','=','lugars.idsubdestination')
                ->select('lugars.*','subdestinos.name as subdestino')                
                ->paginate();

        return view('lugar.index', compact('lugars'))
            ->with('i', (request()->input('page', 1) - 1) * $lugars->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lugar = new Lugar();
        $subdestinos = Subdestino::pluck('name','id');
        return view('lugar.create', compact('lugar','subdestinos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Lugar::$rules);

        $image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/img',$image);

        $lugar = Lugar::create([
            'name' => $request->name,
            'details' => $request->details,
            'image' => $image,
            'precio' => $request->precio,
            'created_at' => date('Y-m-d H:i:s'),
            'update_at' => date('Y-m-d H:i:s'),
            'idsubdestination' => $request->idsubdestination
        ]);

        return redirect()->route('lugars.index')
            ->with('success', 'Lugar created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lugar = Lugar::find($id);

        return view('lugar.show', compact('lugar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lugar = Lugar::find($id);
        $subdestinos = Subdestino::pluck('name','id');
        return view('lugar.edit', compact('lugar','subdestinos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Lugar $lugar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lugar $lugar)
    {
        request()->validate(Lugar::$rules);

        $old_image = $lugar->image;
        $dirs = Storage::delete('public/img/'.$old_image);

        $new_image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/img',$new_image);

        $lugar->update([
            'name' => $request->name,
            'details' => $request->details,
            'image' => $new_image,
            'precio' => $request->precio,
            'update_at' => date('Y-m-d H:i:s'),
            'idsubdestination' => $request->idsubdestination
        ]);

        return redirect()->route('lugars.index')
            ->with('success', 'Lugar updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $lugar = Lugar::find($id)->delete();

        return redirect()->route('lugars.index')
            ->with('success', 'Lugar deleted successfully');
    }
}
