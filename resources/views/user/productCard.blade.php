@extends('layout.layout')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/product.css') }}">
@endsection

@section('content')

<h2 style="text-align:center; text-transform: capitalize;">{{ $name }}</h2>

<div class="container">
    <!-- Replicate the below card div multiple times to see rows of cards -->
    @foreach ($product_list as $product)
    <div class="card">
        <img src="{{ asset('storage/productImage/'.$product->image) }}" alt="{{ $product->name }}">
        <h1>{{ $product->name }}</h1>
        <p class="price">Rs{{ $product->price }}</p>
        <p class="state">{{ $product->state }}</p>
        <p>{{ $product->description }}</p>
        <p style="margin:0;"><button style="background-color: forestgreen; border-radius: 0 0 10px 10px;">Add To Cart</button></p>
    </div>
    @endforeach
    <!-- ... -->
</div>
@endsection