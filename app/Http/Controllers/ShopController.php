<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShopController extends Controller
{
    public function index() {
        return view('orgPages.index');
    }

    public function orderList() {

    }
}
