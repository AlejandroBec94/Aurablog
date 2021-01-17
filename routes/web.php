<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();


Route::get('/{any}','Admin\HomeController@index')->where('any','.*');

//Route::get('/admin', 'Admin\HomeController@index')->name('admin');
//Route::get('/posts', 'Admin\Post\PostsController@index')->name('posts');
//Route::get('/post/{slug}', 'Admin\Post\PostsController@show')->name('post');
