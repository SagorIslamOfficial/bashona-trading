<?php

namespace App\Http\Controllers\BackEnd\Home;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Home\FooterSocialLink;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class FooterSocialLinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexFooterSocialLinks = FooterSocialLink::all();
        return view('backEnd.footer-social.index', compact('indexFooterSocialLinks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.footer-social.create');
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
            'name' => 'required',
            'color' => 'required',
            'link' => 'required'
        ]);

        $storeFooterSocialLinks = new FooterSocialLink();

        $storeFooterSocialLinks->name = $request->name;
        $storeFooterSocialLinks->color = $request->color;
        $storeFooterSocialLinks->slug = Str::slug($request->name);
        $storeFooterSocialLinks->link = $request->link;

        $storeFooterSocialLinks->save();

        return redirect()->route('footer-social.index')->with('success', 'Footer Color Saved Successfully :)');
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
        $editFooterSocialLinks = FooterSocialLink::findOrFail($id);
        return view('backEnd.footer-social.edit', compact('editFooterSocialLinks'));
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
            'name' => 'required',
            'color' => 'required',
            'link' => 'required'
        ]);

        $updateFooterSocialLinks = FooterSocialLink::findOrFail($id);

        $updateFooterSocialLinks->name = $request->name;
        $updateFooterSocialLinks->color = $request->color;
        $updateFooterSocialLinks->slug = Str::slug($request->name);
        $updateFooterSocialLinks->link = $request->link;

        $updateFooterSocialLinks->save();

        return redirect()->route('footer-social.index')->with('success', 'Footer Soicla Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        FooterSocialLink::findOrfail($id)->delete();

        return redirect()->route('footer-social.index')->with('success', 'Footer Tag deleted successfully !');
    }
}
