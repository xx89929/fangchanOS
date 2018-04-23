<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class NewHouse extends Model
{
    protected $table = 'new_house';

    protected $casts = [
        'house_tag' => 'json',
        'project_pic' => 'json',
        'floor_plan' => 'json',
        'prototype_room' => 'json',
    ];

    public function getArea(){
        return $this->hasOne(Area::class);
    }

    public function getAccount(){
        return $this->hasOne(Account::class,'id','broker');
    }

    public function get_account_info(){
        return $this->hasOne(AccountInfo::class,'user_id','broker');
    }

    public function getSellStatus(){
        return $this->hasOne(HouseSellStatus::class,'id','sell_status');
    }


    public function getTraitTags(){
//        return $this->hasOne(HouseTraitTag::class,'id','sell_status');
        return $this->belongsToMany(HouseTraitTag::class,'id','sell_status');
    }

    /**
     * @param $lng_start
     * @param $lng_end
     * @param $lat_start
     * @param $lat_end
     * 获取范围内的房源
     */
    public function ViewRanges($lng_start,$lng_end,$lat_start,$lat_end){
        return $this->whereBetween('lng',[$lng_start,$lng_end])->whereBetween('lat',[$lat_start,$lat_end]);
    }


}
