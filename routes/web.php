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

Route::group(['prefix'=>'admin','as'=>'admin.'], function(){
    
    Route::get('index', function () {return view('/admin/index');})->name('admin/index');
});

Auth::routes();
