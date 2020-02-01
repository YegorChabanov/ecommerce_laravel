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
// Homepage
Route::get('/', 'HomepageController@index');
// Products, Pages, Categories
Route::resources([
    'products'  => 'ProductController',
    'pages'     => 'PageController',
    'categories' => 'CategoryController'
]);
// Cart
Route::get('/cart', 'CartController@index');
Route::get('/cart/{product}', 'CartController@store');
Route::get('/cart/{product}/delete', 'CartController@destroy');
Route::get('/cart/{product}/unset', 'CartController@unset');
// Order Checkout
Route::get('/checkout', 'OrderController@create');
Route::post('/checkout', 'OrderController@store');
// Show orders
Route::get('/orders', 'OrderController@index');
Route::get('/orders/{id}', 'OrderController@show');
// Contact us form
Route::get('/contacts', 'ContactFormController@index');
Route::post('/contacts', 'ContactFormController@store');

Auth::routes();

