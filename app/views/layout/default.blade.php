<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	@include('partials.menu')

	@yield('content')

	@section('sidebar')
		<h2>Link</h2>
	@show
</body>
</html>