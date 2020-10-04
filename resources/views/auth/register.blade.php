@extends('auth.layouts.master')
@section('title','register')
@section('content')


<div class="">{{ __('Register') }}</div>
<form method="POST" action="{{ route('register') }}">
    @csrf
    {{-- Фамилия --}}
    <label for="surname">{{ __('Surname') }}</label>
    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname"
        value="{{ old('surname') }}" required autocomplete="surname" autofocus>
    @error('surname')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    {{-- Имя --}}
    <label for="name">{{ __('Name') }}</label>
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
        value="{{ old('name') }}" required autocomplete="name" autofocus>
    @error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    {{-- Имя --}}
    <label for="fathersname">{{ __('Fathersname') }}</label>
    <input id="fathersname" type="text" class="form-control @error('fathersname') is-invalid @enderror"
        name="fathersname" value="{{ old('fathersname') }}" required autocomplete="fathersname" autofocus>
    @error('fathersname')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    {{-- Почта --}}
    <label for="email">{{ __('E-Mail Address') }}</label>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
        value="{{ old('email') }}" required autocomplete="email">
    @error('email')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    {{-- Пароль --}}
    <label for="password">{{ __('Password') }}</label>
    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required
        autocomplete="new-password">
    @error('password')
    <span role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
    {{-- Подтверждение пароля --}}
    <label for="password-confirm">{{ __('Confirm Password') }}</label>
    <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
    <button type="submit">
        {{ __('Register') }}
    </button>
</form>
@endsection