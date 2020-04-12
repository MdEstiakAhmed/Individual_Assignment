<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit bus</title>
</head>
<body>
    <h1>edit bus</h1>
    <a href="/home">home</a>
    <br>
    <a href="/logout">logout</a>
    <br><br>

    <form method="post">
        @csrf
        <label for="name">name:</label><br>
        <input type="text" name="name" id="name" placeholder="enter your name" value={{$bus[0]->name}}>
        @error('name')
            <span>{{$message}}</span>
        @enderror
        <br><br>

        <label for="operator">operator:</label><br>
        <input type="text" name="operator" id="operator" placeholder="enter your operator" value={{$bus[0]->operator}}>
        @error('operator')
            <span>{{$message}}</span>
        @enderror
        <br><br>

        <label for="location">location:</label><br>
        <input type="text" name="location" id="location" placeholder="enter your location" value={{$bus[0]->location}}>
        @error('location')
            <span>{{$message}}</span>
        @enderror
        <br><br>

        <label for="seat_row">seat_row:</label><br>
        <input type="text" name="seat_row" id="seat_row" placeholder="enter your seat_row" value={{$bus[0]->seat_row}}>
        @error('seat_row')
            <span>{{$message}}</span>
        @enderror
        <br><br>

        <label for="seat_column">seat_column:</label><br>
        <input type="text" name="seat_column" id="seat_column" placeholder="enter your seat_column" value={{$bus[0]->seat_column}}>
        @error('seat_column')
            <span>{{$message}}</span>
        @enderror
        <br><br>

        <input type="submit" name="submit" value="edit bus">
    </form>
</body>
</html>