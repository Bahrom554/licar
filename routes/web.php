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



Route::group(['middleware'=>['auth']],function() {
    Route::get('/', function () {
        return view('app');
    });
    Route::resource('driver','DriverController');
    Route::get('reddriver','DriverController@red')->name('red.driver');
    Route::get('warndriver','DriverController@warn')->name('warn.driver');
    Route::Put('put/{driver}','DriverController@paid')->name('paid.driver');
    Route::get('/home', 'HomeController@index')->name('home');

});
Auth::routes();