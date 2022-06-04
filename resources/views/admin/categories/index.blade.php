@extends('admin.layout.master')
@section('title')
    Categories Manage
@endsection
@section('pageTitle')
    Category Manage
@endsection
@section('content')

    @include('admin.layout.messages')
        <!-- Button to Add Admin -->
        <a href="{{route('category.create')}}" class="btn-primary">Add Category</a>

        <table class="tbl-full">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Code</th>
                <th>Actions</th>
            </tr>

            <tr>
                @if(count($categories) != 0 )
                    @foreach($categories as $category)
                        <td>{{$loop->iteration}}</td>
                        <td>{{$category->title}}</td>
                <td>{{$category->code}}</td>

                        <td>
                            <a class="update-btn" href="{{route('category.edit',$category)}}"> Update Category</a>

                            <form method="post" action="{{route('category.destroy',$category)}}" >
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="delete-btn">Delete Category</button>
                            </form>
                        </td>
            </tr>
            @endforeach

            @else
            <tr>
                <td colspan="6">
                    <div class="error">No Category Added.</div>
                </td>
            </tr>
            @endif
        </table>

@endsection
