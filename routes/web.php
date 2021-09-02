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
Route::resource('sub_categories','App\Http\Controllers\SubCategoriesController');
Route::resource('subsub_categories','App\Http\Controllers\SubsubCategoriesController');
Route::resource('products','App\Http\Controllers\ProductsController');
Route::get('products/show/{id}/{sub_sub_category_id}','App\Http\Controllers\ProductsController@show')->name('products.show');
Route::get('/bicycles', 'App\Http\Controllers\PagesController@bicycles')->name('bicycles');
Route::get('/accessories', 'App\Http\Controllers\ProductsController@accessories')->name('accessories');
Route::get('accessories/show_accessories/{id}','App\Http\Controllers\ProductsController@show_accessories')->name('accessories.show');
