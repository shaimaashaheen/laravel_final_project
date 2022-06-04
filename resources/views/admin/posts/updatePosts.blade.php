@extends('admin.layout.master')
@section('title')
    Update Post
@endsection
@section('content')
@section('pageTitle')
    Update Post
@endsection

            <form action="{{route('post.update',$post)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <table class="tbl-30">

                    <tr>
                        <td>Title:</td>
                        <td>
                            <input class="inputs" type="text" name="title" value="{{$post->title}}">
                        </td>
                    </tr>
                    <tr>
                        <td>Description:</td>
                        <td>
                            <textarea class="inputs" name="body" cols="30"
                                      rows="5">{{$post->body}}</textarea>
                        </td>
                    </tr>

                    <tr>
                        <td>Current Image:</td>
                        <td>
                            <img src="{{asset('post_images/'.$post->Feature_image)}}" width="50px">
                        </td>
                    </tr>

                    <tr>
                        <td>Select New Image:</td>
                        <td>
                            <input type="file" name="post_image">
                        </td>
                    </tr>

                    <tr>
                        <td>Category:</td>
                        <td>
                            <select name="category_id">

                                @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                        {{$post->category_id==$category->id? 'selected': ' '}}>
                                        {{$category->title}}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <input type="hidden" name="id" value="">
                            <input type="hidden" name="current_image" value="">

                            <input type="submit" name="submit" value="Update Post" class="update-btn">
                        </td>
                    </tr>

                </table>

            </form>
@endsection
