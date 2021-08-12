@extends('layouts.app')

@section('content')

@if(isset($pizzas))
    <div class="container">
        <div class="alert-warning">{{session('msg')}}</div>
        <h1 class="text-center">All Pending Orders</h1>
        @foreach ($pizzas as $pizza)
            <div class="container">
                <a href="/pizza/{{$pizza->id}}">
                {{$pizza->name}} -
                {{$pizza->pizzatype}}</a>
            </div>
        @endforeach
    </div>
</div>
@endif
@if(isset($completed))
<div class="container">
    <div class="alert-warning">{{session('msg')}}</div>
    <h1 class="text-center">All Completed Orders</h1>
    @foreach ($completed as $c)
        <div class="container">
            <a href="/pizza/{{$c->id}}">
            {{$c->name}} -
            {{$c->pizzatype}}</a>
        </div>
    @endforeach
</div>
</div>
@endif

@endsection
