<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body>
<section>


    <div class="max-w-lg mx-auto bg-gray-100 border border-gray-300 p-6 rounded-xl">
        <div class="Top">
        </div>
        <div class="Heading">
            <h1 class="welcome">Welcome to the Crypto Market!
            </h1>
        </div>
        <div class="links">
            <div class="register-login-buttons"><a href="/register" class="fill-div">Register</a></div>
            <div class="register-login-buttons"><a href="/login" class="fill-div">Login</a></div>
        </div>
    </div>
</section>

@auth
@endauth
</body>
</html>
