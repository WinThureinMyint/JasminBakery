@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <ul class="panel-heading breadcrumb">
                        <li><a href="/user/order">Normal Order</a></li>
                        <li class="bg-success"><a href="/user/returnOrder">Returned Expired Product</a></li>
                        <li><a href="/user/preOrderHistory">Pre-Ordered Product</a></li>
                        <li><a href="/user/olderOrder">Older Order History</a></li>
                    </ul>
                    @if($order->count())
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
                        @else
                    <div align="center"><b>Haven't Return any Expired Product Yet!</b></div>
                        @endif
                </div>
            </div>
        </div>
    </div>
@endsection
