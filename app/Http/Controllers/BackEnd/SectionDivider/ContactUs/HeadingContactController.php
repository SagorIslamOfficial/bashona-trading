<?php

namespace App\Http\Controllers\BackEnd\SectionDivider\ContactUs;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\SectionDivider\ContactUs\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HeadingContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $headingContact = Contact::all();
        return view('backEnd.heading-subText.hst-contact-us.index', compact('headingContact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.heading-subText.hst-contact-us.create');
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
            'headingContact' => 'required',
            'subTextContact' => 'required',
            'headingContactUs' => 'required',
            'subTextContactUs' => 'required'
        ]);

        $storeContact = new Contact();

        $storeContact->headingContact = $request->headingContact;
        $storeContact->subTextContact = $request->subTextContact;
        $storeContact->headingContactUs = $request->headingContactUs;
        $storeContact->subTextContactUs = $request->subTextContactUs;

        $storeContact->save();

        return redirect()->route('hst-contact-us.index')->with('success', 'Contact Heading & Sub Text Saved Successfully.');
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
        $editContact = Contact::findOrFail($id);
        return view('backEnd.heading-subText.hst-contact-us.edit', compact('editContact'));
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
            'headingContact' => 'required',
            'subTextContact' => 'required',
            'headingContactUs' => 'required',
            'subTextContactUs' => 'required'
        ]);

        $updateContact = Contact::findOrFail($id);

        $updateContact->headingContact = $request->headingContact;
        $updateContact->subTextContact = $request->subTextContact;
        $updateContact->headingContactUs = $request->headingContactUs;
        $updateContact->subTextContactUs = $request->subTextContactUs;

        $updateContact->save();

        return redirect()->route('hst-contact-us.index')->with('success', 'Contact Heading & Sub Text Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Contact::findOrFail($id)->delete();

        return redirect()->route('hst-contact-us.index')->with('success', 'Contact Heading & Sub Text deleted successfully !');
    }
}
