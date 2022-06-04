@extends('admin.layout.master')
@section('title')
    Update Admin
@endsection
@section('pageTitle')
    Update Admin
@endsection
@section('content')


        <form action="{{route('user.update',$user)}}" method="POST">
            @csrf
            @method('PUT')
            <table class="tbl-40">
                <tr>
                    <td>Name</td>
                    <td>
                        <input class="inputs" type="text" name="name" value="{{$user->name}}">
                    </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>
                        <input class="inputs" type="email" name="email" value="{{$user->email}}">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input class="inputs" type="hidden" name="id" value="">
                        <input class="inputs" type="submit" name="submit" value="Update Admin" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
@endsection
