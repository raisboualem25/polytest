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
Route::get('/{id}','Controller@post');
Route::get('/{id}/comments','Controller@post_comments');
Route::get('/posts/user/{user_id}','Controller@posts_by_user');
Route::get('/users/show','Controller@all_users');
Route::get('/user/{user_id}','Controller@user');

//POST routes