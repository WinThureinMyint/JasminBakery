@extends('layouts.app')

@section('content')
    <section id="cart_items">
        <div class="container">
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/home">Home</a></li>
                    <li class="active">Shopping Cart</li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                @if($orders->count())
                    <table class="table table-condensed">
                        <thead>

                        <tr class="cart_menu">
                            <td class="image">Order ID</td>
                            <td class="description">Item</td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Sub Total</td>
                            <td>Date</td>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $oID='';
                        @endphp
                        @foreach($orders as $item)
                            <tr>
                                <td class="cart_product">
                                    @if( $item->orderID  != $oID  )
                                    <br>{{ $item->orderID }}
                                        @php $oID=$item->orderID @endphp
                                    @endif
                                </td>
                                <td class="cart_description">
                                    <h4>{{$item->itemName}}</h4>
                                    <p>Item ID: {{$item->itemID}}</p>
                                </td>
                                <td class="cart_price">
                                    <p>${{$item->price}}</p>
                                </td>
                                <td class="cart_quantity">
                                    <div class="cart_quantity_button">
                                        <P>{{$item->qty}}</P>
                                    </div>

                                </td>
                                <td class="cart_total">
                                    <p class="cart_total_price">${{$item->subtotal}}</p>
                                </td>
                                <td class="cart_delete">
                                    <p>{{$item->updated_at}}</p>
                                </td>
                            </tr>

                        @endforeach
                        {{--<tr>
                            <td colspan="2"></td>
                            <td>Total</td>
                            <td colspan="2">${{$total}}</td>
                        </tr>--}}
                        <tr>
                            <td colspan="3"></td>
                        </tr>

                        @else
                            <p>You have no items in the shopping cart</p>
                        @endif
                        </tbody>
                    </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

@endsection
