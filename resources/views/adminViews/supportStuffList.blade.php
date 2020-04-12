<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>support stuff list</title>
</head>
<body>
    <h1>support stuff list</h1>

    <a href="/home">home</a>
    <br>
    <a href="/logout">logout</a>
    <br><br>

    @if(Request()->session()->has('deleteMessage'))
        <h4>{{Request()->session()->get('deleteMessage')}}</h4>
        @php
            Request()->session()->forget('deleteMessage');
        @endphp
    @endif
    
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
                <a href="#">edit</a>
				<a href="#">delete</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>