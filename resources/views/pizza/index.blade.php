@extends('layouts.app')

@section('content')

<div class="create-pizza">
    
<div class="container text-center">
    <div class="alert-warning">{{session('msg')}}</div>
<h1>Welcome to Shiv's Pizza</h1>

<a href="/pizza/create" class="btn btn-lg btn-dark">Order New Pizza</a>

</div>

@endsection