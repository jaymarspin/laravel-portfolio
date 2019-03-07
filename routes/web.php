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

Route::get('/','clientController@index');

Route::get('/home','clientController@index');
Route::get('/work_wrap','clientController@work_wrap');
Route::get('/work','clientController@work_further');
Route::get('/admin','admin@index');
Route::get('/statistics','admin@statistics');
Route::get('/works','admin@works');
Route::get('/messages','admin@messages');
Route::get('/login','admin@login');


//post
Route::post('/store_work','admin_query@store_works');
Route::post('/message','admin_query@message');
Route::post('/logs','admin_query@logs');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
