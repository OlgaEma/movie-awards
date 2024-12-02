<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>The list of movies</h1>
    <ol>
        <?php foreach($movies as $movie) : ?>
            <li><?php echo $movie->movieType->name  ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>