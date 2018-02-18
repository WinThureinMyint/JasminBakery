@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Order History</div>
                    <div class="col-sm-5 pull-left">
                        @if($product)
                            {!! Form::open(['method' =>'POST', 'action' => 'OrderController@store']) !!}
                            <table class="table">
                                <tr>
                                    <td>{!! Form::label('name','Product Name:') !!}</td>
                                    <td>{!! Form::text('name',null ,['class' => 'form_control'] ) !!}
                                    <br>*Please fill name of product on the list
                                </tr>
                                <tr>
                                    <td>{!! Form::label('qty','Quantity:') !!}</td>
                                    <td>{!! Form::text('qty',null ,['class' => 'form_control'] ) !!}
                                        <br> *Please fill Number only
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>{!! Form::submit('Return Product', ['class' => 'btn btn-primary']) !!}</td>
                                </tr>
                            </table>
                            {!! Form::close() !!}
                        @endif
                    </div>
                    <div class="col-sm-5 pull-right">
                        <table class="table table-striped">
                            @foreach($product as $product)
                            <tr>
                                <td><b>Product In Our Website</b></td>
                            </tr>
                            <tr>
                                <td>{{$product->name}}</td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
