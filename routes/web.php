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

//GET routes
Route::get('/','Controller@index');
Route::get('/users/{id}','Controller@user');

//POST routes
//test post
Route::get('/user/save','Controller@save');

//test update
Route::get('/user/update/{id}','Controller@update');

//test delete
Route::get('/user/delete/{id}','Controller@delete');
