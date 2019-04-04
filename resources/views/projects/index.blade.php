<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Laraboard | List projects</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h1>Laraboard</h1>

	<ul>
		@forelse ($projects as $project)
			<li>
                <a href="{{ $project->path() }}">{{ $project->title }}</a>
            </li>
        @empty
            <li>No projects yet.</li>
        @endforelse
	</ul>
</body>
</html>
