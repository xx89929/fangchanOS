<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OldHouse extends Model
{
    protected $table = 'old_house';

    protected $casts = [
        'room_pics' => 'json',
        'house_pics' => 'json',
    ];


    public function get_account_info(){
        return $this->hasOne(AccountInfo::class,'user_id','broker');
    }

    public function getSellStatus(){
        return $this->hasOne(HouseSellStatus::class,'id','sell_status');
    }
}
