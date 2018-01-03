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

Route::get('/', 'SessionsController@login');

/*DAFTAR USER*/
Route::get('signup', 'SignupController@signup')->name('signup');
Route::post('signup', 'SignupController@signup_store')->name('signup.store');

/*LOGIN LOGOUT*/
Route::get('login', 'SessionsController@login')->name('login');
Route::post('login', 'SessionsController@login_store')->name('login.store');
Route::get('logout', 'SessionsController@logout')->name('logout');

/*MASUKIN DETAIL PERTAMA*/
Route::get('detail', 'UserController@detail_get')->name('detail');
Route::post('detail', 'UserController@detail_store')->name('detail.store');

/*USER CONTROL*/
Route::resource('user', 'UserController');

/*ADMIN CONTROLLER*/
Route::resource('admin', 'AdminController');
Route::get('list', 'AdminController@get_list')->name('list');
Route::get('cv', 'AdminController@get_list_cv')->name('cv');

/*PASSWORD RESET*/
Route::get('forgot-password', 'ReminderController@create')->name('reminders.create');
Route::post('forgot-password', 'ReminderController@store')->name('reminders.store');

Route::get('reset-password/{id}/{token}', 'ReminderController@edit')->name('reminders.edit');
Route::post('reset-password/{id}/{token}', 'ReminderController@update')->name('reminders.update');