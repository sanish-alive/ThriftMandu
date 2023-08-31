@extends('layout.layout')

@section('head')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/product.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
@endsection

@section('title', 'Home - ThriftMandu')

@section('content')

<div class="heroImageContainer">
	<img src="{{ asset('image/hero.jpg') }}">
	<div class="textCenter">
		<p>Welcome to ThriftMandu<br>
			<button onclick="location.href=`{{ route('signup') }}`">Join Now</button>
		</p>
	</div>
</div>


<div class="container">
    <!-- Replicate the below card div multiple times to see rows of cards -->
    @foreach ($recommend_list as $recommend)
    <div class="card">
	<img src="{{ asset('storage/productImage/'.$recommend->image) }}" alt="{{ $recommend->name }}">
		<h1 id="name">{{ $recommend->name }}</h1>
        <p class="price">Rs{{ $recommend->price }}</p>
        <p class="state">{{ $recommend->state }}</p>
        <p id="description">{{ $recommend->description }}</p>
        <p style="margin:0;"><button style="background-color: forestgreen; border-radius: 0 0 10px 10px;">+ Add To Cart</button></p>
    </div>
    @endforeach
    <!-- ... -->
</div>

<div class="featuredBox">
	<div class="productRow">
		<div class="productColumn">
			<div class="productContent">
				<h3>Clothing</h3>
					@foreach($clothing_list as $clothing)
					<div class="product"">
						<img src="{{ asset('storage/productImage/'.$clothing->image) }}">
                        <div class="productText">
							<p>{{ $clothing->name }}</p>
							<p>Rs{{ $clothing->price }}</p>
						</div>
					</div>
					@endforeach
			</div>
		</div>

        <div class="productColumn">
			<div class="productContent">
				<h3>Accessories</h3>
				@foreach($accessories_list as $accessories)
				<div class="product"">
					<img src="{{ asset('storage/productImage/'.$accessories->image) }}">
					<div class="productText">
						<p>{{ $accessories->name }}</p>
						<p>Rs{{ $accessories->price }}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>

        <div class="productColumn">
			<div class="productContent">
				<h3>Bags</h3>
				@foreach($bags_list as $bags)
				<div class="product"">
					<img src="{{ asset('storage/productImage/'.$bags->image) }}">
					<div class="productText">
						<p>{{ $bags->name }}</p>
						<p>Rs{{ $bags->price }}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>

        <div class="productColumn">
			<div class="productContent">
				<h3>Shoes</h3>
				@foreach($shoes_list as $shoes)
				<div class="product"">
					<img src="{{ asset('storage/productImage/'.$shoes->image) }}">
					<div class="productText">
						<p>{{ $shoes->name }}</p>
						<p>Rs{{ $shoes->price }}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>

		<div class="productColumn">
			<div class="productContent">
				<h3>Other</h3>
				@foreach($other_list as $other)
				<div class="product"">
					<img src="{{ asset('storage/productImage/'.$other->image) }}">
					<div class="productText">
						<p>{{ $other->name }}</p>
						<p>Rs{{ $other->price }}</p>
					</div>
				</div>
				@endforeach
			</div>
		</div>
    </div>
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