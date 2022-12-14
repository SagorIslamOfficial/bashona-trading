<?php

namespace App\Http\Controllers\BackEnd\SectionDivider\Company;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\SectionDivider\Company\Company;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HeadingCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $headingCompany = Company::all();
        return view('backEnd.heading-subText.hst-company.hst-companies.index', compact('headingCompany'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.heading-subText.hst-company.hst-companies.create');
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
            'headingCompanies' => 'required',
            'subTextCompanies' => 'required',
            'headingCompanyTeam' => 'required',
            'subTextCompanyTeam' => 'required'
        ]);

        $storeCompany = new Company();

        $storeCompany->headingCompanies = $request->headingCompanies;
        $storeCompany->subTextCompanies = $request->subTextCompanies;
        $storeCompany->headingCompanyTeam = $request->headingCompanyTeam;
        $storeCompany->subTextCompanyTeam = $request->subTextCompanyTeam;

        $storeCompany->save();

        return redirect()->route('hst-companies.index')->with('success', 'Company Heading & Sub Text Saved Successfully.');
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
        $editCompany = Company::findOrFail($id);
        return view('backEnd.heading-subText.hst-company.hst-companies.edit', compact('editCompany'));
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
            'headingCompanies' => 'required',
            'subTextCompanies' => 'required',
            'headingCompanyTeam' => 'required',
            'subTextCompanyTeam' => 'required'
        ]);

        $updateCompany = Company::findOrFail($id);

        $updateCompany->headingCompanies = $request->headingCompanies;
        $updateCompany->subTextCompanies = $request->subTextCompanies;
        $updateCompany->headingCompanyTeam = $request->headingCompanyTeam;
        $updateCompany->subTextCompanyTeam = $request->subTextCompanyTeam;

        $updateCompany->save();

        return redirect()->route('hst-companies.index')->with('success', 'Company Heading & Sub Text Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Company::findOrFail($id)->delete();

        return redirect()->route('hst-companies.index')->with('success', 'Company Heading & Sub Text deleted successfully !');
    }
}
