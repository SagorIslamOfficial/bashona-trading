<?php

namespace App\Http\Controllers\BackEnd\Company\SingleCompany\Tns\Service;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Company\SingleCompany\Tns\Service\TnsServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class TnsServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexTnsServiceCategories = TnsServiceCategory::all();
        return view('backEnd.company.companies.tns.service.category.index', compact('indexTnsServiceCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.company.companies.tns.service.category.create');
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

        $storeTnsServiceCategory = new TnsServiceCategory();

        $storeTnsServiceCategory->name = $request->name;
        $storeTnsServiceCategory->slug = Str::slug($request->name);

        $storeTnsServiceCategory->save();

        return redirect()->route('tns-category.index')->with('success', 'Tns Service Category Saved Successfully');
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
        $editTnsServiceCategory = TnsServiceCategory::findOrFail($id);
        return view('backEnd..company.companies.tns.service.category.edit', compact('editTnsServiceCategory'));
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

        $updateTnsServiceCategory = TnsServiceCategory::findOrFail($id);

        $updateTnsServiceCategory->name = $request->name;
        $updateTnsServiceCategory->slug = Str::slug($request->name);

        $updateTnsServiceCategory->save();

        return redirect()->route('tns-category.index')->with('success', 'Tns Service Category Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        TnsServiceCategory::findOrfail($id)->delete();

        return redirect()->route('tns-category.index')->with('success', 'Tns Service Category Deleted successfully !');
    }
}
