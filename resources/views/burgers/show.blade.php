@extends('layouts.app')

@section('content')
<div class="wrapper burger-details">
  <h1>Order for {{ $burger->name }}</h1>
  <p class="base">{{ $burger->base }} - {{ $burger->bread }} </p>
  <p class="toppings">Extra toppings:</p>
  <ul>
    @foreach($burger->toppings as $topping)
      <li>{{ $topping }}</li>
    @endforeach
  </ul>
  <p class="sauce">... with {{ $burger->sauce }} sauce!</p>
  <form action="{{ route('burgers.destroy', $burger->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Complete Order</button>
  </form>
</div>
<a href="{{ route('burgers.index') }}" class="back"><- Back to all burgers</a>
@endsection
