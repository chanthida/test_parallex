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


Route::get('admin/menu', 'AdminController@menu');

Route::get('admin/menu/edit/{id}', 'AdminController@menuEdit');

Route::post('admin/menu/save/', 'AdminController@menuSave');


Route::get('admin/profile', 'AdminController@profile');

Route::post('admin/profile/save', 'AdminController@profileSave');


Route::post('admin/menu_content/delete', 'AdminController@deleteMenuContent');

Route::get('admin/cus/{slug}', ['uses' => 'AdminController@cusPage']);

Route::get('admin/cus/{slug}/edit/{id}', 'AdminController@cusPageEdit');

Route::get('admin/cus/{slug}/add', 'AdminController@cusPageAdd');

Route::post('admin/cus/save','AdminController@cusSave');

Route::post('admin/cus/add','AdminController@cusAdd');

