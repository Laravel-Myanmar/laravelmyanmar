<?php

Route::get('/', 'BlogController@index');
Route::get('/blogs/{slug}', 'BlogController@show');

Route::get('/pages/{slug}', 'PageController@show');

Route::get('/author/{slug}', 'AuthorController@show');
