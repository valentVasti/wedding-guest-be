<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'api'], function () {
    Route::get('/generate-slug', 'App\Http\Controllers\GuestController@generateSlug');
    Route::get('/guest/{slug}', 'App\Http\Controllers\GuestController@getGuestBySlug');
});

Route::get('/', 'App\Http\Controllers\GuestController@index');
