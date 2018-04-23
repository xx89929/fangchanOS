<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use AdminBuilder;

    protected $table = 'account';

    protected $hidden = ['password','remember_token'];

//    public function getAccountInfo(){
//        return $this->hasOne(AccountInfo::class,'user_id','id');
//    }

    public function get_account_info(){
        return $this->hasOne(AccountInfo::class,'user_id');
    }

    public function getAccountType(){
        return $this->hasOne(AccountType::class,'id','type_id');
    }

    public function parent(){

    }

    public function brothers(){
        return $this->parent()->chidren();
    }


    protected function getBroker(){
        return $this->where('type_id',1);
    }


    public static function options($id)
    {
        if (! $self = static::find($id)) {
            return [];
        }
        return $self->brothers()->pluck('name', 'id');
    }
}
