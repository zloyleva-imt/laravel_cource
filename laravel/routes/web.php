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
    return view('welcome');
})->name('welcome');


Route::group(['prefix' => 'products', 'as' => 'products.'], function (){
    Route::get('/','ProductsController@index')->name('index');
    Route::post('/','ProductsController@store')->name('store');
    Route::get('/create','ProductsController@create')->name('create');
    Route::get('/{id}','ProductsController@show')->name('show')->where('id','\d+');
    Route::get('/{id}/edit', 'ProductsController@edit')->name('edit')->where('id','\d+');
    Route::post('/{id}', 'ProductsController@update')->name('update')->where('id','\d+');
    Route::delete('/{id}', 'ProductsController@destroy')->name('destroy')->where('id','\d+');
});
