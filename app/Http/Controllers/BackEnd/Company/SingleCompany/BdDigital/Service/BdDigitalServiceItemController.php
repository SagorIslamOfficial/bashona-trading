<?php

namespace App\Http\Controllers\BackEnd\Company\SingleCompany\BdDigital\Service;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Company\SingleCompany\BdDigital\Service\BdDigitalServiceCategory;
use App\Models\BackEnd\Company\SingleCompany\BdDigital\Service\BdDigitalServiceItem;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class BdDigitalServiceItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexBdDigitalServiceItems = BdDigitalServiceItem::all();
        return view('backEnd.company.companies.bd-digital.service.item.index', compact('indexBdDigitalServiceItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $getBdDigitalServiceCategories = BdDigitalServiceCategory::all();
        return view('backEnd.company.companies.bd-digital.service.item.create', compact('getBdDigitalServiceCategories'));
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
            'bd_digital_service_category_id' => 'required',
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

        $storeBdDigitalServiceItem = new BdDigitalServiceItem();

        $storeBdDigitalServiceItem->bd_digital_service_category_id = $request->bd_digital_service_category_id;
        $storeBdDigitalServiceItem->name = $request->name;
        $storeBdDigitalServiceItem->slug = Str::slug($request->name);
        $storeBdDigitalServiceItem->company = $request->company;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/bd-digital/service/item')) {
                Storage::disk('public')->makeDirectory('company/all-company/bd-digital/service/item');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(260, 260)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/bd-digital/service/item/' . $imageName, $imageResize);

            //And save data into the database
            $storeBdDigitalServiceItem->image = $imageName;
        }

        $itemImages = $request->file('images');
        $images = [];
        if (isset($itemImages)) {

            foreach ($request->file('images') as $file) {
                $slug = str_slug($request->name);
                $itemImageName = $slug . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('company/all-company/bd-digital/service/item/details')) {
                    Storage::disk('public')->makeDirectory('company/all-company/bd-digital/service/item/details');
                }

                $portfolioItemImage = Image::make($file)->resize(1115, 515)->stream();
                Storage::disk('public')->put('company/all-company/bd-digital/service/item/details/' . $itemImageName, $portfolioItemImage);

                $images[] = $itemImageName;
            }
            $storeBdDigitalServiceItem->images = json_encode($images);
        }

        $storeBdDigitalServiceItem->project_heading = $request->project_heading;
        $storeBdDigitalServiceItem->project_description = $request->project_description;
        $storeBdDigitalServiceItem->project_details_heading = $request->project_details_heading;
        $storeBdDigitalServiceItem->project_client = $request->project_client;
        $storeBdDigitalServiceItem->project_client_content = $request->project_client_content;
        $storeBdDigitalServiceItem->project_date = $request->project_date;
        $storeBdDigitalServiceItem->project_date_content = $request->project_date_content;
        $storeBdDigitalServiceItem->project_skills = $request->project_skills;
        $storeBdDigitalServiceItem->project_skills_content = $request->project_skills_content;
        $storeBdDigitalServiceItem->project_url = $request->project_url;
        $storeBdDigitalServiceItem->project_url_content = $request->project_url_content;
        $storeBdDigitalServiceItem->project_link = $request->project_link;
        $storeBdDigitalServiceItem->portfolio_heading = $request->portfolio_heading;

        $itemImages = $request->file('portfolio_images');
        $images = [];
        if (isset($itemImages)) {

            foreach ($request->file('portfolio_images') as $file) {
                $slug = str_slug($request->name);
                $itemImageName = $slug . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('company/all-company/bd-digital/service/item/portfolio')) {
                    Storage::disk('public')->makeDirectory('company/all-company/bd-digital/service/item/portfolio');
                }

                $portfolioItemImage = Image::make($file)->stream();
                Storage::disk('public')->put('company/all-company/bd-digital/service/item/portfolio/' . $itemImageName, $portfolioItemImage);

                $images[] = $itemImageName;
            }
            $storeBdDigitalServiceItem->portfolio_images = json_encode($images);
        }

        $storeBdDigitalServiceItem->save();

        return redirect()->route('bd-digital-service-item.index')->with('success', 'BD Digital Service Item Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $viewBdDigitalServiceItem = BdDigitalServiceItem::findOrFail($id);
        return view('backEnd.company.companies.bd-digital.service.item.show', compact('viewBdDigitalServiceItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $editBdDigitalServiceItem = BdDigitalServiceItem::findOrFail($id);
        $editBdDigitalServiceCategory = BdDigitalServiceCategory::all();
        return view('backEnd.company.companies.bd-digital.service.item.edit', compact('editBdDigitalServiceItem', 'editBdDigitalServiceCategory'));
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
            'bd_digital_service_category_id' => 'required',
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

        $updateBdDigitalServiceItem = BdDigitalServiceItem::findOrFail($id);

        $updateBdDigitalServiceItem->bd_digital_service_category_id = $request->bd_digital_service_category_id;
        $updateBdDigitalServiceItem->name = $request->name;
        $updateBdDigitalServiceItem->slug = Str::slug($request->name);
        $updateBdDigitalServiceItem->company = $request->company;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/bd-digital/service/item')) {
                Storage::disk('public')->makeDirectory('company/all-company/bd-digital/service/item');
            }
            //Delete old image
            if (Storage::disk('public')->exists('company/all-company/bd-digital/service/item/' . $updateBdDigitalServiceItem->image)) {
                Storage::disk('public')->delete('company/all-company/bd-digital/service/item/' . $updateBdDigitalServiceItem->image);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(260, 260)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/bd-digital/service/item/' . $imageName, $imageResize);

            //And save data into the database
            $updateBdDigitalServiceItem->image = $imageName;
        }

        $itemImages = $request->file('images');
        $existingImages = json_decode($updateBdDigitalServiceItem->images);
        if (isset($itemImages)) {

            foreach ($itemImages as $file) {
                $slug = str_slug($request->name);
                $itemImageName = $slug . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('company/all-company/bd-digital/service/item/details')) {
                    Storage::disk('public')->makeDirectory('company/all-company/bd-digital/service/item/details');
                }

                $portfolioItemImage = Image::make($file)->resize(1115, 515)->stream();
                Storage::disk('public')->put('company/all-company/bd-digital/service/item/details/' . $itemImageName, $portfolioItemImage);

                $existingImages[] = $itemImageName;
            }
            $updateBdDigitalServiceItem->images = json_encode($existingImages);
        }

        $updateBdDigitalServiceItem->project_heading = $request->project_heading;
        $updateBdDigitalServiceItem->project_description = $request->project_description;
        $updateBdDigitalServiceItem->project_details_heading = $request->project_details_heading;
        $updateBdDigitalServiceItem->project_client = $request->project_client;
        $updateBdDigitalServiceItem->project_client_content = $request->project_client_content;
        $updateBdDigitalServiceItem->project_date = $request->project_date;
        $updateBdDigitalServiceItem->project_date_content = $request->project_date_content;
        $updateBdDigitalServiceItem->project_skills = $request->project_skills;
        $updateBdDigitalServiceItem->project_skills_content = $request->project_skills_content;
        $updateBdDigitalServiceItem->project_url = $request->project_url;
        $updateBdDigitalServiceItem->project_url_content = $request->project_url_content;
        $updateBdDigitalServiceItem->project_link = $request->project_link;
        $updateBdDigitalServiceItem->portfolio_heading = $request->portfolio_heading;

        $itemImages = $request->file('portfolio_images');
        $existingImages = json_decode($updateBdDigitalServiceItem->portfolio_images);
        if (isset($itemImages)) {

            foreach ($itemImages as $file) {
                $slug = str_slug($request->name);
                $itemImageName = $slug . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('company/all-company/bd-digital/service/item/portfolio')) {
                    Storage::disk('public')->makeDirectory('company/all-company/bd-digital/service/item/portfolio');
                }

                $portfolioItemImage = Image::make($file)->stream();
                Storage::disk('public')->put('company/all-company/bd-digital/service/item/portfolio/' . $itemImageName, $portfolioItemImage);

                $existingImages[] = $itemImageName;
            }
            $updateBdDigitalServiceItem->portfolio_images = json_encode($existingImages);
        }

        $updateBdDigitalServiceItem->save();

        return redirect()->route('bd-digital-service-item.index')->with('success', 'BD Digital Service Item Saved Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $destroyBdDigitalServiceItem = BdDigitalServiceItem::findOrfail($id);

        if (Storage::disk('public')->exists('company/all-company/bd-digital/service/item/' . $destroyBdDigitalServiceItem->image)) {
            Storage::disk('public')->delete('company/all-company/bd-digital/service/item/' . $destroyBdDigitalServiceItem->image);
        }

        $getImages = json_decode($destroyBdDigitalServiceItem->images);
        foreach ($getImages as $image) {
            if (Storage::disk('public')->exists('company/all-company/bd-digital/service/item/details/' . $image)) {
                Storage::disk('public')->delete('company/all-company/bd-digital/service/item/details/' . $image);
            }
        }

        $getImages = json_decode($destroyBdDigitalServiceItem->portfolio_images);
        foreach ($getImages as $image) {
            if (Storage::disk('public')->exists('company/all-company/bd-digital/service/item/portfolio/' . $image)) {
                Storage::disk('public')->delete('company/all-company/bd-digital/service/item/portfolio/' . $image);
            }
        }

        $destroyBdDigitalServiceItem->delete();

        return redirect()->route('bd-digital-service-item.index')->with('success', 'BD Digital Service Item Deleted successfully');
    }

    public function deleteBdDigitalImages($id)
    {
        $bdDigitalServiceItem = BdDigitalServiceItem::findOrFail($id);
        $images = json_decode($bdDigitalServiceItem->images);
        foreach($images as $file) {
            Storage::delete('public/company/all-company/bd-digital/service/item/details/' . $file);
        }
        $bdDigitalServiceItem->images = "[]";
        $bdDigitalServiceItem->save();
        return redirect()->back()->with('success', 'Images deleted successfully!');
    }

    public function deleteBdDigitalPortfolioImage($id)
    {
        $bdDigitalServiceItem = BdDigitalServiceItem::findOrFail($id);
        $images = json_decode($bdDigitalServiceItem->portfolio_images);
        foreach($images as $file) {
            Storage::delete('public/company/all-company/bd-digital/service/item/portfolio/' . $file);
        }
        $bdDigitalServiceItem->portfolio_images = "[]";
        $bdDigitalServiceItem->save();
        return redirect()->back()->with('success', 'Portfolio images deleted successfully!');
    }
}
