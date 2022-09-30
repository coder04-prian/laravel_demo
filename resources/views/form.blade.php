<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<form action="{{url('/')}}/register" method="post">
		@csrf
		@php
			$demo=1;
		@endphp
		<div class="container">
			<h1 class="text-center">Registration</h1>
			<x-input type="text" name="name" label="Please enter your name" :demo="$demo" />
			<x-input type="email" name="email" label="Please enter your email"/>
			<x-input type="password" name="password" label="Password"/>
			<x-input type="password" name="password_confirm" label="Confirm Password"/>
			
			<button class="btn btn-primary">Submit</button>
		</div>
	</form>
</body>
</html>