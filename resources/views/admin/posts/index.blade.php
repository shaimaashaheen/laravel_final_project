@extends('admin.layout.master')
@section('title')
    Posts Manage
@endsection
@section('content')

@section('pageTitle')
    Posts Manage
@endsection
@include('admin.layout.messages')
            <!-- Button to Add Admin -->
            <a href="{{route('post.create')}}" class="btn-primary">Add Post</a>

            <br/><br/><br/>


            <table class="tbl-full">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Image</th>
                    <th>shares</th>
                    <th>Views</th>
                    <th colspan="2">Actions</th>
                </tr>
                @if(count($posts) != 0 )

                @foreach($posts as $post)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->category->title}}</td>
                    <td><img alt="img" width="50" src="{{asset('post_images/'.$post->Feature_image)}}"></td>
                    <td>{{$post->shares}}</td>
                    <td>{{$post->views}}</td>

                    <td>
                        <a class="update-btn" href="{{route('post.edit',$post)}}"> Update Post</a>

                        <form method="post" action="{{route('post.destroy',$post)}}" >
                            @method('DELETE')
                            @csrf
                        <button type="submit" class="delete-btn">Delete Post</button>
                        </form>
                    </td>
                </tr>
                @endforeach

                @else
                    <tr>
                        <td colspan="6">
                            <div class="error">No News Added.</div>
                        </td>
                    </tr>
                @endif
            </table>

@endsection
