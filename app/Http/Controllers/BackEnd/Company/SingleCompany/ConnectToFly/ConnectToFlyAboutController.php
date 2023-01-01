<?php

namespace App\Http\Controllers\BackEnd\Company\SingleCompany\ConnectToFly;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Company\SingleCompany\ConnectToFly\ConnectToFlyAbout;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ConnectToFlyAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexConnectToFlyAbout = ConnectToFlyAbout::all();
        return view('backEnd.company.companies.connect-to-fly.about.index', compact('indexConnectToFlyAbout'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.company.companies.connect-to-fly.about.create');
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

        $storeConnectToFlyAbout = new ConnectToFlyAbout();

        $storeConnectToFlyAbout->title = $request->title;
        $storeConnectToFlyAbout->slug = Str::slug($request->title);
        $storeConnectToFlyAbout->text = $request->text;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->title);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/connect-to-fly/about')) {
                Storage::disk('public')->makeDirectory('company/all-company/connect-to-fly/about');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(450, 480)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/connect-to-fly/about/' . $imageName, $imageResize);

            //And save data into the database
            $storeConnectToFlyAbout->image = $imageName;
        }

        $storeConnectToFlyAbout->save();

        return redirect()->route('ctf-about.index')->with('success', 'Connect To Fly About Saved Successfully :)');
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
        $editConnectToFlyAbout = ConnectToFlyAbout::findOrFail($id);
        return view('backEnd.company.companies.connect-to-fly.about.edit', compact('editConnectToFlyAbout'));
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

        $updateConnectToFlyAbout = ConnectToFlyAbout::findOrFail($id);

        $updateConnectToFlyAbout->title = $request->title;
        $updateConnectToFlyAbout->slug = Str::slug($request->title);
        $updateConnectToFlyAbout->text = $request->text;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->title);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/connect-to-fly/about')) {
                Storage::disk('public')->makeDirectory('company/all-company/connect-to-fly/about');
            }

            //Delete old image from database
            if (Storage::disk('public')->exists('company/all-company/connect-to-fly/about/' . $updateConnectToFlyAbout->image)) {
                Storage::disk('public')->delete('company/all-company/connect-to-fly/about/' . $updateConnectToFlyAbout->image);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(450, 480)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/connect-to-fly/about/' . $imageName, $imageResize);

            //And save data into the database
            $updateConnectToFlyAbout->image = $imageName;
        }

        $updateConnectToFlyAbout->save();

        return redirect()->route('ctf-about.index')->with('success', 'Connect To Fly About Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $destroyConnectToFlyAbout = ConnectToFlyAbout::findOrfail($id);

        if (Storage::disk('public')->exists('company/all-company/connect-to-fly/about/' . $destroyConnectToFlyAbout->image)) {
            Storage::disk('public')->delete('company/all-company/connect-to-fly/about/' . $destroyConnectToFlyAbout->image);
        }

        $destroyConnectToFlyAbout->delete();

        return redirect()->route('ctf-about.index')->with('success', 'Connect To Fly About Deleted successfully !');
    }
}

