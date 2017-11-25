<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CustomerController extends Controller
{
    public function index() {
        return view('userPages.index');
    }

    public function statusOrder (Request $request) {
        $status = DB::table('orders')
            ->join('payments', 'orders.paymentId', '=', 'payments.paymentId')
            ->join('customers', 'customers.custId', '=', 'orders.custId')
            ->select('orderId', 'paymentStatus')
            ->where([
                ['customers.custId', '=', $request->custId]
            ])
            ->get();
        return view('userPages.statusOrder');
    }

    public function selectOrder () {
        $order = DB::table('orders')
            ->join('orderDetails', 'orders.orderiId', '=', 'orderDetails.orderId')
            ->join('menus', 'orderDetails.menuId', '=', 'menus.menuId')
            ->select('menuName', 'menuPrice', 'quanty', 'orderTotal')
            ->where([
                ['orders.custId', '=', $request->custId]
            ])
            ->get();
        return view('userPages.stockInOrder');
    }
    
    
}
