<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 Route::get('/admin-dashboard', function () {
    return "Welcome Admin!";
 })->middleware('checkrole');