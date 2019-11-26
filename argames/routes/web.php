<?php

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/profile', 'ProfileController@index');
Route::get('/profile/edit', 'ProfileController@index');

Route::post('/profile/edit/accept', 'ProfileController@edit');
