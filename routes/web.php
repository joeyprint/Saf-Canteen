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
    Route::get('/status', 'CustomerController@statusOrder');
    Route::prefix('/addOrder') ->group(function () {
        Route::get('/', 'CustomerController@selectOrder');
        Route::get('/sendAt', 'CustomerController@showSendAddress');
        Route::post('/sendAt', 'CustomerController@submitAddrSend');
    });
    Route::prefix('/authen') -> group(function() {
        Route::get('/', 'LoginController@custLogin');
        Route::post('/', 'LoginController@custSubmitLogin');
        Route::get('/register', 'RegisterController@custRegis');
    });
    Route::get('/logout', 'LoginController@custLogout');

    Route::prefix('/organ') -> group(function () {
        Route::get('/', 'LoginController@organLogin');
        Route::post('/', 'LoginController@organSubmitLogin');
        Route::prefix('/index') -> group(function () {
            Route::get('/', 'ShopController@index');
        });
        Route::get('/logout', 'LoginController@organLogout');    
    });

});
