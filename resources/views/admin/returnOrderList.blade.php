@extends('layouts.admin')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <ol class="breadcrumb">
                        <li class="active"><a href="{{url('admin/orderList')}}">Order List</a></li>
                        <li><a href="{{url('admin/preOrderList')}}"> Pre-Order List</a></li>
                        <li><a href="{{url('admin/returnOrderList')}}">Return Order List</a></li>
                    </ol>

                    <table class="table">
                        <table class="table table-condensed">
                            <thead>
                            <tr class="cart_menu">
                                <td>Return Order ID</td>
                                <td class="name">Product Name</td>
                                <td class="quantity">Quantity</td>
                                <td>Return Date</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($order as $item)
                                <tr>
                                    <td>
                                        {{$item->id}}
                                    </td>
                                    <td class="cart_product">
                                        {{$item->name}}
                                    </td>
                                    <td class="cart_quantity">
                                        {{$item->qty}}
                                    </td>
                                    <td class="cart_delete">
                                        <p>{{$item->updated_at}}</p>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
