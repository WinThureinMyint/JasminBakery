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
                @if($items->count())
                    <table class="table table-condensed">
                        <thead>
                        <tr class="cart_menu">
                            <td class="image">Item</td>
                            <td class="description"></td>
                            <td class="price">Price</td>
                            <td class="quantity">Quantity</td>
                            <td class="total">Total</td>
                            <td></td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($items as $item)
                            <tr>
                                <td class="cart_product">
                                    <br>{{ $loop->index+1 }}
                                </td>
                                <td class="cart_description">
                                    <h4>{{$item->name}}</h4>
                                    <p>Item ID: {{$item->id}}</p>
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
                                    <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                                </td>
                            </tr>

                        @endforeach
                        <tr>
                            <td colspan="2"></td>
                            <td>Total</td>
                            <td colspan="2">${{$total}}</td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                        </tr>
                        <div class="alert alert-success" >
                            <center><strong>Success!</strong> Your order have been placed.</center>
                        </div>
                        @else
                            <p>You have no items in the shopping cart</p>
                        @endif
                        </tbody>
                    </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

@endsection
