@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type:</label>
        <select name="type" id="type">
            <option value="margherita">Margherita</option>
            <option value="huwaiian">Huwaian</option>
            <option value="vag supreme">Veg Supreme</option>
            <option value="Volcano">Volcano</option>
        </select>
        <label for="base">Choose base type:</label>
        <select name="base" id="base">
            <option value="cheesy">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label>Extra Toppings:</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br>
            <input type="checkbox" name="toppings[]" value="peppers">Peppers <br>
            <input type="checkbox" name="toppings[]" value="garlic">Garlic <br>
            <input type="checkbox" name="toppings[]" value="olives">Olives <br>
        </fieldset>

        <input type="submit" value="Order a Pizza">
    </form>
</div>
@endsection