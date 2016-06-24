<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<link rel="stylesheet" href="/css/app.css"
</head>
<body>
	@include('partials.nav')
	<div class="container margin-top">
		@yield('content')
	</div>
</body>
</html>