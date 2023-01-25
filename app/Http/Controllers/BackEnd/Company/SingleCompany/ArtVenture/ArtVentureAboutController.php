<?php

namespace App\Http\Controllers\BackEnd\Company\SingleCompany\ArtVenture;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Company\SingleCompany\ArtVenture\ArtVentureAbout;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ArtVentureAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexArtVentureAbout = ArtVentureAbout::all();
        return view('backEnd.company.companies.art-venture.about.index', compact('indexArtVentureAbout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.company.companies.art-venture.about.create');
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
            'title' => 'required',
            'text' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:256'
        ]);

        $storeArtVentureAbout = new ArtVentureAbout();

        $storeArtVentureAbout->title = $request->title;
        $storeArtVentureAbout->slug = Str::slug($request->title);
        $storeArtVentureAbout->text = $request->text;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->title);

            //Make unique name for image
            $imageName = $slug . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/art-venture/about')) {
                Storage::disk('public')->makeDirectory('company/all-company/art-venture/about');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(450, 480)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/art-venture/about/' . $imageName, $imageResize);

            //And save data into the database
            $storeArtVentureAbout->image = $imageName;
        }

        $storeArtVentureAbout->save();

        return redirect()->route('art-venture-about.index')->with('success', 'Art Venture About Saved Successfully :)');
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
        $editArtVentureAbout = ArtVentureAbout::findOrFail($id);
        return view('backEnd.company.companies.art-venture.about.edit', compact('editArtVentureAbout'));
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
            'title' => 'required',
            'text' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:256'
        ]);

        $updateArtVentureAbout = ArtVentureAbout::findOrFail($id);

        $updateArtVentureAbout->title = $request->title;
        $updateArtVentureAbout->slug = Str::slug($request->title);
        $updateArtVentureAbout->text = $request->text;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->title);

            //Make unique name for image
            $imageName = $slug . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/art-venture/about')) {
                Storage::disk('public')->makeDirectory('company/all-company/art-venture/about');
            }

            //Delete old image from database
            if (Storage::disk('public')->exists('company/all-company/art-venture/about/' . $updateArtVentureAbout->image)) {
                Storage::disk('public')->delete('company/all-company/art-venture/about/' . $updateArtVentureAbout->image);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(450, 480)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/art-venture/about/' . $imageName, $imageResize);

            //And save data into the database
            $updateArtVentureAbout->image = $imageName;
        }

        $updateArtVentureAbout->save();

        return redirect()->route('art-venture-about.index')->with('success', 'Art Venture About Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $destroyArtVentureAbout = ArtVentureAbout::findOrfail($id);

        if (Storage::disk('public')->exists('company/all-company/art-venture/about/' . $destroyArtVentureAbout->image)) {
            Storage::disk('public')->delete('company/all-company/art-venture/about/' . $destroyArtVentureAbout->image);
        }

        $destroyArtVentureAbout->delete();

        return redirect()->route('art-venture-about.index')->with('success', 'Art Venture About Deleted successfully !');
    }
}
