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

Route::get('/', 'App\Http\Controllers\ProductsController@index')->name('home');
Route::get('/bicycles', 'App\Http\Controllers\PagesController@bicycles')->name('bicycles');
Route::get('/bicycles_under_13', 'App\Http\Controllers\PagesController@bicycles_under_13')->name('bicycles13');
