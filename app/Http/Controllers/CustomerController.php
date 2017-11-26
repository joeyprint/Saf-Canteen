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
                ['customers.custId', '=', $request->session()->get('userId')]
            ])
            ->get();
        return view('userPages.statusOrder', ['status' => $status]);
    }

    public function selectOrder (Request $request) {
        $order = DB::table('orders')
            ->join('orderDetails', 'orders.orderId', '=', 'orderDetails.orderId')
            ->join('menus', 'orderDetails.menuId', '=', 'menus.menuId')
            ->select('menuName', 'menuPrice', 'menuPic', 'quantity', 'orderTotal')
            ->where([
                ['orders.custId', '=', $request->session()->get('userId')]
            ])
            ->get();
            // dd($order);
        return view('userPages.stockInOrder', ['orderlist' => $order]);
    }
    
    public function showSendAddress (Request $request) {
        $show = DB::table('orders')
            ->join('customers', 'customers.custId', '=', 'orders.custId')
            ->select('orderSendAddress')
            ->where([
                ['customers.custId', '=', $request->session()->get('userId')]
            ])
            ->get();
        return view('userPages.selectAddrSend', ['showAddr' => $show]);
    }

    public function submitAddrSend () {
        return redirect('/status');
    }
}
