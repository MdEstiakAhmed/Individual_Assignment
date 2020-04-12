<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bus list</title>
</head>
<body>
    <h1>Bus List</h1>
    <a href="/home">home</a>
    <br>
    <a href="/addBus">add bus</a>
    <br>
    <a href="/logout">logout</a>
    <br><br>

    <table border="1">
		<tr>
			<th>name</th>
			<th>location</th>
            <th>operator</th>
            <th>seat_row</th>
            <th>seat_column</th>
			<th>action</th>
		</tr>
		
		@foreach($buses as $bus)
		<tr>
			<td>{{$bus->name}}</td>
			<td>{{$bus->location}}</td>
            <td>{{$bus->operator}}</td>
            <td>{{$bus->seat_row}}</td>
            <td>{{$bus->seat_column}}</td>
			<td>
				<a href="/editBus/{{$bus->id}}">edit</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>