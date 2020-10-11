@extends('layouts.app')

@section('content')
<div class="wrapper burger-index">
  <h1>Burger Orders</h1>
  @foreach($burgers as $burger)
    <div class="burger-item">
      <img src="/img/burger.png" alt="burger icon">
      <h4><a href="{{ route('burgers.show', $burger->id) }}">{{ $burger->name }}</a></h4>
    </div>
  @endforeach

</div>

@endsection
