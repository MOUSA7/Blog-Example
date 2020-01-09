<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



Route::group(['middleware'=>'admin'],function(){

    Route::get('/admin', function(){

        return view('admin.index');


    });

    Route::resource('admin/users', 'AdminUsersController',['names'=>[

        'index'=>'admin.users.index',
        'create'=>'admin.users.create',
        'store'=>'admin.users.store',
        'edit'=>'admin.users.edit',


    ]]);

    Route::resource('admin/posts','AdminPostsController',['names'=>[
        'index'=>'admin.posts.index',
        'create'=>'admin.posts.create',
        'edit'=>'admin.posts.edit'
    ]]);
});

Route::get('/ajax', function () {
    return view('Ajaxy.index');
});





