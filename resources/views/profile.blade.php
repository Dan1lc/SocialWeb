@extends('layouts.master')

@section('title','MyProfile')

@section('content')
@auth
<h1>{{ $user->surname." ".$user->name}}</h1>
<a href="/user/{{$user->id}}/edit">Редактировать</a>
@endauth
@endsection