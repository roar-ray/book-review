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

Auth::routes();

Route::get('/', 'BookController@index')->name('index');
Route::post('/', 'BookController@search')->name('search');

Route::group(['middleware' => 'auth'], function () {
    Route::post('create', 'BookController@create')->name('create');
    Route::post('store', 'BookController@store')->name('store');
});

Route::get('/logout', 'Auth\LoginController@logout');
