@extends('layouts.master')

@section('title','Начальная страница')

@section('content')
@guest
<h1>Добро пожаловать</h1>
@endguest
@endsection