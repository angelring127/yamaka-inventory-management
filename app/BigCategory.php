<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BigCategory extends Model
{   
    //  
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    /**
     * Get MiddleCategories
     */
    public function middleCategories() {
        return $this->hasMany('App\MiddleCategory');
    }
}
