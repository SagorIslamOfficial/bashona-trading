<?php

namespace App\Http\Controllers\BackEnd\Home;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Home\QuickLink;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class QuickLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexQuickLinks = QuickLink::all();
        return view('backEnd.quick-link.index', compact('indexQuickLinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.quick-link.create');
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
            'name' => 'required',
            'link' => 'required'
        ]);

        $storeQuickLink = new QuickLink();

        $storeQuickLink->name = $request->name;
        $storeQuickLink->slug = Str::slug($request->name);
        $storeQuickLink->link = $request->link;

        $storeQuickLink->save();

        return redirect()->route('quick-link.index')->with('success', 'Quick Link Saved Successfully :)');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $editQuickLink = QuickLink::findOrFail($id);
        return view('backEnd.quick-link.edit', compact('editQuickLink'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required'
        ]);

        $updateQuickLink = QuickLink::findOrFail($id);

        $updateQuickLink->name = $request->name;
        $updateQuickLink->slug = Str::slug($request->name);
        $updateQuickLink->link = $request->link;

        $updateQuickLink->save();

        return redirect()->route('quick-link.index')->with('success', 'Quick Link Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        QuickLink::findOrfail($id)->delete();

        return redirect()->route('quick-link.index')->with('success', 'Quick Link deleted successfully !');
    }
}
