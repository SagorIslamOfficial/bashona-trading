<?php

namespace App\Http\Controllers\BackEnd\Home;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Home\Slider;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexSliders = Slider::all();
        return view('backEnd.slider.index', compact('indexSliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.slider.create');
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
            'image' => 'required|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:512',
            'heading_text' => 'required',
            'sub_text' => 'required',
            'link' => 'required',
            'name' => 'required'
        ]);

        $storeSlider = new Slider();

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('slider')) {
                Storage::disk('public')->makeDirectory('slider');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(1920, 1080)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('slider/' . $imageName, $imageResize);

            //And save data into the database
            $storeSlider->image = $imageName;
        }

        $storeSlider->heading_text = $request->heading_text;
        $storeSlider->sub_text = $request->sub_text;
        $storeSlider->link = $request->link;
        $storeSlider->name = $request->name;
        $storeSlider->slug = Str::slug($request->name);

        $storeSlider->save();

        return redirect()->route('slider.index')->with('success', 'Slider Saved Successfully :)');
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
        $editSlider = Slider::findOrFail($id);
        return view('backEnd.slider.edit', compact('editSlider'));
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
            'image' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:512',
            'heading_text' => 'required',
            'sub_text' => 'required',
            'link' => 'required',
            'name' => 'required'
        ]);

        $updateSlider = Slider::findOrFail($id);

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('slider')) {
                Storage::disk('public')->makeDirectory('slider');
            }

            //Delete old image from database
            if (Storage::disk('public')->exists('slider/' . $updateSlider->image)) {
                Storage::disk('public')->delete('slider/' . $updateSlider->image);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(1920, 1080)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('slider/' . $imageName, $imageResize);

            //And save data into the database
            $updateSlider->image = $imageName;
        }

        $updateSlider->heading_text = $request->heading_text;
        $updateSlider->sub_text = $request->sub_text;
        $updateSlider->link = $request->link;
        $updateSlider->name = $request->name;
        $updateSlider->slug = Str::slug($request->name);

        $updateSlider->save();

        return redirect()->route('slider.index')->with('success', 'Slider updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $destroySlider = Slider::findOrfail($id);

        if (Storage::disk('public')->exists('slider/' . $destroySlider->image)) {
            Storage::disk('public')->delete('slider/' . $destroySlider->image);
        }

        $destroySlider->delete();

        return redirect()->route('slider.index')->with('success', 'Slider deleted successfully !');
    }
}
