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
Route::get('/abouelgoukh', 'App\Http\Controllers\PagesController@abouelgoukh')->name('about');
Route::get('/contact', 'App\Http\Controllers\PagesController@contact')->name('contact');
Route::get('/checkout', 'App\Http\Controllers\PagesController@checkout')->name('checkout');
Route::post('/payment','App\Http\Controllers\PaymentController@payment')->name('payment');
Route::post('/search','App\Http\Controllers\ProductsController@search')->name('search');
Route::get('/new/{id}','App\Http\Controllers\CategoriesController@NewCategoryShow')->name('new');

Route::get('/NewCategoryShow/{id}','App\Http\Controllers\CategoriesController@NewCategoryShow')->name('NewCategoryShow');
Route::get('/NewProductsShow/{id}','App\Http\Controllers\CategoriesController@NewProductsShow')->name('NewProductsShow');


Route::post('/CategoryEdit/{id}','App\Http\Controllers\CategoriesController@CategoryEdit')->name('CategoryEdit');
Route::get('/CategoryDelete/{id}','App\Http\Controllers\CategoriesController@CategoryDelete')->name('CategoryDelete');
Route::get('/CategoryShow/{id}','App\Http\Controllers\CategoriesController@CategoryShow')->name('CategoryShow');
Route::post('/CategoryStore','App\Http\Controllers\CategoriesController@CategoryStore')->name('CategoryStore');


Route::post('/ProductEdit/{id}','App\Http\Controllers\CategoriesController@ProductEdit')->name('ProductEdit');
Route::get('/ProductDelete/{id}','App\Http\Controllers\CategoriesController@ProductDelete')->name('ProductDelete');
Route::get('/ProductHide/{id}','App\Http\Controllers\CategoriesController@ProductHide')->name('ProductHide');
Route::get('/ProductShowHidden/{id}','App\Http\Controllers\CategoriesController@ProductShowHidden')->name('ProductShowHidden');
// Route::get('/ProductShow/{id}','App\Http\Controllers\CategoriesController@ProductShow')->name('ProductShow');
Route::post('/ProductStore','App\Http\Controllers\CategoriesController@ProductStore')->name('ProductStore');


Route::get('/cash','App\Http\Controllers\PaymentController@cash')->name('cash');
Route::get('/card','App\Http\Controllers\PaymentController@card')->name('card');
Route::resource('orders','App\Http\Controllers\OrdersController');
Route::get('/orders','App\Http\Controllers\OrdersController@index')->name('orders')->middleware('role');

Route::get('/admin','App\Http\Controllers\AdminController@login_view')->name('login_view');
Route::post('admin-login','App\Http\Controllers\AdminController@admin_login')->name('admin_login');
Route::get('logout', '\App\Http\Controllers\AdminController@logout')->middleware('role');
Route::get('dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('dashboard')->middleware('role');
Route::get('adminPanel', 'App\Http\Controllers\AdminController@adminPanel')->name('adminPanel')->middleware('role');


Route::resource('sub_categories','App\Http\Controllers\SubCategoriesController');
Route::resource('categories','App\Http\Controllers\CategoriesController');
Route::resource('products','App\Http\Controllers\ProductsController');

Route::get('/e_car', 'App\Http\Controllers\ProductsController@e_car')->name('e_car');

Route::get('bicycles/show/{id}','App\Http\Controllers\ProductsController@show')->name('bicycle.show');
Route::get('/bicycles', 'App\Http\Controllers\ProductsController@bicycles_index')->name('bicycles');

Route::get('/accessories', 'App\Http\Controllers\ProductsController@accessories')->name('accessories');
Route::get('/accessories/show_accessories/{id}','App\Http\Controllers\ProductsController@show_accessories')->name('accessories.show');

Route::get('/scooters', 'App\Http\Controllers\ProductsController@scooters')->name('scooters');
Route::get('/scooters/show_scooters/{id}','App\Http\Controllers\ProductsController@show_scooters')->name('scooters.show');

Route::get('/kids-scooter', 'App\Http\Controllers\ProductsController@kids_scooter')->name('kids_scooter');
Route::get('/kids-scooter/show_kids_scooters/{id}', 'App\Http\Controllers\ProductsController@show_kids_scooters')->name('kids.show');

Route::get('/toys', 'App\Http\Controllers\ProductsController@toys')->name('toys');
Route::get('/toys/show_toys/{id}', 'App\Http\Controllers\ProductsController@show_toys')->name('toys.show');

Route::get('/sports', 'App\Http\Controllers\ProductsController@sports')->name('sports');
Route::get('/sports/show_sports/{id}','App\Http\Controllers\ProductsController@show_sports')->name('sports.show');

Route::get('/car_holders', 'App\Http\Controllers\ProductsController@car_holders')->name('car_holders');
Route::get('/car_holders/show_car_holders/{id}','App\Http\Controllers\ProductsController@show_car_holders')->name('car_holders.show');

Route::get('/buggy', 'App\Http\Controllers\ProductsController@buggy')->name('buggy');
Route::get('/buggy/show_buggy/{id}','App\Http\Controllers\ProductsController@show_buggy')->name('buggy.show');

Route::get('/electric_scooter', 'App\Http\Controllers\ProductsController@electric_scooter')->name('electric_scooter');
Route::get('/electric_scooter/show_electric_scooter/{id}','App\Http\Controllers\ProductsController@show_electric_scooter')->name('electric_scooter.show');


Route::get('/add-to-cart/{product}', 'App\Http\Controllers\CartController@addToCart')->name('cart.add');
Route::get('/cart/destroy/{itemId}','App\Http\Controllers\CartController@destroy')->name('cart.destroy');


