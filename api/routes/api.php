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

Route::middleware('auth:api')->get('/user', function (Request $request) {
  return $request->user();
});

//Route::get('activities', 'ActivityController@index');
//Route::get('activities/{activity}', 'ActivityController@show');
//Route::post('activities', 'ActivityController@store');
//Route::put('activities/{activity}', 'ActivityController@update');
//Route::delete('activities/{activity}', 'ActivityController@delete');

Route::resource('activities', 'ActivityController');
