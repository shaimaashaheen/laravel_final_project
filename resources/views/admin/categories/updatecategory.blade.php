@extends('admin.layout.master')
@section('title')
    Update Category
@endsection
@section('content')
@section('pageTitle')
    Update Category
@endsection
        <form action="{{route('category.update',$category)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <table class="tbl-30">
                <tr>
                    <td>Title:</td>
                    <td>
                        <input type="text" name="title" value="{{$category->title}}">
                    </td>
                </tr>
                <tr>
                    <td>Code:</td>
                    <td>
                        <input type="text" name="code" value="{{$category->code}}">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="hidden" name="current_image" value="">
                        <input type="hidden" name="id" value="">
                        <input type="submit" name="submit" value="Update Category" class="update-btn">
                    </td>
                </tr>

            </table>

        </form>

@endsection
