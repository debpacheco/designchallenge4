<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel ="stylesheet" href="/css/master.css">
    <title>Document</title>
</head>
<body>
    <h1>{{ $title }}<h1>
    <p>Hey, {{ $name }}!!</p>
    <p>My favorite color is {{ $color }}</p>
    <img src="/images/{{ $image }}" alt="duck" height=300>
</body>
</html>