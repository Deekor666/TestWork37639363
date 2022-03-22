<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('companies', 'CompanyController@index');
Route::group(['prefix' => 'company'], function () {
    Route::post('add', 'CompanyController@add');
    Route::get('edit/{id}', 'CompanyController@edit');
    Route::post('update/{id}', 'CompanyController@update');
    Route::delete('delete/{id}', 'CompanyController@delete');
});
