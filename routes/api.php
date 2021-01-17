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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::middleware('cors')->group(function(){
    //your_routes
    Route::get('/posts', 'Admin\Post\PostsController@index')->name('posts');

});*/


Route::group(['middleware' => 'cors'], function () {

    Route::get('/posts', 'Admin\PostsController@index')->name('posts');
    Route::get('/post/{slug}', 'Admin\PostsController@show')->name('posts');

});


