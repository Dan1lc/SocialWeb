@extends('layouts.main')

@section('title','Start')

@section('content')
@guest
<h1>Hello,guest</h1>
@endguest
<h1>Start</h1>
@endsection