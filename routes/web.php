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

Route::get('/', 'SampleController@index')->name('home');
Route::get('/helo', function () {
   return "Hello";
});
Route::get('/create', 'SampleController@create')->name('create');
Route::post('/create', 'SampleController@store')->name('store');
Route::get('/edit{id}', 'SampleController@edit')->name('edit');
Route::post('/update{id}', 'SampleController@update')->name('update');
Route::delete('/delete{id}', 'SampleController@delete')->name('delete');
