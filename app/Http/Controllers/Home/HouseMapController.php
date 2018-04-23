<?php

namespace App\Http\Controllers\Home;

use App\Models\Area;
use App\Models\HouseSellStatus;
use App\Models\NewHouse;
use App\Models\WuYeType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HouseMapController extends Controller
{

    public function index(){
        $area = new Area();
        $city = $area->getAllCity()->select('area_name','id')->get();
        $SellType = HouseSellStatus::select('name','id')->get();
        $wuye = WuYeType::get();
        return view('Home.pages.map.index',[
            'page_title' => '地图找房',
            'city' => $city,
            'sell_type' => $SellType,
            'wuye' => $wuye,
        ]);
    }
}
