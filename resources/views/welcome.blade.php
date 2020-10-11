@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Employee Home</a>
            @else
                <a href="{{ route('login') }}">Employee Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <p class="intro name">< Burgers o' th' Barn ></p>
        <p class="intro location">Manchester</p>
        <img src="/img/plain-burger.png" alt="burger barn logo">
        <div class="title m-b-md">
            "Best Burgers in the North"
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <div class="buttons">
            <a class="btn btn-dark btn-mid" href="{{ route('burgers.create') }}">Order now</a>
        </div>
    </div>
</div>
@endsection
