@extends('admin.adminLayout')

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
                <img src="{{ asset('productImage/'.$product_detail->image) }}" alt="Product 1" class="d-block mx-auto" style="border-radius: 15px;">
                <h3 class="text-center">{{ $product_detail->name }}</h3>
                <p class="text-center">Rs {{ $product_detail->price }}</p>
                <p class="text-center">Purchased Date: {{ $product_detail->purchased_at }}</p>
                <p class="text-center">Gender: {{ $product_detail->gender }}</p>
                <p style="color: brown;" class="text-center">{{ $product_detail->state }}</p>
                <div class="text-center">
                    <button
                        style="background-color: red;"
                        class="btn btn-secondary"
                        onclick="location.href = `{{ route('delete-product', ['id'=>$product_detail->product_id]) }}`;">
                        Delete
                    </button>
                </div>
                <h3 class="text-center mt-4">Description</h3>
                <p class="text-center mt-3">{{ $product_detail->description }}</p>
        </div>
    </div>
</div>

@endsection