<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function showBurgerMenu() {
        $burgerMenu = DB::table('menus')
                ->select('menuName')
                ->where(['categoryId', '=', 1])
                ->get();
        return view('userPages.burgerMenu');
    }

    public function showChickAndSnackMenu() {
        $chickenMenu = DB::table('menus')
                ->select('menuName')
                ->where(['categoryId', '=', 2])
                ->get();
        $snackMenu = DB::table('menus')
                ->select('menuName')
                ->where(['categoryId', '=', 3])
        return view('userPages.chickAndSnackMenu');
    }

    public function showDessertMenu() {
        $dessertMenu = DB::table('menus')
                ->select('menuName')
                ->where(['categoryId', '=', 4])
                ->get();
        return view('userPages.dessertMenu');
    }
}
