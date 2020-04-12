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
    <a href="/addBusCounter">add bus counter</a>
    <br>
    <a href="/logout">logout</a>
    <br><br>

    <form method="get">
        <input type="text" name="search" id="search" placeholder="search">
        <input type="button" value="search">
        
        <br><br>
    </form>

    @if(Request()->session()->has('deleteMessage'))
        <h4>{{Request()->session()->get('deleteMessage')}}</h4>
        @php
            Request()->session()->forget('deleteMessage');
        @endphp
    @endif
    
    <table border="1">
		<tr>
			<th>name</th>
			<th>location</th>
			<th>operator</th>
			<th>action</th>
		</tr>
		
		@foreach($busCounters as $busCounter)
		<tr>
			<td>{{$busCounter->name}}</td>
			<td>{{$busCounter->location}}</td>
			<td>{{$busCounter->operator}}</td>
			<td>
				<a href="/#" onclick="return confirm('Are you sure to delete?')">delete</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>