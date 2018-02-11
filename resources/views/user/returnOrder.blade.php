@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <ul class="panel-heading breadcrumb">
                        <li><a href="/user/order">Order History</a></li>
                        <li class="active"><a href="/user/returnOrder">Return Order</a></li>
                        <li><a href="/user/preOrderHistory">Pre-Order History</a></li>
                    </ul>

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
