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

Route::get('/',function(){
    return view('kolekcija/index');
});
Route::get('index',function(){
    return view('kolekcija/index');
});
Route::get('unos','UnosController@unos');
Route::post('unos', 'UnosController@store');
Route::delete('unos', [
    'as' => 'unos.destroy',
    'uses' => 'UnosController@destroy'
]);
Route::resource('dobar', 'DobarController');