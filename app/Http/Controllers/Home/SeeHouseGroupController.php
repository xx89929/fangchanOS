<?php

namespace App\Http\Controllers\Home;

use App\Models\SeeHouseGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeeHouseGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Home.pages.see-house-group.index',['page_title' => '看房团']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SeeHouseGroup  $seeHouseGroup
     * @return \Illuminate\Http\Response
     */
    public function show(SeeHouseGroup $seeHouseGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SeeHouseGroup  $seeHouseGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(SeeHouseGroup $seeHouseGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SeeHouseGroup  $seeHouseGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SeeHouseGroup $seeHouseGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SeeHouseGroup  $seeHouseGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(SeeHouseGroup $seeHouseGroup)
    {
        //
    }
}
