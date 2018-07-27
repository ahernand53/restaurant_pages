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
    Route::get('menu', 'AdminController@menus');
    Route::get('menu/search/{menu}', 'AdminController@searchMenu');
    Route::get('menu/search/{menu}/add', 'AdminController@addMenu');
    Route::post('menu/delete', 'AdminController@delMenu');
});

