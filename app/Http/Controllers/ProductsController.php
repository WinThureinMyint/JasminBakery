<?php

namespace JasminBakery\Http\Controllers;

use Illuminate\Http\Request;
use JasminBakery\Product;
class ProductsController extends Controller
{
    public function get()
    {
        $products=Product::all();
        //return view('products');
        return view('products',['products'=>$products]);
    }
}
