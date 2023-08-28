@extends('layout.layout')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
@endsection

@section('title', 'SignIn - ThriftMandu')

@section('content')

<div class = "center">
	<h1>Login</h1>
	<form action="#" method="post">
		@csrf
		<div class="txt_field">
			<input type="text" name="email">
			<label>Email</label>
		</div>
		<div class="txt_field">
			<input type="password" name="password">
			<span></span>
			<label>Password</label>
		</div>
		<input type="submit" name="submit">
		<div class="signup_link">Not a member? <a href="{{ route('signup') }}">Sign Up</a>
		</div>
	</form>
</div>

@endsection