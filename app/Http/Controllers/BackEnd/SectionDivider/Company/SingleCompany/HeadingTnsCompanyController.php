<?php

namespace App\Http\Controllers\BackEnd\SectionDivider\Company\SingleCompany;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\SectionDivider\Company\SingleCompany\TnsCompany;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HeadingTnsCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $headingTnsCompany = TnsCompany::all();
        return view('backEnd.heading-subText.hst-company.single-company.tns.index', compact('headingTnsCompany'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.heading-subText.hst-company.single-company.tns.create');
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
            'headingTnsCompany' => 'required',
            'headingTnsCompanyService' => 'required',
            'headingTnsCompanyTeam' => 'required'
        ]);

        $storeTnsCompany = new TnsCompany();

        $storeTnsCompany->headingTnsCompany = $request->headingTnsCompany;
        $storeTnsCompany->subTextTnsCompany = $request->subTextTnsCompany;
        $storeTnsCompany->headingTnsCompanyService = $request->headingTnsCompanyService;
        $storeTnsCompany->subTextTnsCompanyService = $request->subTextTnsCompanyService;
        $storeTnsCompany->headingTnsCompanyTeam = $request->headingTnsCompanyTeam;
        $storeTnsCompany->subTextTnsCompanyTeam = $request->subTextTnsCompanyTeam;

        $storeTnsCompany->save();

        return redirect()->route('hst-tns.index')->with('success', 'Tns Company Heading & Sub Text Saved Successfully.');
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
        $editTnsCompany = TnsCompany::findOrFail($id);
        return view('backEnd.heading-subText.hst-company.single-company.tns.edit', compact('editTnsCompany'));
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
            'headingTnsCompany' => 'required',
            'headingTnsCompanyService' => 'required',
            'headingTnsCompanyTeam' => 'required'
        ]);

        $updateTnsCompany = TnsCompany::findOrFail($id);

        $updateTnsCompany->headingTnsCompany = $request->headingTnsCompany;
        $updateTnsCompany->subTextTnsCompany = $request->subTextTnsCompany;
        $updateTnsCompany->headingTnsCompanyService = $request->headingTnsCompanyService;
        $updateTnsCompany->subTextTnsCompanyService = $request->subTextTnsCompanyService;
        $updateTnsCompany->headingTnsCompanyTeam = $request->headingTnsCompanyTeam;
        $updateTnsCompany->subTextTnsCompanyTeam = $request->subTextTnsCompanyTeam;

        $updateTnsCompany->save();

        return redirect()->route('hst-tns.index')->with('success', 'Tns Company Heading & Sub Text Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        TnsCompany::findOrFail($id)->delete();

        return redirect()->route('hst-tns.index')->with('success', 'Tns Company Heading & Sub Text deleted successfully !');
    }
}
