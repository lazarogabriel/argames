<?php

Auth::routes();

Route::get('/', function(){ return view('home'); });

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/faqs', function(){ return view('faqs');});

Route::get('/rank', 'RankController@index');
Route::get('/ranking', 'RankController@searching');

// PROFILE ROUTES
Route::get('/profile', 'ProfileController@index');
Route::get('/profile/edit', 'ProfileController@index');
Route::post('/profile/edit/accept', 'ProfileController@edit');
Route::post('/profile/edit/password', 'ProfileController@editPassword');


// EN CASO DE TENER QUE ARREGLAR UN JUEGO RETORNAR ESTA VISTA
Route::get('/gameNotEnable', function(){ return view('gameNotEnable'); });


//GAMES ROUTES
Route::get('/pacman', function(){ return view('games.pacman'); });
Route::get('/truco', function(){ return view('games.truco'); });
Route::get('/ahorcado', function(){ return view('games.ahorcado'); });
Route::get('/ajedrez', function(){ return view('games.ajedrez'); });
Route::get('/tateti', function(){ return view('games.tateti'); });
Route::get('/damas', function(){ return view('games.damas'); });
