@extends('layout.layout')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
@endsection

@section('title', 'SignUp - ThriftMandu')

@section('content')

<div style="margin-top: 70px" class = "center">
	<h1>Sign Up</h1>
	@if(Session::has('success'))
		<center><p style="align-items: center; color: green">{{ Session::get('success') }}</p></center>
	@endif
	@if(Session::has('fail'))
		<center><p style="align-items: center; color: red">{{ Session::get('fial') }}</p></center>
	@endif
	<form action="{{ route('user-signup') }}" method="post">
		@csrf
		<div class="txt_field">
			<input type="text" name="username" >
			<span></span>
			<label>
				User Name
				<span style="color: red;">: @error('username') {{ $message }} @enderror</span>
			</label>
		</div>
		<div class="txt_field">
			<input type="text" name="email">
			<span></span>
			<label>
				Email
				<span style="color: red;">: @error('email') {{ $message }} @enderror</span>
			</label>
		</div>
		<div class="txt_field">
			<input type="text" name="address">
			<span></span>
			<label>
				Address
				<span style="color: red;">: @error('address') {{ $message }} @enderror</span>
			</label>
		</div>
		<div class="txt_field">
			<input type="text" name="contact">
			<span></span>
			<label>
				Phone no
				<span style="color: red;">: @error('contact') {{ $message }} @enderror</span>
			</label>
		</div>
		<div class="txt_field">
			<input type="password" name='password'>
			<span></span>
			<label>
				Password
				<span style="color: red;">: @error('password') {{ $message }} @enderror</span>
			</label>
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