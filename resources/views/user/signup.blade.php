@extends('layout.layout')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
@endsection

@section('title', 'SignUp - ThriftMandu')

@section('content')

<div style="margin-top: 70px" class = "center">
	<h1>Sign Up</h1>
	<form action="#" method="post">
		@csrf
		<div class="txt_field">
			<input type="text" name="username" >
			<span></span>
			<label>User Name</label>
		</div>
		<div class="txt_field">
			<input type="text" name="email">
			<span></span>
			<label>Email</label>
		</div>
		<div class="txt_field">
			<input type="text" name="address">
			<span></span>
			<label>Address</label>
		</div>
		<div class="txt_field">
			<input type="text" name="phone">
			<span></span>
			<label>Phone no</label>
		</div>
		<div class="txt_field">
			<input type="password" name='password'>
			<span></span>
			<label>Password</label>
		</div><div class="txt_field">
			<input type="password" name="password_confirmation">
			<span></span>
			<label>Confirm Password</label>
		</div>
		
		<input type="submit" name="submit">
		<div class="signup_link">Already member? <a href="{{ route('signin') }}">Login</a>
		</div>
	</form>
</div>

@endsection