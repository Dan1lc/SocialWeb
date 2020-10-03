@extends('auth.layouts.master')
@section('title','login')
@section('content')
<form method="POST" action="{{route('login')}}">
    @csrf
    <input type="email" name="email" id="email">
    <input type="password" name="password" id="password">
    <button type="submit" name="" id="">Войти</button>
</form>
@endsection