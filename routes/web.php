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


// Route::get('/products', function (Request $request) {
//     return response()->json([
//         'products' => \App\Models\Product::all()
//     ]);
// });

 Route::get('/products', function (Request $request) {
$products=\App\Models\Product::all();
    return view('admin.product.index',compact('products'));
 });

Route::get('/categories', function (Request $request) {
    $categories=\App\Models\Category::all();
    return view('admin.category.index',compact('categories'));
});




