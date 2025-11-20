<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/products', function (Request $request) {
    return response()->json([
        'products' => \App\Models\Product::all()
    ]);
});

Route::get('/categories', function (Request $request) {
    return response()->json([
        'categories' => \App\Models\Category::all()
    ]);
});
