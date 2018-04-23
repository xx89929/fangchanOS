<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class  Article extends Model
{
    protected $table = 'article';

    public function get_article_cl(){
        return $this->hasOne(ArticleClassify::class,'id','classify');
    }
}
