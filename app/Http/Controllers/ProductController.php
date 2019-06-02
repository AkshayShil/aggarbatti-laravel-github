<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Creates an entry for a new product
       return "Yet to be implemented";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $host_name = "http://127.0.0.1:8000";
        $table = new Product();
        $table->product_name = $request['name'];
        $table->price = $request['price'];
        $table->type = $request['type'];

        if(Input::hasFile('product_photo')){
            $file_with_ext = Input::file('product_photo')->getClientOriginalName();
            $filename = pathinfo($file_with_ext,PATHINFO_FILENAME);
            $file_extension = Input::file('product_photo')->getClientOriginalExtension();
            $photoname = Input::get('name')."-".time().".".$file_extension;
            Input::file('product_photo')->storeAs('public/images/product',$photoname);
            $table->url = $host_name."/storage/images/product/".$photoname;

            //Time
            $table->created_at = date("Y-m-d H:i:s");
            $table->save();
            //Create a view for successful upload
            return "Successful";
        }else{
            //TODO: Create a view for unsuccessful upload
            return "Upload Unsuccessful";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //return all the products
        $products = Product::all();
        return $products;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function returnAll(Product $product)
    {
        $all_product = Product::all();
        return json_encode($all_product);
    }
}
