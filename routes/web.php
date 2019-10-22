<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/product-discount', function () {
    return view('product_discount');
});
Route::post("/product-discount", function (Illuminate\Http\Request $request) {
    return $request->listPrice * $request->discountPercent;
});
