@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <ul class="panel-heading breadcrumb">
                        <li><a href="/user/order">Normal Order</a></li>
                        <li><a href="/user/returnOrder">Returned Expired Product</a></li>
                        <li class="bg-success"><a href="/user/preOrderHistory">Pre-Ordered Product</a></li>
                    </ul>
                    @if($preOrder)
                        <table class="table">
                            <tr>
                                <td>{!! Form::label('title','Name Of Product:') !!}</td>
                                <td>{!! Form::label('title','Amount Of Order:') !!}</td>
                                <td>{!! Form::label('title','Order for Date of :') !!}</td>
                                <td>{!! Form::label('title','Reason of order (optional):') !!}</td>

                            </tr>
                            @foreach($preOrder as $preorder)
                            <tr>
                                <td>{{$preorder->noproduct}}</td>
                                <td>{{$preorder->aoorder}}</td>
                                <td>{{$preorder->date}}</td>
                                <td>{{$preorder->roorder}}</td>
                            </tr>
                            @endforeach
                        </table>
                    @else
                    <div align="center"><b>No pre-order product yet</b></div>
                        @endif
                </div>
            </div>
        </div>
    </div>
@endsection
