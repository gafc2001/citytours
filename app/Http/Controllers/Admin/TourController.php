<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Tour;
use App\Models\Admin\LugaresTuristico;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class TourController
 * @package App\Http\Controllers
 */
class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::join('lugares_turisticos','lugares_turisticos.id','=','tours.id_lugar_turistico')
                        ->select('tours.*','lugares_turisticos.lugar_turistico')                
                        ->paginate();

        return view('admin.tour.index', compact('tours'))
            ->with('i', (request()->input('page', 1) - 1) * $tours->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tour = new Tour();
        $lugares = LugaresTuristico::pluck('lugar_turistico','id');
        return view('admin.tour.create', compact('tour','lugares'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tour::$rules);
        $path = Storage::disk("s3")->put("img",$request->file('imagen'));

        $tour = Tour::insert([
            'tour' => $request->tour,
            'details' => $request->details,
            'imagen' => $request->file('imagen')->hashName(),
            'id_lugar_turistico' => $request->id_lugar_turistico
        ]);

        return redirect()->route('tour.index')
            ->with('success', 'Tour creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tour = Tour::find($id);
        
        return view('admin.tour.show', compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tour = Tour::find($id);
        $lugares = LugaresTuristico::pluck('lugar_turistico','id');
        return view('admin.tour.create', compact('tour','lugares'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tour $tour
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tour $tour)
    {
        request()->validate(Tour::$rules);

        $old_image = $tour->image;
        $dirs = Storage::disk("s3")->delete('img/'.$old_image);

        $path = Storage::disk("s3")->put("img",$request->file('imagen'));

        $tour->update([
            'tour' => $request->tour,
            'details' => $request->details,
            'imagen' => $request->file('imagen')->hashName(),
            'id_lugar_turistico' => $request->id_lugar_turistico
        ]);

        return redirect()->route('tour.index')
            ->with('success', 'Tour updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tour = Tour::find($id);
        $img_path = $tour->imagen;
        try{
            $tour->delete();
            $dirs = Storage::disk("s3")->delete('img/'.$img_path);
            return redirect()->route('tour.index')
                ->with('success', 'Tour deleted successfully');
        }catch(QueryException $e){
            return redirect()->route('tour.index')
                ->withErrors(['error' => 'Error al eliminar, tiene registros por eliminar']);
        }
        
    }
}
