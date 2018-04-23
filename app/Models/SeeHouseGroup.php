<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeeHouseGroup extends Model
{
    protected $table = 'see_house_group';

    public function get_new_house(){
        return $this->hasOne(NewHouse::class,'id','house_id');
    }
}
