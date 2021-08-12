@extends('layouts.app')

@section('content')

    <p class="alert-info">{{ session('msg') }}</p>
    <h1>POSTS</h1>
    @if(count($posts) > 0)
        @foreach ($posts as $post)
        
        <div class="card">
            <a href="{{route('post.show', $post->id)}}">
            <b>{{$post->title}}</b>   </a>
            <p>{{$post->body}}</p>
        </div>
     
        @endforeach
    @endif
@endsection