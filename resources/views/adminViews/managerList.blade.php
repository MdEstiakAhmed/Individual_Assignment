<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manager list</title>
</head>
<body>
    <h1>manager list</h1>
    <a href="/home">home</a>
    <br>
    <a href="/logout">logout</a>
    <br><br>
    
    <table border="1">
		<tr>
			<th>name</th>
			<th>email</th>
			<th>company</th>
			<th>registered</th>
			<th>action</th>
		</tr>
		
		@foreach($users as $user)
		<tr>
			<td>{{$user['name']}}</td>
			<td>{{$user['email']}}</td>
			<td>{{$user['company']}}</td>
			<td>{{$user['registered']}}</td>
			<td>
				<a href="/busManagerDelete/{{$user['id']}}" onclick="return confirm('Are you sure to delete?')">delete</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>