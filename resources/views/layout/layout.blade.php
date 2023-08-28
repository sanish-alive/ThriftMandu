<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    @yield('head')
    <title>@yield('title')</title>
</head>
<body>
    <div class="navbar">
        <a href="{{ route('home') }}">Home</a>
        <a href="#">Mens</a>
        <a href="#">Womens</a>
        <a href="#">Childern</a>
        <a href="#">Normal</a>
        <a class="right" href="{{ route('signup') }}">Sign Up</a>
        <a class="right" href="{{ route('signin') }}">Sign In</a>
    </div>
    <div class="main">
        @yield('content')
    </div>
</body>
</html>
