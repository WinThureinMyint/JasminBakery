<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Rorder;
use Carbon\Carbon;
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
        $orders = DB::table('orders')
            ->join('products', 'orders.itemID', '=', 'products.id')
            ->join('photos', 'products.photo_id', '=', 'photos.id')
            ->join('users', 'orders.userID', '=', 'users.id')
            ->get();

//        $orders = DB::table('orders')
// ->where('orders','created_at',$date)
//            ->get();

        return view('user/userOrder', compact('user', 'arr', 'orders'));
    }

    public function olderOrder()
    {
        $id = Auth::id();
        $olderOrder = DB::table('orders')
            ->select(DB::raw('*'))
//            ->whereRaw('Date(created_at) = CURDATE()')
//            ->select('created_at',$date)
//            ->join('products', 'orders.itemID', '=', 'products.id')
//            ->join('photos', 'products.photo_id', '=', 'photos.id')
//            ->join('users', 'orders.userID', '=', 'users.id')
            ->where('userID',$id)
            ->get();

//        $records = DB::table('orders')
//            ->select(DB::raw('*'))
//            ->whereRaw('Date(created_at) = CURDATE()')
//            ->get();

//        dd($olderOrder);
//        $olderOrder = Order::all();
//        dd($olderOrder);
        return view('user/olderOrder',compact('olderOrder'));
    }

    public function preOrder()
    {
        $product = Product::all();
        return view('user/preOrder', compact('product'));
    }

    public function print()
    {
        return view('iframes/iframe');
    }

    public function return()
    {
        $user = Auth::user();
        $product = Product::all();
//        $product = DB::table('products')->pluck('name')->all();
        return view('user/returnProduct', compact('user', 'product'));
    }

    public function rOrder()
    {
        $id = Auth::id();
//
//        /*$product = Product::all();
//
//        $orders = Order::all()
//
//            ->where('userID',$id)
//            ->where('returnOrder',0);*/

        $order = DB::table('rorders')
//            ->join('products', 'rorders.id', 'products.id')
//            ->select('rorders.*','rorders.id')
//            ->where('rorders.name','products.name')
            // ->groupBy('rorders.id','rorders.name','rorders.qty')
            ->get();
//        $order = Rorder::all();
        // $product = Product::all();
        return view('user/returnOrder', compact('order'));
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//         dd($request->all());
//        $id = Auth::id();
//        Rorder::create([
//            'user_id' => $id,
//        ]);
        $order = $request->all();
//        $order = Auth::user();
        Rorder::create($order);
        return redirect('user/returnOrder');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = Order::all()
            ->where('userID', $id)
            ->where('returnOrder', 0);
        //return $orders;
        return view('orderHistory')->with('orders', $orders);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        DB::table('orders')
            ->where('cartRowID', $id)
            ->update(['returnOrder' => 1]);

        return redirect('orderHistory/' . Auth::id());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
