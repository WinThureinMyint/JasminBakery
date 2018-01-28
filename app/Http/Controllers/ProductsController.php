<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function get()
    {
        $products=Product::all();
        //return view('products');
        return view('products',['products'=>$products]);
    }
}
