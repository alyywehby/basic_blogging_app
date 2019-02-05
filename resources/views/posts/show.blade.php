@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Back</a>
    <br><br>
    <div class="well">
        <div class="row">
                <h1>{{$post->title}}</h1>
                <hr>
                <div class="col-md-4 col-sm-4">
                    <img style="width:100%"  src="/storage/cover_images/{{$post->cover_image}}">
                </div>
                <div class="col-md-8 col-sm-8">
                    <p>{!!$post->body!!}</p>
                    <hr>
                    <small>Written on: {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
        </div>
    </div>
    @if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right' ])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
@endif
@endsection
