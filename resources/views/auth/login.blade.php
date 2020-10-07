@extends('auth.layouts.master')
@section('title','login')
@section('content')

<div class="card">
    <div class="card-header">Авторизация</div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Электронная почта</label>
        <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label for="password">Пароль</label>
        <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required
            autocomplete="current-password">
        @error('password')
        <span role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember">Запомнить меня</label>
        <button type="submit">Авторизоваться</button>
        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">Забыли пароль?</a>
        @endif
    </form>
</div>

@endsection