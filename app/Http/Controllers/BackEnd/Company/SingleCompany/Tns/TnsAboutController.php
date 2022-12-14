<?php

namespace App\Http\Controllers\BackEnd\Company\SingleCompany\Tns;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Company\SingleCompany\Tns\TnsAbout;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class TnsAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexTnsAbout = TnsAbout::all();
        return view('backEnd.company.companies.tns.about.index', compact('indexTnsAbout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.company.companies.tns.about.create');
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

        $storeTnsAbout = new TnsAbout();

        $storeTnsAbout->title = $request->title;
        $storeTnsAbout->slug = Str::slug($request->title);
        $storeTnsAbout->text = $request->text;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->title);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/tns/about')) {
                Storage::disk('public')->makeDirectory('company/all-company/tns/about');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(450, 480)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/tns/about/' . $imageName, $imageResize);

            //And save data into the database
            $storeTnsAbout->image = $imageName;
        }

        $storeTnsAbout->save();

        return redirect()->route('tns-about.index')->with('success', 'Tns About Saved Successfully :)');
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
        $editTnsAbout = TnsAbout::findOrFail($id);
        return view('backEnd.company.companies.tns.about.edit', compact('editTnsAbout'));
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

        $updateTnsAbout = TnsAbout::findOrFail($id);

        $updateTnsAbout->title = $request->title;
        $updateTnsAbout->slug = Str::slug($request->title);
        $updateTnsAbout->text = $request->text;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->title);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/tns/about')) {
                Storage::disk('public')->makeDirectory('company/all-company/tns/about');
            }

            //Delete old image from database
            if (Storage::disk('public')->exists('company/all-company/tns/about/' . $updateTnsAbout->image)) {
                Storage::disk('public')->delete('company/all-company/tns/about/' . $updateTnsAbout->image);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(450, 480)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/tns/about/' . $imageName, $imageResize);

            //And save data into the database
            $updateTnsAbout->image = $imageName;
        }

        $updateTnsAbout->save();

        return redirect()->route('tns-about.index')->with('success', 'Tns About Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $destroyTnsAbout = TnsAbout::findOrfail($id);

        if (Storage::disk('public')->exists('company/all-company/tns/about/' . $destroyTnsAbout->image)) {
            Storage::disk('public')->delete('company/all-company/tns/about/' . $destroyTnsAbout->image);
        }

        $destroyTnsAbout->delete();

        return redirect()->route('tns-about.index')->with('success', 'Tns About Deleted successfully !');
    }
}
