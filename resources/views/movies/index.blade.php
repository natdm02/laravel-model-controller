<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    <h1>Movies List</h1>
    <div class="movies">
        @foreach($movies as $movie)
            <div class="movie-card">
                <h2>{{ $movie->title }}</h2>
                <p>{{ $movie->description }}</p>
                <p>Release Year: {{ $movie->release_year }}</p>
            </div>
        @endforeach
    </div>
</body>
</html>

