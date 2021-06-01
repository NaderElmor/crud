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

Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::group(['prefix' => 'products'], function () {
    Route::get('/','ProductController@index') -> name('products.index');
    Route::get('create','ProductController@create') -> name('products.create');
    Route::post('store','ProductController@store') -> name('products.store');
    Route::get('edit/{id}','ProductController@edit') -> name('products.edit');
    Route::post('update/{id}','ProductController@update') -> name('products.update');
    Route::get('delete/{id}','ProductController@destroy') -> name('products.destroy');
});

