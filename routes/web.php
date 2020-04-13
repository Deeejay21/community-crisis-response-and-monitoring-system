<?php

Route::view('/', 'welcome')->name('site.index');
// DAVID
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');