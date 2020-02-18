<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class StockManagement extends Model
{
  use SoftDeletes;

  protected $fillable = ['big_category_id','item_id','middle_category_id','stock_status','stock_count','record_id','shipment_id','currentstock_count'];
}
