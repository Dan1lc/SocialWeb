@extends('layouts.master')

@section('title','Start')

@section('content')
@guest
<h1>Hello,guest</h1>
@endguest
@endsection