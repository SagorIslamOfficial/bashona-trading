<?php

namespace App\Http\Controllers\BackEnd\Home;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Home\SocialPageIntegration;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SocialPageIntegrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexSocialPageIntegration = SocialPageIntegration::all();
        return view('backEnd.footer-social-page.index', compact('indexSocialPageIntegration'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.footer-social-page.create');
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
            'page_link' => 'required'
        ]);

        $storeSocialPageIntegration = new SocialPageIntegration();

        $storeSocialPageIntegration->version = $request->version;
        $storeSocialPageIntegration->nonce = $request->nonce;
        $storeSocialPageIntegration->page_link = $request->page_link;

        $storeSocialPageIntegration->save();

        return redirect()->route('footer-page-integration.index')->with('success', 'Social Page Integration Saved Successfully');
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
        $editSocialPageIntegration = SocialPageIntegration::findOrFail($id);
        return view('backEnd.footer-social-page.edit', compact('editSocialPageIntegration'));
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
            'page_link' => 'required'
        ]);

        $updateSocialPageIntegration = SocialPageIntegration::findOrFail($id);

        $updateSocialPageIntegration->version = $request->version;
        $updateSocialPageIntegration->nonce = $request->nonce;
        $updateSocialPageIntegration->page_link = $request->page_link;

        $updateSocialPageIntegration->save();

        return redirect()->route('footer-page-integration.index')->with('success', 'Social Page Integration Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        SocialPageIntegration::findOrfail($id)->delete();

        return redirect()->route('footer-page-integration.index')->with('success', 'Social Page Integration deleted successfully');
    }
}
