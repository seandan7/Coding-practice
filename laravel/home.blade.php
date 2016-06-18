<!doctype html>
<html>
<head>
	<meta charset="utf-8">
</head>
	<body>
		@foreach ($books as $book)
			<li>{{$book->title}} By: {{$book->writer}}</li>
			<li>
		@endforeach
	</body>
</html>