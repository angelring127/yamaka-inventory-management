<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BigCategory extends Model
{   
    //  
    use SoftDeletes;
    
    /**
     * Get MiddleCategories
     */
    public function middleCategories() {
        return $this->hasMany('App\MiddleCategory');
    }
}
