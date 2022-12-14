<?php

namespace App\Http\Controllers\BackEnd\Company\SingleCompany\BdDigital\Service;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Company\SingleCompany\BdDigital\Service\BdDigitalServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class BdDigitalServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexBdDigitalServiceCategories = BdDigitalServiceCategory::all();
        return view('backEnd.company.companies.bd-digital.service.category.index', compact('indexBdDigitalServiceCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.company.companies.bd-digital.service.category.create');
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

        $storeBdDigitalServiceCategory = new BdDigitalServiceCategory();

        $storeBdDigitalServiceCategory->name = $request->name;
        $storeBdDigitalServiceCategory->slug = Str::slug($request->name);

        $storeBdDigitalServiceCategory->save();

        return redirect()->route('bd-digital-service-category.index')->with('success', 'BD Digital Service Category Saved Successfully');
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
        $editBdDigitalServiceCategory = BdDigitalServiceCategory::findOrFail($id);
        return view('backEnd..company.companies.bd-digital.service.category.edit', compact('editBdDigitalServiceCategory'));
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

        $updateBdDigitalServiceCategory = BdDigitalServiceCategory::findOrFail($id);

        $updateBdDigitalServiceCategory->name = $request->name;
        $updateBdDigitalServiceCategory->slug = Str::slug($request->name);

        $updateBdDigitalServiceCategory->save();

        return redirect()->route('bd-digital-service-category.index')->with('success', 'BD Digital Service Category Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        BdDigitalServiceCategory::findOrfail($id)->delete();

        return redirect()->route('bd-digital-service-category.index')->with('success', 'BD Digital Service Category Deleted successfully !');
    }
}
