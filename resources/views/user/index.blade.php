@extends('layouts.master')

@section('title','Users')

@section('content')
<div class="users_inner">
    @foreach ($users as $user)
    <div class="user_item">
        <div class="user_img">
            <img src="img/profile/{{$user->photo}}" alt="Нет фото">
        </div>
        <a href="/user/{{$user->id}}" class="user_name">{{$user->name.' '.$user->surname}}</a>
        @auth
        @if ($user->status()==null)
        <a href="/friend_request/{{$user->id}}/edit">Добавить в друзья</a>
        @else
        <p>{{$user->status()}}</p>
        @endif
        @endauth
    </div>
    @endforeach
</div>
@endsection