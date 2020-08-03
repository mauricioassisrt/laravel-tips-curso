<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar</title>
</head>

<body>
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        <label for="">Nome </label>
        <input type="text" name="name">

        <label for="">Email </label>
        <input type="email" name="email">

        <label for="">Senha </label>
        <input type="password" name="password">

        <input type="submit" value="Salvar">

    </form>
</body>

</html>
