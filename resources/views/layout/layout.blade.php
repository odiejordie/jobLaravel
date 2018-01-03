<!doctype html>
<html lang="en">
<head>
	@include('layout.head.head')
	@yield('title')
</head>
<body>
	@yield('content')
</body>
	@include('layout.foot.foot')
	@include('layout.errors.error')
</html>
