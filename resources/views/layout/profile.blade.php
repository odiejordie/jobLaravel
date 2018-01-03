<!DOCTYPE html>
<html>
<head>
	@yield('title')
	@include('layout.head.headprofile')
</head>
<body>
	@yield('content')

	@include('layout.foot.footprofile')
	@include('layout.errors.error')
</body>
</html>