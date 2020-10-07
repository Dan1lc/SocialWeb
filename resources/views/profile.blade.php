@extends('layouts.master')

@section('title','Мой профиль')

@section('content')
@if (isset($answer))
<h1>{{$answer}}</h1>
@endif
@auth
<h1>{{ $user->surname." ".$user->name}}</h1>
<a href="/user/{{$user->id}}/edit">Редактировать</a>
@endauth
@endsection