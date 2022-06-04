@extends('admin.layout.master')
@section('title')
    Add Post
@endsection
@section('content')
@section('pageTitle')
    Add Post
@endsection

@include('admin.layout.messages')
        <form  method="post" action="{{route('post.store')}}"  enctype="multipart/form-data">
              @csrf
            <table class="tbl-30">

                <tr>
                    <td>Title:</td>
                    <td>
                        <input class="inputs" type="text" name="title" placeholder="Title of the New" value="{{old('title')}}">
                    </td>
                </tr>

                <tr>
                    <td>Description:</td>
                    <td>
                            <textarea class="inputs" name="body" cols="30" rows="5"
                                      placeholder="Description of the post.">{{old('body')}}</textarea>
                    </td>
                </tr>
                <tr>
                    <td>Auther Email</td>
                    <td>
                        <input class="inputs" type="text" name="email" placeholder="Auther Email" value="{{old('email')}}">
                    </td>
                </tr>
                <tr>
                    <td>Select Image:</td>
                    <td>
                        <input class="inputs" type="file" name="post_image">
                    </td>
                </tr>

                <tr>
                    <td>Category:</td>
                    <td>
                        <select name="category_id" class="inputs" >
                            <option selected disabled>Select one</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Post" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>

@endsection
