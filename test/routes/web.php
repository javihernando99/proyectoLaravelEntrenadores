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


Route::get('/usuarios',function (){
    return 'Usuarios';
});
Route::get('/usuarios/nuevo',function (){
    return "crear nuevo usuario";
});

//Route::get('posts/create','PostsController@create');
Route::get('/usuarios/{id}',function ($id){
    return "Mostrando detalles del usuario: {$id}";
});

Route::get('/usuarios/{id}/edit',function ($id){
    return "editando usuario {$id}";
})->where('id','[0-9]+');
