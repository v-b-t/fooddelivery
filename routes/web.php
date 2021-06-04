<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Psr7\Request;

Route::get('/', function () {return view('public/welcome');})->name('welcome');

Route::get('/index', function () {return view('public/index');})->name('index');

Route::get('/contacts', function () {return view('public/contacts', ['title'=>'contacts']);})->name('contacts');

Route::get('/cart/checkout', function () {return view('public/checkout');})->name('checkout');

Route::get('/cart', function () {return view('public/cart');})->name('cart');

Route::get('/products', function () {return view('public/products'); })->name('products');

Route::get('/contacts/all', 'ContactController@allData')->name('contacts-data');

Route::post('/contacts/submit', 'ContactController@submit')->name('contacts-form');

Route::group(['prefix'=>'admin','middleware' => 'auth','as'=>'admin'], function(){
    
    Route::get('index', function () {return view('/admin/index');})->name('admin/index');
    // Route::get('categories', function () {return view('/admin/categories');})->name('admin/categories');
    Route::get('orders', function () {return view('/admin/orders');})->name('admin/orders');
    Route::get('products', function () {return view('/admin/products');})->name('admin/products');
    Route::get('add_cat', function () {return view('/admin/add_cat');})->name('admin/add_cat');
    Route::get('add_prod', function () {return view('/admin/add_prod');})->name('admin/add_prod');
    Route::get('categories', 'CategoriesController@index')->name('admin/categories');
    Route::delete('categories/{id}', 'CategoriesController@delete')->name('admin/categories');
    Route::post('categories', 'CategoriesController@create')->name('admin/add_cat');
});

Auth::routes();
