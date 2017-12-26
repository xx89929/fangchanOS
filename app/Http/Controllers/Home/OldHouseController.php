<?php

namespace App\Http\Controllers\Home;

use App\Models\OldHouse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OldHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Home.pages.oldhouse.index',['page_title' => '二手房']);
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
     * @param  \App\Models\OldHouse  $oldHouse
     * @return \Illuminate\Http\Response
     */
    public function show(OldHouse $oldHouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OldHouse  $oldHouse
     * @return \Illuminate\Http\Response
     */
    public function edit(OldHouse $oldHouse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OldHouse  $oldHouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OldHouse $oldHouse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OldHouse  $oldHouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(OldHouse $oldHouse)
    {
        //
    }
}
