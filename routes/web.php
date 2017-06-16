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

//rutas para el recurso movie
Route::resource('movie', 'MovieController');
//ruta para eliminar registros con el metodo get
Route::get('movie/destroy/{id}', ['as'=>'movie/destroy', 'uses'=>'MovieController@destroy']);
//ruta para realizar busquedas de registros
Route::post('movie/search', ['as'=>'movie/search', 'uses'=>'MovieController@search']);
//ruta para editar registros
#Route::get('movie/edit/{id}', ['as'=>'movie/edit', 'uses'=>'MovieController@edit']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
