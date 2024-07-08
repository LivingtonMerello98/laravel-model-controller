<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Template</title>
    @vite('resources/js/app.js')
</head>

<body>

        @foreach ($movies as $movie)
        <h5 class="card-title"> Titolo : {{ $movie->title }}</h5>
        @endforeach
</body>

</html>
