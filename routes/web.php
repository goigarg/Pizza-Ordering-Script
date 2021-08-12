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

Route::get('/', 'PizzaController@index');
Route::get('/about', 'PagesController@about');

//Route::resource('post', 'PostsController');
//Post Route
Route::get('post', 'PostsController@index');
Route::get('post/create', 'PostsController@create')->name('post.create');
Route::get('post/{id}', 'PostsController@show')->name('post.show')->middleware('auth');
Route::post('post', 'PostsController@store');
Route::delete('post/{id}', 'PostsController@destroy');

//Pizza Route

Route::get('pizza/admin', 'PizzaController@admin')->middleware('auth');

Route::resource('pizza', PizzaController::class);



Auth::routes([
    'register' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
