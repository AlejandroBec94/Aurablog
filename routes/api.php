<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');
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

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'Auth\AuthController@login');
    Route::post('signup', 'Auth\AuthController@signup');

    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::get('logout', 'Auth\AuthController@logout');
        Route::post('user', 'Auth\AuthController@user');
        Route::resource('posts','Admin\PostController')->only([
            'store','create'
        ]);
    });
});

//Route::resource('posts', 'Admin\PostController');
Route::resource('posts','Admin\PostController')->only([
    'index', 'show'
]);

//Route::get('/posts', 'Admin\PostsController@index')->name('posts');
//Route::get('/post/{slug}', 'Admin\PostsController@show')->name('posts');



