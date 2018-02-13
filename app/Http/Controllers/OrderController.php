<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Rorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::id();

        /*$product = Product::all();

        $orders = Order::all()

            ->where('userID',$id)
            ->where('returnOrder',0);*/
        $product = Product::all();
        $orders = DB::table('orders')
                ->join('products','orders.itemID','=','products.id')
                ->join('photos','products.photo_id','=','photos.id')
                ->get();
        return view('user/userOrder',compact('user','orders','product'));
    }

    public function preOrder()
    {
        $product = Product::all();
        return view('user/preOrder',compact('product'));
    }

    public function print()
    {
        return view('iframes/iframe');
    }

    public function return()
    {
        $user = Auth::user();
        $product = DB::table('products')->pluck('name')->all();
        return view('user/returnProduct',compact('user','product'));
    }

    public function rOrder()
    {
//        $id = Auth::id();
//
//        /*$product = Product::all();
//
//        $orders = Order::all()
//
//            ->where('userID',$id)
//            ->where('returnOrder',0);*/
        $order = DB::table('rorders')
            ->join('products','products.id','=','rorders.id')
            ->get();
//        $order = Rorder::all();
        $product = Product::all();
        return view('user/returnOrder',compact('order','product'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return "create";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//         dd($request->all());
       $order = Rorder::create($request->all());
        return redirect('user/returnOrder');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = Order::all()
                    ->where('userID',$id)
                    ->where('returnOrder',0);
        //return $orders;
        return view('orderHistory')->with('orders',$orders);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        DB::table('orders')
            ->where('cartRowID', $id)
            ->update(['returnOrder' => 1]);

        return redirect('orderHistory/'.Auth::id());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
