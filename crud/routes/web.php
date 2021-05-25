<?php

use Illuminate\Support\Facades\Route;

Route::get('/ospiti', 'TestController@ospiti')
-> name('ospiti');

Route::get('/ospiti/ospite/{id}', 'TestController@ospite')
-> name('ospiti.ospite');

Route::get('/ospiti/create', 'TestController@create')
-> name('ospiti.create');

Route::post('/ospiti/store', 'TestController@store')
    -> name('ospiti.store');
