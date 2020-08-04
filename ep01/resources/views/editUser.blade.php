<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar </title>
</head>

<body>
    <form action="{{ route('users.edit',  ['user'=> $user->id]) }}" method="post">
        {{--  Metodo csrf token necessario   --}}
        @csrf
        @method('PUT')
        <label for="">Nome </label>
        <input type="text" name="name" value="{{ $user->name }}">

        <label for="">Email </label>
        <input type="email" name="email" value="{{ $user->email }}">

        <label for="">Senha </label>
        <input type="text" name="password" value="{{ $user->password }}">

        <input type="submit" value="Editar">

    </form>
</body>

</html>
