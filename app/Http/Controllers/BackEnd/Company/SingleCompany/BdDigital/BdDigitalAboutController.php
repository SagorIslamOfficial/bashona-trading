<?php

namespace App\Http\Controllers\BackEnd\Company\SingleCompany\BdDigital;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Company\SingleCompany\BdDigital\BdDigitalAbout;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BdDigitalAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexBdDigitalAbout = BdDigitalAbout::all();
        return view('backEnd.company.companies.bd-digital.about.index', compact('indexBdDigitalAbout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.company.companies.bd-digital.about.create');
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

        $storeBdDigitalAbout = new BdDigitalAbout();

        $storeBdDigitalAbout->title = $request->title;
        $storeBdDigitalAbout->slug = Str::slug($request->title);
        $storeBdDigitalAbout->text = $request->text;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->title);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/bd-digital/about')) {
                Storage::disk('public')->makeDirectory('company/all-company/bd-digital/about');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(450, 480)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/bd-digital/about/' . $imageName, $imageResize);

            //And save data into the database
            $storeBdDigitalAbout->image = $imageName;
        }

        $storeBdDigitalAbout->save();

        return redirect()->route('bd-digital-about.index')->with('success', 'BD Digital About Saved Successfully :)');
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
        $editBdDigitalAbout = BdDigitalAbout::findOrFail($id);
        return view('backEnd.company.companies.bd-digital.about.edit', compact('editBdDigitalAbout'));
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

        $updateBdDigitalAbout = BdDigitalAbout::findOrFail($id);

        $updateBdDigitalAbout->title = $request->title;
        $updateBdDigitalAbout->slug = Str::slug($request->title);
        $updateBdDigitalAbout->text = $request->text;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->title);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/bd-digital/about')) {
                Storage::disk('public')->makeDirectory('company/all-company/bd-digital/about');
            }

            //Delete old image from database
            if (Storage::disk('public')->exists('company/all-company/bd-digital/about/' . $updateBdDigitalAbout->image)) {
                Storage::disk('public')->delete('company/all-company/bd-digital/about/' . $updateBdDigitalAbout->image);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(450, 480)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/bd-digital/about/' . $imageName, $imageResize);

            //And save data into the database
            $updateBdDigitalAbout->image = $imageName;
        }

        $updateBdDigitalAbout->save();

        return redirect()->route('bd-digital-about.index')->with('success', 'BD Digital About Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $destroyBdDigitalAbout = BdDigitalAbout::findOrfail($id);

        if (Storage::disk('public')->exists('company/all-company/bd-digital/about/' . $destroyBdDigitalAbout->image)) {
            Storage::disk('public')->delete('company/all-company/bd-digital/about/' . $destroyBdDigitalAbout->image);
        }

        $destroyBdDigitalAbout->delete();

        return redirect()->route('bd-digital-about.index')->with('success', 'BD Digital About Deleted successfully !');
    }
}
