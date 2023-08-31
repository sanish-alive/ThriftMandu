@extends('layout.layout')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
@endsection

@section('title', 'SignIn - ThriftMandu')

@section('content')

<div class = "center">
	<h1>Login</h1>
	@if(Session::has('success'))
		<center><p style="color: green">{{ Session::get('success') }}</p></center>
	@endif
	@if(Session::has('fail'))
		<center><p style="color: red">{{ Session::get('fail') }}</p></center>
	@endif
	<form action="{{ route('user-signin') }}" method="post">
		@csrf
		<div class="txt_field">
			<input type="text" name="email">
			<span></span>
			<label>
				Email
				<span style="color: red;">: @error('email') {{ $message }} @enderror</span>
			</label>
		</div>
		<div class="txt_field">
			<input type="password" name="password">
			<span></span>
			<label>
				Password
				<span style="color: red;">: @error('password') {{ $message }} @enderror</span>
			</label>
		</div>
		<input type="submit" name="submit">
		<div class="signup_link">Not a member? <a href="{{ route('signup') }}">Sign Up</a>
		</div>
	</form>
</div>

@endsection