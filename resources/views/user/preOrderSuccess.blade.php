@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div align="center" class="panel-heading">Pre-Order</div>
                <table class="table table-responsive">
                    {{--{!! Form::open(['method' =>'POST', 'action' => 'PostsController@store']) !!}--}}
                    @if($preOrder)
                    <tr>
                        <td></td>
                        <th align="center">Order successfully placed :D Thank You!!!</th>
                    </tr>
                    <tr>
                        <td>{!! Form::label('title','Name Of Product:') !!}</td>
                        <td>{{$preOrder->noproduct}}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('title','Amount Of Order:') !!}</td>
                        <td>{{$preOrder->aoorder}}</td>
                    </tr>

                    <tr>
                        <td>{!! Form::label('title','Order for Date of :') !!}</td>
                        <td>{{$preOrder->date}}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('title','Reason of order (optional):') !!}</td>
                        <td>{{$preOrder->roorder}}</td>
                    </tr>
                    {{--<tr>--}}
                        {{--<td>{!! Form::label('title','Total Price Will Be:') !!}</td>--}}
                        {{--<td>{{$preOrder->tprice}}</td>--}}
                    {{--</tr>--}}
                    @endif
                    {!! Form::close() !!}
                </table>
            </div>
        </div>
    </div>


@endsection
