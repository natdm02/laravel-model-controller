<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie->title }}</title>
</head>
<body>

    <h1>{{ $movie->title }}</h1>
    <p>{{ $movie->description }}</p>
    <p>Release Year: {{ $movie->release_year }}</p>
    <a href="{{ route('movies.index') }}">Back to Movies</a>

</body>
</html>
