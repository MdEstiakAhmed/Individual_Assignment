<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add bus counter</title>
</head>
<body>
    <h1>add bus counter</h1>

    <form method="post">
        @csrf
        <label for="name">name:</label><br>
        <input type="text" name="name" id="name" placeholder="enter your name">
        @error('name')
            <span>{{$message}}</span>
        @enderror
        <br><br>

        <label for="location">email:</label><br>
        <input type="text" name="location" id="location" placeholder="enter your location">
        @error('location')
            <span>{{$message}}</span>
        @enderror
        <br><br>

        <label for="operator">operator:</label><br>
        <input type="text" name="operator" id="operator" placeholder="enter your operator">
        @error('operator')
            <span>{{$message}}</span>
        @enderror
        <br><br>

        <input type="submit" name="submit" value="add support stuff">
    </form>
</body>
</html>