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

Route::get('/', 'WelcomeController@index');
//Route::get('/', 'WelcomeController@index')->middleware(\App\Http\Middleware\Alert::class);

Auth::routes();

Route::get('admin', 'AdminController@index');

Route::get('admin/home','AdminController@home');

Route::get('admin/home/edit/{id}','AdminController@homeEdit');

Route::post('admin/home/save','AdminController@save');