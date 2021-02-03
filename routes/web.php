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



Auth::routes();

Route::get('/', 'PageController@index')->name('index');
Route::get('about', 'PageController@about')->name('about');
Route::get('cart', 'PageController@cart')->name('cart');
Route::get('category', 'PageController@category')->name('category');
Route::get('checkout', 'PageController@checkout')->name('checkout');
Route::get('contact', 'PageController@contact')->name('contact');
Route::get('product', 'PageController@product')->name('product');
Route::get('nashi-raboti', 'PageController@ourwork')->name('ourwork');
Route::get('dostavka', 'PageController@dostavka')->name('deliver');
Route::get('products', 'PageController@products')->name('products');
Route::get('uslugi', 'PageController@uslugi')->name('uslugi');
