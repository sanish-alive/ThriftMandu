<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="nav-bar">
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('product-card', ['name'=>'clothing']) }}">Clothing</a>
        <a href="{{ route('product-card', ['name'=>'accessories']) }}">Accessories</a>
        <a href="{{ route('product-card', ['name'=>'bags']) }}">Bags</a>
        <a href="{{ route('product-card', ['name'=>'shoes']) }}">Shoes</a>
        <a href="{{ route('product-card', ['name'=>'other']) }}">Other</a>
        @if(Auth::check())
            <a class="right" href="{{ route('user-logout') }}">Logout</a>
            <a class="right" href="{{ route('signin') }}">My Cart</a> 
            <a class="right" href="{{ route('profile') }}">Profile</a> 
        @else
            <a class="right" href="{{ route('signup') }}">Sign Up</a>
            <a class="right" href="{{ route('signin') }}">Sign In</a>
        @endif
    </div>
    <div class="main">
        @yield('content')
    </div>
</body>
</html>
