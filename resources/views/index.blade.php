<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>

    @foreach ($apiaries as $apiary)
    <h1>This is apiary {{ $apiary->id }}</h1>
    <h2>This is your name {{$apiary->name}}</h2>
    @endforeach


    <a href="{{route('create')}}">NUEVO</a>
</body>
</html>
