<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexClient = Client::all();
        return view('backEnd.client.index', compact('indexClient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.client.create');
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
            'image' => 'required|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:256',
            'name' => 'required'
        ]);

        $storeClient = new Client();

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('client')) {
                Storage::disk('public')->makeDirectory('client');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(257, 138)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('client/' . $imageName, $imageResize);

            //And save data into the database
            $storeClient->image = $imageName;
        }

        $storeClient->name = $request->name;
        $storeClient->slug = Str::slug($request->name);

        $storeClient->save();

        return redirect()->route('client.index')->with('success', 'Single Client Saved Successfully :)');
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
        $editClient = Client::findOrFail($id);
        return view('backEnd.client.edit', compact('editClient'));
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
            'image' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:256',
            'name' => 'required'
        ]);

        $updateClient = Client::findOrFail($id);

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
            if (!Storage::disk('public')->exists('client')) {
                Storage::disk('public')->makeDirectory('client');
            }

            //Delete old image from database
            if (Storage::disk('public')->exists('client/' . $updateClient->image)) {
                Storage::disk('public')->delete('client/' . $updateClient->image);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(257, 138)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('client/' . $imageName, $imageResize);

            //And save data into the database
            $updateClient->image = $imageName;
        }

        $updateClient->name = $request->name;
        $updateClient->slug = Str::slug($request->name);

        $updateClient->save();

        return redirect()->route('client.index')->with('success', 'Client Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $destroyClient = Client::findOrfail($id);

        if (Storage::disk('public')->exists('client/' . $destroyClient->image)) {
            Storage::disk('public')->delete('client/' . $destroyClient->image);
        }

        $destroyClient->delete();

        return redirect()->route('client.index')->with('success', 'Client deleted successfully !');
    }
}
