<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Cart;

class CartController extends Controller
{


        public function add()
        {

            if (Request::isMethod('post')) {

                $product_id = Request::get('id');
                $product = Product::find($product_id);
                Cart::add(
                    [
                        'id' => $product_id,
                        'name' => $product->name,
                        'image' => $product->image,
                        'qty' => 1,
                        'price' => $product->price
                    ]
                );
            }
             return redirect('/products');
        }
        public function cart() {
            return "ball";
            //update/ add new item to cart
            if (Request::isMethod('post')) {
                $product_id = Request::get('product_id');
                $product = Product::find($product_id);
                Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price));
            }

            //increment the quantity
            if (Request::get('product_id') && (Request::get('increment')) == 1) {
                $rowId = Cart::search(array('id' => Request::get('product_id')));
                $item = Cart::get($rowId[0]);

                Cart::update($rowId[0], $item->qty + 1);
            }

            //decrease the quantity
            if (Request::get('product_id') && (Request::get('decrease')) == 1) {
                $rowId = Cart::search(array('id' => Request::get('product_id')));
                $item = Cart::get($rowId[0]);

                Cart::update($rowId[0], $item->qty - 1);
            }

            $cart = Cart::content();

            return redirect('/products');
        }
    }