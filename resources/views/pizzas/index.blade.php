@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
    <h1>Pizza List</h1>
    <!-- foreach loop -->
    <!-- now it a pizza object from the database -->
    @foreach($pizzas as $pizza)
    <div class="pizza-item">
        <img src="/img/pizza.png">
        <h4><a href="/pizzas/{{$pizza->id}}">{{$pizza->name}}</a></h4>
    </div>
    @endforeach
</div>
@endsection