<?php

namespace App\Http\Controllers\Home;

use App\Models\NewHouse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Home.pages.newhouse.index',['page_title' => '新房楼盘']);
    }

    public function index_info(){
        return view('Home.pages.newhouse-info.index',['page_title' => '新房楼盘详情']);
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
     * @param  \App\Models\NewHouse  $newHouse
     * @return \Illuminate\Http\Response
     */
    public function show(NewHouse $newHouse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewHouse  $newHouse
     * @return \Illuminate\Http\Response
     */
    public function edit(NewHouse $newHouse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewHouse  $newHouse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewHouse $newHouse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewHouse  $newHouse
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewHouse $newHouse)
    {
        //
    }
}
