@extends('admin.layout.master')
@section('title')
    Add Admin
@endsection
@section('pageTitle')
    Add Admin
@endsection
@section('content')
    @include('admin.layout.messages')

    <form action="{{route('user.store')}}" method="POST" >
            @csrf
            <table class="tbl-40">
                <tr>
                    <td>Name</td>
                    <td>
                        <input class="inputs" type="text" name="name" placeholder="Enter Your Name">{{old('name')}}
                    </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>
                        <input class="inputs" type="email" name="email" placeholder="Your Email">{{old('email')}}
                    </td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>
                        <input class="inputs" type="password" name="password" placeholder="Password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>
        </form>
@endsection

