@extends('layouts.master')

@section('title','Friends')

@section('content')
@include('friend.includes.friend_nav')
<div class="users_inner">
    @foreach ($friends as $friend)
    <div class="user_item">
        <div class="user_img">
            <img src="img/profile/{{$friend->getUser()->photo}}" alt="Нет фото">
        </div>
        <div class="user_name">{{$friend->getUser()->name}}</div>
        <a href="/friend/{{$friend->getUser()->id}}/edit">Удалить</a>
    </div>
    @endforeach

</div>
@endsection