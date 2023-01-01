<?php

namespace App\Http\Controllers\BackEnd\Company\SingleCompany\BdDigital;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Company\SingleCompany\BdDigital\BdDigitalTeam;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BdDigitalTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexBdDigitalTeams = BdDigitalTeam::all();
        return view('backEnd.company.companies.bd-digital.team.index', compact('indexBdDigitalTeams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.company.companies.bd-digital.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'email' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:150'
        ]);

        $storeBdDigitalTeam = new BdDigitalTeam();

        $storeBdDigitalTeam->name = $request->name;
        $storeBdDigitalTeam->slug = Str::slug($request->name);
        $storeBdDigitalTeam->position = $request->position;
        $storeBdDigitalTeam->description = $request->description;
        $storeBdDigitalTeam->email = $request->email;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/bd-digital/team')) {
                Storage::disk('public')->makeDirectory('company/all-company/bd-digital/team');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(356, 356)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/bd-digital/team/' . $imageName, $imageResize);

            //And save data into the database
            $storeBdDigitalTeam->image = $imageName;
        }

        $storeBdDigitalTeam->save();

        return redirect()->route('bd-digital-team.index')->with('success', 'BD Digital Team Saved Successfully');
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
        $editBdDigitalTeam = BdDigitalTeam::findOrFail($id);
        return view('backEnd.company.companies.bd-digital.team.edit', compact('editBdDigitalTeam'));
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
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'email' => 'required',
            'image.*' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:150'
        ]);

        $updateBdDigitalTeam = BdDigitalTeam::findOrFail($id);

        $updateBdDigitalTeam->name = $request->name;
        $updateBdDigitalTeam->slug = Str::slug($request->name);
        $updateBdDigitalTeam->position = $request->position;
        $updateBdDigitalTeam->description = $request->description;
        $updateBdDigitalTeam->email = $request->email;

        //Find form image and storing into a variable
        $image = $request->file('image');
        //Creating image upload time
        $currentDate = Carbon::now()->toDateString();

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/bd-digital/team')) {
                Storage::disk('public')->makeDirectory('company/all-company/bd-digital/team');
            }

            //Delete old image from database
            if (Storage::disk('public')->exists('company/all-company/bd-digital/team/' . $updateBdDigitalTeam->image)) {
                Storage::disk('public')->delete('company/all-company/bd-digital/team/' . $updateBdDigitalTeam->image);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(356, 356)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/bd-digital/team/' . $imageName, $imageResize);

            //And save data into the database
            $updateBdDigitalTeam->image = $imageName;
        }

        $updateBdDigitalTeam->save();

        return redirect()->route('bd-digital-team.index')->with('success', 'BD Digital Team Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $destroyBdDigitalTeam = BdDigitalTeam::findOrfail($id);

        if (Storage::disk('public')->exists('company/all-company/bd-digital/team/' . $destroyBdDigitalTeam->image)) {
            Storage::disk('public')->delete('company/all-company/bd-digital/team/' . $destroyBdDigitalTeam->image);
        }

        $destroyBdDigitalTeam->delete();

        return redirect()->route('bd-digital-team.index')->with('success', 'BD Digital Team Deleted successfully');
    }
}
