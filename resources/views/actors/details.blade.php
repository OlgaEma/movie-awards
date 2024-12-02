<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Actor details :</h1>
    @foreach ($details as $detail)
        <li>{{ $detail->fullname}},<br>name:{{$detail->name}}</li>
    @endforeach
</body>
</html>