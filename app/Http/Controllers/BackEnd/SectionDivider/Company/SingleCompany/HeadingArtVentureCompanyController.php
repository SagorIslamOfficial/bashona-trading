<?php

namespace App\Http\Controllers\BackEnd\SectionDivider\Company\SingleCompany;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\SectionDivider\Company\SingleCompany\ArtVentureCompany;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HeadingArtVentureCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $headingArtVentureCompany = ArtVentureCompany::all();
        return view('backEnd.heading-subText.hst-company.single-company.art-venture.index', compact('headingArtVentureCompany'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.heading-subText.hst-company.single-company.art-venture.create');
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
            'headingArtVentureCompany' => 'required',
            'subTextArtVentureCompany' => 'required',
            'headingArtVentureCompanyService' => 'required',
            'subTextArtVentureCompanyService' => 'required',
            'headingArtVentureCompanyTeam' => 'required',
            'subTextArtVentureCompanyTeam' => 'required'
        ]);

        $storeArtVentureCompany = new ArtVentureCompany();

        $storeArtVentureCompany->headingArtVentureCompany = $request->headingArtVentureCompany;
        $storeArtVentureCompany->subTextArtVentureCompany = $request->subTextArtVentureCompany;
        $storeArtVentureCompany->headingArtVentureCompanyService = $request->headingArtVentureCompanyService;
        $storeArtVentureCompany->subTextArtVentureCompanyService = $request->subTextArtVentureCompanyService;
        $storeArtVentureCompany->headingArtVentureCompanyTeam = $request->headingArtVentureCompanyTeam;
        $storeArtVentureCompany->subTextArtVentureCompanyTeam = $request->subTextArtVentureCompanyTeam;

        $storeArtVentureCompany->save();

        return redirect()->route('hst-art-venture.index')->with('success', 'Art Venture Company Heading & Sub Text Saved Successfully.');
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
        $editArtVentureCompany = ArtVentureCompany::findOrFail($id);
        return view('backEnd.heading-subText.hst-company.single-company.art-venture.edit', compact('editArtVentureCompany'));
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
            'headingArtVentureCompany' => 'required',
            'subTextArtVentureCompany' => 'required',
            'headingArtVentureCompanyService' => 'required',
            'subTextArtVentureCompanyService' => 'required',
            'headingArtVentureCompanyTeam' => 'required',
            'subTextArtVentureCompanyTeam' => 'required'
        ]);

        $updateArtVentureCompany = ArtVentureCompany::findOrFail($id);

        $updateArtVentureCompany->headingArtVentureCompany = $request->headingArtVentureCompany;
        $updateArtVentureCompany->subTextArtVentureCompany = $request->subTextArtVentureCompany;
        $updateArtVentureCompany->headingArtVentureCompanyService = $request->headingArtVentureCompanyService;
        $updateArtVentureCompany->subTextArtVentureCompanyService = $request->subTextArtVentureCompanyService;
        $updateArtVentureCompany->headingArtVentureCompanyTeam = $request->headingArtVentureCompanyTeam;
        $updateArtVentureCompany->subTextArtVentureCompanyTeam = $request->subTextArtVentureCompanyTeam;

        $updateArtVentureCompany->save();

        return redirect()->route('hst-art-venture.index')->with('success', 'Art Venture Company Heading & Sub Text Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        ArtVentureCompany::findOrFail($id)->delete();

        return redirect()->route('hst-art-venture.index')->with('success', 'Art Venture Company Heading & Sub Text deleted successfully !');
    }
}
