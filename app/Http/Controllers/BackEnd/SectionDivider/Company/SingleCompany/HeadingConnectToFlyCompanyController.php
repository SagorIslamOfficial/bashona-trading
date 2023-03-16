<?php

namespace App\Http\Controllers\BackEnd\SectionDivider\Company\SingleCompany;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\SectionDivider\Company\SingleCompany\ConnectToFlyCompany;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HeadingConnectToFlyCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $headingConnectToFlyCompany = ConnectToFlyCompany::all();
        return view('backEnd.heading-subText.hst-company.single-company.connect-to-fly.index', compact('headingConnectToFlyCompany'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.heading-subText.hst-company.single-company.connect-to-fly.create');
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
            'headingConnectToFlyCompany' => 'required',
            'headingConnectToFlyCompanyService' => 'required',
            'headingConnectToFlyCompanyTeam' => 'required'
        ]);

        $storeConnectToFlyCompany = new ConnectToFlyCompany();

        $storeConnectToFlyCompany->headingConnectToFlyCompany = $request->headingConnectToFlyCompany;
        $storeConnectToFlyCompany->subTextConnectToFlyCompany = $request->subTextConnectToFlyCompany;
        $storeConnectToFlyCompany->headingConnectToFlyCompanyService = $request->headingConnectToFlyCompanyService;
        $storeConnectToFlyCompany->subTextConnectToFlyCompanyService = $request->subTextConnectToFlyCompanyService;
        $storeConnectToFlyCompany->headingConnectToFlyCompanyTeam = $request->headingConnectToFlyCompanyTeam;
        $storeConnectToFlyCompany->subTextConnectToFlyCompanyTeam = $request->subTextConnectToFlyCompanyTeam;

        $storeConnectToFlyCompany->save();

        return redirect()->route('hst-connect-to-fly.index')->with('success', 'Connect To Fly Company Heading & Sub Text Saved Successfully.');
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
        $editConnectToFlyCompany = ConnectToFlyCompany::findOrFail($id);
        return view('backEnd.heading-subText.hst-company.single-company.connect-to-fly.edit', compact('editConnectToFlyCompany'));
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
            'headingConnectToFlyCompany' => 'required',
            'headingConnectToFlyCompanyService' => 'required',
            'headingConnectToFlyCompanyTeam' => 'required'
        ]);

        $updateConnectToFlyCompany = ConnectToFlyCompany::findOrFail($id);

        $updateConnectToFlyCompany->headingConnectToFlyCompany = $request->headingConnectToFlyCompany;
        $updateConnectToFlyCompany->subTextConnectToFlyCompany = $request->subTextConnectToFlyCompany;
        $updateConnectToFlyCompany->headingConnectToFlyCompanyService = $request->headingConnectToFlyCompanyService;
        $updateConnectToFlyCompany->subTextConnectToFlyCompanyService = $request->subTextConnectToFlyCompanyService;
        $updateConnectToFlyCompany->headingConnectToFlyCompanyTeam = $request->headingConnectToFlyCompanyTeam;
        $updateConnectToFlyCompany->subTextConnectToFlyCompanyTeam = $request->subTextConnectToFlyCompanyTeam;

        $updateConnectToFlyCompany->save();

        return redirect()->route('hst-connect-to-fly.index')->with('success', 'Connect To Fly Company Heading & Sub Text Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        ConnectToFlyCompany::findOrFail($id)->delete();

        return redirect()->route('hst-connect-to-fly.index')->with('success', 'Connect To Fly Company Heading & Sub Text deleted successfully !');
    }
}
