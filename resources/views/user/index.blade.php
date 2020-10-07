@extends('layouts.master')

@section('title','Users')

@section('content')
<div class="users_inner">
    @foreach ($users as $user)
    <div class="user_item">
        <div class="user_img">
            <img src="img/profile/{{$user->photo}}" alt="Нет фото">
        </div>
        <div class="user_name">{{$user->name}}</div>
        @auth
        <a href="/friend_request/{{$user->id}}/edit">Добавить в друзья</a>
        @endauth
    </div>
    @endforeach
</div>
@endsection