<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/all.css">
    <title>@yield('title')</title>
</head>

<body>
    <div class="nav">
        <div class="container">
            <div class="nav_inner">
                @auth
                <a href="{{route('home')}}">Мой профиль</a>
                @endauth
                <a href="/user">Все пользователи</a>
                @auth
                <a href="/friend">Друзья</a>
                <a href="{{route('get-logout')}}">Выйти</a>
                @endauth
                @guest
                <a href="{{route('login')}}">Авторизация</a>
                <a href="{{route('register')}}">Регистрация</a>
                @endguest
            </div>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>

</html>