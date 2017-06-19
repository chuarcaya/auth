<?php
Route::group(['prefix' => 'auth','middleware' => ['web']], function () {
	Route::get('/login', 'Ecommerce\Auth\AuthController@login');
	Route::get('/register', 'Ecommerce\Auth\AuthController@register');
	Route::get('/logout', 'Ecommerce\Auth\AuthController@logout');
	Route::get('/test', 'Ecommerce\Auth\AuthController@test');
	Route::post('/loginProcess', 'Ecommerce\Auth\AuthController@loginProcess');
	Route::post('/registerProcess', 'Ecommerce\Auth\AuthController@registerProcess');
});