<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listagem de Usuarios</title>

</head>

<body>
    <table>
        <tr>
            <td>ID</td>
            <td>nome</td>
            <td>Email </td>
            <td>Ação </td>

        </tr>
        @foreach ($users as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nome }}</td>
            <td>{{ $item->email }}</td>
            <td>
                <a href="">Ver Usuarios</a>
                <form action="" method="POST">
                    <input type="hidden" name="user" value="">
                    <input type="submit" value="Remover">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>
