<?php

namespace App\Http\Controllers\BackEnd\AboutUs;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\AboutUs\AboutUsTeam;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AboutUsTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexAboutUsTeam = AboutUsTeam::all();
        return view('backEnd.about-us.team.index', compact('indexAboutUsTeam'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.about-us.team.create');
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
            'name1' => 'required',
            'position1' => 'required',
            'description1' => 'required',
            'phone1' => 'required',
            'email1' => 'required',
            'image1' => 'required|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:150',
            'name2' => 'required',
            'position2' => 'required',
            'description2' => 'required',
            'phone2' => 'required',
            'email2' => 'required',
            'image2' => 'required|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:150',
            'name3' => 'required',
            'position3' => 'required',
            'description3' => 'required',
            'phone3' => 'required',
            'email3' => 'required',
            'image3' => 'required|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:150'
        ]);

        $storeAboutUsTeam = new AboutUsTeam();

        $storeAboutUsTeam->name = "Company Board Members";

        $storeAboutUsTeam->name1 = $request->name1;
        $storeAboutUsTeam->position1 = $request->position1;
        $storeAboutUsTeam->description1 = $request->description1;
        $storeAboutUsTeam->phone1 = $request->phone1;
        $storeAboutUsTeam->email1 = $request->email1;

        //Find form image and storing into a variable
        $image = $request->file('image1');
        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name1);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('about-us/team')) {
                Storage::disk('public')->makeDirectory('about-us/team');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(450, 450)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('about-us/team/' . $imageName, $imageResize);

            //And save data into the database
            $storeAboutUsTeam->image1 = $imageName;
        }

        $storeAboutUsTeam->name2 = $request->name2;
        $storeAboutUsTeam->position2 = $request->position2;
        $storeAboutUsTeam->description2 = $request->description2;
        $storeAboutUsTeam->phone2 = $request->phone2;
        $storeAboutUsTeam->email2 = $request->email2;

        //Find form image and storing into a variable
        $image = $request->file('image2');
        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name2);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('about-us/team')) {
                Storage::disk('public')->makeDirectory('about-us/team');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(450, 450)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('about-us/team/' . $imageName, $imageResize);

            //And save data into the database
            $storeAboutUsTeam->image2 = $imageName;
        }

        $storeAboutUsTeam->name3 = $request->name3;
        $storeAboutUsTeam->position3 = $request->position3;
        $storeAboutUsTeam->description3 = $request->description3;
        $storeAboutUsTeam->phone3 = $request->phone3;
        $storeAboutUsTeam->email3 = $request->email3;

        //Find form image and storing into a variable
        $image = $request->file('image3');
        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name3);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('about-us/team')) {
                Storage::disk('public')->makeDirectory('about-us/team');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(450, 450)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('about-us/team/' . $imageName, $imageResize);

            //And save data into the database
            $storeAboutUsTeam->image3 = $imageName;
        }

        $storeAboutUsTeam->save();
        return redirect()->route('about-team.index')->with('success', 'About Us Team Saved Successfully :)');
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
        $editAboutUsTeam = AboutUsTeam::findOrFail($id);
        return view('backEnd.about-us.team.edit', compact('editAboutUsTeam'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name1' => 'required',
            'position1' => 'required',
            'description1' => 'required',
            'phone1' => 'required',
            'email1' => 'required',
            'image1' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:150',
            'name2' => 'required',
            'position2' => 'required',
            'description2' => 'required',
            'phone2' => 'required',
            'email2' => 'required',
            'image2' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:150',
            'name3' => 'required',
            'position3' => 'required',
            'description3' => 'required',
            'phone3' => 'required',
            'email3' => 'required',
            'image3' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:150'
        ]);

        $updateAboutUsTeam = AboutUsTeam::findOrFail($id);

        $updateAboutUsTeam->name1 = $request->name1;
        $updateAboutUsTeam->position1 = $request->position1;
        $updateAboutUsTeam->description1 = $request->description1;
        $updateAboutUsTeam->phone1 = $request->phone1;
        $updateAboutUsTeam->email1 = $request->email1;

        //Find form image and storing into a variable
        $image = $request->file('image1');
        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name1);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('about-us/team')) {
                Storage::disk('public')->makeDirectory('about-us/team');
            }
            //Delete old image
            if (Storage::disk('public')->exists('about-us/team/'. $updateAboutUsTeam->image1)){
                Storage::disk('public')->delete('about-us/team/'. $updateAboutUsTeam->image1);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(450, 450)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('about-us/team/' . $imageName, $imageResize);

            //And save data into the database
            $updateAboutUsTeam->name1 = $imageName;
        }

        $updateAboutUsTeam->name2 = $request->name2;
        $updateAboutUsTeam->position2 = $request->position2;
        $updateAboutUsTeam->description2 = $request->description2;
        $updateAboutUsTeam->phone2 = $request->phone2;
        $updateAboutUsTeam->email2 = $request->email2;

        //Find form image and storing into a variable
        $image = $request->file('image2');
        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name2);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('about-us/team')) {
                Storage::disk('public')->makeDirectory('about-us/team');
            }
            //Delete old image
            if (Storage::disk('public')->exists('about-us/team/'. $updateAboutUsTeam->image2)){
                Storage::disk('public')->delete('about-us/team/'. $updateAboutUsTeam->image2);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(450, 450)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('about-us/team/' . $imageName, $imageResize);

            //And save data into the database
            $updateAboutUsTeam->image2 = $imageName;
        }

        $updateAboutUsTeam->name3 = $request->name3;
        $updateAboutUsTeam->position3 = $request->position3;
        $updateAboutUsTeam->description3 = $request->description3;
        $updateAboutUsTeam->phone3 = $request->phone3;
        $updateAboutUsTeam->email3 = $request->email3;

        //Find form image and storing into a variable
        $image = $request->file('image3');
        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name3);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('about-us/team')) {
                Storage::disk('public')->makeDirectory('about-us/team');
            }
            //Delete old image
            if (Storage::disk('public')->exists('about-us/team/'. $updateAboutUsTeam->image3)){
                Storage::disk('public')->delete('about-us/team/'. $updateAboutUsTeam->image3);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(450, 450)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('about-us/team/' . $imageName, $imageResize);

            //And save data into the database
            $updateAboutUsTeam->image3 = $imageName;
        }

        $updateAboutUsTeam->save();
        return redirect()->route('about-team.index')->with('success', 'About Us Team Saved Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $destroyAboutUsTeam = AboutUsTeam::findOrfail($id);

        if (Storage::disk('public')->exists('about-us/team/' . $destroyAboutUsTeam->image1)) {
            Storage::disk('public')->delete('about-us/team/' . $destroyAboutUsTeam->image1);
        }

        if (Storage::disk('public')->exists('about-us/team/' . $destroyAboutUsTeam->image2)) {
            Storage::disk('public')->delete('about-us/team/' . $destroyAboutUsTeam->image2);
        }

        if (Storage::disk('public')->exists('about-us/team/' . $destroyAboutUsTeam->image3)) {
            Storage::disk('public')->delete('about-us/team/' . $destroyAboutUsTeam->image3);
        }

        $destroyAboutUsTeam->delete();

        return redirect()->route('about-team.index')->with('success', 'About Us Team deleted successfully !');
    }
}
