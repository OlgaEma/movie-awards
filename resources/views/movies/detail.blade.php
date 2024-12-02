<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>The Shawshank Redemption</h1>
    <?php foreach ($result as $value) : ?>
        <?php echo 'The id : '.$value->id.'<br>The length : '.$value->length.'<br>Made : '.$value->year;?>
    <?php endforeach; ?>
</body>
</html>