<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{
    public function custLogin(Request $request){
        $user = $request->username;
        $pass = $request->password;
        $userLogin = DB::table('customers')
            ->select('username', 'password')
            ->where(['username','=', $user], ['password', '=', $pass])
            ->get();

            return view('userPages.authen');
    }

    public function organLogin(Request $request){
        $user = $request->username;
        $pass = $request->password;
        $organLogin = DB::table('staffs')
        ->select('username', 'password')
        ->where(['username','=', $user], ['password', '=', $pass])
        ->get();

        return view('orgPages.authen');
    }

    public function custLogout(){
        return redirect('/');
    }

    public function organLogout(){
        return redirect('/organ');
    }
}
