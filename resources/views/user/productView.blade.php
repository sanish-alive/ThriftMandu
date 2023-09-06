@extends('layout.layout')

@section('head')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/product.css') }}">
@endsection

@section('title', 'Home - ThriftMandu')


@section('content')
<div class="container mt-5">
    <div id="productCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('storage/productImage/'.$product_detail->image) }}" alt="Product 1" class="d-block mx-auto" style="border-radius: 15px;">
                <h3 class="text-center">{{ $product_detail->name }}</h3>
                <p class="text-center">Rs {{ $product_detail->price }}</p>
                <p class="text-center">Purchased Date: {{ $product_detail->purchased_at }}</p>
                <p class="text-center">Gender: {{ $product_detail->gender }}</p>
                <p style="color: brown;" class="text-center">{{ $product_detail->state }}</p>
                <div class="text-center">
                    <button class="btn btn-primary">Buy Now</button>
                    <button
                        style="background-color: forestgreen;"
                        class="btn btn-secondary"
                        onclick="location.href = `{{ route('add-cart', ['productid'=>$product_detail->product_id]) }}`;">
                        Add to Cart
                    </button>
                </div>
                <h3 class="text-center mt-4">Description</h3>
                <p class="text-center mt-3">{{ $product_detail->description }}</p>
        </div>
    </div>
</div>


<div class="container">
    <!-- Replicate the below card div multiple times to see rows of cards -->
    @foreach ($recommend_list as $recommend)
    <div class="card">
	<img src="{{ asset('storage/productImage/'.$recommend->image) }}" alt="{{ $recommend->name }}">
		<h1 style="font-size: 28px;font-weight:bold" id="name">{{ $recommend->name }}</h1>
        <p class="price">Rs{{ $recommend->price }}</p>
        <p class="state">{{ $recommend->state }}</p>
        <p id="description">{{ $recommend->description }}</p>
        <p style="margin:0;">
            <button 
            onclick="location.href = `{{ route('add-cart', ['productid'=>$recommend->product_id]) }}`;"
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