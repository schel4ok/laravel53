<?php

//Auth::routes();
/*
|--------------------------------------------------------------------------
| Admin section
|--------------------------------------------------------------------------
*/
Route::get('/schel4ok', 		['as' => 'admin.index', 			'uses' => 'AdminController@index']);
/*
|--------------------------------------------------------------------------
| Public section
|--------------------------------------------------------------------------
*/

	Route::get('/',  				['as' => 'home', 			'uses' => 'HomeController@index']);
	Route::post('/', 				['as' => 'callback', 		'uses' => 'PostController@callback']);
	//Route::get('/search',   		['as' => 'search',  		'uses' => 'PostController@search']);


	//   NEWS  
	Route::get('/news',  			['as' => 'news.index', 		'uses' => 'NewsController@getIndex']);
	Route::get('news/{newsitem}', 	['as' => 'news.item', 		'uses' => 'NewsController@getItem']);