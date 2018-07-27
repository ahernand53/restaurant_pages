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

Route::get('/', 'MainController@index');

Route::get('/menu', 'FoodController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'],function () {
    Route::get('', 'AdminController@index');
    Route::get('menus', 'AdminController@menus');
    Route::get('menus/search/{menu}', 'AdminController@searchMenu');
    Route::get('menus/search/{menu}/add', 'AdminController@addMenu');
});

