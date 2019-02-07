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
});


Route::resource('/Entrenador','EntrenadoresController');
Route::get('/Entrenador/editP/{slug}','EntrenadoresController@editPhoto');
Route::post('/Entrenador/editP/{slug}','EntrenadoresController@updatePhoto');


/*Route::get('/create','EntrenadoresController@create');
Route::post('/create','EntrenadoresController@store');
Route::get('/','EntrenadoresController@index');*/
