<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('movies/searchResult') }}" method="get">
    <input type="text" name="movie_name" id="movie_name" placeholder="search">
    <label for="movie_name"></label>
    <button type="submit">submit</button>
    </form>
</body>
</html>