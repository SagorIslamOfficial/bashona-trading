<?php

namespace App\Http\Controllers\BackEnd\Gallery;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Gallery\GalleryCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class GalleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexGalleryCategories = GalleryCategory::all();
        return view('backEnd.gallery.category.index', compact('indexGalleryCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.gallery.category.create');
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

        $storeGalleryCategory = new GalleryCategory();

        $storeGalleryCategory->name = $request->name;
        $storeGalleryCategory->slug = Str::slug($request->name);

        $storeGalleryCategory->save();

        return redirect()->route('gallery-category.index')->with('success', 'Gallery Category Saved Successfully :)');
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
        $editGalleryCategory = GalleryCategory::findOrFail($id);
        return view('backEnd.gallery.category.edit', compact('editGalleryCategory'));
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

        $updateGalleryCategory = GalleryCategory::findOrFail($id);

        $updateGalleryCategory->name = $request->name;
        $updateGalleryCategory->slug = Str::slug($request->name);

        $updateGalleryCategory->save();

        return redirect()->route('gallery-category.index')->with('success', 'Gallery Category Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        GalleryCategory::findOrfail($id)->delete();

        return redirect()->route('gallery-category.index')->with('success', 'Gallery Category deleted successfully !');
    }
}
