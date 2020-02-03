<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MiddleCategory extends Model
{
    /**
     * get Items
     */
    public function items () {
        return $this->hasMany('App\Item');
    }
}
