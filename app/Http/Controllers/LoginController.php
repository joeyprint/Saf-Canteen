<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{
    public function custLogin(Request $request){
        $user = $request->username;
        $pass = $request->password;
        return view('userPages.authen');
    }

    public function organLogin(Request $request){
        $user = $request->username;
        $pass = $request->password;
        return view('orgPages.authen');
    }
}
