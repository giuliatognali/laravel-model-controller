<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel model controller</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <h1>Movies List</h1>

        <div class="row mt-3">
            @foreach ($movies as $movie)
            <div class="col-4 gap-3 mb-3">
                <div class="card">
                    <h2>{{ $movie->title }}</h2>
                    <h3>{{ $movie->original_title }}</h3>
                    <p>{{ $movie->nationality }}</p>
                    <p> {{ $movie->date }}</p>
                    <p>{{ $movie->vote }}</p>
                </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>
