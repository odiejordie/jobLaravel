<!DOCTYPE html>
<html>
<head>
	@include('layout.head.header')
	@yield('title')
</head>
<body>
	@yield('content')
	@include('layout.sidebar')
</body>
	@include('layout.foot.footer')
	@include('layout.errors.error')
</html>