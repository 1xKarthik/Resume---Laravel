<?php
	Auth::routes();
	
	Route::get( '/', function () {
		return view( 'index' );
	} );
	
	//Route::get('/home', 'HomeController@index')->name('home');
	
	Route::group( [ 'prefix' => 'admin' ], function () {
		Voyager::routes();
	} );
