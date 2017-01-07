<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::resource('movie','MovieController');
/*
Route::get('/prueba','PruebaController@index');
Route::get('/name/{nombre}','PruebaController@nombre');

Route::get('cursos/{nombre}', function($nombre){
    return "Tu nombre es $nombre";
});

Route::get('edad/{edad?}', function($edad = 20){
    return "Su edad es $edad";
});
*/
Route::get('/', function () {
    return view('welcome');
});
