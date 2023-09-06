@extends('layout.layout')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/product.css') }}">
@endsection

@section('content')

<h2 style="text-align:center; text-transform: capitalize;">My Cart</h2>
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
    @foreach ($cart_list as $cart)
    <div class="card" onclick="location.href = `{{ route('product-view-indi', ['id'=>$cart->product_id]) }}`;">
        <img src="{{ asset('storage/productImage/'.$cart->image) }}" alt="{{ $cart->name }}">
        <h1 id="name">{{ $cart->name }}</h1>
        <p class="price">Rs{{ $cart->price }}</p>
        <p class="state">{{ $cart->state }}</p>
        <p id="description">{{ $cart->description }}</p>
        <p style="margin:0;">
            <button
            onclick="location.href = `{{ route('remove-cart', ['cartid'=>$cart->cart_id]) }}`;""
            style="background-color: red;">
            Remove
            </button>
        </p>
        <p style="margin:0;"><button style="background-color: forestgreen; border-radius: 0 0 10px 10px;">Buy</button></p>
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