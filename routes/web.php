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

Route::get('nashi-raboti', 'PageController@ourwork')->name('ourwork');
Route::get('dostavka', 'PageController@dostavka')->name('deliver');

Route::get('privacy', 'PageController@privacy')->name('privacy');

Route::get('contact', 'ContactController@contact')->name('contact');
Route::post('ContactMessages', 'ContactController@contactMessage')->name('contact.message');



Route::namespace('Product')->group(function () {

    Route::get('categories', 'CategoryController@index')->name('categories');
    Route::get('categories/{slug}', 'CategoryController@subCategories')->name('subcategories');

    Route::get('products/{subCategory}', 'ProductController@index')->name('productList');
    Route::get('product/{slug}', 'ProductController@show')->name('product-viewpage');

    Route::get('services', 'ServiceController@index')->name('services');
    Route::get('services/{slug}', 'ServiceController@show')->name('services-page');

    Route::post('addOrder', 'ProductController@addOrder')->name('addOrder');

});
