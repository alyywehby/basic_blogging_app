@extends('layouts.app')

@section('content')
        <h1>Posts</h1>
        @if(count($posts)>0)
            @foreach($posts as $post)
                    <div class="well">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                            <img style="height:250px; display:block; margin:auto;"  src="/storage/cover_images/{{$post->cover_image}}">
                            </div>
                            <div class="col-md-8 col-sm-8">
                                <a href="/posts/{{$post->id}}"><h3>{{$post->title}}</h3></a>
                                <hr>
                                <p>Written on: {{$post->created_at}} by {{$post->user->name}}</p>
                            </div>
                        </div>
                    </div>    
            @endforeach
            {{ $posts->links() }}
        @else
            <p>No Posts Found</p>

        @endif
@endsection
