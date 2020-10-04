@extends('layouts.main')

@section('title','Users')

@section('content')
<div class="users_inner">
    @foreach ($users as $user)
    <div class="user_item">
        <div class="user_img">
            <img src="img/profile/{{$user->photo}}" alt="Нет фото">
        </div>
        <div class="user_name">{{$user->name}}</div>
    </div>
    @endforeach
</div>
@endsection