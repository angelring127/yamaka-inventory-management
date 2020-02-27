<?php

namespace App\Http\Controllers;

use App\BigCategory;
use App\MiddleCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use App\StockManagement;
use App\Record;

class StockController extends Controller
{
    public function index($date = null)
    {
        # code...

        $bigcategories = BigCategory::all();

        if (!$bigcategories) {
            abort(404);
        }
        return view('stock.index');
    }

}
