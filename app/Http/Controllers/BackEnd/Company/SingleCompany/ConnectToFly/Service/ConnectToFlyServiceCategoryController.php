<?php

namespace App\Http\Controllers\BackEnd\Company\SingleCompany\ConnectToFly\Service;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Company\SingleCompany\ConnectToFly\Service\ConnectToFlyServiceCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class ConnectToFlyServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexConnectToFlyServiceCategories = ConnectToFlyServiceCategory::all();
        return view('backEnd.company.companies.connect-to-fly.service.category.index', compact('indexConnectToFlyServiceCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.company.companies.connect-to-fly.service.category.create');
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

        $storeConnectToFlyServiceCategory = new ConnectToFlyServiceCategory();

        $storeConnectToFlyServiceCategory->name = $request->name;
        $storeConnectToFlyServiceCategory->slug = Str::slug($request->name);

        $storeConnectToFlyServiceCategory->save();

        return redirect()->route('ctf-service-category.index')->with('success', 'Connect To Fly Service Category Saved Successfully');
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
        $editConnectToFlyServiceCategory = ConnectToFlyServiceCategory::findOrFail($id);
        return view('backEnd..company.companies.connect-to-fly.service.category.edit', compact('editConnectToFlyServiceCategory'));
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

        $updateConnectToFlyServiceCategory = ConnectToFlyServiceCategory::findOrFail($id);

        $updateConnectToFlyServiceCategory->name = $request->name;
        $updateConnectToFlyServiceCategory->slug = Str::slug($request->name);

        $updateConnectToFlyServiceCategory->save();

        return redirect()->route('ctf-service-category.index')->with('success', 'Connect To Fly Service Category Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        ConnectToFlyServiceCategory::findOrfail($id)->delete();

        return redirect()->route('ctf-service-category.index')->with('success', 'Connect To Fly Service Category Deleted successfully !');
    }
}
