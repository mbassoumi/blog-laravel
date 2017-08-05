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

Route::get('/','PostsController@index');
Route::get('/posts/create','PostsController@create');
Route::post('/posts','PostsController@store');
Route::get('/posts/{post}','PostsController@show');


Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/profile','UsersController@profile');
Route::get('/profile/{user}','UsersController@user');


Route::get('/posts/{post}/edit', 'PostsController@edit');
Route::patch('/posts/{post}/update', 'PostsController@update');

Route::get('/posts/{post}/destroy', 'PostsController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout','SessionsController@destroy');
