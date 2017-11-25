<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/') -> group(function () {
    Route::get('/', 'CustomerController@index');
    Route::get('/burger', 'MenuController@showBurgerMenu');
    Route::get('/chicken', 'MenuController@showChickenMenu');
    Route::get('/snack', 'MenuController@showSnackMenu');
    Route::get('/dessert', 'MenuController@showDessertMenu');
    Route::prefix('/authen') -> group(function() {
        Route::get('/', 'LoginController@custLogin');
        Route::get('/register', 'RegisterController@custRegis');
    });

    Route::prefix('/organ') -> group(function () {
        Route::get('/', 'ShopController@index');
        Route::prefix('/authen') -> group(function () {
            Route::get('/', 'LoginController@organLogin');
            Route::get('/register', 'RegisterController@organRegis');
        });
    });

});
