<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add support stuffList</title>
</head>
<body>
    <h1>Add Support Stuff</h1>

    <a href="/home">home</a>
    <br>
    <!-- <a href="/addSupportStuff">add Support Staff</a>
    <br> -->
    <a href="/logout">logout</a>
    <br><br>

    <form method="post">
        @csrf
        <label for="name">name:</label><br>
        <input type="text" name="name" id="name" placeholder="enter your name">
        @error('name')
            <span>{{$message}}</span>
        @enderror
        <br><br>

        <label for="email">email:</label><br>
        <input type="text" name="email" id="email" placeholder="enter your email">
        @error('email')
            <span>{{$message}}</span>
        @enderror
        <br><br>

        <label for="password">password:</label><br>
        <input type="password" name="password" id="password" placeholder="enter your password">
        @error('password')
            <span>{{$message}}</span>
        @enderror
        <br><br>

        <label for="confirmPassword">re-type password:</label><br>
        <input type="password" name="confirmPassword" id="confirmPassword" placeholder="re-type password">
        @error('confirmPassword')
            <span>{{$message}}</span>
        @enderror
        <br><br>

        <input type="submit" name="submit" value="add support stuff">
    </form>
</body>
</html>