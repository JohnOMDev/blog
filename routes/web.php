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

Route::get('posts', 'PostController@index');
Route::get('posts/create', 'PostController@create');
Route::post('posts/create', 'PostController@store')-> name('posts.store');
Route::get('posts/edit/{id}', 'PostController@edit')-> name('posts.edit');
Route::post('posts/edit/{id}', 'PostController@update')-> name('posts.update');
Route::get('posts/delete/{id}','PostController@delete')-> name('posts.delete');
Route::post('posts/destroy/{id}','PostController@destroy')-> name('posts.destroy');
Route::get('posts/{id}','PostController@show');


Route::get('categories', 'CategoryController@index');
Route::get('categories/create', 'CategoryController@create');
Route::post('categories/create', 'CategoryController@store')-> name('categories.store');
Route::get('categories/edit/{id}', 'CategoryController@edit')-> name('categories.edit');
Route::post('categories/edit/{id}', 'CategoryController@update')-> name('categories.update');
Route::get('categories/delete/{id}', 'CategoryController@delete')-> name('categories.delete');
Route::post('categories/delete/{id}', 'CategoryController@destroy')-> name('categories.destroy');
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', 'PostController@index')->name('home');
// Route::get('register','Auth\RegisterController@Register');

// Route::get('/home', 'HomeController@index')->name('home');
