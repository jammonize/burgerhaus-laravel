@extends('layouts.app')

@section('content')
<div class="wrapper create-burger">
  <h1>Create a New Burger</h1>
  <form action="{{ route('burgers.store') }}" method="POST">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" name="name" id="name" required>

    <label for="bread">Choose your type of bread:</label>
    <select name="bread" id="bread">
      <option value="simple">Simple Bun</option>
      <option value="muffin">English Muffin</option>
      <option value="kaiser">Kaiser Roll</option>
      <option value="seasme">Seasme Roll</option>
      <option value="ciabatta">Ciabatta Bun</option>
    </select>

    <label for="base">Choose the patty:</label>
    <select name="base" id="base">
      <option value="beef">Beef</option>
      <option value="double-beef">Beef double</option>
      <option value="chicken">Chicken</option>
      <option value="veggie">Veggie</option>
    </select>

    <fieldset class="toppings">
      <label>Extra toppings:</label>
      <input type="checkbox" name="toppings[]" value="lettuce">Lettuce
      <input type="checkbox" name="toppings[]" value="tomato">Tomato
      <input type="checkbox" name="toppings[]" value="cucumber">Cucumber
      <input type="checkbox" name="toppings[]" value="cheese">Cheese<br />
      <input type="checkbox" name="toppings[]" value="avocado">Avocado
      <input type="checkbox" name="toppings[]" value="peppers">Peppers
      <input type="checkbox" name="toppings[]" value="redonion">Red onion
      <input type="checkbox" name="toppings[]" value="olives">Olives<br />
      <input type="checkbox" name="toppings[]" value="jalapenos">Jalapenos
      <input type="checkbox" name="toppings[]" value="bacon">Bacon
      <input type="checkbox" name="toppings[]" value="basil">Basil
      <input type="checkbox" name="toppings[]" value="salsa">Salsa
    </fieldset>

    <label for="sauce">Choose your sauce:</label>
    <select name="sauce" id="sauce">
      <option value="ketchup">Ketchup</option>
      <option value="bbq">BBQ</option>
      <option value="ranch">Ranch</option>
      <option value="chipotle">Chipotle</option>
    </select><br>
    <input type="submit" value="Order Burger">
  </form>
</div>
@endsection