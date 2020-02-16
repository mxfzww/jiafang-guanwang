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

//Route::get('/', 'FrontController@index');

Auth::routes();

Route::group(['middleware' =>'auth'], function () {
    Route::get('home', 'FrontController@index');
});

Route::group(['prefix' => ''], function () {

    Route::group(['namespace'=>'Front'], function () {

        Route::get('/', 'FrontController@index');

        Route::group(['prefix' => 'front'], function () {
            Route::get('index', 'FrontController@index')->name('index');
        });

    });
});
