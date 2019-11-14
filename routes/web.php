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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/categories','CategoryController');
Route::get('/categories/{id}/confirmDelete','CategoryController@confirmDelete');

Route::resource('/clients','ClientController');
Route::get('/clients/{id}/confirmDelete','ClientController@confirmDelete');

Route::resource('/products','ProductController');
Route::get('/products/{id}/confirmDelete','ProductController@confirmDelete');

Route::resource('/vendors','VendorController');
Route::get('/vendors/{id}/confirmDelete','VendorController@confirmDelete');

