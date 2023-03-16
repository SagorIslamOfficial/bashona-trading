<?php

namespace App\Http\Controllers\BackEnd\Contact;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Contact\WhatsApp;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class WhatsAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexWhatsApp = WhatsApp::all();
        return view('backEnd.contact.whatsapp.index', compact('indexWhatsApp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.contact.whatsapp.create');
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
            'number' => 'required'
        ]);

        $whatsApp = new WhatsApp();

        $whatsApp->number = $request->number;
        $whatsApp->message = $request->message;
        $whatsApp->color = $request->color;
        $whatsApp->text = $request->text;
        $whatsApp->theme = $request->theme;
        $whatsApp->position = $request->position;
        $whatsApp->radius = $request->radius;

        $whatsApp->save();

        return redirect()->route('whatsapp.index')->with('success', 'Whats App Saved Successfully');
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
        $editWhatsApp = WhatsApp::first();
        return view('backEnd.contact.whatsapp.edit', compact('editWhatsApp'));
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
            'number' => 'required'
        ]);

        $updateWhatsApp = WhatsApp::findOrFail($id);

        $updateWhatsApp->number = $request->number;
        $updateWhatsApp->message = $request->message;
        $updateWhatsApp->color = $request->color;
        $updateWhatsApp->text = $request->text;
        $updateWhatsApp->theme = $request->theme;
        $updateWhatsApp->position = $request->position;
        $updateWhatsApp->radius = $request->radius;

        $updateWhatsApp->save();

        return redirect()->route('whatsapp.index')->with('success', 'Whats App Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        WhatsApp::findOrfail($id)->delete();

        return redirect()->route('whatsapp.index')->with('success', 'Whats App deleted successfully');
    }
}
