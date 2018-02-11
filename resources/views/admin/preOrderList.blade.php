@extends('layouts.admin')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-1q col-md-offset-0">
                <div class="panel panel-default">
                    <ol class="breadcrumb">
                        <li class="active"><a href="{{url('admin/orderList')}}">Order List</a></li>
                        <li><a href="{{url('admin/preOrderList')}}"> Pre-Order List</a></li>
                        <li><a href="{{url('admin/returnOrderList')}}">Return Order List</a></li>
                    </ol>

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

                </div>
            </div>
        </div>
    </div>
@endsection
