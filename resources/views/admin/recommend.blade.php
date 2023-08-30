@extends('admin.adminLayout')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/product.css') }}">
@endsection

@section('content')

<h2 style="text-align:center; text-transform: capitalize;">Recommend</h2>

<center>
@if(Session::has('success'))
<span style="text-align: center;">{{ Session::get('success') }}</span>
@endif
@if(Session::has('fail'))
<span style="text-align: center;">{{ Session::get('fail') }}</span>
@endif
</center>


<div class="container">
    <!-- Replicate the below card div multiple times to see rows of cards -->
    @foreach ($recommend_list as $recommend)
    <div class="card">
        <img src="{{ asset('storage/productImage/'.$recommend->image) }}" alt="{{ $recommend->name }}">
        <h1>{{ $recommend->name }}</h1>
        <p class="price">Rs{{ $recommend->price }}</p>
        <p class="state">{{ $recommend->state }}</p>
        <p>{{ $recommend->description }}</p>
        <p style="margin:0;"><button onclick="" style="background-color: blueviolet;">- Remove Recommend</button></p>
        <p style="margin:0;"><button style="background-color: green;">Update</button></p>
        <p style="margin:0;"><button style="background-color: red;border-radius: 0 0 10px 10px;">Delete</button></p>
    </div>
    @endforeach
    <!-- ... -->
</div>
@endsection