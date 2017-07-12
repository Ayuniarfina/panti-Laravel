<?php

Route::get('/', 'Auth\RegisterController@index');
Route::get('/userPanti/create', 'Auth\RegisterController@create');
Route::post('/userPanti', 'Auth\RegisterController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
