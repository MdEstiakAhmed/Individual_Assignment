<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login page</title>
</head>
<body>
    <h1>Login Page</h1>
    @if(Request()->session()->has('tempEmail'))
        <h4>successfully login by {{Request()->session()->get('tempEmail')}}</h4>
    @endif
    <form method="post">
        @csrf
        <label for="email">email:</label><br>
        <input type="text" name="email" id="email" placeholder="enter your email" value={{Request()->session()->get('tempEmail')}}>
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
        <input type="submit" name="submit" value="login">
    </form>
    <br>
    <button><a href="/registration">registration</a></button>
    @php
        Request()->session()->forget('tempEmail');
    @endphp
</body>
</html>