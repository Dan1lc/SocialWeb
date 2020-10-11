<form method="POST" action="{{'/post/'.$post->id }}">
    {{ csrf_field() }}
    {{method_field('PATCH')}}
    <label for="title">Заголовок</label>
    <input type="text" name="title" id="title" value="{{$post->title}}">
    <label for="text">Текст</label>
    <textarea type="text" name="text" id="text">{{$post->text}}</textarea>
    <button type="submit">Изменить</button>
</form>