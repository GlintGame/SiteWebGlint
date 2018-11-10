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

Route::get('/{version}', 'HomeController@version')->name('version');
Route::post('/{version}', 'HomeController@addPost')->name('post');

Route::controller('/login', 'UserAuthController');