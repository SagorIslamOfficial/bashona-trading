<?php

namespace App\Http\Controllers\BackEnd\Company\SingleCompany\Tns;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Company\SingleCompany\Tns\TnsTeam;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class TnsTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexTnsTeams = TnsTeam::all();
        return view('backEnd.company.companies.tns.team.index', compact('indexTnsTeams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.company.companies.tns.team.create');
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
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'email' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:150'
        ]);

        $storeTnsTeam = new TnsTeam();

        $storeTnsTeam->name = $request->name;
        $storeTnsTeam->slug = Str::slug($request->name);
        $storeTnsTeam->position = $request->position;
        $storeTnsTeam->description = $request->description;
        $storeTnsTeam->email = $request->email;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/tns/team')) {
                Storage::disk('public')->makeDirectory('company/all-company/tns/team');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(356, 356)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/tns/team/' . $imageName, $imageResize);

            //And save data into the database
            $storeTnsTeam->image = $imageName;
        }

        $storeTnsTeam->save();

        return redirect()->route('tns-team.index')->with('success', 'Tns Team Saved Successfully');
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
        $editTnsTeam = TnsTeam::findOrFail($id);
        return view('backEnd.company.companies.tns.team.edit', compact('editTnsTeam'));
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
            'name' => 'required',
            'position' => 'required',
            'description' => 'required',
            'email' => 'required',
            'image.*' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:150'
        ]);

        $updateTnsTeam = TnsTeam::findOrFail($id);

        $updateTnsTeam->name = $request->name;
        $updateTnsTeam->slug = Str::slug($request->name);
        $updateTnsTeam->position = $request->position;
        $updateTnsTeam->description = $request->description;
        $updateTnsTeam->email = $request->email;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/tns/team')) {
                Storage::disk('public')->makeDirectory('company/all-company/tns/team');
            }

            //Delete old image from database
            if (Storage::disk('public')->exists('company/all-company/tns/team/' . $updateTnsTeam->image)) {
                Storage::disk('public')->delete('company/all-company/tns/team/' . $updateTnsTeam->image);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(356, 356)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/tns/team/' . $imageName, $imageResize);

            //And save data into the database
            $updateTnsTeam->image = $imageName;
        }

        $updateTnsTeam->save();

        return redirect()->route('tns-team.index')->with('success', 'Tns Team Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $destroyTnsTeam = TnsTeam::findOrfail($id);

        if (Storage::disk('public')->exists('company/all-company/tns/team/' . $destroyTnsTeam->image)) {
            Storage::disk('public')->delete('company/all-company/tns/team/' . $destroyTnsTeam->image);
        }

        $destroyTnsTeam->delete();

        return redirect()->route('tns-team.index')->with('success', 'Tns Team Deleted successfully');
    }
}
