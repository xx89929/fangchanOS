<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $table = 'admin_movies';
    protected $dates = ['release_at'];
//    protected $dateFormat = 'U';
}
