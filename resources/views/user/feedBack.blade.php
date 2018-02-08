@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contact Us</div>
                {!! Form::open(['method' =>'POST', 'action' => 'UserController@store','files' => true]) !!}
                <table class="table">

                    <tr>
                        <td></td>
                        <td>*indicates required field</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('cname','Name*') !!}</td>
                        <td>{!! Form::text('cname',null,['class' => 'form_control'] ) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('cemail','Email Address*') !!}</td>
                        <td>{!! Form::text('cemail',null,['class' => 'form_control'] ) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('cphoneNo','Phone Number*') !!}</td>
                        <td>{!! Form::text('cphoneNo',null,['class' => 'form_control'] ) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('creason','Contact Reason') !!}</td>
                        <td>{!! Form::text('creason',null,['class' => 'form_control'] ) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('question','Question*') !!}</td>
                        <td>{!! Form::text('question',null,['class' => 'form_control'] ) !!}</td>
                    </tr>
                    <tr>
                        <td>{!! Form::label('details','Details*') !!}</td>
                        <td>{!! Form::textarea('details',null,['class' => 'form_control'] ) !!}</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}</td>
                    </tr>
                    {!! Form::close() !!}
                    {{--<table class="table-striped table-hover">--}}
                        {{--<tr><td align="center">Give Us a Call<td></tr>--}}
                        {{--<tr><td align="center"><div class="glyphicon glyphicon-phone">0946452543</div></td></tr>--}}
                        {{--<tr><td align="center"><div>You can call us during our working hours</div></td></tr>--}}
                        {{--<tr><td align="center"><li>9.00-18.00 everyday</li></td></tr>--}}
                    {{--</table>--}}
                </table>
            </div>
        </div>
    </div>
@endsection