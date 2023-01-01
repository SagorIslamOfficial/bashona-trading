<?php

namespace App\Http\Controllers\BackEnd\Contact;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Contact\Map;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexMap = Map::all();
        return view('backEnd.contact.map.index', compact('indexMap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.contact.map.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'map_location' => 'required',
            'map' => 'required'
        ]);

        $map = new Map();

        $map->map_location = $request->map_location;
        $map->map = $request->map;

        $map->save();

        return redirect()->route('map.index')->with('success', 'Contact Map Saved Successfully :)');
    }

    /**
     * Display the specified resource.
     *
     * @param Map $map
     * @return Response
     */
    public function show(Map $map)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Map $map
     * @return Response
     */
    public function edit($map)
    {
        $editMap = Map::findOrFail($map);
        return view('backEnd.contact.map.edit', compact('editMap'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Map $map
     * @return Response
     */
    public function update(Request $request, $map)
    {
        $request->validate([
            'map_location' => 'required',
            'map' => 'required'
        ]);

        $updateMap = Map::findOrFail($map);

        $updateMap->map_location = $request->map_location;
        $updateMap->map = $request->map;

        $updateMap->save();

        return redirect()->route('map.index')->with('success', 'Contact Map Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Map $map
     * @return Response
     */
    public function destroy($map)
    {
        Map::findOrfail($map)->delete();

        return redirect()->route('map.index')->with('success', 'Map deleted successfully !');
    }
}
