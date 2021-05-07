<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('public/welcome');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});
Route::get('/index', function () {
    return view('public/index');
});
Route::get('/contacts', function () {
    return view('public/contacts');
});
Route::post('/contacts/submit', function () {
    return "Okey";
});