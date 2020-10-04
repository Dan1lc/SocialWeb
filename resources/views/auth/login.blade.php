@extends('auth.layouts.master')
@section('title','login')
@section('content')

<div class="card">
    <div class="card-header">{{ __('Login') }}</div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
            value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <label for="password">{{ __('Password') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
            name="password" required autocomplete="current-password">
        @error('password')
        <span role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember">
            {{ __('Remember Me') }}
        </label>
        <button type="submit">
            {{ __('Login') }}
        </button>
        @if (Route::has('password.request'))
        <a href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
        @endif
    </form>
</div>

@endsection