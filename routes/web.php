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
    Route::get('/edit/{id}', 'GudangController@edit')->name('edit');
    Route::put('/update/{id}', 'GudangController@update')->name('update');
    Route::get('/delete/{id}', 'GudangController@destroy')->name('delete');
});

Route::group(['prefix'=>'kategori','as'=>'kategori.'], function(){
    Route::get('/', 'KategoriBarangController@index')->name('index');
    Route::get('/create', 'KategoriBarangController@create')->name('create');
    Route::post('/store', 'KategoriBarangController@store')->name('store');
    Route::get('/{id}', 'KategoriBarangController@show')->name('show');
    Route::get('/edit/{id}', 'KategoriBarangController@edit')->name('edit');
    Route::put('/update/{id}', 'KategoriBarangController@update')->name('update');
    Route::get('/delete/{id}', 'KategoriBarangController@destroy')->name('delete');
});