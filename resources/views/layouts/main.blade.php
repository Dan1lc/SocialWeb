<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/all.css">
    <title>@yield('title')</title>
</head>

<body>
    <div class="nav">
        <a href="#">Unknown</a>
        <a href="#">Unknown</a>
        @auth
        <a href="{{route('get-logout')}}">Выйти</a>
        @endauth
        @guest
        <a href="{{route('login')}}">Авторизация</a>
        <a href="{{route('register')}}">Регистрация</a>
        @endguest

    </div>
    @yield('content')
</body>

</html>