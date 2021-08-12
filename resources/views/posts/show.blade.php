@extends('layouts.app')

@section('content')

    <h1>{{$post->title}}</h1>
    <p class="alert-warning" style="min-height: 80px;">{{$post->body}}</p>

    <p>Written on {{$post->created_at}}</p>
    <hr>
    <div class="container-fluid">
        <form action="/post/{{$post->id}}" method="POST">
        @csrf
        @method ('DELETE')
        <button class="btn btn-danger">Delete Post</button>
        <a href="/post" class="btn btn-dark">Go Back</a>
        </form>

        
    </div>
@endsection