@extends('layouts.main')

@section('title','MyProfile')

@section('content')
@auth
<h1>{{ $user->surname." ".$user->name}}</h1>
@endauth
@endsection