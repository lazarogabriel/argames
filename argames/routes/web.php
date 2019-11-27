<?php

Auth::routes();

Route::get('/', function(){ return view('home'); });

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/faqs', function(){ return view('faqs');});

Route::get('/profile', 'ProfileController@index');
Route::get('/profile/edit', 'ProfileController@index');
Route::post('/profile/edit/accept', 'ProfileController@edit');
Route::post('/profile/edit/password', 'ProfileController@editPassword');
