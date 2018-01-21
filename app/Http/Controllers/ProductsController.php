<?php

namespace Jasmin Bakery\Http\Controllers;

use Illuminate\Http\Request;
use Jasmin Bakery\Product;
class ProductsController extends Controller
{
    public function get()
    {
        $products=Product::all();
        //return view('products');
        return view('products',['products'=>$products]);
    }
}
