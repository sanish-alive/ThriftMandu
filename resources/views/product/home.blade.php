@extends('layout.layout')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
@endsection

@section('title', 'Home - ThriftMandu')

@section('content')

<div class="heroImageContainer">
	<img src="{{ asset('image/hero.jpg') }}" style="width: 100%; height: 400px;">
	<div class="textCenter">
		<p>Welcome to ThriftMandu<br>
			<button onclick="location.href=`{{ route('signup') }}`">Join Now</button>
		</p>
	</div>
</div>


<div class="recomendationBox">
	<h2>Recomendation</h2>

	<div class="recomendationRow">
		@for($i=0;$i<3;$i++)
		<div class="recomendationColumn">
			<div class="recomendationContent">
				<img src="{{ asset('image/hero.jpg') }}">
				<h3>Blue shirt</h3>
				<p>Rs 560</p>
			</div>
		</div>
		@endfor
		
        @for($i=0;$i<3;$i++)
		<div class="recomendationColumn">
			<div class="recomendationContent">
				<img src="{{ asset('image/hero.jpg') }}">
				<h3>Blue shirt</h3>
				<p>Rs 560</p>
			</div>
		</div>
        @endfor
		
        @for($i=0;$i<3;$i++)
		<div class="recomendationColumn">
			<div class="recomendationContent">
				<img src="{{ asset('image/hero.jpg') }}">
				<h3>Blue shirt</h3>
				<p>Rs 560</p>
			</div>
		</div>
        @endfor
		
        @for($i=0;$i<3;$i++)
		<div class="recomendationColumn">
			<div class="recomendationContent">
				<img src="{{ asset('image/hero.jpg') }}">
				<h3>Blue shirt</h3>
				<p>Rs 560</p>
			</div>
		</div>
        @endfor
		
	</div>
</div>

<div class="featuredBox">
	<div class="productRow">
		<div class="productColumn">
			<div class="productContent">
				<h3>Mens</h3>
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
				<h3>Womens</h3>
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
				<h3>Childern</h3>
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
				<h3>Normal</h3>
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