<?php

Route::get('/', 'UserPantiController@index');
Route::get('/userPanti/create', 'UserPantiController@create');
Route::post('/userPanti', 'UserPantiController@store');
