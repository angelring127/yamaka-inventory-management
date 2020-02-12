<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockManagement extends Model
{
  protected $fillable = ['big_category_id','item_id','middle_category_id','stock_status','stock_count','record_id'];
}
