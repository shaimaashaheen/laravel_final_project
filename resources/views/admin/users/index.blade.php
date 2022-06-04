
@extends('admin.layout.master')
@section('title')
    Admin Manage
@endsection
@section('pageTitle')
    Admin Manage
@endsection
@section('content')
    @include('admin.layout.messages')

        <!-- Button to Add Admin -->
        <a href="{{route('user.create')}}" class="btn-primary">Add Admin</a>

        <br/><br/><br/>

        <table class="tbl-full">
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
            @if(count($users) != 0 )

                @foreach($users as $user)

            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>

                <td>
                    <a class="update-btn" href="{{route('user.edit',$user)}}"> Update Admin</a>

                    <form method="post" action="{{route('user.destroy',$user)}}" >
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="delete-btn">Delete Admin</button>
                    </form>
                </td>
            </tr>
                @endforeach

            @else
            <tr>
                <td>
                    <p class="error"> No admin yet ! </p></td>
            </tr>
@endif
        </table>
@endsection
