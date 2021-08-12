@extends('layouts.app')


@section('content')

<div class="container">
Customer Name
<p>{{$pizza->name}}</p>
Pizza Type
<p>{{$pizza->pizzatype}}</p>
Order Time
<p>{{$pizza->created_at}}</p>

@if($pizza->status == '0') 
    <form action="/pizza/{{$pizza->id}}" method="post">
        @csrf
        @method("patch")
    <button class="btn btn-primary">Complete Order</button>
    </form>
</div>

@else
<div class="btn btn-outline-dark">Order is Completed</div>

@endif


@endsection