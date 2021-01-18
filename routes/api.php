<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureBrowserIsValid;

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

Route::middleware([EnsureBrowserIsValid::class])->group(function () {
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
            Route::resource('posts', 'Admin\PostController')->only([
                'store', 'create', 'update', 'destroy'
            ]);
        });
    });

//Route::resource('posts', 'Admin\PostController');
    Route::resource('posts', 'Admin\PostController')->only([
        'index', 'show'
    ]);

//Route::get('/posts', 'Admin\PostsController@index')->name('posts');
//Route::get('/post/{slug}', 'Admin\PostsController@show')->name('posts');
});


