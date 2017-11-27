<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ShopController extends Controller
{
    public function index() {
        return view('orgPages.index');
    }

    public function orderList(Request $request) {
        $order = DB::table('orders')
            ->join('customers', 'orders.custId', '=', 'customers.custId')
            ->join('payments', 'orders.paymentId', '=', 'payments.paymentId')
            ->where([
                ['stfId', '=', $request->session()->get('stfId')]
            ])
            ->get();
        // dd($order);
        return view('orgPages.index', ['order'=> $order]);
    }
}
