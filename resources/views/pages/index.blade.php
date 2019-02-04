@extends('layouts.app')

@section('content')
        <div class="jumbotron">
                <div class="container">
                  <h1>Welcome to Laravel</h1>
                  <p>This is a Laravel Application</p>
                  <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> 
                        <a class="btn btn-primary btn-lg" href="/register" role="button">Register</a></p>
                </div>
              </div>
        {{-- <h1>{{$title}}</h1>
        <p>This is a Laravel Application</p> --}}
@endsection