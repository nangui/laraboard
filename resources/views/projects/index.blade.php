<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Laraboard</h1>

	<ul>
		@foreach ($projects as $project)
			<li>{{ $project->title }}</li>
		@endforeach
	</ul>
</body>
</html>