<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
	Route::get('dapils', 'API\DapilController@index');
	Route::get('districts', 'API\DistrictController@index');
	Route::get('villages', 'API\VillageController@index');
	Route::get('details', 'API\UserController@details');
	Route::resource('volunteer-register', 'API\VolunteerRegisterController');
	Route::get('total-volunteer', 'API\VolunteerRegisterController@count');
});
