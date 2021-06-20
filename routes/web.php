<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $product1= array(
        'product_name'=> 'First Product',
        'product_desc'=>'This is a product we want to sell.This is a very nice product.'
    
    );
    $product2= array(
            'product_name'=> 'Second Product',
            'product_desc'=>'This is a product we want to sell.This is a very nice product.'
    );
    $product3= array(
            'product_name'=> 'Third Product',
            'product_desc'=>'This is a product we want to sell.This is a very nice product.'
    );
    $products_list= array($product1,$product2,$product3);
    return view('products',['products' => $products_list] );
});
Route::get('/product', function () {
    return view('product');
});



