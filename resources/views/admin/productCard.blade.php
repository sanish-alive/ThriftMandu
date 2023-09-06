@extends('admin.adminLayout')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/product.css') }}">
@endsection

@section('content')

<h2 style="text-align:center; text-transform: capitalize;">{{ $name }}</h2>

<div class="container">
    <!-- Replicate the below card div multiple times to see rows of cards -->
    @foreach ($product_list as $product)
    <div class="card" onclick="location.href = `{{ route('admin-product-indi', ['id'=>$product->product_id]) }}`;">
        <img src="{{ asset('storage/productImage/'.$product->image) }}" alt="Denim Jeans">
        <h1 id="name">{{ $product->name }}</h1>
        <p class="price">Rs{{ $product->price }}</p>
        <p class="state">{{ $product->state }}</p>
        <p id='description'>{{ $product->description }}</p>
        <p style="margin:0;"><button 
            onclick="location.href = `{{ route('add-recommend', ['id'=>$product->product_id]) }}`;" 
            style="background-color: blueviolet;">
            + Add Recommend
        </button></p>
        <p style="margin:0;"><button style="background-color: green;">Update</button></p>
        <p style="margin:0;"><button onclick="location.href = `{{ route('delete-product', ['id'=>$product->product_id]) }}`;" style="background-color: red;border-radius: 0 0 10px 10px;">Delete</button></p>
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