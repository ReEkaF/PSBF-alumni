<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="style/login.css">

    <!-- Scripts -->
    @vite(['resources/css/login.css', 'resources/js/app.js'])
</head>
<body>
    <div class="loginBox"> 
        <img class="user" src="https://www.freeiconspng.com/uploads/profile-icon-9.png" height="100px" width="100px">
        <h3>Sign in here</h3>
        <form action="{{ route('login.check') }}" method="post">
            @csrf
            <div class="inputBox"> 
                <input id="username" type="text" name="username" placeholder="username" required> 
                <input id="password" type="password" name="password" placeholder="Password" required> 
            </div> 
            <input type="submit" >
        </form> 
        <a href="#">Forget Password</a>
    </div>
</body>
</html>
