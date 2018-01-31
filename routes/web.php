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
//
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@show')->name('profile')->middleware('auth');
Route::get('/nav', 'DishesController@index')->name('nav');
Route::get('/dishes', 'AdminDishesController@index')->name('dishes-admin');
Route::get('/dishes-create', 'AdminDishesController@create')->name('dishes-create');
Route::post('/store', 'AdminDishesController@store')->name('store');
Route::get('/', 'MainPage\IndexController@index')->name('index');
Route::get('/dishes-edit/{id}', 'AdminDishesController@edit')->name('dishes-edit');
Route::post('/dishes-update/{id}', 'AdminDishesController@update')->name('dishes-update');
Route::get('/dishes-delete/{id}', 'AdminDishesController@destroy')->name('dishes-delete');

Route::get('/cart', 'CartController@index')->name('cart-index');
Route::post('/cart-store', 'CartController@store')->name('cart-store');
Route::get('/contact', 'ContactController@index')->name('contact-index');
