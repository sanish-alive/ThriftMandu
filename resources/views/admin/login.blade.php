<!DOCTYPE html>
<html lang="eng-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <title>Admin - ThriftMandu</title>
</head>
<body>

<div class = "center">
	<h1>Admin Login</h1>
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
		<div class="signup_link">Not a Admin? <a href="{{ route('signin') }}">Sign In</a>
		</div>
	</form>
</div>

</body>
</html>