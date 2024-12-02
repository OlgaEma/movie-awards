<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Awards</h1>
    <ol>
        <?php foreach($awards as $award) : ?>
            <li><?php echo $award ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>