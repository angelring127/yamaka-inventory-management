<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MiddleCategory extends Model
{
    use SoftDeletes;
    /**
     * get Items
     */
    public function items () {
        return $this->hasMany('App\Item');
    }
}
