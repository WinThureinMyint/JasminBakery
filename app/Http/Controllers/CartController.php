<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Support\Facades\Request;
use Cart;

class CartController extends Controller
{


        public function add()
        {

            if (Request::isMethod('post')) {

                $product_id = Request::get('id');
                $product = Product::find($product_id);
                //return $product->image;
                Cart::add(
                    [
                        'id' => $product_id,
                        'name' => $product->name,
                        'image' => $product->image,
                        'gty' => 1,
                        'price' => $product->price
                    ]
                );
            }
            // Cart::add($product);

            $cart = Cart::content();
            return $cart;
            // return redirect('/products');
            // return view('cart', arßray('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
        }
    }