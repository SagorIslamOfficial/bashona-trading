<?php

namespace App\Http\Controllers\BackEnd\Gallery;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Gallery\GalleryCategory;
use App\Models\BackEnd\Gallery\GalleryItem;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class GalleryItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexGalleryItems = GalleryItem::all();
        return view('backEnd.gallery.item.index', compact('indexGalleryItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $getGalleryCategories = GalleryCategory::all();
        return view('backEnd.gallery.item.create', compact('getGalleryCategories'));
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
            'gallery_category_id' => 'required',
            'name' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:1024'
        ]);

        $storeGalleryItem = new GalleryItem();
        $storeGalleryItem->gallery_category_id = $request->gallery_category_id;
        $storeGalleryItem->name = $request->name;
        $storeGalleryItem->slug = Str::slug($request->name);

        //Find form image and storing into a variable
        $image = $request->file('image');
        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('gallery-item')) {
                Storage::disk('public')->makeDirectory('gallery-item');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('gallery-item/' . $imageName, $imageResize);

            //And save data into the database
            $storeGalleryItem->image = $imageName;
        }

        $storeGalleryItem->save();
        return redirect()->route('gallery-item.index')->with('success', 'Gallery Item Saved Successfully');
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
        $editGalleryItem = GalleryItem::findOrFail($id);
        $editGalleryCategory = GalleryCategory::all();
        return view('backEnd.gallery.item.edit', compact('editGalleryItem', 'editGalleryCategory'));
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
            'gallery_category_id' => 'required',
            'name' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:1024'
        ]);

        $updateGalleryItem = GalleryItem::findOrFail($id);
        $updateGalleryItem->gallery_category_id = $request->gallery_category_id;
        $updateGalleryItem->name = $request->name;
        $updateGalleryItem->slug = Str::slug($request->name);

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('gallery-item')) {
                Storage::disk('public')->makeDirectory('gallery-item');
            }

            //Delete old image from database
            if (Storage::disk('public')->exists('gallery-item/' . $updateGalleryItem->image)) {
                Storage::disk('public')->delete('gallery-item/' . $updateGalleryItem->image);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('gallery-item/' . $imageName, $imageResize);

            //And save data into the database
            $updateGalleryItem->image = $imageName;
        }

        $updateGalleryItem->save();

        return redirect()->route('gallery-item.index')->with('success', 'Gallery Item Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $destroyGalleryItem = GalleryItem::findOrfail($id);

        if (Storage::disk('public')->exists('gallery-item/' . $destroyGalleryItem->image)) {
            Storage::disk('public')->delete('gallery-item/' . $destroyGalleryItem->image);
        }

        $destroyGalleryItem->delete();

        return redirect()->route('gallery-item.index')->with('success', 'Gallery Item deleted successfully');
    }
}
