<?php

namespace App\Http\Controllers\BackEnd\AboutUs;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\AboutUs\AboutMessage;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class AboutUsMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexAboutUsMessage = AboutMessage::all();
        return view('backEnd.about-us.message.index', compact('indexAboutUsMessage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.about-us.message.create');
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
            'heading' => 'required',
            'message' => 'required'
        ]);

        $storeAboutMessage = new AboutMessage();

        $storeAboutMessage->heading = $request->heading;
        $storeAboutMessage->slug = Str::slug($request->heading);
        $storeAboutMessage->message = $request->message;

        $storeAboutMessage->save();

        return redirect()->route('about-message.index')->with('success', 'About Us Managing Direcotor Message Saved Successfully');
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
        $editAboutMessage = AboutMessage::findOrFail($id);
        return view('backEnd.about-us.message.edit', compact('editAboutMessage'));
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
            'heading' => 'required',
            'message' => 'required'
        ]);

        $updateAboutMessage = AboutMessage::findOrFail($id);

        $updateAboutMessage->heading = $request->heading;
        $updateAboutMessage->slug = Str::slug($request->heading);
        $updateAboutMessage->message = $request->message;

        $updateAboutMessage->save();

        return redirect()->route('about-message.index')->with('success', 'About Us Managing Direcotor Message Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        AboutMessage::findOrFail($id)->delete();

        return redirect()->route('about-message.index')->with('success', 'About Us Message deleted successfully !');
    }
}
