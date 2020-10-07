@extends('layouts.master')

@section('title','Friends')

@section('content')
@include('friend.includes.friend_nav')
<div class="users_inner">
    @foreach ($friends as $friend)
    <div class="user_item">
        <div class="user_img">
            <img src="img/profile/{{$friend->photo}}" alt="Нет фото">
        </div>
        <div class="user_name">{{$friend->name}}</div>
        <a href="/friend_request/{{$user->id}}/edit">Удалить</a>
    </div>
    @endforeach
</div>
@endsection