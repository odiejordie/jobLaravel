<!DOCTYPE html>
<html>
<head>
	@include('layout.head.header')
	@yield('title')
</head>
<body>
	@yield('content')
	@include('layout.sidebaradmin')
	@yield('script')
</body>
	@include('layout.foot.footer')
	@include('layout.errors.error')
</html>