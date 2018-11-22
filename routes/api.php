<?php

use Illuminate\Http\Request;

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

Route::group(['middleware' => 'api'], function () {
    Route::post('child_all', 'ChildController@all');
    Route::post('child_one', 'ChildController@one');
    Route::post('child_update', 'ChildController@update');
    Route::post('suckle_all', 'SuckleController@all');
});
