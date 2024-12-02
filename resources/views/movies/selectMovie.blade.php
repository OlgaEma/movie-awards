<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Select movie</h1>
    <form action="{{ url('movies/selectMovieResult') }}" method="get">
        <input type="number" name="movie_id" id="movie_id" placeholder="select the id of the movie">
        <label for="movie_id"></label>
        <button type="subbmit">Submit</button>
    </form>
</body>
</html>