<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'gudang','as'=>'gudang.'], function(){
    Route::get('/', 'GudangController@index')->name('index');
    Route::get('/create', 'GudangController@create')->name('create');
    Route::post('/store', 'GudangController@store')->name('store');
    Route::get('/{id}', 'GudangController@show')->name('show');
});