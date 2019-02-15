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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/galery', 'HomeController@galery')->name('galery');
Route::get('/team', 'HomeController@team')->name('team');

Route::get('/game/{version}', 'HomeController@version')->name('version');
Route::post('/game/{version}', 'PostController@add')->name('addPost');