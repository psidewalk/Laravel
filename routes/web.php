<?php

Route::get('/', 'ListController@show') ;

Auth::routes();

Route::get('/home', 'HomeController@index');
