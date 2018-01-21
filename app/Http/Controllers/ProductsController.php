<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    public function get()
    {
        $products=Product::all();
        //return view('products');
        return view('products',['products'=>$products]);
    }
}
