<?php

namespace App\Http\Controllers\BackEnd\AboutUs;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\AboutUs\Team\TeamCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $indexTeamCategories = TeamCategory::all();
        return view('backEnd.about-us.team.category.index', compact('indexTeamCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backEnd.about-us.team.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'abc' => 'required'
        ]);

        $storeTeamCategory = new TeamCategory();

        $storeTeamCategory->name = $request->name;
        $storeTeamCategory->abc = $request->abc;
        $storeTeamCategory->slug = Str::slug($request->abc);

        $storeTeamCategory->save();

        return redirect()->route('team-category.index')->with('success', 'Team Category Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editTeamCategory = TeamCategory::findOrFail($id);
        return view('backEnd.about-us.team.category.edit', compact('editTeamCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required'
        ]);

        $updateTeamCategory = TeamCategory::findOrFail($id);

        $updateTeamCategory->name = $request->name;
        $updateTeamCategory->slug = Str::slug($request->name);

        $updateTeamCategory->save();

        return redirect()->route('team-category.index')->with('success', 'Team Category Updated Successfully :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TeamCategory::findOrfail($id)->delete();

        return redirect()->route('team-category.index')->with('success', 'Team Category Deleted successfully !');
    }
}
