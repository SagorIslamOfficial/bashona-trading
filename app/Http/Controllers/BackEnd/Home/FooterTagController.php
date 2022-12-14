<?php

namespace App\Http\Controllers\BackEnd\Home;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Home\FooterTag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class FooterTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexFooterTags = FooterTag::all();
        return view('backEnd.footer-tag.index', compact('indexFooterTags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.footer-tag.create');
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
            'link' => 'required'
        ]);

        $storeFooterTag = new FooterTag();

        $storeFooterTag->name = $request->name;
        $storeFooterTag->slug = Str::slug($request->name);
        $storeFooterTag->link = $request->link;

        $storeFooterTag->save();

        return redirect()->route('footer-tag.index')->with('success', 'Footer Tag Saved Successfully :)');
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
        $editFooterTag = FooterTag::findOrFail($id);
        return view('backEnd.footer-tag.edit', compact('editFooterTag'));
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
            'link' => 'required'
        ]);

        $updateFooterTag = FooterTag::findOrFail($id);

        $updateFooterTag->name = $request->name;
        $updateFooterTag->slug = Str::slug($request->name);
        $updateFooterTag->link = $request->link;

        $updateFooterTag->save();

        return redirect()->route('footer-tag.index')->with('success', 'Footer Tag Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        FooterTag::findOrfail($id)->delete();

        return redirect()->route('footer-tag.index')->with('success', 'Footer Tag deleted successfully !');
    }
}
