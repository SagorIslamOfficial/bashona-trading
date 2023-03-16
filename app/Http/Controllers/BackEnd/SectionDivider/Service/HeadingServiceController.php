<?php

namespace App\Http\Controllers\BackEnd\SectionDivider\Service;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\SectionDivider\Service\Service;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HeadingServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $headingService = Service::all();
        return view('backEnd.heading-subText.hst-service.index', compact('headingService'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.heading-subText.hst-service.create');
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
            'headingService' => 'required'
        ]);

        $storeService = new Service();

        $storeService->headingService = $request->headingService;
        $storeService->subTextService = $request->subTextService;

        $storeService->save();

        return redirect()->route('hst-service.index')->with('success', 'Service Heading & Sub Text Saved Successfully.');
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
        $editService = Service::findOrFail($id);
        return view('backEnd.heading-subText.hst-service.edit', compact('editService'));
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
            'headingService' => 'required'
        ]);

        $updateService = Service::findOrFail($id);

        $updateService->headingService = $request->headingService;
        $updateService->subTextService = $request->subTextService;

        $updateService->save();

        return redirect()->route('hst-service.index')->with('success', 'Service Heading & Sub Text Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Service::findOrFail($id)->delete();

        return redirect()->route('hst-service.index')->with('success', 'Service Heading & Sub Text deleted successfully !');
    }
}
