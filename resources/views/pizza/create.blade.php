@extends('layouts.app')

@section('content')

<div class="container text-center">

    <h1>Order New Pizza</h1>
    <form action="/pizza" method="post">
        @csrf
        <div class="container">
        <input type="text" class="form-control" name="name" placeholder="Your Name">
        <input type="text" class="form-control" name="pizzatype" placeholder="Pizza Type">
        <button class="btn btn-primary" type="submit">Order Now</button>
    </div>
    </form>
</div>

@endsection