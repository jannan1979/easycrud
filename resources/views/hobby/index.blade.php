<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>My Hobbies</h1>


    <ul>
    @foreach($hobbies as $hobby)
    <li>{{ $hobby->title }}</li>
    @endforeach
    </ul>
</body>
</html>