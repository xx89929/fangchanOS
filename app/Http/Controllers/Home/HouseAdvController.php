<?php

namespace App\Http\Controllers\Home;

use App\Models\HouseAdv;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HouseAdvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Home.pages.house-advisory.index',['page_title' => '房产咨询']);
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
     * @param  \App\Models\HouseAdv  $houseAdv
     * @return \Illuminate\Http\Response
     */
    public function show(HouseAdv $houseAdv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HouseAdv  $houseAdv
     * @return \Illuminate\Http\Response
     */
    public function edit(HouseAdv $houseAdv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HouseAdv  $houseAdv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HouseAdv $houseAdv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HouseAdv  $houseAdv
     * @return \Illuminate\Http\Response
     */
    public function destroy(HouseAdv $houseAdv)
    {
        //
    }
}
