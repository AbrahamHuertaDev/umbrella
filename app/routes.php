<?php


Route::get('/', 'AuthController@index');
Route::get('/users', 'AuthController@users');

Route::get('contact','HomeController@contact');
Route::post('contact','HomeController@contactPost');