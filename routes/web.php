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

use Illuminate\Support\Facades\Route;

Route::get('/product-discount', function () {

    return view('product_discount');
});
Route::post("/product-discount", function (Illuminate\Http\Request $request) {

    $productDescription = $request->productDescription;
    $listPrice = $request->listPrice;
    $discountPercent = $request->discountPercent;

    $discountAmount = $listPrice * $discountPercent * 0.1;
    return view('show_discount_amount', compact(['listPrice', 'productDescription', 'discountPercent', 'discountAmount']));
});
