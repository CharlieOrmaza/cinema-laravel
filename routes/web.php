<?php

Route::get('/admin', 'FrontController@admin');

Route::resource('/usuario','UsuarioController');

Route::get('/home', 'FrontController@home');
Route::get('/contacto', 'FrontController@contacto');
Route::get('/reviews', 'FrontController@reviews');
