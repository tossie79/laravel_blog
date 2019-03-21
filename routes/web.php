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

Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/services','PagesController@services');

// automatically creates all the routes for each resource(method) in the post controller when you call php artisan route:list

Route::resource('posts','PostsController'); 
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');
