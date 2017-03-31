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

Route::get('/', 'PagesController@getHome');

Route::get('AcercaDeMi', 'PagesController@getAbout');

Route::get('Contacto', 'PagesController@getContact');

Route::resource('posts', 'PostsController');
