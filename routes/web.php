<?php

use Illuminate\Support\Facades\Route;
use GuzzleHttp\Psr7\Request;


Route::get('/', function () {
    return view('public/welcome');
})->name('welcome');

Route::get('/index', function () {
    return view('public/index');
})->name('index');
Route::get('/contacts', function () {
    return view('public/contacts');
})->name('contacts');

Route::get('/contacts/all', 'ContactController@allData')->name('contacts-data');
Route::post('/contacts/submit', 'ContactController@submit')->name('contacts-form');

Route::get('/admin/index', function () {
    return view('/admin/index');
})->name('admin/index');

Route::get('/admin/login', function () {
    return view('admin/login');
})->name('login');
Route::get('/admin/register', function () {
    return view('admin/register');
})->name('register');