<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', 'TestController@home')
-> name('home');

Route::get('/ospite/{id}', 'TestController@ospite')
-> name('ospite');
