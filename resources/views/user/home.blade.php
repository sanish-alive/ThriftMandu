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
		<h1>{{ $recommend->name }}</h1>
        <p class="price">Rs{{ $recommend->price }}</p>
        <p class="state">{{ $recommend->state }}</p>
        <p>{{ $recommend->description }}</p>
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
					@for($i=0;$i<3;$i++)
					<div class="product"">
						<img src="{{ asset('image/hero.jpg') }}">
                        <div class="productText">
							<p>Bagy pant</p>
							<p>Rs 1200</p>
						</div>
					</div>
					@endfor
			</div>
		</div>

        <div class="productColumn">
			<div class="productContent">
				<h3>Accessories</h3>
					@for($i=0;$i<3;$i++)
					<div class="product"">
						<img src="{{ asset('image/hero.jpg') }}">
                        <div class="productText">
							<p>Bagy pant</p>
							<p>Rs 1200</p>
						</div>
					</div>
					@endfor
			</div>
		</div>

        <div class="productColumn">
			<div class="productContent">
				<h3>Bags</h3>
					@for($i=0;$i<3;$i++)
					<div class="product"">
						<img src="{{ asset('image/hero.jpg') }}">
                        <div class="productText">
							<p>Bagy pant</p>
							<p>Rs 1200</p>
						</div>
					</div>
					@endfor
			</div>
		</div>

        <div class="productColumn">
			<div class="productContent">
				<h3>Shoes</h3>
					@for($i=0;$i<3;$i++)
					<div class="product"">
						<img src="{{ asset('image/hero.jpg') }}">
                        <div class="productText">
							<p>Bagy pant</p>
							<p>Rs 1200</p>
						</div>
					</div>
					@endfor
			</div>
		</div>

		<div class="productColumn">
			<div class="productContent">
				<h3>Other</h3>
					@for($i=0;$i<3;$i++)
					<div class="product"">
						<img src="{{ asset('image/hero.jpg') }}">
                        <div class="productText">
							<p>Bagy pant</p>
							<p>Rs 1200</p>
						</div>
					</div>
					@endfor
			</div>
		</div>
    </div>
</div>

@endsection