<?php

namespace App\Http\Controllers\BackEnd\AboutUs;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\AboutUs\AboutUs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexAboutUs = AboutUs::all();
        return view('backEnd.about-us.about.index', compact('indexAboutUs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.about-us.about.create');
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
            'heading' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:150',
            'link' => 'required'
        ]);

        $storeAboutUs = new AboutUs();

        $storeAboutUs->heading = $request->heading;
        $storeAboutUs->description = $request->description;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->heading);

            //Make unique name for image
            $imageName = $slug . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('about-us/about')) {
                Storage::disk('public')->makeDirectory('about-us/about');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(450, 480)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('about-us/about/' . $imageName, $imageResize);

            //And save data into the database
            $storeAboutUs->image = $imageName;
        }

        $storeAboutUs->link = $request->link;
        $storeAboutUs->slug = Str::slug($request->heading);

        $storeAboutUs->save();

        return redirect()->route('about-us.index')->with('success', 'About Us Saved Successfully :)');
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
        return view('backEnd.about-us.about.edit', compact('editAboutUs'));
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
            'heading' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:150',
            'link' => 'required'
        ]);

        $updateAboutUs = AboutUs::findOrFail($id);

        $updateAboutUs->heading = $request->heading;
        $updateAboutUs->description = $request->description;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->heading);

            //Make unique name for image
            $imageName = $slug . '-' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('about-us/about')) {
                Storage::disk('public')->makeDirectory('about-us/about');
            }

            //Delete old image from database
            if (Storage::disk('public')->exists('about-us/about/' . $updateAboutUs->image)) {
                Storage::disk('public')->delete('about-us/about/' . $updateAboutUs->image);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(450, 480)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('about-us/about/' . $imageName, $imageResize);

            //And save data into the database
            $updateAboutUs->image = $imageName;
        }

        $updateAboutUs->link = $request->link;
        $updateAboutUs->slug = Str::slug($request->heading);

        $updateAboutUs->save();

        return redirect()->route('about-us.index')->with('success', 'About Us Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $destroyAboutUs = AboutUs::findOrfail($id);

        if (Storage::disk('public')->exists('about-us/about/' . $destroyAboutUs->image)) {
            Storage::disk('public')->delete('about-us/about/' . $destroyAboutUs->image);
        }

        $destroyAboutUs->delete();

        return redirect()->route('about-us.index')->with('success', 'About Us deleted successfully !');
    }
}
