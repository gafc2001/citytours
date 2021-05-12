<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;

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
        $tours = Tour::paginate();

        return view('tour.index', compact('tours'))
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
        return view('tour.create', compact('tour'));
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

        $tour = Tour::create($request->all());

        return redirect()->route('tour.index')
            ->with('success', 'Tour created successfully.');
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

        return view('tour.show', compact('tour'));
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

        return view('tour.edit', compact('tour'));
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

        $tour->update($request->all());

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
        $tour = Tour::find($id)->delete();

        return redirect()->route('tour.index')
            ->with('success', 'Tour deleted successfully');
    }
}
