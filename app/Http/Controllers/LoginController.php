<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{
    public function custLogin(Request $request){
        return view('userPages.authen');
    }

    public function custSubmitLogin(Request $request){
        $user = $request->username;
        $pass = $request->password;
        $userLogin = DB::table('customers')
            ->select('username', 'password')
            ->where(['username','=', $user], ['password', '=', $pass])
            ->get();

            return redirect('/');
    }

    public function organLogin(Request $request){
        return view('orgPages.authen');
    }

    public function organSubmitLogin(Request $request){
        $user = $request->username;
        $pass = $request->password;
        $organLogin = DB::table('staffs')
        ->select('username', 'password')
        ->where(['username','=', $user], ['password', '=', $pass])
        ->get();

        return redirect('/organ');
    }

    public function custLogout(){
        return redirect('/');
    }

    public function organLogout(){
        return redirect('/organ');
    }
}
