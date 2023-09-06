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
<br>
<h1 style="text-align:center; color:rgb(231, 105, 168);">Recommendation</h1>
<div class="container">
    <!-- Replicate the below card div multiple times to see rows of cards -->
    @foreach ($recommend_list as $recommend)
    <div class="card">
	<a style="text-decoration: none;color: inherit;" href="{{ route('product-view-indi', ['id'=>$recommend->product_id]) }}">
	<img src="{{ asset('productImage/'.$recommend->image) }}" alt="{{ $recommend->name }}">
		<h1 id="name">{{ $recommend->name }}</h1>
        <p class="price">Rs{{ $recommend->price }}</p>
        <p class="state">{{ $recommend->state }}</p>
        <p id="description">{{ $recommend->description }}</p>
	</a>
        <p style="margin:0;"><button 
		onclick="location.href = `{{ route('add-cart', ['productid'=>$recommend->product_id]) }}`;"
		style="background-color: forestgreen; border-radius: 0 0 10px 10px;">+ Add To Cart</button></p>
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
					<div class="product" onclick="location.href = `{{ route('product-view-indi', ['id'=>$clothing->product_id]) }}`;">
						<img src="{{ asset('productImage/'.$clothing->image) }}">
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
				<div class="product" onclick="location.href = `{{ route('product-view-indi', ['id'=>$accessories->product_id]) }}`;">
					<img src="{{ asset('productImage/'.$accessories->image) }}">
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
				<div class="product" onclick="location.href = `{{ route('product-view-indi', ['id'=>$bags->product_id]) }}`;">
					<img src="{{ asset('productImage/'.$bags->image) }}">
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
				<div class="product" onclick="location.href = `{{ route('product-view-indi', ['id'=>$shoes->product_id]) }}`;">
					<img src="{{ asset('productImage/'.$shoes->image) }}">
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
				<div class="product" onclick="location.href = `{{ route('product-view-indi', ['id'=>$other->product_id]) }}`;">
					<img src="{{ asset('productImage/'.$other->image) }}">
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