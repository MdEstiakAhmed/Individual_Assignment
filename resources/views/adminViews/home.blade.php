<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin home</title>
</head>
<body>
    <h1>welcome {{$user->name}}</h1>
    <a href="/busManagerList">Bus Manager List</a>
    <a href="/logout">logout</a>
</body>
</html>