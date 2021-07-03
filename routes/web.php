<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

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
    $products=Product::all();
    return view('products', ['products' => $products] );
});
Route::get('/products/{prod}', function (Product $prod) {
    // $product= Product::find($id);
  
    return view('product', ['product' => $prod] );
});

Route::get('/create_product', function(){
    Product::create ([
     'product_name' => 'laptop1',        
      'product_desc' => 'This is very nice laptop1',
      'price' => '100000',
      
    ]);
});
Route::get('/home', function(){
    $products= Product::latest('id')->get();
   return view('home', ['products' => $products] ); 
});

// Route::get('/get_product', function(){
//  $products=Product::get();
//  return $products;
// }); 