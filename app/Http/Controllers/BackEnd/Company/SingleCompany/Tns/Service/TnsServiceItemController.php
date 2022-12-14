<?php

namespace App\Http\Controllers\BackEnd\Company\SingleCompany\Tns\Service;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Company\SingleCompany\Tns\Service\TnsServiceCategory;
use App\Models\BackEnd\Company\SingleCompany\Tns\Service\TnsServiceItem;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class TnsServiceItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexTnsServiceItems = TnsServiceItem::all();
        return view('backEnd.company.companies.tns.service.item.index', compact('indexTnsServiceItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $getTnsServiceCategories = TnsServiceCategory::all();
        return view('backEnd.company.companies.tns.service.item.create', compact('getTnsServiceCategories'));
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
            'tns_service_category_id' => 'required',
            'name' => 'required',
            'company' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:100',
            'images' => 'required',
            //This below extra like of code needed for validate multiple files or images. Except this line of code will show ("images" field must be a image)
            'images.*' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp',
            'project_heading' => 'required',
            'project_description' => 'required',
            'project_details_heading' => 'required',
            'project_client' => 'required',
            'project_client_content' => 'required',
            'project_date' => 'required',
            'project_date_content' => 'required',
            'project_skills' => 'required',
            'project_skills_content' => 'required',
            'project_url' => 'required',
            'project_url_content' => 'required',
            'project_link' => 'required',
            'portfolio_heading' => 'required',
            'portfolio_images' => 'required',
            //This below extra like of code needed for validate multiple files or images. Except this line of code will show ("images" field must be a image)
            'portfolio_images.*' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp'
        ]);

        $storeTnsServiceItem = new TnsServiceItem();

        $storeTnsServiceItem->tns_service_category_id = $request->tns_service_category_id;
        $storeTnsServiceItem->name = $request->name;
        $storeTnsServiceItem->slug = Str::slug($request->name);
        $storeTnsServiceItem->company = $request->company;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/tns/service/item')) {
                Storage::disk('public')->makeDirectory('company/all-company/tns/service/item');
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(260, 260)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/tns/service/item/' . $imageName, $imageResize);

            //And save data into the database
            $storeTnsServiceItem->image = $imageName;
        }

        $itemImages = $request->file('images');
        $images = [];
        if (isset($itemImages)) {

            foreach ($request->file('images') as $file) {
                $slug = str_slug($request->name);
                $itemImageName = $slug . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('company/all-company/tns/service/item/details')) {
                    Storage::disk('public')->makeDirectory('company/all-company/tns/service/item/details');
                }

                $portfolioItemImage = Image::make($file)->resize(1115, 515)->stream();
                Storage::disk('public')->put('company/all-company/tns/service/item/details/' . $itemImageName, $portfolioItemImage);

                $images[] = $itemImageName;
            }
            $storeTnsServiceItem->images = json_encode($images);
        }

        $storeTnsServiceItem->project_heading = $request->project_heading;
        $storeTnsServiceItem->project_description = $request->project_description;
        $storeTnsServiceItem->project_details_heading = $request->project_details_heading;
        $storeTnsServiceItem->project_client = $request->project_client;
        $storeTnsServiceItem->project_client_content = $request->project_client_content;
        $storeTnsServiceItem->project_date = $request->project_date;
        $storeTnsServiceItem->project_date_content = $request->project_date_content;
        $storeTnsServiceItem->project_skills = $request->project_skills;
        $storeTnsServiceItem->project_skills_content = $request->project_skills_content;
        $storeTnsServiceItem->project_url = $request->project_url;
        $storeTnsServiceItem->project_url_content = $request->project_url_content;
        $storeTnsServiceItem->project_link = $request->project_link;
        $storeTnsServiceItem->portfolio_heading = $request->portfolio_heading;

        $itemImages = $request->file('portfolio_images');
        $images = [];
        if (isset($itemImages)) {

            foreach ($request->file('portfolio_images') as $file) {
                $slug = str_slug($request->name);
                $itemImageName = $slug . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('company/all-company/tns/service/item/portfolio')) {
                    Storage::disk('public')->makeDirectory('company/all-company/tns/service/item/portfolio');
                }

                $portfolioItemImage = Image::make($file)->stream();
                Storage::disk('public')->put('company/all-company/tns/service/item/portfolio/' . $itemImageName, $portfolioItemImage);

                $images[] = $itemImageName;
            }
            $storeTnsServiceItem->portfolio_images = json_encode($images);
        }

        $storeTnsServiceItem->save();

        return redirect()->route('tns-item.index')->with('success', 'Tns Service Item Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        $viewTnsServiceItem = TnsServiceItem::findOrFail($id);
        return view('backEnd.company.companies.tns.service.item.show', compact('viewTnsServiceItem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Application|Factory|View
     */
    public function edit($id)
    {
        $editTnsServiceItem = TnsServiceItem::findOrFail($id);
        $editTnsServiceCategory = TnsServiceCategory::all();
        return view('backEnd.company.companies.tns.service.item.edit', compact('editTnsServiceItem', 'editTnsServiceCategory'));
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
            'tns_service_category_id' => 'required',
            'name' => 'required',
            'company' => 'required',
            'image.*' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp|max:100',
            'images' => 'required',
            //This below extra like of code needed for validate multiple files or images. Except this line of code will show ("images" field must be a image)
            'images.*' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp',
            'project_heading' => 'required',
            'project_description' => 'required',
            'project_details_heading' => 'required',
            'project_client' => 'required',
            'project_client_content' => 'required',
            'project_date' => 'required',
            'project_date_content' => 'required',
            'project_skills' => 'required',
            'project_skills_content' => 'required',
            'project_url' => 'required',
            'project_url_content' => 'required',
            'project_link' => 'required',
            'portfolio_heading' => 'required',
            'portfolio_images' => 'required',
            //This below extra like of code needed for validate multiple files or images. Except this line of code will show ("images" field must be a image)
            'portfolio_images.*' => 'image|mimes:jpg,jpeg,png,bmp,gif,svg,webp'
        ]);

        $updateTnsServiceItem = TnsServiceItem::findOrFail($id);

        $updateTnsServiceItem->tns_service_category_id = $request->tns_service_category_id;
        $updateTnsServiceItem->name = $request->name;
        $updateTnsServiceItem->slug = Str::slug($request->name);
        $updateTnsServiceItem->company = $request->company;

        //Find form image and storing into a variable
        $image = $request->file('image');

        //Using if statement and ensuring form data is available
        if (isset($image)) {
            //Creating image slug
            $slug = str_slug($request->name);

            //Make unique name for image
            $imageName = $slug . '-' . uniqid() . '.' . $image->getClientOriginalExtension();

            //Checking image storage folder, if not available then create a folder
            if (!Storage::disk('public')->exists('company/all-company/tns/service/item')) {
                Storage::disk('public')->makeDirectory('company/all-company/tns/service/item');
            }
            //Delete old image
            if (Storage::disk('public')->exists('company/all-company/tns/service/item/' . $updateTnsServiceItem->image)) {
                Storage::disk('public')->delete('company/all-company/tns/service/item/' . $updateTnsServiceItem->image);
            }

            //Save image and resize image
            $imageResize = Image::make($image)->resize(260, 260)->stream();

            //And now put the image into storage disk
            Storage::disk('public')->put('company/all-company/tns/service/item/' . $imageName, $imageResize);

            //And save data into the database
            $updateTnsServiceItem->image = $imageName;
        }

        $itemImages = $request->file('images');
        $images = [];
        if (isset($itemImages)) {

            foreach ($request->file('images') as $file) {
                $slug = str_slug($request->name);
                $itemImageName = $slug . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('company/all-company/tns/service/item/details')) {
                    Storage::disk('public')->makeDirectory('company/all-company/tns/service/item/details');
                }

                //Delete old multiple images
                $getImages = json_decode($updateTnsServiceItem->images);
                foreach ($getImages as $image) {
                    if (Storage::disk('public')->exists('company/all-company/tns/service/item/details/' . $image)) {
                        Storage::disk('public')->delete('company/all-company/tns/service/item/details/' . $image);
                    }
                }

                $portfolioItemImage = Image::make($file)->resize(1115, 515)->stream();
                Storage::disk('public')->put('company/all-company/tns/service/item/details/' . $itemImageName, $portfolioItemImage);

                $images[] = $itemImageName;
            }
        }
        $updateTnsServiceItem->images = json_encode($images);

        $updateTnsServiceItem->project_heading = $request->project_heading;
        $updateTnsServiceItem->project_description = $request->project_description;
        $updateTnsServiceItem->project_details_heading = $request->project_details_heading;
        $updateTnsServiceItem->project_client = $request->project_client;
        $updateTnsServiceItem->project_client_content = $request->project_client_content;
        $updateTnsServiceItem->project_date = $request->project_date;
        $updateTnsServiceItem->project_date_content = $request->project_date_content;
        $updateTnsServiceItem->project_skills = $request->project_skills;
        $updateTnsServiceItem->project_skills_content = $request->project_skills_content;
        $updateTnsServiceItem->project_url = $request->project_url;
        $updateTnsServiceItem->project_url_content = $request->project_url_content;
        $updateTnsServiceItem->project_link = $request->project_link;
        $updateTnsServiceItem->portfolio_heading = $request->portfolio_heading;

        $itemImages = $request->file('portfolio_images');
        $images = [];
        if (isset($itemImages)) {

            foreach ($request->file('portfolio_images') as $file) {
                $slug = str_slug($request->name);
                $itemImageName = $slug . '-' . uniqid() . '.' . $file->getClientOriginalExtension();

                if (!Storage::disk('public')->exists('company/all-company/tns/service/item/portfolio')) {
                    Storage::disk('public')->makeDirectory('company/all-company/tns/service/item/portfolio');
                }

                //Delete old multiple images
                $getImages = json_decode($updateTnsServiceItem->portfolio_images);
                foreach ($getImages as $image) {
                    if (Storage::disk('public')->exists('company/all-company/tns/service/item/portfolio/' . $image)) {
                        Storage::disk('public')->delete('company/all-company/tns/service/item/portfolio/' . $image);
                    }
                }

                $portfolioItemImage = Image::make($file)->stream();
                Storage::disk('public')->put('company/all-company/tns/service/item/portfolio/' . $itemImageName, $portfolioItemImage);

                $images[] = $itemImageName;
            }
            $updateTnsServiceItem->portfolio_images = json_encode($images);
        }

        $updateTnsServiceItem->save();

        return redirect()->route('tns-item.index')->with('success', 'Tns Service Item Saved Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $destroyTnsServiceItem = TnsServiceItem::findOrfail($id);

        if (Storage::disk('public')->exists('company/all-company/tns/service/item/' . $destroyTnsServiceItem->image)) {
            Storage::disk('public')->delete('company/all-company/tns/service/item/' . $destroyTnsServiceItem->image);
        }

        $getImages = json_decode($destroyTnsServiceItem->images);
        foreach ($getImages as $image) {
            if (Storage::disk('public')->exists('company/all-company/tns/service/item/details/' . $image)) {
                Storage::disk('public')->delete('company/all-company/tns/service/item/details/' . $image);
            }
        }

        $getImages = json_decode($destroyTnsServiceItem->portfolio_images);
        foreach ($getImages as $image) {
            if (Storage::disk('public')->exists('company/all-company/tns/service/item/portfolio/' . $image)) {
                Storage::disk('public')->delete('company/all-company/tns/service/item/portfolio/' . $image);
            }
        }

        $destroyTnsServiceItem->delete();

        return redirect()->route('tns-item.index')->with('success', 'Tns Service Item Deleted successfully');
    }
}
