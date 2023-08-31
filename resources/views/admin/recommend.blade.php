@extends('admin.adminLayout')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/product.css') }}">
@endsection

@section('content')

<h2 style="text-align:center; text-transform: capitalize;">Recommend</h2>

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
    @foreach ($recommend_list as $recommend)
    <div class="card">
        <img src="{{ asset('storage/productImage/'.$recommend->image) }}" alt="{{ $recommend->name }}">
        <h1 id="name">{{ $recommend->name }}</h1>
        <p class="price">Rs{{ $recommend->price }}</p>
        <p class="state">{{ $recommend->state }}</p>
        <p id="description">{{ $recommend->description }}</p>
        <p style="margin:0;"><button onclick="location.href = `{{ route('remove-recommend', ['id'=>$recommend->product_id]) }}`;" style="background-color: blueviolet;">- Remove Recommend</button></p>
        <p style="margin:0;"><button style="background-color: green;">Update</button></p>
        <p style="margin:0;"><button onclick="location.href = `{{ route('delete-product', ['id'=>$recommend->product_id]) }}`;" style="background-color: red;border-radius: 0 0 10px 10px;">Delete</button></p>
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