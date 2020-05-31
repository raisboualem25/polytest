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
//error route
Route::get('/erreur',function () {
    echo "erreur";
});

//get total records
Route::get('/total','Controller@total_records');


//get max records per page
Route::get('/total/page','Controller@total_records_per_page');

//get total pages
Route::get('/total/pages','Controller@total_pages');

//test get
Route::get('/{page?}','Controller@index');
Route::get('/user/{id}','Controller@user');

//post
Route::post('/user/save','Controller@save');

//test update
Route::get('/user/update/{id}','Controller@update');

//test delete
Route::post('/user/delete','Controller@delete');


