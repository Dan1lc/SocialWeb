@extends('layouts.master')

@section('title','Friends')

@section('content')
@include('friend.includes.friend_nav')
<div class="users_inner">
    @foreach ($requests as $request)
    <div class="user_item">
        <div class="user_img">
            <img src="img/profile/{{$request->getUser()->photo}}" alt="Нет фото">
        </div>
        <div class="user_name">{{$request->getUser()->surname." ".$request->getUser()->name}}</div>
        <form action="/friend_request/{{$request->id}}" method="POST">
            {{ csrf_field() }}
            {{method_field('PUT')}}
            <button type="submit">Принять</button>
        </form>
        <form action="/friend_request/{{$request->id}}" method="POST">
            {{ csrf_field() }}
            {{method_field('DELETE')}}
            <button type="submit">Оклонить</button>
        </form>
    </div>
    @endforeach
</div>
@endsection