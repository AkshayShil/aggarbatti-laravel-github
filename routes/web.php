<?php
use App\Product;

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
    return view('home');
});

//Return the form address
Route::get("/admin/product/add",function(){
    return view('AuxiliaryViews.productcreateform');
});

//Return all the products in a JSON format;
Route::get('/get/ProductAll',"ProductController@returnAll");

//Add a product in a table
Route::post('/add/product',"ProductController@store");

//View all the products available
Route::get('/admin/product/view',function(){
    $products = Product::all();
    return view('AuxiliaryViews.viewproducts')->with('products',$products);
});

Route::get('/admin/product/get/arrayproduct','ProductController@show');
