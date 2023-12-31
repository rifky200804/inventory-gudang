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
Route::group(['prefix'=>'auth','as'=>'auth.'], function(){
    Route::get('/login','AuthController@login')->name('login');
    Route::post('/postlogin', 'AuthController@postlogin')->name('postlogin');
    Route::get('/logout', 'AuthController@logout')->name('logout');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/','DashboardController@index')->name('dashboard');
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
    
    Route::group(['prefix'=>'barang','as'=>'barang.'], function(){
        Route::get('/', 'BarangController@index')->name('index');
        Route::get('/download/pdf', 'BarangController@printPDF')->name('print.pdf');
        Route::get('/create', 'BarangController@create')->name('create');
        Route::post('/store', 'BarangController@store')->name('store');
        Route::get('/{id}', 'BarangController@show')->name('show');
        Route::get('/edit/{id}', 'BarangController@edit')->name('edit');
        Route::put('/update/{id}', 'BarangController@update')->name('update');
        Route::get('/delete/{id}', 'BarangController@destroy')->name('delete');
    });
    
    Route::group(['prefix'=>'user','as'=>'user.'], function(){
        Route::get('/', 'UserController@index')->name('index');
        Route::get('/create', 'UserController@create')->name('create');
        Route::post('/store', 'UserController@store')->name('store');
        Route::get('/{id}', 'UserController@show')->name('show');
        Route::get('/edit/{id}', 'UserController@edit')->name('edit');
        Route::put('/update/{id}', 'UserController@update')->name('update');
        Route::get('/delete/{id}', 'UserController@destroy')->name('delete');
    });
});