@extends('edit.layouts.master')
@section('title','Профиля')
@section('content')
<div class="">{{ __('auth.Edit') }}</div>
<form method="POST" action="{{ route('edit-profile') }}">
    @csrf
    {{-- Фамилия --}}
    <label for="surname">{{ __('auth.Surname') }}</label>
    <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" required
        autocomplete="surname" autofocus value="{{$user->surname}}">
    {{-- Имя --}}
    <label for="name">{{ __('auth.Name') }}</label>
    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required
        autocomplete="name" autofocus value="{{$user->name}}">
    {{-- Имя --}}
    <label for="fathersname">{{ __('auth.Fathersname') }}</label>
    <input id="fathersname" type="text" class="form-control @error('fathersname') is-invalid @enderror"
        name="fathersname" required autocomplete="fathersname" autofocus value="{{$user->fathersname}}">
    {{-- Почта --}}
    <label for="email">{{ __('auth.Email') }}</label>
    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required
        autocomplete="email" value="{{$user->email}}">
    <button type="submit">
        {{ __('auth.Edit') }}
    </button>
</form>
@endsection