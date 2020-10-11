@extends('layouts.master')

@section('title','Мой профиль')

@section('content')
<h1>{{ $user->surname." ".$user->name}}</h1>

@auth
@if ($user->id==Auth::user()->id)
<a href="/user/{{$user->id}}/edit">Редактировать</a>
<form action="/post" method="POST">
    {{ csrf_field() }}
    <div class="">
        <label for="title">Заголовок</label>
        <input type="text" name="title" id="title">
        <label for="text">Текст</label>
        <textarea type="text" name="text" id="text"></textarea>
    </div>
    <button type="submit">Опубликоввать</button>
</form>
@endif
@endauth
<div class="post_items">
    @foreach ($posts as $post)
    <h1>{{$post->title}}</h1>
    @auth
    @if ($user->id==Auth::user()->id)
    <a href="/post/{{$post->id}}/edit">Редактировать пост</a>
    <form action="/post/{{$post->id}}" method="POST">{{ csrf_field()}}{{method_field('DELETE')}}
        <button type='submit'>Удалить</button>
    </form>
    @endif
    @endauth
    <p>{{$post->text}}</p>
    @endforeach
</div>
@endsection