<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<style type="text/css">
	button,form {
		margin-top: 5px;
	}
	</style>
</head>
<body>
	<form class="container">
		<div class="from-group">
			<label>Username</label>
			<input type="text" name="username"  class="form-control">
		</div>
		<div class="from-group">
			<label>Password</label>
			<input type="Password" name="password"  class="form-control">
		</div>
	<button class="btn btn-success">Login</button>
	</form>
</body>
</html>