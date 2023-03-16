<?php

namespace App\Http\Controllers\BackEnd\SectionDivider\Company\SingleCompany;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\SectionDivider\Company\SingleCompany\BdDigitalCompany;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HeadingBdDigitalCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $headingBdDigitalCompany = BdDigitalCompany::all();
        return view('backEnd.heading-subText.hst-company.single-company.bd-digital.index', compact('headingBdDigitalCompany'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.heading-subText.hst-company.single-company.bd-digital.create');
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
            'headingBdDigitalCompany' => 'required',
            'headingBdDigitalCompanyService' => 'required',
            'headingBdDigitalCompanyTeam' => 'required'
        ]);

        $storeBdDigitalCompany = new BdDigitalCompany();

        $storeBdDigitalCompany->headingBdDigitalCompany = $request->headingBdDigitalCompany;
        $storeBdDigitalCompany->subTextBdDigitalCompany = $request->subTextBdDigitalCompany;
        $storeBdDigitalCompany->headingBdDigitalCompanyService = $request->headingBdDigitalCompanyService;
        $storeBdDigitalCompany->subTextBdDigitalCompanyService = $request->subTextBdDigitalCompanyService;
        $storeBdDigitalCompany->headingBdDigitalCompanyTeam = $request->headingBdDigitalCompanyTeam;
        $storeBdDigitalCompany->subTextBdDigitalCompanyTeam = $request->subTextBdDigitalCompanyTeam;

        $storeBdDigitalCompany->save();

        return redirect()->route('hst-bd-digital.index')->with('success', 'BD Digital Company Heading & Sub Text Saved Successfully.');
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
        $editBdDigitalCompany = BdDigitalCompany::findOrFail($id);
        return view('backEnd.heading-subText.hst-company.single-company.bd-digital.edit', compact('editBdDigitalCompany'));
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
            'headingBdDigitalCompany' => 'required',
            'headingBdDigitalCompanyService' => 'required',
            'headingBdDigitalCompanyTeam' => 'required'
        ]);

        $updateBdDigitalCompany = BdDigitalCompany::findOrFail($id);

        $updateBdDigitalCompany->headingBdDigitalCompany = $request->headingBdDigitalCompany;
        $updateBdDigitalCompany->subTextBdDigitalCompany = $request->subTextBdDigitalCompany;
        $updateBdDigitalCompany->headingBdDigitalCompanyService = $request->headingBdDigitalCompanyService;
        $updateBdDigitalCompany->subTextBdDigitalCompanyService = $request->subTextBdDigitalCompanyService;
        $updateBdDigitalCompany->headingBdDigitalCompanyTeam = $request->headingBdDigitalCompanyTeam;
        $updateBdDigitalCompany->subTextBdDigitalCompanyTeam = $request->subTextBdDigitalCompanyTeam;

        $updateBdDigitalCompany->save();

        return redirect()->route('hst-bd-digital.index')->with('success', 'BD Digital Company Heading & Sub Text Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        BdDigitalCompany::findOrFail($id)->delete();

        return redirect()->route('hst-bd-digital.index')->with('success', 'BD Digital Company Heading & Sub Text deleted successfully !');
    }
}
