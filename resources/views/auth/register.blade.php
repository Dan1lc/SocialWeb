@extends('auth.layouts.master')
@section('title','register')
@section('content')
<form method="POST" action="/register">
    @csrf
    <input type="text" name="surname" id="surname">
    <input type="text" name="name" id="name">
    <input type="text" name="fathersname" id="fathersname">
    <input type="email" name="email" id="email">
    <input type="password" name="password" id="password">
    {{-- <input type="file" name="photo" id="photo"> --}}
    <button type="submit">Зарегистрироваться</button>
</form>
@endsection