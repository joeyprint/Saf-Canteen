<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class LoginController extends Controller
{
    protected $userId;
    protected $orgId;

    public function custLogin(Request $request){
        return view('userPages.authen');
    }

    public function custSubmitLogin(Request $request){
        $email = $request->uemail;
        $pass = $request->upassword;
        $userLogin = DB::table('customers')
            ->where([
                ['email', '=', $email],
                ['password', '=', $pass]
            ])
            ->get();
        return view('userPages.index', ['user' => $userLogin[0]]);
    }

    public function organLogin(Request $request){
        return view('orgPages.authen');
    }

    public function organSubmitLogin(Request $request){
        $email = $request->email;
        $pass = $request->password;
        $organLogin = DB::table('staffs')
            ->select('stfId')
            ->where(['email','=', $email], ['password', '=', $pass])
            ->get();
        $orgId = $organLogin;
        return redirect('/organ');
    }

    public function custLogout(){
        return redirect('/');
    }

    public function organLogout(){
        return redirect('/organ');
    }
}
