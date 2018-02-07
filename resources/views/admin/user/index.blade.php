@extends('layouts.admin')


@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Shopkeeper List</div>
        <div class="panel-body">
            <table class="table">
                <tr>
                    <th>User ID</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                    <th>Phone No.</th>
                    <th class="text-center">Address</th>
                    <th>Delete User</th>

                </tr>
                @if($user)
                    @foreach($user as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{ucfirst($user->firstName)}}</td>
                            <td>{{ucfirst($user->lastName)}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->phoneNumber}}</td>
                            <td>{{$user->address}}</td>
                            <td>
                                {!! Form::open(['method' =>'DELETE', 'action' => ['AdminUsersController@destroy',$user->id]]) !!}
                                {!! Form::submit('Delete User', ['class' => 'btn btn-primary']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>
    </div>
    </div>

@endsection