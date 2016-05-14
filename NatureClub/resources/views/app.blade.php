<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Incredible NITT</title>

	<link rel="stylesheet" href="{{ asset('packages/bootstrap/css/bootstrap.min.css') }}">
	<script type="text/javascript" href="{{ asset('packages/bootstrap/js/bootstrap.min.js') }}"></script>
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
	<script type="text/javascript" href="{{ asset('packages/home/js/jquery-1.11.1.min.js') }}"></script>
	
</body>
</html>