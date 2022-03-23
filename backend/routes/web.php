<?php

use Illuminate\Support\Facades\Route;

Route::get(
    '/api',
    function () {
        return view('welcome');
    }
);
Route::view('/{any}', 'home')
    ->middleware(['auth'])
    ->where('any', '.*');
