@extends('auth.layouts.master')
@section('title','Регистрация')
@section('content')


<div class="">Регистрация</div>
<form method="POST" action="{{ route('register') }}">
    @csrf
    {{-- Фамилия --}}
    <label for="surname">{{ __('auth.Surname') }}</label>
    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname"
        value="{{ old('surname') }}" required autocomplete="surname" autofocus>
    @error('surname')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    {{-- Имя --}}
    <label for="name">Имя</label>
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
        value="{{ old('name') }}" required autocomplete="name" autofocus>
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    {{-- Отчество --}}
    <label for="fathersname">Отчество</label>
    <input id="fathersname" type="text" class=" @error('fathersname') is-invalid @enderror" name="fathersname"
        value="{{ old('fathersname') }}" required autocomplete="fathersname" autofocus>
    @error('fathersname')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    {{-- Почта --}}
    <label for="email">Электронная почта</label>
    <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
        required autocomplete="email">
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    {{-- Пароль --}}
    <label for="password">Пароль</label>
    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required
        autocomplete="new-password">
    @error('password')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    {{-- Подтверждение пароля --}}
    <label for="password-confirm">Подтвердите пароль</label>
    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
    <button type="submit">Зарегистрироваться</button>
</form>
@endsection