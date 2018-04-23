<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupBuy extends Model
{
    protected $table = 'group_buy';


    public function to_new_house(){
        return $this->hasOne(NewHouse::class,'id','house_id');
    }
}
