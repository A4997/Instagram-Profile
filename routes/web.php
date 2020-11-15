<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/header/{id}', 'HeaderController@index');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/updated_profile/{id}','ProfileController@updated_profile');
Route::get('/profile/{id}/edit','UsersController@edit');
Route::patch('/updated_profile/{id}','UsersController@save');
Route::get('/profile/{id}','ProfileController@index');
Route::get('/post/create','PostsController@create');
Route::post('/post','PostsController@save');
 Route::post('/post','PostsController@save2');
Route::get('/post/show/{id}','PostsController@show');
