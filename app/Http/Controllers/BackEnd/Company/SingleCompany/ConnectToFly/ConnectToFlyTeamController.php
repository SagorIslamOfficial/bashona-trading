<?php

namespace App\Http\Controllers\BackEnd\Company\SingleCompany\ConnectToFly;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Company\SingleCompany\ConnectToFly\ConnectToFlyTeam;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ConnectToFlyTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexConnectToFlyTeams = ConnectToFlyTeam::all();
        return view('backEnd.company.companies.connect-to-fly.team.index', compact('indexConnectToFlyTeams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.company.companies.connect-to-fly.team.create');
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

        $storeConnectToFlyTeam = new ConnectToFlyTeam();

        $storeConnectToFlyTeam->name = $request->name;
        $storeConnectToFlyTeam->slug = Str::slug($request->name);
        $storeConnectToFlyTeam->position = $request->position;
        $storeConnectToFlyTeam->description = $request->description;
        $storeConnectToFlyTeam->email = $request->email;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/connect-to-fly/team')) {
                Storage::disk('public')->makeDirectory('company/all-company/connect-to-fly/team');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(356, 356)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/connect-to-fly/team/' . $imageName, $imageResize);

            //And save data into the database
            $storeConnectToFlyTeam->image = $imageName;
        }

        $storeConnectToFlyTeam->save();

        return redirect()->route('ctf-team.index')->with('success', 'Connect To Fly Team Saved Successfully');
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
        $editConnectToFlyTeam = ConnectToFlyTeam::findOrFail($id);
        return view('backEnd.company.companies.connect-to-fly.team.edit', compact('editConnectToFlyTeam'));
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

        $updateConnectToFlyTeam = ConnectToFlyTeam::findOrFail($id);

        $updateConnectToFlyTeam->name = $request->name;
        $updateConnectToFlyTeam->slug = Str::slug($request->name);
        $updateConnectToFlyTeam->position = $request->position;
        $updateConnectToFlyTeam->description = $request->description;
        $updateConnectToFlyTeam->email = $request->email;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/connect-to-fly/team')) {
                Storage::disk('public')->makeDirectory('company/all-company/connect-to-fly/team');
            }

            //Delete old image from database
            if (Storage::disk('public')->exists('company/all-company/connect-to-fly/team/' . $updateConnectToFlyTeam->image)) {
                Storage::disk('public')->delete('company/all-company/connect-to-fly/team/' . $updateConnectToFlyTeam->image);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(356, 356)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/connect-to-fly/team/' . $imageName, $imageResize);

            //And save data into the database
            $updateConnectToFlyTeam->image = $imageName;
        }

        $updateConnectToFlyTeam->save();

        return redirect()->route('ctf-team.index')->with('success', 'Connect To Fly Team Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $destroyConnectToFlyTeam = ConnectToFlyTeam::findOrfail($id);

        if (Storage::disk('public')->exists('company/all-company/connect-to-fly/team/' . $destroyConnectToFlyTeam->image)) {
            Storage::disk('public')->delete('company/all-company/connect-to-fly/team/' . $destroyConnectToFlyTeam->image);
        }

        $destroyConnectToFlyTeam->delete();

        return redirect()->route('ctf-team.index')->with('success', 'Connect To Fly Team Deleted successfully');
    }
}
