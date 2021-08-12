@extends('layouts.app')

@section('content')

    <h1>Create Post</h1>

    <form method="POST" action="/post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input name="title" type="text" class="form-control" id="title">
        </div>
        <div class="form-group">
                <label for="body">Body</label>
                <textarea name="body" class="form-control" id="body"></textarea>
        </div> <br>
                <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
    <a href="/post" class="btn btn-dark">Go Back</a>
@endsection