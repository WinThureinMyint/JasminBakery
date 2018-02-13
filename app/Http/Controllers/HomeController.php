<?php

namespace App\Http\Controllers;

use App\ContactUs;
use App\Order;
use App\PreOrder;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $product = DB::table('products')->pluck('category')->all();
        return view('/home',compact('products','product'));
    }

    public function orderlist()
    {
//        $id = DB::table('users')->where('id' != '1')->get();
        $orders = DB::table('orders')
            ->join('products','products.id','=','orders.orderID')
            ->join('photos','products.photo_id','=','photos.id')
//            ->join('users','orders.userID','=','orders.orderID')
            ->get();
        return view('admin/orderList',compact('orders'));
    }

    public function preOrderList()
    {
        $preOrder = DB::table('pre_orders')
            ->join('products','products.id','=','pre_orders.id')
            ->get();
//        $preOrder = PreOrder::all();
        return view('admin/preOrderList',compact('preOrder'));
    }

    public function returnOrderList()
    {
        $order = DB::table('rorders')
            ->join('products','products.id','=','rorders.id')
            ->get();
        return view('admin/returnOrderList',compact('order'));
    }

    public function chart()
    {
        $chart = Charts::multi('bar', 'material')
            // Setup the chart settings
            ->title("Monthly Sale Status")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('Element 1', [5,20,100])
            ->dataset('Element 2', [15,30,80])
            ->dataset('Element 3', [25,10,40])
            // Setup what the values mean
            ->labels(['One', 'Two', 'Three']);

        return view('admin/monthlySaleStatus', ['chart' => $chart]);
    }
}
