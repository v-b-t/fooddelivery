<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Psr7\Request;


Route::get('/', function () {return view('public/welcome');})->name('welcome');

// Route::get('/index', function () {return view('public/index');})->name('index');
Route::get('/index', 'UsersController@index')->name('index');

Route::get('/contacts', function () {return view('public/contacts', ['title'=>'contacts']);})->name('contacts');

Route::get('/cart/checkout', function () {return view('public/checkout');})->name('checkout');

Route::get('/cart', function () {return view('public/cart');})->name('cart');

Route::get('/products', function () {return view('public/products'); })->name('products');

Route::get('/contacts/all', 'ContactController@allData')->name('contacts-data');

Route::post('/contacts/submit', 'ContactController@submit')->name('contacts-form');

Route::get('/admin/categories', function () {return view('admin/categories');})->name('categ');
Route::get('/admin/products', function () {return view('admin/products');})->name('prod');
//додавання продуктів+категорії
Route::post('/admin/add_cat/submit', 'CategoriesController@submit')->name('categ-add');
Route::post('/admin/upd_cat/update', 'CategoriesController@update')->name('categ-upd');
Route::post('/admin/add_prod/submit', 'ProductsController@submit')->name('prod-add');
//вивід  категорій на паблік
// Route::get('/index', 'CategoriesController@allData')->name('index');
Route::get('/products', 'ProductsController@allData')->name('products');

Route::group(['prefix'=>'admin','middleware' => 'auth','as'=>'admin'], function(){
    
    Route::get('index', function () {return view('/admin/index');})->name('admin/index');
    Route::get('orders', function () {return view('/admin/orders');})->name('admin/orders');
    Route::get('add_cat', function () {return view('/admin/add_cat');})->name('admin/add_cat');
    Route::get('add_prod', function () {return view('/admin/add_prod');})->name('admin/add_prod');
    Route::get('upd_cat', function () {return view('/admin/upd_cat');})->name('admin/upd_cat');
    //вивід категорій і продуктів на адмін
    Route::get('categories', 'CategoriesController@index')->name('admin/categories');
    Route::get('products', 'ProductsController@index')->name('admin/products');
    // Route::get('categories', 'ProductsController@index')->name('admin/add_prod');
    //видалення категорій і продуктів  адмін
    Route::delete('categories/{id}', 'CategoriesController@delete')->name('admin/categories');
    Route::delete('products/{id}', 'ProductsController@delete')->name('admin/products');
    //
});

Auth::routes();
