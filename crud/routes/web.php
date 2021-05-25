<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'TestController@home')
-> name('home');

Route::get('/ospite/{id}', 'TestController@ospite')
-> name('ospite');

Route::get('/form', 'TestController@form')
-> name('form');

Route::post('/store/movie', 'TestController@store')
    -> name('store');
