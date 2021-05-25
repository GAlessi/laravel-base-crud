<?php

use Illuminate\Support\Facades\Route;

Route::get('/ospiti', 'TestController@ospiti')
-> name('ospiti');

Route::get('/ospiti/ospite/{id}', 'TestController@ospite')
-> name('ospite');

Route::get('/ospiti/create', 'TestController@create')
-> name('create');

Route::post('/ospiti/store', 'TestController@store')
    -> name('store');
