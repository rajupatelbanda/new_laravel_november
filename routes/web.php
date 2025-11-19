<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "this is about Page";
});


Route::get('/contact', function () {
    return "this is contact Page";
});
