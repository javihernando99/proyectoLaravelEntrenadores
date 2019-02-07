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


/*Route::get('/', function () {
    return view('welcome');
});

Route::get('/usuarios', function () {
    return 'usuarios';
});
Route::get('/usuarios/{id}', function ($id) {
    return "Mostrando  {$id}";
})->where ('id','[0-9]+');
Route::get('/usuarios/nuevo', function () {
    return "creando usuario nuevo";
});
Route::get('/saludo/{name}/{nickname?}', function ($name,$nickname=null) {
    if($nickname){
    return "Bienvenido {$name}, tu apodo es {$nickname}";
        }else{
        return"bienvenido{$name}";
    }
});
*/
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets','TicketsController@index');
Route::get('/tickets/{slug?}','TicketsController@show');
Route::get('/tickets/{slug?}/edit','TicketsController@edit');
Route::post('/tickets/{slug?}/edit', 'TicketsController@update');
Route::post('/tickets/{slug?}/delete', 'TicketsController@destroy');
Route::post('/tickets/comment', 'CommentsController@newComment');


