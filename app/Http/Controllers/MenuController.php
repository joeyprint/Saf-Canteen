<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function showBurgerMenu () {
        $burgerMenu = DB::table('menus')
                ->select('menuName','menuDetail', 'menuPic')
                ->where('categoryId', '=', 1)
                ->get();
        // dd($burgerMenu);
        return view('userPages.burgerMenu', ['burgerMenu' => $burgerMenu]);
    }   

    public function showChickenMenu () {
        $chickenMenu = DB::table('menus')
                ->select('menuName','menuDetail', 'menuPic')
                ->where('categoryId', '=', 2)
                ->get();
        // dd($chickenMenu);
        return view('userPages.chickenMenu', ['chickenMenu' => $chickenMenu]);
    }

    public function showSnackMenu () {
        $snackMenu = DB::table('menus')
                ->select('menuName','menuDetail', 'menuPic')
                ->where('categoryId', '=', 3)
                ->get();
        // dd($snackMenu);
        return view('userPages.snackMenu', ['snackMenu' => $snackMenu]);
    }

    public function showDessertMenu () {
        $dessertMenu = DB::table('menus')
                ->select('menuName','menuDetail', 'menuPic')
                ->where('categoryId', '=', 4)
                ->get();
        // dd($dessertMenu);
        return view('userPages.dessertMenu', ['dessertMenu' => $dessertMenu]);
    }
}
