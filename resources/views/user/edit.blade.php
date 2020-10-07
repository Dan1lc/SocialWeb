<form method="POST" action="{{ '/user/'.$user->id }}">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="">
        <label for="surname">surname</label>
        <input type="text" name="surname" id="surname" value="{{ $user->surname }}">
        <label for="name">name</label>
        <input type="text" name="name" id="name" id="exampleInputEmail1" value="{{ $user->name }}">
        <label for="fathersname">fathersname</label>
        <input type="text" name="fathersname" id="fathersname" value="{{ $user->fathersname }}">
        <label for="exampleInputEmail1">email</label>
        <input type="text" name="email" id="email" value="{{ $user->email }}">
    </div>
    <button type="submit">Изменить</button>
</form>