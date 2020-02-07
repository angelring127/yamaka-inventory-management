<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    
    use SoftDeletes;
    /**
     * get Items
     */
    public function stocks () {
        return $this->hasMany('App\StockManagement','item_id');
    }

}
