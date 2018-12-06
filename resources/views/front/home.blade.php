@extends('layouts.blog-home')

@section('content')
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

           
                <!-- First Blog Post -->

                 @if($posts)

                 @foreach($posts as $post)

                <h2>
                    <a href="#">{{$post->title}}</a>
                </h2>
                <p class="lead">
                    by {{$post->user->name}}
                </p>
                <p><span class="glyphicon glyphicon-time"></span> Created {{$post->created_at->diffForHumans()}}</p>
                <hr>
                <img class="img-responsive" src="{{$post->photo->file}}" alt="">
                <hr>
                <p>{{str_limit($post->body, 140)}}</p>
                <a class="btn btn-primary" href="{{$post->slug}}">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                <hr>

                @endforeach


                @endif

                <!-- Pagination -->
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-5">
                     {{$posts->render()}}   
                    </div>
                </div>
                

            </div>

            <!-- Blog Sidebar Widgets Column -->
            @include('includes.front_sidebar')

        </div>
@endsection
