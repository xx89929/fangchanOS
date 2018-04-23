<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use ModelTree,AdminBuilder;

    protected $table = 'area';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        $this->setTitleColumn('area_name');
        $this->setOrderColumn('area_order');
    }

    public function parent()
    {
        return $this->belongsTo(Area::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Area::class, 'parent_id');
    }

    public function brothers()
    {
        return $this->parent->children();
    }

    public function City($id){
        $this->find($id);
        return $this->where('area_type',2);
    }

    public static function backAreaName($id){
        if (! $self = static::find($id)) {
            return [];
        }
        return $self->select('area_name')->find($id);
    }


    public static function options($id)
    {
        if (! $self = static::find($id)) {
            return [];
        }
        return $self->brothers()->pluck('area_name', 'id');
    }

    public function getAllCity(){
        return $this->where('area_type',2);
    }
}
