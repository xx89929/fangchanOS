<?php

namespace App\Http\Controllers\Home;

use App\Models\GroupBuy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GroupBuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Home.pages.groupbuy.index',['page_title' => '优惠团购']);
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
     * @param  \App\Models\GroupBuy  $groupBuy
     * @return \Illuminate\Http\Response
     */
    public function show(GroupBuy $groupBuy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GroupBuy  $groupBuy
     * @return \Illuminate\Http\Response
     */
    public function edit(GroupBuy $groupBuy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GroupBuy  $groupBuy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GroupBuy $groupBuy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GroupBuy  $groupBuy
     * @return \Illuminate\Http\Response
     */
    public function destroy(GroupBuy $groupBuy)
    {
        //
    }
}
