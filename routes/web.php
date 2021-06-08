<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Psr7\Request;

Route::get('/', function () {return view('public/welcome');})->name('welcome');

Route::get('/contacts', function () {return view('public/contacts', ['title'=>'contacts']);})->name('contacts');

Route::get('/cart/checkout', function () {return view('public/checkout');})->name('checkout');

Route::get('/cart', function () {return view('public/cart');})->name('cart');

Route::get('/products', function () {return view('public/products'); })->name('products');

Route::get('/contacts/all', 'ContactController@allData')->name('contacts-data');

Route::post('/contacts/submit', 'ContactController@submit')->name('contacts-form');

// Route::get('/admin/products', function () {return view('admin/products');})->name('prod');
//
Route::get('/index', 'CategoriesController@allData')->name('index');
//
Route::get('/products', 'ProductsController@allData')->name('products');
//

Route::group(['prefix'=>'admin','middleware' => 'auth','as'=>'admin'], function(){
    
    Route::get('index', function () {return view('/admin/index');})->name('admin/index');
    Route::get('orders', function () {return view('/admin/orders');})->name('admin/orders');
    Route::get('add_cat', function () {return view('/admin/add_cat');})->name('admin/add_cat');
    Route::get('add_prod', function () {return view('/admin/add_prod');})->name('admin/add_prod');
    Route::get('upd_cat', function () {return view('/admin/upd_cat');})->name('admin/upd_cat');
    Route::get('upd_prod', function () {return view('/admin/upd_prod');})->name('admin/upd_prod');
    //вивід категорій і продуктів на адмін
    Route::get('categories', 'CategoriesController@index')->name('/categories');
    Route::get('products', 'ProductsController@index')->name('/products');
    
    //
    Route::delete('categories/{id}', 'CategoriesController@delete')->name('admin/categories');
    Route::delete('products/{id}', 'ProductsController@delete')->name('admin/products');
    //
    Route::get('categories/{id}/update', 'CategoriesController@update')->name('/categ-upd');
    Route::post('categories/{id}/update', 'CategoriesController@upd')->name('/categ-upd-ready');

    Route::get('products/{id}/update', 'ProductsController@update')->name('/prod-upd');
    Route::post('products/{id}/update', 'ProductsController@upd')->name('/prod-upd-ready');
    //
    // Route::get('categories', function () {return view('admin/categories');})->name('categ');
    // Route::get('products', function () {return view('admin/products');})->name('prod');
//
    Route::post('add_cat/submit', 'CategoriesController@submit')->name('/categ-add');
    Route::post('add_prod/submit', 'ProductsController@submit')->name('/prod-add');

});
Auth::routes();
