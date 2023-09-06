@extends('layout.layout')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/product.css') }}">
@endsection

@section('content')

<h2 style="text-align:center; text-transform: capitalize;">{{ $name }}</h2>
<center>
@if(Session::has('success'))
<span style="text-align: center; color: green">{{ Session::get('success') }}</span>
@endif
@if(Session::has('fail'))
<span style="text-align: center; color: red">{{ Session::get('fail') }}</span>
@endif
</center>
<div class="container">
    <!-- Replicate the below card div multiple times to see rows of cards -->
    @foreach ($product_list as $product)
    <div class="card">
    <a style="text-decoration: none;color: inherit;" href="{{ route('product-view-indi', ['id'=>$product->product_id]) }}">
        <img src="{{ asset('productImage/'.$product->image) }}" alt="{{ $product->name }}">
        <h1 id="name">{{ $product->name }}</h1>
        <p class="price">Rs{{ $product->price }}</p>
        <p class="state">{{ $product->state }}</p>
        <p id="description">{{ $product->description }}</p>
        <p style="margin:0;">
    </a>
            <button 
            onclick="location.href = `{{ route('add-cart', ['productid'=>$product->product_id]) }}`;"
            style="background-color: forestgreen; border-radius: 0 0 10px 10px;">
            Add To Cart
        </button>
    </p>
    </div>
    @endforeach
    <!-- ... -->
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var maxLength = 35;
        var hmaxLength = 15;
        var pElements = document.querySelectorAll("#description");
        var hElements = document.querySelectorAll("#name");

        pElements.forEach(function(p) {
            if (p.textContent.length > maxLength) {
                p.textContent = p.textContent.substring(0, maxLength) + '...';
            }
        });

        hElements.forEach(function(h) {
            if (h.textContent.length > hmaxLength) {
                h.textContent = h.textContent.substring(0, hmaxLength) + '...';
            }
        })
    });
</script>
@endsection