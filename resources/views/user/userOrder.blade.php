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
                        @if($orders->count())
                            <table class="table table-condensed">
                                <thead>

                                <tr class="cart_menu">
                                    <td class="image">Order ID</td>
                                    <td class="description">Product Name</td>
                                    <td class="product-image">Product Image</td>
                                    <td class="price">Price</td>
                                    <td class="quantity">Quantity</td>
                                    <td class="total">Sub Total</td>
                                    <td>Date</td>
                                    <td></td>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $oID='';
                                @endphp
                                @foreach($product as $product)
                                    @foreach($orders as $item)
                                        <tr>
                                            <td class="cart_product">
                                                @if( $item->orderID  != $oID  )
                                                    {{ $item->orderID }}
                                                    @php $oID=$item->orderID @endphp
                                                @endif
                                            </td>
                                            <td class="cart_description">
                                                {{$item->itemName}}
                                            </td>
                                            <td class="product-image"><img src="{{ asset('/images/'.$item->file)}}" class="img-responsive"
                                                     style="width: 90px; height: 60px;"></td>
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

                                            <td>
                                                <div class="col-md-12">
                                                    <form method="POST" action="{{url('cart')}}">
                                                        <input type="hidden" name="id" value="{{$product->id}}">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <button type="submit" class="btn btn-danger add-to-cart">
                                                            <i class="fa fa-shopping-cart"></i>
                                                            Add to cart
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                                    <tr>
                                        <td colspan="3"></td>
                                    </tr>

                                @else
                                    <p>You have no items in order history</p>
                                @endif
                                </tbody>
                            </table>

                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
