<?php

namespace App\Http\Controllers\Api;

use App\Models\NewHouse;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaiduMapController extends Controller
{

    public function getMapCoord(Request $request){
        $param = json_encode($request->post('param'));
        if($param){
            return $param;
        }else{
            return 0;
        }
        exit;
//        return $param;exit;
//        $url = "http://api.map.baidu.com/geocoder/v2/?address=$address&city=$city&output=json&ak=".config('app.BaiduMap.WebServer');
//        return $url;exit;
//        $client = new Client();
//        $res = $client->get($url);
//        return $res->getBody();
    }


    public function getHouseList(Request $request){
        if ($res = $request->input('viewrange')){
            $house_list = NewHouse::with('getSellStatus')->select('id','name','sell_status','average_money','address','lng','lat','default_pic')->whereBetween('lng',[$res[0][0],$res[1][0]])->whereBetween('lat',[$res[0][1],$res[1][1]])->get();
            foreach ($house_list as $list){
                $list->default_pic = config('filesystems.disks.uploads.url').'/'.$list->default_pic;
                $list->color = $list->getSellStatus->color;
                $list->sell_stype_name = $list->getSellStatus->name;
            }
        }else{
            return 0;
        }
        return $house_list;
    }
}
