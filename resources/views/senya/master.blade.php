<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link media="all" type="text/css" rel="stylesheet" href="{{ URL::asset('/css/senya/senya.css') }}">
</head>
<body>
	<div id="container">
		@yield('content')
	</div>
</body>
</html>