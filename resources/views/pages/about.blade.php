@extends('layouts.app')

@section('content')
    <h1>{{ $title }}</h1> 
    @if(count($contents) > 0) 
    <ul>
        @foreach($contents as $content) 
            <li>{{$content}}</li>
        @endforeach 
    </ul>
    @endif


@endsection