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

Route::get('/', 'MainController@index');
Route::get('/products','MainController@products');
Route::get('/basket','MainController@basket');
Route::get('/checkout','MainController@checkout');
Route::get('/product','MainController@product');
Route::get('/categories','MainController@categories');
Route::get('/login','MainController@login');

