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
Route::post('Contacto', 'PagesController@postContact');

Route::get('blog/{slug}', 'BlogController@getSingle')->name('blog.single')->where('slug', '[\w\d\-\_]+');
Route::post('comments/{post_id}/{user_id}', 'CommentsController@store')->name('comments.store');

Auth::routes();

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider')->name('oauth');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('oauthCallback');

Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group(function()
{
  Route::resource('users', 'UserControlController', ['except' => ['store', 'show']]);
  Route::resource('admins', 'AdminControlController', ['except' => ['show']]);
  Route::resource('posts', 'PostsController');
  Route::resource('categories', 'CategoriesController', ['except' => ['show']]);
  Route::resource('tags', 'TagsController', ['except' => ['show']]);
  Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@getDashboard')->name('admin.dashboard');
});
