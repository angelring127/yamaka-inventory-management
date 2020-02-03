<?php

namespace App\Http\Controllers;

use App\BigCategory;
use Illuminate\Http\Request;

class StockController extends Controller
{
    //

    public function index($date = null)
    {
        # code...

        $bigcategories = BigCategory::all();

        if (!$bigcategories) {
            abort(404);
        }
        return view('stock.index');
    }

    public function navi() {

      $bigcategories = BigCategory::all();
      foreach ($bigcategories as $bigCategory) {
          echo 'middlecategory';
          foreach ($bigCategory->middleCategories as $middleCategory) {
            echo($middleCategory->items);
          }
          
      }
    //   return $bigcategories->toJson();
    }
}
