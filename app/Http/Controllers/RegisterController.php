<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function custSubmitRegis(){
        return view('userPages.index');
    }

    public function custRegis(Request $request){
        dd($request)->all();
    }

    public function organSubmitRegis(){
        return view('orgPages.index');
    }

    public function organRegis(Request $request){
        dd($request)->all();
    }
}
