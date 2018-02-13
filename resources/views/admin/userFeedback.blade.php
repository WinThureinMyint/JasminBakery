@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Contact Us</div>
                @if($contact->count())

                        <table class="table">
                            <tr>

                                <td>{!! Form::label('id','Ticket ID') !!}</td>
                                <td>{!! Form::label('cname','Name') !!}</td>
                                <td>{!! Form::label('cemail','Email Address') !!}</td>
                                <td>{!! Form::label('cphoneNo','Phone Number') !!}</td>
                                <td>{!! Form::label('creason','Contact Reason') !!}</td>
                                <td>{!! Form::label('question','Question') !!}</td>
                                <td>{!! Form::label('details','Details') !!}</td>
                                <td>{!! Form::label('updated','Create Date') !!}</td>

                            </tr>
                            @foreach($contact as $contact)
                            <tr>
                                {{--<td>{{ Form::checkbox('agree', 1, null, ['class' => 'field']) }}</td>--}}
                                <td>{{$contact->id}}</td>
                                <td>{{ $contact->cname }}</td>
                                <td>{{ $contact->cemail }}</td>
                                <td>{{ $contact->cphoneNo }}</td>
                                <td>{{ $contact->creason }}</td>
                                <td>{{ $contact->question }}</td>
                                <td>{{ $contact->details }}</td>
                                <td>{{$contact->created_at->diffForHumans()}}</td>
                                {{--<td>--}}
                                {{--<button class="btn btn-success" onclick="myFunction()">View</button>--}}
                                {{--<script>--}}
                                {{--function myFunction() {--}}
                                {{--alert("{{$contact->id}}\n" +--}}
                                {{--"{{ $contact->cname }}\n" +--}}
                                {{--"{{ $contact->cemail }}\n" +--}}
                                {{--"{{ $contact->cphoneNo }}\n" +--}}
                                {{--"{{ $contact->creason }}\n" +--}}
                                {{--"{{ $contact->question }}\n" +--}}
                                {{--"{{ $contact->details }}\n" +--}}
                                {{--"{{$contact->created_at->diffForHumans()}}");--}}
                                {{--}--}}
                                {{--</script>--}}
                                {{--</td>--}}
                                <td>
                                    {!! Form::open(['method' =>'DELETE', 'action' => ['ContactUsController@destroy',$contact->id]]) !!}
                                    {!! Form::submit('Delete Request', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </table>

                @else
                    <h4 align="center">User Didn't submit any problem or feedback yet! :D</h4>
                @endif
            </div>
        </div>
    </div>
@endsection