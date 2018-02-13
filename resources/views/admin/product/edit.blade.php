@extends('layouts.admin')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div align="center" class="panel-heading">Edit Product</div>

                    <div class="panel-body">
                        <div class="col-sm-3">
                            <img src="{{asset('images/'.$product->photo->file)}}" class="img-responsive img-rounded">

                        </div>
                        <div class="col-sm-9">
                            {!! Form::model($product,['method' =>'PATCH', 'action' => ['ProductsController@update',$product->id ],'files' => true]) !!}
                            <table class="table table-condensed">
                                <tr>
                                    <td></td>
                                    <td>{!! Form::label('name',' Name') !!}</td>
                                    <td>{!! Form::text('name',null,['class' => 'form_control'] ) !!}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>{!! Form::label('price',' Price') !!}</td>
                                    <td>{!! Form::text('price',null,['class' => 'form_control'] ) !!}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>{!! Form::label('category',' Category') !!}</td>
                                    <td>{!! Form::text('category',null,['class' => 'form_control'] ) !!}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>{!! Form::label('description',' Description') !!}</td>
                                    <td>{!! Form::textarea('description',null,['class' => 'form_control', 'rows' => '2', 'cols' => '40'] ) !!}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>{!! Form::label('tag','Tag') !!}</td>
                                    <td>{!! Form::text('tag',null,['class' => 'form_control'] ) !!}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>{!! Form::label('rating',' Rating') !!}</td>
                                    <td>{!! Form::select('rating',array([1 => '1',2 => '2',3 => '3',4 => '4',5 => '5',]), 0 ,['class' => 'form_control'] ) !!}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>{!! Form::label('status',' Status') !!}</td>
                                    <td>{!! Form::text('status',null,['class' => 'form_control'] ) !!}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>{!! Form::label('photo_id',' Image') !!}</td>
                                    <td>{!! Form::file('photo_id',null,['class' => 'form_control'] ) !!}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                                        <button href="{{url('admin/product')}}" class="btn btn-primary">Cancel</button></td>
                                </tr>
                                {!! Form::close() !!}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection