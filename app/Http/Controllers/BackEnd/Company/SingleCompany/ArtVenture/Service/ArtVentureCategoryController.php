<?php

namespace App\Http\Controllers\BackEnd\Company\SingleCompany\ArtVenture\Service;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Company\SingleCompany\ArtVenture\Service\ArtVentureCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class   ArtVentureCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexArtVentureCategories = ArtVentureCategory::all();
        return view('backEnd.company.companies.art-venture.service.category.index', compact('indexArtVentureCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.company.companies.art-venture.service.category.create');
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
            'name' => 'required'
        ]);

        $storeArtVentureCategory = new ArtVentureCategory();

        $storeArtVentureCategory->name = $request->name;
        $storeArtVentureCategory->slug = Str::slug($request->name);

        $storeArtVentureCategory->save();

        return redirect()->route('art-venture-category.index')->with('success', 'Art Venture Service Category Saved Successfully');
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
        $editArtVentureCategory = ArtVentureCategory::findOrFail($id);
        return view('backEnd..company.companies.art-venture.service.category.edit', compact('editArtVentureCategory'));
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
            'name' => 'required'
        ]);

        $updateArtVentureCategory = ArtVentureCategory::findOrFail($id);

        $updateArtVentureCategory->name = $request->name;
        $updateArtVentureCategory->slug = Str::slug($request->name);

        $updateArtVentureCategory->save();

        return redirect()->route('art-venture-category.index')->with('success', 'Art Venture Service Category Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        ArtVentureCategory::findOrfail($id)->delete();

        return redirect()->route('art-venture-category.index')->with('success', 'Art Venture Service Category Deleted successfully !');
    }
}
