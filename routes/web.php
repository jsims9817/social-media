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

Route::get('/', 'PostController@index')->name('publicView');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/posts/create', 'PostController@create')->middleware('auth');
Route::get('/posts/{post}', 'PostController@show');
Route::get('/posts', 'PostController@index')->name('publicView');
Route::post('/posts', 'PostController@store')->middleware('auth');
Route::delete('posts/{post}','PostController@dlt')->middleware('auth');
