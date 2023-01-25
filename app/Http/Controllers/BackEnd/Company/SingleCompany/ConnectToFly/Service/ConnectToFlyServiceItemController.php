<?php

namespace App\Http\Controllers\BackEnd\Company\SingleCompany\ConnectToFly\Service;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Company\SingleCompany\ConnectToFly\Service\ConnectToFlyServiceCategory;
use App\Models\BackEnd\Company\SingleCompany\ConnectToFly\Service\ConnectToFlyServiceItem;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ConnectToFlyServiceItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexConnectToFlyServiceItems = ConnectToFlyServiceItem::all();
        return view('backEnd.company.companies.connect-to-fly.service.item.index', compact('indexConnectToFlyServiceItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $getConnectToFlyServiceCategories = ConnectToFlyServiceCategory::all();
        return view('backEnd.company.companies.connect-to-fly.service.item.create', compact('getConnectToFlyServiceCategories'));
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
            'connect_to_fly_service_category_id' => 'required',
            'name' => 'required',
            'company' => 'required',

            'image' => 'required|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:100',
            'images' => 'required',
            'images.*' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp',

            'project_heading' => 'required',
            'project_description' => 'required',
            'portfolio_heading' => 'required',

            'portfolio_images' => 'required',
            'portfolio_images.*' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp'
        ]);

        $storeConnectToFlyServiceItem = new ConnectToFlyServiceItem();

        $storeConnectToFlyServiceItem->connect_to_fly_service_category_id = $request->connect_to_fly_service_category_id;
        $storeConnectToFlyServiceItem->name = $request->name;
        $storeConnectToFlyServiceItem->slug = Str::slug($request->name);
        $storeConnectToFlyServiceItem->company = $request->company;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/connect-to-fly/service/item')) {
                Storage::disk('public')->makeDirectory('company/all-company/connect-to-fly/service/item');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(260, 260)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/connect-to-fly/service/item/' . $imageName, $imageResize);

            //And save data into the database
            $storeConnectToFlyServiceItem->image = $imageName;
        }

        $itemImages = $request->file('images');
        $images = [];
        if (isset($itemImages)) {

            foreach ($request->file('images') as $file) {
                $slug = str_slug($request->name);
                $itemImageName = $slug . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('company/all-company/connect-to-fly/service/item/details')) {
                    Storage::disk('public')->makeDirectory('company/all-company/connect-to-fly/service/item/details');
                }

                $portfolioItemImage = Image::make($file)->resize(1115, 515)->stream();
                Storage::disk('public')->put('company/all-company/connect-to-fly/service/item/details/' . $itemImageName, $portfolioItemImage);

                $images[] = $itemImageName;
            }
            $storeConnectToFlyServiceItem->images = json_encode($images);
        }

        $storeConnectToFlyServiceItem->project_heading = $request->project_heading;
        $storeConnectToFlyServiceItem->project_description = $request->project_description;
        $storeConnectToFlyServiceItem->project_details_heading = $request->project_details_heading;
        $storeConnectToFlyServiceItem->project_client = $request->project_client;
        $storeConnectToFlyServiceItem->project_client_content = $request->project_client_content;
        $storeConnectToFlyServiceItem->project_date = $request->project_date;
        $storeConnectToFlyServiceItem->project_date_content = $request->project_date_content;
        $storeConnectToFlyServiceItem->project_skills = $request->project_skills;
        $storeConnectToFlyServiceItem->project_skills_content = $request->project_skills_content;
        $storeConnectToFlyServiceItem->project_url = $request->project_url;
        $storeConnectToFlyServiceItem->project_url_content = $request->project_url_content;
        $storeConnectToFlyServiceItem->project_link = $request->project_link;
        $storeConnectToFlyServiceItem->portfolio_heading = $request->portfolio_heading;

        $itemImages = $request->file('portfolio_images');
        $images = [];
        if (isset($itemImages)) {

            foreach ($request->file('portfolio_images') as $file) {
                $slug = str_slug($request->name);
                $itemImageName = $slug . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('company/all-company/connect-to-fly/service/item/portfolio')) {
                    Storage::disk('public')->makeDirectory('company/all-company/connect-to-fly/service/item/portfolio');
                }

                $portfolioItemImage = Image::make($file)->stream();
                Storage::disk('public')->put('company/all-company/connect-to-fly/service/item/portfolio/' . $itemImageName, $portfolioItemImage);

                $images[] = $itemImageName;
            }
            $storeConnectToFlyServiceItem->portfolio_images = json_encode($images);
        }

        $storeConnectToFlyServiceItem->save();

        return redirect()->route('ctf-service-item.index')->with('success', 'Connect To Fly Service Item Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $viewConnectToFlyServiceItem = ConnectToFlyServiceItem::findOrFail($id);
        return view('backEnd.company.companies.connect-to-fly.service.item.show', compact('viewConnectToFlyServiceItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $editConnectToFlyServiceItem = ConnectToFlyServiceItem::findOrFail($id);
        $editConnectToFlyServiceCategory = ConnectToFlyServiceCategory::all();
        return view('backEnd.company.companies.connect-to-fly.service.item.edit', compact('editConnectToFlyServiceItem', 'editConnectToFlyServiceCategory'));
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
            'connect_to_fly_service_category_id' => 'required',
            'name' => 'required',
            'company' => 'required',

            'image.*' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:100',
//            'images' => 'required',
            'images.*' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp',

            'project_heading' => 'required',
            'project_description' => 'required',
            'portfolio_heading' => 'required',

//            'portfolio_images' => 'required',
            'portfolio_images.*' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp'
        ]);

        $updateConnectToFlyServiceItem = ConnectToFlyServiceItem::findOrFail($id);

        $updateConnectToFlyServiceItem->connect_to_fly_service_category_id = $request->connect_to_fly_service_category_id;
        $updateConnectToFlyServiceItem->name = $request->name;
        $updateConnectToFlyServiceItem->slug = Str::slug($request->name);
        $updateConnectToFlyServiceItem->company = $request->company;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/connect-to-fly/service/item')) {
                Storage::disk('public')->makeDirectory('company/all-company/connect-to-fly/service/item');
            }
            //Delete old image
            if (Storage::disk('public')->exists('company/all-company/connect-to-fly/service/item/' . $updateConnectToFlyServiceItem->image)) {
                Storage::disk('public')->delete('company/all-company/connect-to-fly/service/item/' . $updateConnectToFlyServiceItem->image);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(260, 260)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/connect-to-fly/service/item/' . $imageName, $imageResize);

            //And save data into the database
            $updateConnectToFlyServiceItem->image = $imageName;
        }

        $itemImages = $request->file('images');
        $existingImages = json_decode($updateConnectToFlyServiceItem->images);
        if (isset($itemImages)) {

            foreach ($itemImages as $file) {
                $slug = str_slug($request->name);
                $itemImageName = $slug . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('company/all-company/connect-to-fly/service/item/details')) {
                    Storage::disk('public')->makeDirectory('company/all-company/connect-to-fly/service/item/details');
                }

                $portfolioItemImage = Image::make($file)->resize(1115, 515)->stream();
                Storage::disk('public')->put('company/all-company/connect-to-fly/service/item/details/' . $itemImageName, $portfolioItemImage);

                $existingImages[] = $itemImageName;
            }
            $updateConnectToFlyServiceItem->images = json_encode($existingImages);
        }

        $updateConnectToFlyServiceItem->project_heading = $request->project_heading;
        $updateConnectToFlyServiceItem->project_description = $request->project_description;
        $updateConnectToFlyServiceItem->project_details_heading = $request->project_details_heading;
        $updateConnectToFlyServiceItem->project_client = $request->project_client;
        $updateConnectToFlyServiceItem->project_client_content = $request->project_client_content;
        $updateConnectToFlyServiceItem->project_date = $request->project_date;
        $updateConnectToFlyServiceItem->project_date_content = $request->project_date_content;
        $updateConnectToFlyServiceItem->project_skills = $request->project_skills;
        $updateConnectToFlyServiceItem->project_skills_content = $request->project_skills_content;
        $updateConnectToFlyServiceItem->project_url = $request->project_url;
        $updateConnectToFlyServiceItem->project_url_content = $request->project_url_content;
        $updateConnectToFlyServiceItem->project_link = $request->project_link;
        $updateConnectToFlyServiceItem->portfolio_heading = $request->portfolio_heading;

        $itemImages = $request->file('portfolio_images');
        $existingImages = json_decode($updateConnectToFlyServiceItem->portfolio_images);
        if (isset($itemImages)) {

            foreach ($itemImages as $file) {
                $slug = str_slug($request->name);
                $itemImageName = $slug . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('company/all-company/connect-to-fly/service/item/portfolio')) {
                    Storage::disk('public')->makeDirectory('company/all-company/connect-to-fly/service/item/portfolio');
                }

                $portfolioItemImage = Image::make($file)->stream();
                Storage::disk('public')->put('company/all-company/connect-to-fly/service/item/portfolio/' . $itemImageName, $portfolioItemImage);

                $existingImages[] = $itemImageName;
            }
            $updateConnectToFlyServiceItem->portfolio_images = json_encode($existingImages);
        }

        $updateConnectToFlyServiceItem->save();

        return redirect()->route('ctf-service-item.index')->with('success', 'Connect To Fly Service Item Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $destroyConnectToFlyServiceItem = ConnectToFlyServiceItem::findOrfail($id);

        if (Storage::disk('public')->exists('company/all-company/connect-to-fly/service/item/' . $destroyConnectToFlyServiceItem->image)) {
            Storage::disk('public')->delete('company/all-company/connect-to-fly/service/item/' . $destroyConnectToFlyServiceItem->image);
        }

        $getImages = json_decode($destroyConnectToFlyServiceItem->images);
        foreach ($getImages as $image) {
            if (Storage::disk('public')->exists('company/all-company/connect-to-fly/service/item/details/' . $image)) {
                Storage::disk('public')->delete('company/all-company/connect-to-fly/service/item/details/' . $image);
            }
        }

        $getImages = json_decode($destroyConnectToFlyServiceItem->portfolio_images);
        foreach ($getImages as $image) {
            if (Storage::disk('public')->exists('company/all-company/connect-to-fly/service/item/portfolio/' . $image)) {
                Storage::disk('public')->delete('company/all-company/connect-to-fly/service/item/portfolio/' . $image);
            }
        }

        $destroyConnectToFlyServiceItem->delete();

        return redirect()->route('ctf-service-item.index')->with('success', 'Connect To Fly Service Item Deleted successfully');
    }

    public function deleteConnectToFlyImages($id)
    {
        $connectToFlyServiceItem = ConnectToFlyServiceItem::findOrFail($id);
        $images = json_decode($connectToFlyServiceItem->images);
        foreach($images as $file) {
            Storage::delete('public/company/all-company/connect-to-fly/service/item/details/' . $file);
        }
        $connectToFlyServiceItem->images = "[]";
        $connectToFlyServiceItem->save();
        return redirect()->back()->with('success', 'Images deleted successfully!');
    }

    public function deleteConnectToFlyPortfolioImage($id)
    {
        $connectToFlyServiceItem = ConnectToFlyServiceItem::findOrFail($id);
        $images = json_decode($connectToFlyServiceItem->portfolio_images);
        foreach($images as $file) {
            Storage::delete('public/company/all-company/connect-to-fly/service/item/portfolio/' . $file);
        }
        $connectToFlyServiceItem->portfolio_images = "[]";
        $connectToFlyServiceItem->save();
        return redirect()->back()->with('success', 'Portfolio images deleted successfully!');
    }

}
