@extends('layouts.admin')



@section('content')
    <section id="cart_items">
        <div class="container">
            <p><a class="btnPrint hidden-print" onclick="window.print();" >Print!</a></p>

            {{--<p><a class="btnPrint" href='iframes/iframe2.html'>Print second page!</a></p>--}}
            <div class="breadcrumbs hidden-print">
                <ol class="breadcrumb">
                    <li class="active"><a href="{{url('admin/orderList')}}">Order List</a></li>
                    <li><a href="{{url('admin/preOrderList')}}"> Pre-Order List</a></li>
                    <li><a href="{{url('admin/returnOrderList')}}">Return Order List</a></li>
                </ol>
            </div>
            <div class="table-responsive cart_info">
                @if($orders->count())
                    <table class="table table-condensed">
                        <thead>

                        <tr class="cart_menu">
                            <td class="user">Name</td>
                            <td class="userAddress">Address</td>
                            <td class="image">Order ID</td>
                            <td class="description">Item</td>
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
                        @foreach($orders as $item)
                            <tr>
                                {{--@if($id)--}}
                                <td class="user">{{ucfirst($item->firstName)}}</td>
                                <td class="userAddress">{{ucfirst($item->address)}}</td>
                                {{--@endif--}}
                                <td class="cart_product">
                                    @if( $item->orderID  != $oID  )
                                        {{ $item->orderID }}
                                        @php $oID=$item->orderID @endphp
                                    @endif
                                </td>
                                <td class="cart_description">
                                    {{$item->itemName}}
                                    <img src="{{ asset('/images/'.$item->file) }}" class="img-responsive" style="width: 100px; height: 80px;">
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
                            <p>User haven't order yet</p>
                        @endif
                        </tbody>
                    </table>
            </div>
        </div>
    </section> <!--/#cart_items-->

@endsection

{{--@section('scripts')--}}
    {{--<script src="{{ URL::asset('js/jquery-1.4.4.min.js') }}" type="text/javascript"></script>--}}
    {{--<script src="{{ URL::asset('js/jquery.printPage.js') }}" type="text/javascript"></script>--}}
    {{----}}

    {{--@endsection--}}