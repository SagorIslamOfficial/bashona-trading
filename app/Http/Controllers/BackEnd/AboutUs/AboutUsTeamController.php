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
            'rightName' => 'required',
            'rightPosition' => 'required',
            'rightMessage' => 'required',
            'rightPhone' => 'required',
            'rightEmail' => 'required',
            'rightImage' => 'required|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:150',

            'leftImage' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:150'
        ]);

        $storeAboutUsTeam = new AboutUsTeam();

        $storeAboutUsTeam->name = "Company Board Members";

        $storeAboutUsTeam->rightName = $request->rightName;
        $storeAboutUsTeam->rightPosition = $request->rightPosition;
        $storeAboutUsTeam->rightMessage = $request->rightMessage;
        $storeAboutUsTeam->rightPhone = $request->rightPhone;
        $storeAboutUsTeam->rightEmail = $request->rightEmail;

        $image = $request->file('rightImage');
        if (isset($image)) {
            $slug = str_slug($request->rightName);
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('about-us/team')) {
                Storage::disk('public')->makeDirectory('about-us/team');
            }

            $imageResize = Image::make($image)->resize(450, 450)->stream();
            Storage::disk('public')->put('about-us/team/' . $imageName, $imageResize);

            $storeAboutUsTeam->rightImage = $imageName;
        }

        $storeAboutUsTeam->leftName = $request->leftName;
        $storeAboutUsTeam->leftPosition = $request->leftPosition;
        $storeAboutUsTeam->leftMessage = $request->leftMessage;
        $storeAboutUsTeam->leftPhone = $request->leftPhone;
        $storeAboutUsTeam->leftEmail = $request->leftEmail;

        $image = $request->file('leftImage');
        if (isset($image)) {
            $slug = str_slug($request->leftName);
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('about-us/team')) {
                Storage::disk('public')->makeDirectory('about-us/team');
            }

            $imageResize = Image::make($image)->resize(450, 450)->stream();
            Storage::disk('public')->put('about-us/team/' . $imageName, $imageResize);

            $storeAboutUsTeam->leftImage = $imageName;
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
            'rightName' => 'required',
            'rightPosition' => 'required',
            'rightMessage' => 'required',
            'rightPhone' => 'required',
            'rightEmail' => 'required',
            'rightImage' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:150',

            'leftImage' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:150'
        ]);

        $updateAboutUsTeam = AboutUsTeam::findOrFail($id);

        $updateAboutUsTeam->rightName = $request->rightName;
        $updateAboutUsTeam->rightPosition = $request->rightPosition;
        $updateAboutUsTeam->rightMessage = $request->rightMessage;
        $updateAboutUsTeam->rightPhone = $request->rightPhone;
        $updateAboutUsTeam->rightEmail = $request->rightEmail;

        $image = $request->file('rightImage');
        if (isset($image)) {
            $slug = str_slug($request->rightName);
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('about-us/team')) {
                Storage::disk('public')->makeDirectory('about-us/team');
            }
            if (Storage::disk('public')->exists('about-us/team/'. $updateAboutUsTeam->rightImage)){
                Storage::disk('public')->delete('about-us/team/'. $updateAboutUsTeam->rightImage);
            }

            $imageResize = Image::make($image)->resize(450, 450)->stream();
            Storage::disk('public')->put('about-us/team/' . $imageName, $imageResize);

            $updateAboutUsTeam->rightImage = $imageName;
        }

        $updateAboutUsTeam->leftName = $request->leftName;
        $updateAboutUsTeam->leftPosition = $request->leftPosition;
        $updateAboutUsTeam->leftMessage = $request->leftMessage;
        $updateAboutUsTeam->leftPhone = $request->leftPhone;
        $updateAboutUsTeam->leftEmail = $request->leftEmail;

        $image = $request->file('leftImage');
        if (isset($image)) {
            $slug = str_slug($request->leftName);
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!Storage::disk('public')->exists('about-us/team')) {
                Storage::disk('public')->makeDirectory('about-us/team');
            }
            if (Storage::disk('public')->exists('about-us/team/'. $updateAboutUsTeam->leftName)){
                Storage::disk('public')->delete('about-us/team/'. $updateAboutUsTeam->leftName);
            }

            $imageResize = Image::make($image)->resize(450, 450)->stream();
            Storage::disk('public')->put('about-us/team/' . $imageName, $imageResize);

            $updateAboutUsTeam->leftImage = $imageName;
        }

        $updateAboutUsTeam->save();
        return redirect()->route('about-team.index')->with('success', 'About Us Team Updated Successfully :)');
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

        if (Storage::disk('public')->exists('about-us/team/' . $destroyAboutUsTeam->rightImage)) {
            Storage::disk('public')->delete('about-us/team/' . $destroyAboutUsTeam->rightImage);
        }

        if (Storage::disk('public')->exists('about-us/team/' . $destroyAboutUsTeam->leftImage)) {
            Storage::disk('public')->delete('about-us/team/' . $destroyAboutUsTeam->leftImage);
        }

        $destroyAboutUsTeam->delete();
        return redirect()->route('about-team.index')->with('success', 'About Us Team deleted successfully !');
    }
}
