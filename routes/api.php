<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


/*Route::post('/post','PostsApiController@store');
route::get('/post','PostsApiController@index');
Route::get('/post/{id}','PostsApiController@show');
Route::put('/post/{id}',"PostsApiController@update");
Route::delete('/post/{id}','PostsApiController@destroy');*/
Route::resource('post','PostsApiController');
