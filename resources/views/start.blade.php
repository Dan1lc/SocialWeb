@extends('layouts.main')

@section('title','Start')

@section('content')
@auth
<h1>Hello, {{auth()->user()->name}}</h1>
@endauth
<h1>Start</h1>
@endsection