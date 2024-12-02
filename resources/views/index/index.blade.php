<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Nedeljko</h1>
    <ol>
        <?php foreach($movies as $movie) : ?>
            <li><?php echo 'Movie name : '.$movie->name.' <br> Movie year : '.$movie->year.'<br>Movie rating : '.$movie->rating ?></li>
        <?php endforeach; ?>
        
    </ol>
</body>
</html>