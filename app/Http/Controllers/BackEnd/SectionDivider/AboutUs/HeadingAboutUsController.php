<?php

namespace App\Http\Controllers\BackEnd\SectionDivider\AboutUs;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\SectionDivider\AboutUs\AboutUs;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class HeadingAboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $headingAboutUs = AboutUs::all();
        return view('backEnd.heading-subText.hst-about-us.index', compact('headingAboutUs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.heading-subText.hst-about-us.create');
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
            'headingAboutUs' => 'required',
            'subTextAboutUs' => 'required',
            'headingAboutUsTeam' => 'required',
            'subTextAboutUsTeam' => 'required',
            'headingAboutUsClient' => 'required',
            'subTextAboutUsClient' => 'required'
        ]);

        $storeAboutUs = new AboutUs();

        $storeAboutUs->headingAboutUs = $request->headingAboutUs;
        $storeAboutUs->subTextAboutUs = $request->subTextAboutUs;
        $storeAboutUs->headingAboutUsTeam = $request->headingAboutUsTeam;
        $storeAboutUs->subTextAboutUsTeam = $request->subTextAboutUsTeam;
        $storeAboutUs->headingAboutUsClient = $request->headingAboutUsClient;
        $storeAboutUs->subTextAboutUsClient = $request->subTextAboutUsClient;

        $storeAboutUs->save();

        return redirect()->route('hst-about-us.index')->with('success', 'About Us Heading & Sub Text Saved Successfully.');
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
        $editAboutUs = AboutUs::findOrFail($id);
        return view('backEnd.heading-subText.hst-about-us.edit', compact('editAboutUs'));
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
            'headingAboutUs' => 'required',
            'subTextAboutUs' => 'required',
            'headingAboutUsTeam' => 'required',
            'subTextAboutUsTeam' => 'required',
            'headingAboutUsClient' => 'required',
            'subTextAboutUsClient' => 'required'
        ]);

        $updateAboutUs = AboutUs::findOrFail($id);

        $updateAboutUs->headingAboutUs = $request->headingAboutUs;
        $updateAboutUs->subTextAboutUs = $request->subTextAboutUs;
        $updateAboutUs->headingAboutUsTeam = $request->headingAboutUsTeam;
        $updateAboutUs->subTextAboutUsTeam = $request->subTextAboutUsTeam;
        $updateAboutUs->headingAboutUsClient = $request->headingAboutUsClient;
        $updateAboutUs->subTextAboutUsClient = $request->subTextAboutUsClient;

        $updateAboutUs->save();

        return redirect()->route('hst-about-us.index')->with('success', 'About Us Heading & Sub Text Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        AboutUs::findOrFail($id)->delete();

        return redirect()->route('hst-about-us.index')->with('success', 'About Us Heading & Sub Text deleted successfully !');
    }
}
