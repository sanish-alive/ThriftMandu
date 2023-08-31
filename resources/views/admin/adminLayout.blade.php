<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/navbar.css') }}">
    <title>Admin - ThriftMandu</title>
</head>
<body>
    <div class="nav-bar">
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('admin-product-view', ['name'=>'clothing']) }}">Clothing</a>
        <a href="{{ route('admin-product-view', ['name'=>'accessories']) }}">Accessories</a>
        <a href="{{ route('admin-product-view', ['name'=>'bags']) }}">Bags</a>
        <a href="{{ route('admin-product-view', ['name'=>'shoes']) }}">Shoes</a>
        <a href="{{ route('admin-product-view', ['name'=>'other']) }}">Other</a>
        <a class="right" href="{{ route('admin-logout') }}">Logout</a>
        <a class="right" href="{{ route('recommend') }}">Recommend</a>
        <a class="right" href="{{ route('create-product') }}">Add Product</a> 
        <a class="right" href="{{ route('user-list') }}">Users</a> 
        <a class="right" href="">Order</a>
    </div>
    <div class="main">
        @yield('content')
    </div>
</body>
</html>
