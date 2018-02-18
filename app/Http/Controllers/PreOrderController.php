<?php

namespace App\Http\Controllers;

use App\PreOrder;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class PreOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $product = DB::table('products')->pluck('name')->all();
        $product = Product::all();
        return view('user/preOrder', compact('product'));
    }

    public function preHistory()
    {
        $preOrder = DB::table('pre_orders')
//            ->join('products', 'products.id', '=', 'pre_orders.id')
            ->get();
//        $preOrder = PreOrder::all();
        return view('user/preOrderHistory', compact('preOrder'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $qty = $request->get('aoorder');
//        $total = $qty * 5 ;
        $porder = DB::table('pre_orders')
            ->join('products', 'products.id', '=', 'pre_orders.id')
            ->get();
        $preOrder = PreOrder::create($request->all());
        return view('user/preOrderSuccess', compact('preOrder', 'porder'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }
}
