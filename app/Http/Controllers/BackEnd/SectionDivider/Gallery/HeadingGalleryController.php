<?php

namespace App\Http\Controllers\BackEnd\SectionDivider\Gallery;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\SectionDivider\Gallery\Gallery;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HeadingGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $headingGallery = Gallery::all();
        return view('backEnd.heading-subText.hst-gallery.index', compact('headingGallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.heading-subText.hst-gallery.create');
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
            'headingGallery' => 'required',
            'subTextGallery' => 'required'
        ]);

        $storeGallery = new Gallery();

        $storeGallery->headingGallery = $request->headingGallery;
        $storeGallery->subTextGallery = $request->subTextGallery;

        $storeGallery->save();

        return redirect()->route('hst-gallery.index')->with('success', 'Gallery Heading & Sub Text Saved Successfully.');
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
        $editGallery = Gallery::findOrFail($id);
        return view('backEnd.heading-subText.hst-gallery.edit', compact('editGallery'));
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
            'headingGallery' => 'required',
            'subTextGallery' => 'required'
        ]);

        $updateGallery = Gallery::findOrFail($id);

        $updateGallery->headingGallery = $request->headingGallery;
        $updateGallery->subTextGallery = $request->subTextGallery;

        $updateGallery->save();

        return redirect()->route('hst-gallery.index')->with('success', 'Gallery Heading & Sub Text Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Gallery::findOrFail($id)->delete();

        return redirect()->route('hst-gallery.index')->with('success', 'Gallery Heading & Sub Text deleted successfully !');
    }
}
