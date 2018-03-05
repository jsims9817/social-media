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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts/create', 'PostController@create')->middleware('auth');
Route::get('/posts/{video}', 'PostController@show')->middleware('auth');
Route::get('/posts', 'PostController@index')->name('publicView');
Route::get('/public/{link}', 'PostController@public');
Route::post('/posts', 'PostController@store')->middleware('auth');
Route::delete('posts/{video}','PostController@dlt')->middleware('auth');