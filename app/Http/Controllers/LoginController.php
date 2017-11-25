<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Barryvdh\Debugbar\Facade as Debugbar;

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
        $request->session()->put('userId', $userLogin[0]->custId);
        $request->session()->put('userFirstname', $userLogin[0]->custFirstName);
        return redirect('/');
    }

    public function organLogin(Request $request){
        return view('orgPages.authen');
    }

    public function organSubmitLogin(Request $request){
        $email = $request->stfemail;
        $pass = $request->stfpassword;
        $organLogin = DB::table('staffs')
            ->where([
                ['email', '=', $email],
                ['password', '=', $pass]
            ])
            ->get();
            Debugbar::info($organLogin[0]);
        $request->session()->put('userId', $organLogin[0]->stfId);
        $request->session()->put('userFirstname', $organLogin[0]->stfFirstName);
        return redirect('/organ/index');
    }

    public function custLogout(){
        Session::flush();
        return redirect('/');
    }

    public function organLogout(){
        Session::flush();        
        return redirect('/organ');
    }
}
