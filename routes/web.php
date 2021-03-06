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
    return view('film.erd');
});
Route::get('/film','FilmController@index');
Route::get('/film/create','FilmController@create');
Route::post('/film','FilmController@store');
Route::get('/film/{film_id}','FilmController@show');
Route::get('/film/{film_id}/edit','FilmController@edit');
Route::put('/film/{film_id}','FilmController@update');
Route::delete('/film/{film_id}','FilmController@destroy');

