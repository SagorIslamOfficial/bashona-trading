<?php

namespace App\Http\Controllers\BackEnd\Home;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Home\PartialHeader;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class  PartialHeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexHeader = PartialHeader::all();
        return view('backEnd.partial-header.index', compact('indexHeader'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.partial-header.create');
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
            'number_1' => 'required',
            'email_1' => 'required',
            'logo' => 'required|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:512',
            'text' => 'required'
        ]);

        $storePartialHeader = new PartialHeader();

        $storePartialHeader->number_1 = $request->number_1;
        $storePartialHeader->number_2 = $request->number_2;
        $storePartialHeader->email_1 = $request->email_1;
        $storePartialHeader->email_2 = $request->email_2;

        //Find form image and storing into a variable
        $image = $request->file('logo');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug("Bashona Trading Ltd");

            //Make unique name for image
            $imageName = $slug . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('partial_header')) {
                Storage::disk('public')->makeDirectory('partial_header');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(160, 48)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('partial_header/' . $imageName, $imageResize);

            //And save data into the database
            $storePartialHeader->logo = $imageName;
        }
        $storePartialHeader->text = $request->text;
        $storePartialHeader->slug = Str::slug("Bashona Trading Ltd");

        $storePartialHeader->save();

        return redirect()->route('partial-header.index')->with('success', 'Partial Header Saved Successfully :)');
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
        $editPartialHeader = PartialHeader::findOrFail($id);
        return view('backEnd.partial-header.edit', compact('editPartialHeader'));
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
            'number_1' => 'required',
            'email_1' => 'required',
            'logo' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:512',
            'text' => 'required'
        ]);

        $updatePartialHeader = PartialHeader::findOrFail($id);

        $updatePartialHeader->number_1 = $request->number_1;
        $updatePartialHeader->number_2 = $request->number_2;
        $updatePartialHeader->email_1 = $request->email_1;
        $updatePartialHeader->email_2 = $request->email_2;

        //Find form image and storing into a variable
        $image = $request->file('logo');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug("Bashona Trading Ltd");

            //Make unique name for image
            $imageName = $slug . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('partial_header')) {
                Storage::disk('public')->makeDirectory('partial_header');
            }

            //Delete old image from database
            if (Storage::disk('public')->exists('partial_header/' . $updatePartialHeader->logo)) {
                Storage::disk('public')->delete('partial_header/' . $updatePartialHeader->logo);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(160, 48)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('partial_header/' . $imageName, $imageResize);

            //And save data into the database
            $updatePartialHeader->logo = $imageName;
        }
        $updatePartialHeader->text = $request->text;
        $updatePartialHeader->slug = Str::slug("Bashona Trading Ltd");

        $updatePartialHeader->save();

        return redirect()->route('partial-header.index')->with('success', 'Partial Header Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $destroyPartialHeader = PartialHeader::findOrfail($id);

        if (Storage::disk('public')->exists('partial_header/' . $destroyPartialHeader->logo)) {
            Storage::disk('public')->delete('partial_header/' . $destroyPartialHeader->logo);
        }

        $destroyPartialHeader->delete();

        return redirect()->route('partial-header.index')->with('success', 'Partial Header deleted successfully !');
    }
}
