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

Route::get('blog/{slug}', 'BlogController@getSingle')->name('blog.single')->where('slug', '[\w\d\-\_]+');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group(function()
{
  Route::resource('users', 'UserControlController', ['except' => ['store', 'show']]);
  Route::resource('admins', 'AdminControlController', ['except' => ['show']]);
  Route::resource('posts', 'PostsController');
  Route::resource('categories', 'CategoriesController', ['except' => ['show']]);
  Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@getDashboard')->name('admin.dashboard');
});
