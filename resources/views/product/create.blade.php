@extends('admin.adminLayout')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/productCreate.css') }}">
@endsection

@section('content')
<section class="container">
  <header>Product Form</header>
  @if(Session::has('success'))
    <p style="color: green;">{{ Session::get('success') }}</p>
  @endif
  @if(Session::has('fail'))
    <p style="color: red;">{{ Session::get('fail') }}</p>
  @endif
  <form class="form" action="{{ route('store-product') }}" method="post" enctype="multipart/form-data">
    @csrf
      <div class="input-box">
          <label>Product Name</label>
          <input required="" placeholder="Enter product name" type="text" name="name">
      </div>
      <div class="column">
          <div class="input-box">
            <label>Proudct Price</label>
            <input required="" placeholder="Enter price" type="number" min="0.00" step="0.01" name="price">
          </div>
          <div class="input-box">
            <label>Purchased Date</label>
            <input required="" placeholder="Enter purchased date" type="date" name="purchasedDate">
          </div>
      </div>
      <div class="gender-box">
        <label>Gender</label>
        <div class="gender-option">
          <div class="gender">
            <input checked="" name="gender" id="check-male" type="radio" value="male">
            <label for="check-male">Male</label>
          </div>
          <div class="gender">
            <input name="gender" id="check-female" type="radio" value="female">
            <label for="check-female">Female</label>
          </div>
          <div class="gender">
            <input name="gender" id="check-other" type="radio" value="unisex">
            <label for="check-other">Unisex</label>
          </div>
        </div>
      </div>
      <div class="input-box address">
        <label>Description</label>
        <input required="" placeholder="Enter description" type="text" name="description">
        <div class="column">
          <div class="select-box">
            <select name="category">
              <option hidden="">Category</option>
              <option value="clothing">Clothing</option>
              <option value="accessories">Accessories</option>
              <option value="bags">Bags</option>
              <option value="shoes">Shoes</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div style="width: 800px;">
            <input required="" type="file" name="productImage">
          </div>
        </div>
      </div>
      <div class="column">
          <div class="select-box">
            <select name="state">
              <option hidden="">State</option>
              <option value="In Stock">In Stock</option>
              <option value="Out of Stock">Out of Stock</option>
            </select>
          </div>
          <div></div>
      </div>
      <button type="submit">Submit</button>
  </form>
</section>
@foreach ($errors->all() as $error)
  <p>{{ $error }}</p>
@endforeach

@endsection