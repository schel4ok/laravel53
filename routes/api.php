<?php

use Illuminate\Http\Request;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::get('/search', ['as' => 'api.search', 'uses' => 'Api\SearchController@search']);