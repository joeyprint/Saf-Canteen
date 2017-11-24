<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>SaF Canteen | @yield('title')</title>
		
		{{--  Stylesheet  --}}
		<link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/app.css">
		<link rel="stylesheet" href="/css/utilStyle/navbar.css">
		<link rel="stylesheet" href="/css/utilStyle/footer.css">

		@yield('custom_head')
	</head>
	<body>
		{{--  Include: Navbar  --}}
		@include('utils.navbar')

		@yield('content')

		@include('utils.footer')

		{{--  Script  --}}
		<script src="/css/bootstrap.min.js"></script>
		
		@yield('custom_script')
	</body>
</html>