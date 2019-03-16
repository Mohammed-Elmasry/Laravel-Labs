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

Route::get('/posts', 'PostsController@index')->name("posts.index"); //this is the index
Route::get('/posts/create', 'PostsController@create')->name("posts.create"); //this is to create a form 
Route::post('/posts', 'PostsController@store')->name('posts.store'); //this is storing in database
Route::get('posts/{post}/edit','PostsController@edit')->name('posts.edit');
Route::put('posts/{post}','PostsController@update')->name('posts.update');
Route::delete('/posts/{post}/delete', 'PostsController@destroy')->name('posts.destroy'); //this is deleting from database
