<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Support\Facades\Request;
use Cart;

class CartController extends Controller
{
    public function add(){
        if (Request::isMethod('post')) {
            $product_id = Request::get('id');
            $product = Product::find($product_id);
            Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price));
        }

        $cart = Cart::content();
        return redirect('/products');
        // return view('cart', arßray('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));

    }
}
