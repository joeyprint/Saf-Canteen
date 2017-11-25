<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function custRegis () {
        return view('userPages.register');
    }

    public function custSubmitRegis () {
        return view('userPages.index');
    }

    // public function custRegis (Request $request) {
    //     dd($request)->all();
    // }

    public function organRegis () {
        return view('orgPages.register');
    }

    public function organSubmitRegis () {
        return view('orgPages.index');
    }

    // public function organRegis (Request $request) {
    //     dd($request)->all();
    // }
}
