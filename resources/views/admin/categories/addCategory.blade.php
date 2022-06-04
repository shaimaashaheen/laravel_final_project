@extends('admin.layout.master')
@section('title')
    Add Category
@endsection
@section('pageTitle')
    Add Category
@endsection
@section('content')

    @include('admin.layout.messages')

        <!-- Add CAtegory Form Starts -->
        <form action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <table class="tbl-30">
                <tr>
                    <td>Title: </td>
                    <td>
                        <input class="inputs" type="text" name="title" placeholder="Category Title">{{old('title')}}
                    </td>
                </tr>

                <tr>
                    <td>Code: </td>
                    <td>
                        <input class="inputs" type="text" name="code" placeholder="Category Code">{{old('code')}}
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Category" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
        <!-- Add CAtegory Form Ends -->



@endsection
