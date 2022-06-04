@extends('front.layout.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
    <body>
        <br>
        <br>

                    <!-- Comment List Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">{{count($comments)}} Comment</h4>
                        </div>
                        <div class="bg-white border border-top-0 p-4">

                            @foreach ($comments as $comment)

                            <div class="media mb-4">
                                <img src="img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6><a class="text-secondary font-weight-bold" href="">John Doe</a> <small><i>01 Jan 2045</i></small></h6>
                                    <p>{{$comment->body}}</p>
                                    <button class="btn btn-sm btn-outline-secondary">Reply</button>
                                </div>
                            </div>
                            @endforeach


                        </div>
                    </div>
                    <!-- Comment List End -->

                </body>

                </html>

                @endsection
