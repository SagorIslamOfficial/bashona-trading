<?php

namespace App\Http\Controllers\BackEnd\Contact;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\Contact\Address;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;


class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $indexAddress = Address::all();
        return view('backEnd.contact.address.index', compact('indexAddress'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backEnd.contact.address.create');
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
            'office_location' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $address = new Address();

        $address->office_location = $request->office_location;
        $address->slug = Str::slug($request->office_location);
        $address->address = $request->address;
        $address->phone = $request->phone;
        $address->email = $request->email;

        $address->save();

        return redirect()->route('address.index')->with('success', 'Contact Address Saved Successfully :)');
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
        $editAddress = Address::first();
        return view('backEnd.contact.address.edit', compact('editAddress'));
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
            'office_location' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required'
        ]);

        $updateAddress = Address::findOrFail($id);

        $updateAddress->office_location = $request->office_location;
        $updateAddress->slug = Str::slug($request->office_location);
        $updateAddress->address = $request->address;
        $updateAddress->phone = $request->phone;
        $updateAddress->email = $request->email;

        $updateAddress->save();

        return redirect()->route('address.index')->with('success', 'Contact Address Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        Address::findOrfail($id)->delete();

        return redirect()->route('address.index')->with('success', 'Address deleted successfully !');
    }
}
