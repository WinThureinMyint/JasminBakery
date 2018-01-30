<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;


use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

use Cart;

class CartController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
        }

        public function add()
        {
            //update/ add new item to cart
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


            //increment the quantity
            if (Request::get('product_id') && (Request::get('increment')) == 1) {
                $rowId = Cart::search(function ($cartItem, $rowId) {
                    return $cartItem->id === Request::get('product_id');
                });
                $item = Cart::get($rowId->keys()->first());
                Cart::update($rowId->keys()->first(), $item->qty + 1);
            }

            //decrease the quantity
            if (Request::get('product_id') && (Request::get('decrease')) == 1) {
                $rowId = Cart::search(function ($cartItem, $rowId) {
                    return $cartItem->id === Request::get('product_id');
                });
                $item = Cart::get($rowId->keys()->first());
                Cart::update($rowId->keys()->first(), $item->qty - 1);
            }
            //remove the item
            if(Request::get('product_id')&&(Request::get('remove_item')==1)){
                $rowId = Cart::search(function ($cartItem, $rowId) {
                    return $cartItem->id === Request::get('product_id');
                });

                Cart::remove($rowId->keys()->first());
            }
            return redirect('/cartView');
        }
        public function checkout(){
            $id = Auth::id();
            $items=Cart::content();
            $total=0;$orderID=0;
            //return Order::all();
            if(count(Order::all())) {
                $orderID = Order::orderBy('orderID', 'desc')->first()->orderID +1;
            }else{
                $orderID = 1;
            }
            //return $orderID;
            foreach ($items as $item){
                //return $item->rowId;
                $total += $item->subtotal;
                Order::create([
                    'orderID'=>$orderID,
                    'userID' => $id,
                    'cartRowID' => $item->rowId,
                    'itemID' => $item->id,
                    'itemName' => $item->name,
                    'qty' => $item->qty,
                    'price' => $item->price,
                    'subtotal' => $item->subtotal,
                    'returnOrder'=>0,
                ]);


            }
            Cart::destroy();

            return view('order')->with('items',$items)->with('total',$total);

        }
    }