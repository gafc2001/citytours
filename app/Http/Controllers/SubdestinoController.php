<?php

namespace App\Http\Controllers;

use App\Models\Subdestino;
use App\Models\Destino;
use Illuminate\Support\Facades\Storage;
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
        $subdestinos = Subdestino::join('destinos','destinos.id','=','subdestinos.id_destination')
                        ->select('subdestinos.*','destinos.name as destino')                
                        ->paginate();


        return view('subdestino.index', compact('subdestinos'))
            ->with('i', (request()->input('page', 1) - 1) * $subdestinos->perPage());
        // return dd($subdestinos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subdestino = new Subdestino();
        $destinos = Destino::pluck('name','id');
        return view('subdestino.create', compact('subdestino','destinos'));
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

        $image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/img',$image);

        $subdestino = Subdestino::insert([
            'name' => $request->name,
            'image' =>$image,
            'id_destination' => $request->id_destination,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ]);

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
        $destinos = Destino::pluck('name','id');
        return view('subdestino.edit', compact('subdestino','destinos'));
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

        $old_image = $subdestino->image;
        $dirs = Storage::delete('public/img/'.$old_image);

        $new_image = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('public/img',$new_image);


        $subdestino->update([
            'name' => $request->name,
            'image' =>$new_image,
            'id_destination' => $request->id_destination,
            'updated_at' =>date('Y-m-d H:i:s')
        ]);

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
        $subdestino = Subdestino::find($id);
        $img_path = $subdestino->image;
        $subdestino->delete();
        $dirs = Storage::delete('public/img/'.$img_path);
        return redirect()->route('subdestinos.index')
            ->with('success', 'Subdestino deleted successfully');
    }
}
