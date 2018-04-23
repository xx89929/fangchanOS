<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccountInfo extends Model
{
    protected $table = 'account_info';

    public $timestamps = false;

//    protected $fillable = ['nick_name','phone'];

    public function getAccount(){
        return $this->belongsTo(Account::class,'id','user_id');
    }
}
