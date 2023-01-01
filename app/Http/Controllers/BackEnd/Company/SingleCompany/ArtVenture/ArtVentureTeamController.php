<?php

namespace App\Http\Controllers\BackEnd\Company\SingleCompany\ArtVenture;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Company\SingleCompany\ArtVenture\ArtVentureTeam;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ArtVentureTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexArtVentureTeams = ArtVentureTeam::all();
        return view('backEnd.company.companies.art-venture.team.index', compact('indexArtVentureTeams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.company.companies.art-venture.team.create');
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

        $storeArtVentureTeam = new ArtVentureTeam();

        $storeArtVentureTeam->name = $request->name;
        $storeArtVentureTeam->slug = Str::slug($request->name);
        $storeArtVentureTeam->position = $request->position;
        $storeArtVentureTeam->description = $request->description;
        $storeArtVentureTeam->email = $request->email;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/art-venture/team')) {
                Storage::disk('public')->makeDirectory('company/art-venture/team');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(356, 356)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/art-venture/team/' . $imageName, $imageResize);

            //And save data into the database
            $storeArtVentureTeam->image = $imageName;
        }

        $storeArtVentureTeam->save();

        return redirect()->route('art-venture-team.index')->with('success', 'Art Venture Team Saved Successfully');
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
        $editArtVentureTeam = ArtVentureTeam::findOrFail($id);
        return view('backEnd.company.companies.art-venture.team.edit', compact('editArtVentureTeam'));
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
            'image' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:150'
        ]);

        $updateArtVentureTeam = ArtVentureTeam::findOrFail($id);

        $updateArtVentureTeam->name = $request->name;
        $updateArtVentureTeam->slug = Str::slug($request->name);
        $updateArtVentureTeam->position = $request->position;
        $updateArtVentureTeam->description = $request->description;
        $updateArtVentureTeam->email = $request->email;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/art-venture/team')) {
                Storage::disk('public')->makeDirectory('company/all-company/art-venture/team');
            }

            //Delete old image from database
            if (Storage::disk('public')->exists('company/all-company/art-venture/team/' . $updateArtVentureTeam->image)) {
                Storage::disk('public')->delete('company/all-company/art-venture/team/' . $updateArtVentureTeam->image);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(356, 356)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/art-venture/team/' . $imageName, $imageResize);

            //And save data into the database
            $updateArtVentureTeam->image = $imageName;
        }

        $updateArtVentureTeam->save();

        return redirect()->route('art-venture-team.index')->with('success', 'Art Venture Team Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $destroyArtVentureTeam = ArtVentureTeam::findOrfail($id);

        if (Storage::disk('public')->exists('company/all-company/art-venture/team/' . $destroyArtVentureTeam->image)) {
            Storage::disk('public')->delete('company/all-company/art-venture/team/' . $destroyArtVentureTeam->image);
        }

        $destroyArtVentureTeam->delete();

        return redirect()->route('art-venture-team.index')->with('success', 'Art Venture Team Deleted successfully');
    }
}
