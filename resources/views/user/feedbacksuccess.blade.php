@extends('layouts.app')


@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Contact Us</div>

                <div align="center">Successfully submitted. We will reply to your provided email!</div>
                @if($contact)
                    <table class="table">
                        <tr>
                            <td>{!! Form::label('cname','Name') !!}</td>
                            <td>{{ $contact->cname }}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::label('cemail','Email Address') !!}</td>
                            <td>{{ $contact->cemail }}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::label('cphoneNo','Phone Number') !!}</td>
                            <td>{{ $contact->cphoneNo }}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::label('creason','Contact Reason') !!}</td>
                            <td>{{ $contact->creason }}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::label('question','Question') !!}</td>
                            <td>{{ $contact->question }}</td>
                        </tr>
                        <tr>
                            <td>{!! Form::label('details','Details') !!}</td>
                            <td>{{ $contact->details }}</td>
                        </tr>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection